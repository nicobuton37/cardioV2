<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Has
 *
 * @ORM\Table(name="has")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\HasRepository")
 */
class Has
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
     * @ORM\Column(name="hta_has", type="boolean")
     */
    private $htaHas;

    /**
     * @var bool
     *
     * @ORM\Column(name="insu_hepatique", type="boolean")
     */
    private $insuHepatique;

    /**
     * @var bool
     *
     * @ORM\Column(name="insu_renale", type="boolean")
     */
    private $insuRenale;

    /**
     * @var bool
     *
     * @ORM\Column(name="ait_avc", type="boolean")
     */
    private $aitAvc;

    /**
     * @var bool
     *
     * @ORM\Column(name="saignement", type="boolean")
     */
    private $saignement;

    /**
     * @var bool
     *
     * @ORM\Column(name="inr", type="boolean")
     */
    private $inr;

    /**
     * @var bool
     *
     * @ORM\Column(name="age_has", type="boolean")
     */
    private $ageHas;

    /**
     * @var bool
     *
     * @ORM\Column(name="alcool", type="boolean")
     */
    private $alcool;

    /**
     * @var bool
     *
     * @ORM\Column(name="ains", type="boolean")
     */
    private $ains;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

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
     * Set htaHas
     *
     * @param boolean $htaHas
     *
     * @return Has
     */
    public function setHtaHas($htaHas)
    {
        $this->htaHas = $htaHas;

        return $this;
    }

    /**
     * Get htaHas
     *
     * @return bool
     */
    public function getHtaHas()
    {
        return $this->htaHas;
    }

    /**
     * Set insuHepatique
     *
     * @param boolean $insuHepatique
     *
     * @return Has
     */
    public function setInsuHepatique($insuHepatique)
    {
        $this->insuHepatique = $insuHepatique;

        return $this;
    }

    /**
     * Get insuHepatique
     *
     * @return bool
     */
    public function getInsuHepatique()
    {
        return $this->insuHepatique;
    }

    /**
     * Set insuRenale
     *
     * @param boolean $insuRenale
     *
     * @return Has
     */
    public function setInsuRenale($insuRenale)
    {
        $this->insuRenale = $insuRenale;

        return $this;
    }

    /**
     * Get insuRenale
     *
     * @return bool
     */
    public function getInsuRenale()
    {
        return $this->insuRenale;
    }

    /**
     * Set aitAvc
     *
     * @param boolean $aitAvc
     *
     * @return Has
     */
    public function setAitAvc($aitAvc)
    {
        $this->aitAvc = $aitAvc;

        return $this;
    }

    /**
     * Get aitAvc
     *
     * @return bool
     */
    public function getAitAvc()
    {
        return $this->aitAvc;
    }

    /**
     * Set saignement
     *
     * @param boolean $saignement
     *
     * @return Has
     */
    public function setSaignement($saignement)
    {
        $this->saignement = $saignement;

        return $this;
    }

    /**
     * Get saignement
     *
     * @return bool
     */
    public function getSaignement()
    {
        return $this->saignement;
    }

    /**
     * Set inr
     *
     * @param boolean $inr
     *
     * @return Has
     */
    public function setInr($inr)
    {
        $this->inr = $inr;

        return $this;
    }

    /**
     * Get inr
     *
     * @return bool
     */
    public function getInr()
    {
        return $this->inr;
    }

    /**
     * Set ageHas
     *
     * @param boolean $ageHas
     *
     * @return Has
     */
    public function setAgeHas($ageHas)
    {
        $this->ageHas = $ageHas;

        return $this;
    }

    /**
     * Get ageHas
     *
     * @return bool
     */
    public function getAgeHas()
    {
        return $this->ageHas;
    }

    /**
     * Set alcool
     *
     * @param boolean $alcool
     *
     * @return Has
     */
    public function setAlcool($alcool)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return bool
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set ains
     *
     * @param boolean $ains
     *
     * @return Has
     */
    public function setAins($ains)
    {
        $this->ains = $ains;

        return $this;
    }

    /**
     * Get ains
     *
     * @return bool
     */
    public function getAins()
    {
        return $this->ains;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
}

