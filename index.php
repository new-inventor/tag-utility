<?php
require __DIR__ . '/vendor/autoload.php';
use NewInventor\TagUtility\Tag;
?>

<?=Tag::div([],
    Tag::ad()->name('sdf')->class('dfsdf'),
    Tag::ewr([],
        Tag::hr()->short()
    ))->class('dfsdfsdf');?>