<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Representants
 *
 * @ORM\Table(name="representants")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\RepresentantsRepository")
 */
class Representants
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
     * @ORM\Column(name="nomRep", type="string", length=50, nullable=true)
     */
    private $nomRep;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomRep", type="string", length=50, nullable=true)
     */
    private $prenomRep;


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
     * Set nomRep
     *
     * @param string $nomRep
     *
     * @return Representants
     */
    public function setNomRep($nomRep)
    {
        $this->nomRep = $nomRep;

        return $this;
    }

    /**
     * Get nomRep
     *
     * @return string
     */
    public function getNomRep()
    {
        return $this->nomRep;
    }

    /**
     * Set prenomRep
     *
     * @param string $prenomRep
     *
     * @return Representants
     */
    public function setPrenomRep($prenomRep)
    {
        $this->prenomRep = $prenomRep;

        return $this;
    }

    /**
     * Get prenomRep
     *
     * @return string
     */
    public function getPrenomRep()
    {
        return $this->prenomRep;
    }
}

