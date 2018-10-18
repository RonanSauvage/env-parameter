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
    private $path;

    /**
     * DownloadHelper constructor.
     * @param string $pathDownload
     */
    public function __construct(string $pathDownload)
    {
        $this->path = $pathDownload;
    }

    /**
     * @param DownloadableInterface $resource
     * @return string
     */
    public function getUploadPath(DownloadableInterface $resource): string{

        return $this->path . $resource->getFile();
    }
}