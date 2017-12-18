<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traitement
 *
 * @ORM\Table(name="traitement")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\TraitementRepository")
 */
class Traitement
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
     * @var bool
     *
     * @ORM\Column(name="aspirine", type="boolean")
     */
    private $aspirine;

    /**
     * @var bool
     *
     * @ORM\Column(name="thieno", type="boolean")
     */
    private $thieno;

    /**
     * @var bool
     *
     * @ORM\Column(name="avk", type="boolean")
     */
    private $avk;

    /**
     * @var bool
     *
     * @ORM\Column(name="naco", type="boolean")
     */
    private $naco;

    /**
     * @var bool
     *
     * @ORM\Column(name="aucun", type="boolean")
     */
    private $aucun;

    /**
     * @var bool
     *
     * @ORM\Column(name="contre_eto", type="boolean")
     */
    private $contreEto;

    /**
     * @var bool
     *
     * @ORM\Column(name="filtre_cave", type="boolean")
     */
    private $filtreCave;


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
     * Set aspirine
     *
     * @param boolean $aspirine
     *
     * @return Traitement
     */
    public function setAspirine($aspirine)
    {
        $this->aspirine = $aspirine;

        return $this;
    }

    /**
     * Get aspirine
     *
     * @return bool
     */
    public function getAspirine()
    {
        return $this->aspirine;
    }

    /**
     * Set thieno
     *
     * @param boolean $thieno
     *
     * @return Traitement
     */
    public function setThieno($thieno)
    {
        $this->thieno = $thieno;

        return $this;
    }

    /**
     * Get thieno
     *
     * @return bool
     */
    public function getThieno()
    {
        return $this->thieno;
    }

    /**
     * Set avk
     *
     * @param boolean $avk
     *
     * @return Traitement
     */
    public function setAvk($avk)
    {
        $this->avk = $avk;

        return $this;
    }

    /**
     * Get avk
     *
     * @return bool
     */
    public function getAvk()
    {
        return $this->avk;
    }

    /**
     * Set naco
     *
     * @param boolean $naco
     *
     * @return Traitement
     */
    public function setNaco($naco)
    {
        $this->naco = $naco;

        return $this;
    }

    /**
     * Get naco
     *
     * @return bool
     */
    public function getNaco()
    {
        return $this->naco;
    }

    /**
     * Set aucun
     *
     * @param boolean $aucun
     *
     * @return Traitement
     */
    public function setAucun($aucun)
    {
        $this->aucun = $aucun;

        return $this;
    }

    /**
     * Get aucun
     *
     * @return bool
     */
    public function getAucun()
    {
        return $this->aucun;
    }

    /**
     * Set contreEto
     *
     * @param boolean $contreEto
     *
     * @return Traitement
     */
    public function setContreEto($contreEto)
    {
        $this->contreEto = $contreEto;

        return $this;
    }

    /**
     * Get contreEto
     *
     * @return bool
     */
    public function getContreEto()
    {
        return $this->contreEto;
    }

    /**
     * Set filtreCave
     *
     * @param boolean $filtreCave
     *
     * @return Traitement
     */
    public function setFiltreCave($filtreCave)
    {
        $this->filtreCave = $filtreCave;

        return $this;
    }

    /**
     * Get filtreCave
     *
     * @return bool
     */
    public function getFiltreCave()
    {
        return $this->filtreCave;
    }
}

