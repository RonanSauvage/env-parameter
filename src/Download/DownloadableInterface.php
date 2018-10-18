<?php

namespace App\Download;

interface DownloadableInterface
{
    public function getFile(): ?string;
}