<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\EquipementRepository")
 */
class Equipement
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
     * @var string
     *
     * @ORM\Column(name="descriptifE", type="string", length=255, nullable=true)
     */
    private $descriptifE;

    /**
     * @var string
     *
     * @ORM\Column(name="nomE", type="string", length=255, nullable=true)
     */
    private $nomE;

    /**
     * @var string
     *
     * @ORM\Column(name="etatE", type="string", length=20, nullable=true)
     */
    private $etatE;


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
     * Set descriptifE
     *
     * @param string $descriptifE
     *
     * @return Equipement
     */
    public function setDescriptifE($descriptifE)
    {
        $this->descriptifE = $descriptifE;

        return $this;
    }

    /**
     * Get descriptifE
     *
     * @return string
     */
    public function getDescriptifE()
    {
        return $this->descriptifE;
    }

    /**
     * Set nomE
     *
     * @param string $nomE
     *
     * @return Equipement
     */
    public function setNomE($nomE)
    {
        $this->nomE = $nomE;

        return $this;
    }

    /**
     * Get nomE
     *
     * @return string
     */
    public function getNomE()
    {
        return $this->nomE;
    }

    /**
     * Set etatE
     *
     * @param string $etatE
     *
     * @return Equipement
     */
    public function setEtatE($etatE)
    {
        $this->etatE = $etatE;

        return $this;
    }

    /**
     * Get etatE
     *
     * @return string
     */
    public function getEtatE()
    {
        return $this->etatE;
    }
}

