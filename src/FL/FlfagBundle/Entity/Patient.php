<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\PatientRepository")
 */
class Patient
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \Date
     *
     * @ORM\Column(name="birthday", type="Date")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="neuro_hemo", type="string", length=255)
     */
    private $neuroHemo;

    /**
     * @var int
     *
     * @ORM\Column(name="traitment_id", type="integer")
     */
    private $traitmentId;

    /**
     * @var int
     *
     * @ORM\Column(name="cha_id", type="integer")
     */
    private $chaId;

    /**
     * @var int
     *
     * @ORM\Column(name="has_id", type="integer")
     */
    private $hasId;


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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Patient
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Patient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set birthday
     *
     * @param \Date $birthday
     *
     * @return Patient
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \Date
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set neuroHemo
     *
     * @param string $neuroHemo
     *
     * @return Patient
     */
    public function setNeuroHemo($neuroHemo)
    {
        $this->neuroHemo = $neuroHemo;

        return $this;
    }

    /**
     * Get neuroHemo
     *
     * @return string
     */
    public function getNeuroHemo()
    {
        return $this->neuroHemo;
    }

    /**
     * Set traitmentId
     *
     * @param integer $traitmentId
     *
     * @return Patient
     */
    public function setTraitmentId($traitmentId)
    {
        $this->traitmentId = $traitmentId;

        return $this;
    }

    /**
     * Get traitmentId
     *
     * @return int
     */
    public function getTraitmentId()
    {
        return $this->traitmentId;
    }

    /**
     * Set chaId
     *
     * @param integer $chaId
     *
     * @return Patient
     */
    public function setChaId($chaId)
    {
        $this->chaId = $chaId;

        return $this;
    }

    /**
     * Get chaId
     *
     * @return int
     */
    public function getChaId()
    {
        return $this->chaId;
    }

    /**
     * Set hasId
     *
     * @param integer $hasId
     *
     * @return Patient
     */
    public function setHasId($hasId)
    {
        $this->hasId = $hasId;

        return $this;
    }

    /**
     * Get hasId
     *
     * @return int
     */
    public function getHasId()
    {
        return $this->hasId;
    }
}
