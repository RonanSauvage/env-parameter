<?php

namespace App\Entity;

use App\Download\DownloadableInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice implements DownloadableInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return Invoice
     */
    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }
}
