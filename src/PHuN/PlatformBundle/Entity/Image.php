<?php

namespace PHuN\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PHuN\PlatformBundle\Entity\ImageRepository")
 */
class Image
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=255)
     */
    private $fichier;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
      * @ORM\ManyToMany(targetEntity="PHuN\PlatformBundle\Entity\Transcription", cascade={"persist"})
      */
    private $transcription;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     *
     * @return Image
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->transcription = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add transcription
     *
     * @param \PHuN\PlatformBundle\Entity\Transcription $transcription
     *
     * @return Image
     */
    public function addTranscription(\PHuN\PlatformBundle\Entity\Transcription $transcription)
    {
        $this->transcription[] = $transcription;

        return $this;
    }

    /**
     * Remove transcription
     *
     * @param \PHuN\PlatformBundle\Entity\Transcription $transcription
     */
    public function removeTranscription(\PHuN\PlatformBundle\Entity\Transcription $transcription)
    {
        $this->transcription->removeElement($transcription);
    }

    /**
     * Get transcription
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranscription()
    {
        return $this->transcription;
    }
}
