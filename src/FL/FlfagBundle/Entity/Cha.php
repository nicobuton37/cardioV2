<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cha
 *
 * @ORM\Table(name="cha")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\ChaRepository")
 */
class Cha
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
     * @ORM\Column(name="insu_cardiaque", type="boolean")
     */
    private $insuCardiaque;

    /**
     * @var bool
     *
     * @ORM\Column(name="hta", type="boolean")
     */
    private $hta;

    /**
     * @var bool
     *
     * @ORM\Column(name="age", type="boolean")
     */
    private $age;

    /**
     * @var bool
     *
     * @ORM\Column(name="diabete", type="boolean")
     */
    private $diabete;

    /**
     * @var bool
     *
     * @ORM\Column(name="atcd", type="boolean")
     */
    private $atcd;

    /**
     * @var bool
     *
     * @ORM\Column(name="vasculaire", type="boolean")
     */
    private $vasculaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="age_tranche", type="boolean")
     */
    private $ageTranche;

    /**
     * @var bool
     *
     * @ORM\Column(name="femme", type="boolean")
     */
    private $femme;


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
     * Set insuCardiaque
     *
     * @param boolean $insuCardiaque
     *
     * @return Cha
     */
    public function setInsuCardiaque($insuCardiaque)
    {
        $this->insuCardiaque = $insuCardiaque;

        return $this;
    }

    /**
     * Get insuCardiaque
     *
     * @return bool
     */
    public function getInsuCardiaque()
    {
        return $this->insuCardiaque;
    }

    /**
     * Set hta
     *
     * @param boolean $hta
     *
     * @return Cha
     */
    public function setHta($hta)
    {
        $this->hta = $hta;

        return $this;
    }

    /**
     * Get hta
     *
     * @return bool
     */
    public function getHta()
    {
        return $this->hta;
    }

    /**
     * Set age
     *
     * @param boolean $age
     *
     * @return Cha
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return bool
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set diabete
     *
     * @param boolean $diabete
     *
     * @return Cha
     */
    public function setDiabete($diabete)
    {
        $this->diabete = $diabete;

        return $this;
    }

    /**
     * Get diabete
     *
     * @return bool
     */
    public function getDiabete()
    {
        return $this->diabete;
    }

    /**
     * Set atcd
     *
     * @param boolean $atcd
     *
     * @return Cha
     */
    public function setAtcd($atcd)
    {
        $this->atcd = $atcd;

        return $this;
    }

    /**
     * Get atcd
     *
     * @return bool
     */
    public function getAtcd()
    {
        return $this->atcd;
    }

    /**
     * Set vasculaire
     *
     * @param boolean $vasculaire
     *
     * @return Cha
     */
    public function setVasculaire($vasculaire)
    {
        $this->vasculaire = $vasculaire;

        return $this;
    }

    /**
     * Get vasculaire
     *
     * @return bool
     */
    public function getVasculaire()
    {
        return $this->vasculaire;
    }

    /**
     * Set ageTranche
     *
     * @param boolean $ageTranche
     *
     * @return Cha
     */
    public function setAgeTranche($ageTranche)
    {
        $this->ageTranche = $ageTranche;

        return $this;
    }

    /**
     * Get ageTranche
     *
     * @return bool
     */
    public function getAgeTranche()
    {
        return $this->ageTranche;
    }

    /**
     * Set femme
     *
     * @param boolean $femme
     *
     * @return Cha
     */
    public function setFemme($femme)
    {
        $this->femme = $femme;

        return $this;
    }

    /**
     * Get femme
     *
     * @return bool
     */
    public function getFemme()
    {
        return $this->femme;
    }
}

