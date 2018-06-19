<?php

namespace App\Download;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * Class DownloadHelper
 * @package App\Download
 */
class DownloadHelper
{

    /**
     * @var ParameterBagInterface
     */
    private $params;

    /**
     * DownloadHelper constructor.
     * @param ParameterBagInterface $parameterBag
     */
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->params = $parameterBag;
    }

    /**
     * @param DownloadableInterface $resource
     * @return string
     */
    public function getUploadPath(DownloadableInterface $resource): string{

        return $this->params->get('upload_dir') . $resource->getFile();
    }
}