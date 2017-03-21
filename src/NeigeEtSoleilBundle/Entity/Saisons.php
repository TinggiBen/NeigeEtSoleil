<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saisons
 *
 * @ORM\Table(name="saisons")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\SaisonsRepository")
 */
class Saisons
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
     * @ORM\Column(name="nomSaison", type="string", length=20, nullable=true)
     */
    private $nomSaison;


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
     * Set nomSaison
     *
     * @param string $nomSaison
     *
     * @return Saisons
     */
    public function setNomSaison($nomSaison)
    {
        $this->nomSaison = $nomSaison;

        return $this;
    }

    /**
     * Get nomSaison
     *
     * @return string
     */
    public function getNomSaison()
    {
        return $this->nomSaison;
    }
}

