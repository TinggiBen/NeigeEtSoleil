<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contratP
 *
 * @ORM\Table(name="contrat_p")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\contratPRepository")
 */
class ContratP
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
     * @ORM\ManyToOne(targetEntity="NeigeEtSoleilBundle\Entity\Appartements", inversedBy="contratP")
     */
    private $appartements;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutCP", type="date", nullable=true)
     */
    private $dateDebutCP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinCP", type="date", nullable=true)
     */
    private $dateFinCP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSignatureCP", type="date", nullable=true)
     */
    private $dateSignatureCP;


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
     * Set dateDebutCP
     *
     * @param \DateTime $dateDebutCP
     *
     * @return contratP
     */
    public function setDateDebutCP($dateDebutCP)
    {
        $this->dateDebutCP = $dateDebutCP;

        return $this;
    }

    /**
     * Get dateDebutCP
     *
     * @return \DateTime
     */
    public function getDateDebutCP()
    {
        return $this->dateDebutCP;
    }

    /**
     * Set dateFinCP
     *
     * @param \DateTime $dateFinCP
     *
     * @return contratP
     */
    public function setDateFinCP($dateFinCP)
    {
        $this->dateFinCP = $dateFinCP;

        return $this;
    }

    /**
     * Get dateFinCP
     *
     * @return \DateTime
     */
    public function getDateFinCP()
    {
        return $this->dateFinCP;
    }

    /**
     * Set dateSignatureCP
     *
     * @param \DateTime $dateSignatureCP
     *
     * @return contratP
     */
    public function setDateSignatureCP($dateSignatureCP)
    {
        $this->dateSignatureCP = $dateSignatureCP;

        return $this;
    }

    /**
     * Get dateSignatureCP
     *
     * @return \DateTime
     */
    public function getDateSignatureCP()
    {
        return $this->dateSignatureCP;
    }
}

