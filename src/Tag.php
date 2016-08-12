<?php
declare(strict_types = 1);

namespace NewInventor\TagUtility;

use NewInventor\TagUtility\Exception\TagToShortTagAddition;
use NewInventor\TagUtility\Exception\TagToTextAddition;

/**
 * Class Tag
 * @package NewInventor\TagUtility
 *
 * @method static Tag div(array $params = [])
 * @method static Tag span(array $params = [])
 * @method static Tag a(array $params = [])
 * @method static Tag hr(array $params = [])
 * @method static Tag table(array $params = [])
 * @method class($value)
 */
class Tag extends Object
{
    const TAG = 1;
    const TEXT = 2;
    protected static $defaultParams = [
        'short' => false,
        'type'  => self::TAG,
    ];
    /** @var Tag[] */
    protected $children;
    /** @var Attribute[] */
    protected $attrs;
    /** @var string */
    protected $plainText;

    /**
     * Tag constructor.
     * @param string $name
     * @param array $params
     * @param Tag[] $tags
     */
    public function __construct(string $name, array $params = [], array $tags = [])
    {
        parent::__construct($name, $params);
        $this->children = $tags;
    }


    /**
     * @param string $tagName
     * @param $arguments
     * @return Tag
     */
    public static function __callStatic(string $tagName, array $arguments = [])
    {
        $params = array_shift($arguments);
        return new Tag($tagName, $params ?? [], $arguments);
    }

    /**
     * @param string $attrName
     * @param $arguments
     * @return Tag
     */
    public function __call(string $attrName, array $arguments = [])
    {
        $attr = new Attribute($attrName, $arguments[0] ?? [], $arguments[1] ?? []);
        $this->attrs[] = $attr;
        return $this;
    }

    /**
     * @param string $text
     * @return Tag
     */
    public static function text(string $text = '')
    {
        $tag = new Tag('text', ['type' => self::TEXT]);
        $tag->setPlainText($text);
        return $tag;
    }

    /**
     * @param $tag
     * @return $this
     * @throws TagToShortTagAddition
     * @throws TagToTextAddition
     */
    public function tag($tag)
    {
        if($this->params['type'] === self::TEXT){
            throw new TagToTextAddition();
        }
        if($this->params['short']){
            throw new TagToShortTagAddition();
        }
        $this->children[] = $tag;
        return $this;
    }

    public function __toString()
    {
        if ($this->params['type'] === self::TAG) {
            $tag = "<{$this->name}";
            if (count($this->attrs) > 0) {
                $tag .= ' ' . preg_replace('/\s{2,}/', ' ', implode(' ', $this->attrs));
            }
            if ($this->params['short']) {
                $tag .= '/>';
                return $tag;
            }
            $tag .= '>' . implode('', $this->children) . "</{$this->name}>";
            return $tag;
        }
        return $this->plainText;
    }

    /**
     * @param string $text
     */
    private function setPlainText(string $text)
    {
        $this->plainText = $text;
    }
}