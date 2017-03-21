<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Tiers
 *
 * @ORM\Table(name="tiers")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\TiersRepository")
 */

class Tiers extends BaseUser
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
     * @var string
     * @Assert\Regex(
     * pattern     = "/^[a-z]+$/i",
     * htmlPattern = "^[a-zA-Z]+$"
     * )
     * @ORM\Column(name="nom", type="string", length=60, nullable=true)
     */
    protected $nom;

    /**
     * @var string
     * @Assert\Regex(
     * pattern     = "/^[a-z]+$/i",
     * htmlPattern = "^[a-zA-Z]+$"
     * )
     * @ORM\Column(name="prenom", type="string", length=60, nullable=true)
     */
    protected $prenom;

    /**
     * @var string
     * @ORM\Column(name="adresse", type="string", length=80, nullable=true)
     */
    protected $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    protected $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    protected $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=12, nullable=true)
     */
    protected $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=50, nullable=true)
     */
    protected $fonction;
    
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Tiers
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Tiers
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Tiers
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }


    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Tiers
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Tiers
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Tiers
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Tiers
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }
}

