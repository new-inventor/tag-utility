<?php
declare(strict_types = 1);

namespace NewInventor\TagUtility\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TagMethodsHelper extends Command
{
    protected function configure()
    {
        $this->setName('generate');
        $this->setDescription('write virtual methods into tag class');
        $this->setHelp('<command> file [file ...]');
        $this->addArgument('files', InputArgument::IS_ARRAY, 'array of files with available tags and attributes.');
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $files = $input->getArgument('files');
        array_unshift($files, __DIR__ . '/../tagRef.php');
        /** @var string[][] $data */
        $data = [];
        foreach ($files as $file) {
            $data[] = include($file);
        }
        $data = call_user_func_array('array_merge_recursive', $data);
        $data['tags'] = array_unique($data['tags'], SORT_STRING);
        $data['attributes'] = array_unique($data['attributes'], SORT_STRING);

        $phpDoc = "/**\n * Class Tag\n * @package NewInventor\\TagUtility\n *";
        foreach ($data['tags'] as $tag) {
            $phpDoc .= "\n * @method static Tag $tag(array \$params = [], ...\$tags)";
        }
        foreach ($data['attributes'] as $attr) {
            $phpDoc .= "\n * @method Tag $attr(\$value, array \$params = [])";
        }
        $phpDoc .= "\n */\n";

        $tagfile = fopen(__DIR__ . '/../Tag.php', 'r');
        $docBlockWritten = false;
        $firstDocBlock = true;
        $docBlock = false;
        while (!feof($tagfile)) {
            $str = fgets($tagfile);
            if ($firstDocBlock && strpos($str, '/**') !== false) {
                $docBlock = true;
            }

            if (!$docBlock) {
                file_put_contents(__DIR__ . '/../Tag_tmp.php', $str, FILE_APPEND);
            } elseif ($docBlock && !$docBlockWritten && $firstDocBlock) {
                file_put_contents(__DIR__ . '/../Tag_tmp.php', $phpDoc, FILE_APPEND);
                $docBlockWritten = true;
            }

            if ($docBlock && strpos($str, '*/') !== false) {
                $docBlock = false;
                $firstDocBlock = false;
            }
        }

        unlink(__DIR__ . '/../Tag.php');
        rename(__DIR__ . '/../Tag_tmp.php', __DIR__ . '/../Tag.php');
    }
}