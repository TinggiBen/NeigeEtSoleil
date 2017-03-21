<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TypeAppartement
 *
 * @ORM\Table(name="type_appartement")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\TypeAppartementRepository")
 */
class TypeAppartement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="NeigeEtSoleilBundle\Entity\Appartements", mappedBy="typeAppartement")
     */
    private $appartements;
    public function __construct() {
        $this->appartements = new ArrayCollection();
    }
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", nullable=true)
     */
    private $descriptif;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return TypeAppartement
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Add appartement
     *
     * @param \NeigeEtSoleilBundle\Entity\Appartements $appartement
     *
     * @return TypeAppartement
     */
    public function addAppartement(\NeigeEtSoleilBundle\Entity\Appartements $appartement)
    {
        $this->appartements[] = $appartement;

        return $this;
    }

    /**
     * Remove appartement
     *
     * @param \NeigeEtSoleilBundle\Entity\Appartements $appartement
     */
    public function removeAppartement(\NeigeEtSoleilBundle\Entity\Appartements $appartement)
    {
        $this->appartements->removeElement($appartement);
    }

    /**
     * Get appartements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAppartements()
    {
        return $this->appartements;
    }
    
    public function __toString() {
        return $this->getDescriptif();
    }
}
