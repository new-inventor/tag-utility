<?php
require __DIR__ . '/vendor/autoload.php';
use NewInventor\TagUtility\Tag;

?>

<?php
/** @var Tag $tag */
$tag = Tag::div()->class('hidden')->style('link: 342;');
$a = Tag::a(
    Tag::span(
        Tag::text('dfsdfasdfasdfasdfsadfsadf')
    ),
    Tag::img()->short()->src('werwer.gif')->width(100)->height(100)->attr((new \NewInventor\TagUtility\Attribute('readonly'))->short())
)->href('safsdfasdf.html')->title('last')->alt('jfkdlsdf')->rel('dfsdfadf');
for($i = 0; $i < 4; $i++) {
    $tag->tag($a);
}
echo $tag;
?>
