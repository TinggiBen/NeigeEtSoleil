<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contratL
 *
 * @ORM\Table(name="contrat_l")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\contratLRepository")
 */
class ContratL
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="NeigeEtSoleilBundle\Entity\Tiers")
     */
    private $tiers;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="NeigeEtSoleilBundle\Entity\Appartements", inversedBy="contratL")
     */
    protected $appartements;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutCL", type="date", nullable=true)
     */
    protected $dateDebutCL;

    /**
     * @var \DateTime
     * @Assert\Type("\DateTime")
     * @ORM\Column(name="dateFinCL", type="date", nullable=true)
     */
    protected $dateFinCL;

    /**
     * @var \DateTime
     * @Assert\Type("\DateTime")
     * @ORM\Column(name="dateSignatureCL", type="date", nullable=true)
     */
    protected $dateSignatureCL;


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
     * Set dateDebutCL
     *
     * @param \DateTime $dateDebutCL
     *
     * @return contratL
     */
    public function setDateDebutCL($dateDebutCL)
    {
        $this->dateDebutCL = $dateDebutCL;

        return $this;
    }

    /**
     * Get dateDebutCL
     *
     * @return \DateTime
     */
    public function getDateDebutCL()
    {
        return $this->dateDebutCL;
    }

    /**
     * Set dateFinCL
     *
     * @param \DateTime $dateFinCL
     *
     * @return contratL
     */
    public function setDateFinCL($dateFinCL)
    {
        $this->dateFinCL = $dateFinCL;

        return $this;
    }

    /**
     * Get dateFinCL
     *
     * @return \DateTime
     */
    public function getDateFinCL()
    {
        return $this->dateFinCL;
    }

    /**
     * Set dateSignatureCL
     *
     * @param \DateTime $dateSignatureCL
     *
     * @return contratL
     */
    public function setDateSignatureCL($dateSignatureCL)
    {
        $this->dateSignatureCL = $dateSignatureCL;

        return $this;
    }

    /**
     * Get dateSignatureCL
     *
     * @return \DateTime
     */
    public function getDateSignatureCL()
    {
        return $this->dateSignatureCL;
    }
    
    /**
    * Set appartements
    *
    @param NeigeEtSoleilBundle\Entity\Appartements $appartements
    */
    public function setAppartements(Appartements $appartements)
    {
        $this->appartements = $appartements;
    }
    
    /**
    * Get appartements
    *
    @return NeigeEtSoleilBundle\Entity\Appartements
    */
    public function getAppartements()
    {
        return $this->appartements;
    }
    
     /**
     * Set tiers
     *
     * @param \NeigeEtSoleilBundle\Entity\Tiers $tiers
     *
     * @return ContratL
     */
    public function setTiers(\NeigeEtSoleilBundle\Entity\Tiers $tiers = null)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * Get tiers
     *
     * @return \NeigeEtSoleilBundle\Entity\Tiers
     */
    public function getTiers()
    {
        return $this->tiers;
    }
}

