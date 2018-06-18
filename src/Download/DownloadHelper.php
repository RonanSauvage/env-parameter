<?php

namespace App\Download;

/**
 * Class DownloadHelper
 * @package App\Download
 */
class DownloadHelper
{

    /**
     * @var string
     */
    public $uploadDir;

    /**
     * @param DownloadableInterface $resource
     * @return string
     */
    public function getUploadPath(DownloadableInterface $resource): string{

        return $this->uploadDir . $resource->getFile();
    }
}