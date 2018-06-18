<?php

namespace App\Tests\Download;

use App\Download\DownloadableInterface;
use App\Download\DownloadHelper;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DownloadHelperTest extends KernelTestCase
{

    /**
     * Test uploadPath function
     */
    public function testGetUploadPath(){

        $uploadDirData = 'upload/files/';
        $fileData = 'AZERT1234';

        $downloadHelper = new DownloadHelper();
        $downloadHelper->uploadDir = $uploadDirData;

        $fileTest = new TestFile();
        $fileTest->setFile($fileData);

        $expected = $uploadDirData . $fileData;

        $result = $downloadHelper->getUploadPath($fileTest);
        $this->assertEquals($expected, $result, 'The directory to doowload one resource fail');
    }
}

class TestFile implements DownloadableInterface
{

    private $file;

    /**
     * @return null|string
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return $this
     */
    public function setFile(string $file){
        $this->file = $file ;
        return $this;
    }
}