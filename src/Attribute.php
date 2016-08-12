<?php
declare(strict_types = 1);

namespace NewInventor\TagUtility;


class Attribute extends Object
{
    /** @var \Closure|mixed */
    protected $value;
    /** @var \Closure|callable|boolean */
    protected $showCase;

    protected static $defaultParams = [
        'short' => false,
        'coma' => '"',
        'showName' => true,
    ];

    /**
     * Attr constructor.
     * @param string $name
     * @param $value
     */
    public function __construct(string $name, $value = '', array $params = [])
    {
        parent::__construct($name, $params);
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if($this->showCase !== null && !$this->showCase->__invoke()) {
            return '';
        }
        $attr = $this->name;
        if($this->params['short']){
            return $attr;
        }
        $value = "{$this->params['coma']}{$this->getValue()}{$this->params['coma']}";
        if(!$this->params['showName']){
            return $value;
        }
        return "$attr=$value";
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        if ($this->value instanceof \Closure) {
            $valueMethod = $this->value;
            return $valueMethod();
        } elseif (is_array($this->value)) {
            return implode(' ', $this->value);
        }
        return '' . $this->value;
    }

    /**
     * @param $case
     * @return $this
     */
    public function showCase($case)
    {
        $this->showCase = $case;
        return $this;
    }

    /**
     * @return $this
     */
    public function noName()
    {
        $this->params['showName'] = false;
        return $this;
    }

    /**
     * @param $coma
     * @return $this
     */
    public function setComa($coma)
    {
        $this->params['coma'] = $coma;
        return $this;
    }

    /**
     * @param string $name
     * @param $arguments
     * @return Attribute
     */
    public static function __callStatic($name, $arguments)
    {
        $name = self::normalizeName($name);
        return new Attribute($name, $arguments[0] ?? '', $arguments[1] ?? []);
    }
}