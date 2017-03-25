<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Termsfile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="pdf_file_murapol", fileNameProperty="pdfNameMurapol")
     * 
     * @var File
     */
    private $pdfFileMurapol;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $pdfNameMurapol;
    
        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="pdf_file_saturn", fileNameProperty="pdfNameSaturn")
     * 
     * @var File
     */
    private $pdfFileSaturn;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $pdfNameSaturn;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return Termsfile
     */
    public function setPdfFileMurapol(File $pdf = null)
    {
        $this->pdfFileMurapol = $pdf;

        if ($pdf) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getPdfFileMurapol()
    {
        return $this->pdfFileMurapol;
    }

    /**
     * @param string $pdfNameMurapol
     *
     * @return Termsfile
     */
    public function setPdfNameMurapol($pdfNameMurapol)
    {
        $this->pdfNameMurapol = $pdfNameMurapol;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPdfNameMurapol()
    {
        return $this->pdfNameMurapol;
    }
     /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return Termsfile
     */
    public function setPdfFileSaturn(File $pdf = null)
    {
         $this->pdfFileSaturn = $pdf;

        if ($pdf) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getPdfFileSaturn()
    {
        return $this->pdfFileSaturn;
    }

    /**
     * @param string $pdfNameSaturn
     *
     * @return Termsfile
     */
    public function setPdfNameSaturn($pdfNameSaturn)
    {
        $this->pdfNameSaturn = $pdfNameSaturn;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPdfNameSaturn()
    {
        return $this->pdfNameSaturn;
    }
} 