<?php

namespace App\Command;

use App\Download\DownloadHelper;
use App\Entity\Invoice;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class DownloadCommand extends Command
{

    /**
     * @var DownloadHelper
     */
    private $downloadHelper;

    public function __construct($name = null, DownloadHelper $downloadHelper)
    {
        parent::__construct($name);
        $this->downloadHelper = $downloadHelper;
    }

    protected function configure()
    {
        $this
            ->setName('app:upload')
            ->setDescription('Command to test binding env\'s configuration')
            ->setHelp('Upload a file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $io = new SymfonyStyle($input, $output);

        // I create one Downloadable entity and set one file
        $resource = new Invoice();
        $resource->setFile('rmA-test.pdf');

        $fullPathFile = $this->downloadHelper->getUploadPath($resource);

        $io->text($fullPathFile);
    }
}