<?php
declare(strict_types = 1);

namespace NewInventor\TagUtility;

use NewInventor\TagUtility\Exception\TagToShortTagAddition;
use NewInventor\TagUtility\Exception\TagToTextAddition;

/**
 * Class Tag
 * @package NewInventor\TagUtility
 *
 * @method static Tag a(array $params = [], ...$tags)
 * @method static Tag abbr(array $params = [], ...$tags)
 * @method static Tag address(array $params = [], ...$tags)
 * @method static Tag area(array $params = [], ...$tags)
 * @method static Tag article(array $params = [], ...$tags)
 * @method static Tag aside(array $params = [], ...$tags)
 * @method static Tag audio(array $params = [], ...$tags)
 * @method static Tag b(array $params = [], ...$tags)
 * @method static Tag base(array $params = [], ...$tags)
 * @method static Tag bdi(array $params = [], ...$tags)
 * @method static Tag bdo(array $params = [], ...$tags)
 * @method static Tag blockquote(array $params = [], ...$tags)
 * @method static Tag body(array $params = [], ...$tags)
 * @method static Tag br(array $params = [], ...$tags)
 * @method static Tag button(array $params = [], ...$tags)
 * @method static Tag canvas(array $params = [], ...$tags)
 * @method static Tag caption(array $params = [], ...$tags)
 * @method static Tag cite(array $params = [], ...$tags)
 * @method static Tag code(array $params = [], ...$tags)
 * @method static Tag col(array $params = [], ...$tags)
 * @method static Tag colgroup(array $params = [], ...$tags)
 * @method static Tag datalist(array $params = [], ...$tags)
 * @method static Tag dd(array $params = [], ...$tags)
 * @method static Tag del(array $params = [], ...$tags)
 * @method static Tag details(array $params = [], ...$tags)
 * @method static Tag dfn(array $params = [], ...$tags)
 * @method static Tag dialog(array $params = [], ...$tags)
 * @method static Tag div(array $params = [], ...$tags)
 * @method static Tag dl(array $params = [], ...$tags)
 * @method static Tag dt(array $params = [], ...$tags)
 * @method static Tag em(array $params = [], ...$tags)
 * @method static Tag embed(array $params = [], ...$tags)
 * @method static Tag fieldset(array $params = [], ...$tags)
 * @method static Tag figcaption(array $params = [], ...$tags)
 * @method static Tag figure(array $params = [], ...$tags)
 * @method static Tag footer(array $params = [], ...$tags)
 * @method static Tag form(array $params = [], ...$tags)
 * @method static Tag h1-h6(array $params = [], ...$tags)
 * @method static Tag head(array $params = [], ...$tags)
 * @method static Tag header(array $params = [], ...$tags)
 * @method static Tag hr(array $params = [], ...$tags)
 * @method static Tag html(array $params = [], ...$tags)
 * @method static Tag i(array $params = [], ...$tags)
 * @method static Tag iframe(array $params = [], ...$tags)
 * @method static Tag img(array $params = [], ...$tags)
 * @method static Tag input(array $params = [], ...$tags)
 * @method static Tag ins(array $params = [], ...$tags)
 * @method static Tag kbd(array $params = [], ...$tags)
 * @method static Tag keygen(array $params = [], ...$tags)
 * @method static Tag label(array $params = [], ...$tags)
 * @method static Tag legend(array $params = [], ...$tags)
 * @method static Tag li(array $params = [], ...$tags)
 * @method static Tag link(array $params = [], ...$tags)
 * @method static Tag main(array $params = [], ...$tags)
 * @method static Tag map(array $params = [], ...$tags)
 * @method static Tag mark(array $params = [], ...$tags)
 * @method static Tag menu(array $params = [], ...$tags)
 * @method static Tag menuitem(array $params = [], ...$tags)
 * @method static Tag meta(array $params = [], ...$tags)
 * @method static Tag meter(array $params = [], ...$tags)
 * @method static Tag nav(array $params = [], ...$tags)
 * @method static Tag noscript(array $params = [], ...$tags)
 * @method static Tag object(array $params = [], ...$tags)
 * @method static Tag ol(array $params = [], ...$tags)
 * @method static Tag optgroup(array $params = [], ...$tags)
 * @method static Tag option(array $params = [], ...$tags)
 * @method static Tag output(array $params = [], ...$tags)
 * @method static Tag p(array $params = [], ...$tags)
 * @method static Tag param(array $params = [], ...$tags)
 * @method static Tag pre(array $params = [], ...$tags)
 * @method static Tag progress(array $params = [], ...$tags)
 * @method static Tag q(array $params = [], ...$tags)
 * @method static Tag rp(array $params = [], ...$tags)
 * @method static Tag rt(array $params = [], ...$tags)
 * @method static Tag ruby(array $params = [], ...$tags)
 * @method static Tag s(array $params = [], ...$tags)
 * @method static Tag samp(array $params = [], ...$tags)
 * @method static Tag script(array $params = [], ...$tags)
 * @method static Tag section(array $params = [], ...$tags)
 * @method static Tag select(array $params = [], ...$tags)
 * @method static Tag small(array $params = [], ...$tags)
 * @method static Tag source(array $params = [], ...$tags)
 * @method static Tag span(array $params = [], ...$tags)
 * @method static Tag strong(array $params = [], ...$tags)
 * @method static Tag style(array $params = [], ...$tags)
 * @method static Tag sub(array $params = [], ...$tags)
 * @method static Tag summary(array $params = [], ...$tags)
 * @method static Tag sup(array $params = [], ...$tags)
 * @method static Tag table(array $params = [], ...$tags)
 * @method static Tag tbody(array $params = [], ...$tags)
 * @method static Tag td(array $params = [], ...$tags)
 * @method static Tag textarea(array $params = [], ...$tags)
 * @method static Tag tfoot(array $params = [], ...$tags)
 * @method static Tag th(array $params = [], ...$tags)
 * @method static Tag thead(array $params = [], ...$tags)
 * @method static Tag time(array $params = [], ...$tags)
 * @method static Tag title(array $params = [], ...$tags)
 * @method static Tag tr(array $params = [], ...$tags)
 * @method static Tag track(array $params = [], ...$tags)
 * @method static Tag u(array $params = [], ...$tags)
 * @method static Tag ul(array $params = [], ...$tags)
 * @method static Tag var(array $params = [], ...$tags)
 * @method static Tag video(array $params = [], ...$tags)
 * @method static Tag wbr(array $params = [], ...$tags)
 * @method Tag accesskey($value, array $params = [])
 * @method Tag class($value, array $params = [])
 * @method Tag contenteditable($value, array $params = [])
 * @method Tag contextmenu($value, array $params = [])
 * @method Tag dir($value, array $params = [])
 * @method Tag draggable($value, array $params = [])
 * @method Tag dropzone($value, array $params = [])
 * @method Tag hidden($value, array $params = [])
 * @method Tag id($value, array $params = [])
 * @method Tag itemid($value, array $params = [])
 * @method Tag itemprop($value, array $params = [])
 * @method Tag itemref($value, array $params = [])
 * @method Tag itemscope($value, array $params = [])
 * @method Tag itemtype($value, array $params = [])
 * @method Tag lang($value, array $params = [])
 * @method Tag spellcheck($value, array $params = [])
 * @method Tag style($value, array $params = [])
 * @method Tag tabindex($value, array $params = [])
 * @method Tag title($value, array $params = [])
 * @method Tag onblur($value, array $params = [])
 * @method Tag onchange($value, array $params = [])
 * @method Tag onclick($value, array $params = [])
 * @method Tag ondblclick($value, array $params = [])
 * @method Tag onfocus($value, array $params = [])
 * @method Tag onkeydown($value, array $params = [])
 * @method Tag onkeypress($value, array $params = [])
 * @method Tag onkeyup($value, array $params = [])
 * @method Tag onload($value, array $params = [])
 * @method Tag onmousedown($value, array $params = [])
 * @method Tag onmousemove($value, array $params = [])
 * @method Tag onmouseout($value, array $params = [])
 * @method Tag onmouseover($value, array $params = [])
 * @method Tag onmouseup($value, array $params = [])
 * @method Tag onreset($value, array $params = [])
 * @method Tag onscroll($value, array $params = [])
 * @method Tag onselect($value, array $params = [])
 * @method Tag onsubmit($value, array $params = [])
 * @method Tag onunload($value, array $params = [])
 * @method Tag href($value, array $params = [])
 * @method Tag download($value, array $params = [])
 * @method Tag coords($value, array $params = [])
 * @method Tag hreflang($value, array $params = [])
 * @method Tag name($value, array $params = [])
 * @method Tag rel($value, array $params = [])
 * @method Tag rev($value, array $params = [])
 * @method Tag shape($value, array $params = [])
 * @method Tag target($value, array $params = [])
 * @method Tag type($value, array $params = [])
 * @method Tag alt($value, array $params = [])
 * @method Tag nohref($value, array $params = [])
 * @method Tag autoplay($value, array $params = [])
 * @method Tag controls($value, array $params = [])
 * @method Tag loop($value, array $params = [])
 * @method Tag muted($value, array $params = [])
 * @method Tag src($value, array $params = [])
 * @method Tag balance($value, array $params = [])
 * @method Tag volume($value, array $params = [])
 * @method Tag site($value, array $params = [])
 * @method Tag autofocus($value, array $params = [])
 * @method Tag disabled($value, array $params = [])
 * @method Tag form($value, array $params = [])
 * @method Tag formaction($value, array $params = [])
 * @method Tag formenctype($value, array $params = [])
 * @method Tag formmethod($value, array $params = [])
 * @method Tag formnovalidate($value, array $params = [])
 * @method Tag formtarget($value, array $params = [])
 * @method Tag value($value, array $params = [])
 * @method Tag color($value, array $params = [])
 * @method Tag face($value, array $params = [])
 * @method Tag size($value, array $params = [])
 * @method Tag height($value, array $params = [])
 * @method Tag width($value, array $params = [])
 * @method Tag align($value, array $params = [])
 * @method Tag char($value, array $params = [])
 * @method Tag charoff($value, array $params = [])
 * @method Tag span($value, array $params = [])
 * @method Tag valign($value, array $params = [])
 * @method Tag checked($value, array $params = [])
 * @method Tag icon($value, array $params = [])
 * @method Tag label($value, array $params = [])
 * @method Tag radiogroup($value, array $params = [])
 * @method Tag cite($value, array $params = [])
 * @method Tag datetime($value, array $params = [])
 * @method Tag open($value, array $params = [])
 * @method Tag hspace($value, array $params = [])
 * @method Tag pluginspage($value, array $params = [])
 * @method Tag vspace($value, array $params = [])
 * @method Tag accept-charset($value, array $params = [])
 * @method Tag action($value, array $params = [])
 * @method Tag autocomplete($value, array $params = [])
 * @method Tag enctype($value, array $params = [])
 * @method Tag method($value, array $params = [])
 * @method Tag novalidate($value, array $params = [])
 * @method Tag bordercolor($value, array $params = [])
 * @method Tag frameborder($value, array $params = [])
 * @method Tag noresize($value, array $params = [])
 * @method Tag scrolling($value, array $params = [])
 * @method Tag border($value, array $params = [])
 * @method Tag cols($value, array $params = [])
 * @method Tag rows($value, array $params = [])
 * @method Tag profile($value, array $params = [])
 * @method Tag noshade($value, array $params = [])
 * @method Tag manifest($value, array $params = [])
 * @method Tag version($value, array $params = [])
 * @method Tag xmlns($value, array $params = [])
 * @method Tag allowfullscreen($value, array $params = [])
 * @method Tag allowtransparency($value, array $params = [])
 * @method Tag marginheight($value, array $params = [])
 * @method Tag marginwidth($value, array $params = [])
 * @method Tag sandbox($value, array $params = [])
 * @method Tag seamless($value, array $params = [])
 * @method Tag srcdoc($value, array $params = [])
 * @method Tag ismap($value, array $params = [])
 * @method Tag longdesc($value, array $params = [])
 * @method Tag sizes($value, array $params = [])
 * @method Tag srcset($value, array $params = [])
 * @method Tag usemap($value, array $params = [])
 * @method Tag accept($value, array $params = [])
 * @method Tag list($value, array $params = [])
 * @method Tag max($value, array $params = [])
 * @method Tag maxlength($value, array $params = [])
 * @method Tag min($value, array $params = [])
 * @method Tag multiple($value, array $params = [])
 * @method Tag pattern($value, array $params = [])
 * @method Tag placeholder($value, array $params = [])
 * @method Tag readonly($value, array $params = [])
 * @method Tag required($value, array $params = [])
 * @method Tag step($value, array $params = [])
 * @method Tag prompt($value, array $params = [])
 * @method Tag challenge($value, array $params = [])
 * @method Tag keytype($value, array $params = [])
 * @method Tag for($value, array $params = [])
 * @method Tag charset($value, array $params = [])
 * @method Tag media($value, array $params = [])
 * @method Tag behavior($value, array $params = [])
 * @method Tag bgcolor($value, array $params = [])
 * @method Tag direction($value, array $params = [])
 * @method Tag scrollamount($value, array $params = [])
 * @method Tag scrolldelay($value, array $params = [])
 * @method Tag truespeed($value, array $params = [])
 * @method Tag default($value, array $params = [])
 * @method Tag content($value, array $params = [])
 * @method Tag http-equiv($value, array $params = [])
 * @method Tag low($value, array $params = [])
 * @method Tag high($value, array $params = [])
 * @method Tag optimum($value, array $params = [])
 * @method Tag gutter($value, array $params = [])
 * @method Tag archive($value, array $params = [])
 * @method Tag classid($value, array $params = [])
 * @method Tag code($value, array $params = [])
 * @method Tag codebase($value, array $params = [])
 * @method Tag codetype($value, array $params = [])
 * @method Tag data($value, array $params = [])
 * @method Tag reversed($value, array $params = [])
 * @method Tag start($value, array $params = [])
 * @method Tag isabled($value, array $params = [])
 * @method Tag selected($value, array $params = [])
 * @method Tag valuetype($value, array $params = [])
 * @method Tag async($value, array $params = [])
 * @method Tag defer($value, array $params = [])
 * @method Tag language($value, array $params = [])
 * @method Tag background($value, array $params = [])
 * @method Tag cellpadding($value, array $params = [])
 * @method Tag cellspacing($value, array $params = [])
 * @method Tag frame($value, array $params = [])
 * @method Tag rules($value, array $params = [])
 * @method Tag summary($value, array $params = [])
 * @method Tag abbr($value, array $params = [])
 * @method Tag axis($value, array $params = [])
 * @method Tag colspan($value, array $params = [])
 * @method Tag headers($value, array $params = [])
 * @method Tag nowrap($value, array $params = [])
 * @method Tag rowspan($value, array $params = [])
 * @method Tag scope($value, array $params = [])
 * @method Tag wrap($value, array $params = [])
 * @method Tag pubdate($value, array $params = [])
 * @method Tag kind($value, array $params = [])
 * @method Tag srclang($value, array $params = [])
 * @method Tag poster($value, array $params = [])
 * @method Tag preload($value, array $params = [])
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
     * @param Tag[] $tags
     */
    public function __construct(string $name, array $tags = [])
    {
        parent::__construct($name);
        $this->children = $tags;
    }


    /**
     * @param string $tagName
     * @param $tags
     * @return Tag
     */
    public static function __callStatic(string $tagName, array $tags = [])
    {
        return new Tag($tagName, $tags);
    }

    /**
     * @param string $attrName
     * @param $arguments
     * @return Tag
     */
    public function __call(string $attrName, array $arguments = [])
    {
        $attr = new Attribute($attrName, $arguments[0] ?? '');
        $attr->options($arguments[1] ?? []);
        $this->attrs[] = $attr;
        return $this;
    }

    /**
     * @param string $text
     * @return Tag
     */
    public static function text(string $text = '')
    {
        $tag = new Tag('text');
        $tag->options(['type' => self::TEXT]);
        $tag->setPlainText($text);
        return $tag;
    }

    /**
     * @param $tag
     * @return $this
     * @throws TagToShortTagAddition
     * @throws TagToTextAddition
     */
    public function tag(Tag $tag)
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

    public function attr(Attribute $attr)
    {
        $this->attrs[] = $attr;
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