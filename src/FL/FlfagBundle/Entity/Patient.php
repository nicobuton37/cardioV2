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
    *@ORM\OneToOne(targetEntity="FL\FlfagBundle\Entity\Doctor", cascade={"persist"})
    *@ORM\JoinColumn(nullable=false)
    */
    private $doctor;

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
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="neuro_hemo", type="string", length=255)
     */
    private $neuroHemo;


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
     * @param \DateTime $birthday
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
     * @return \DateTime
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

    public function getDoctor()
    {
      return $this->doctor;
    }

    public function setDoctor(Doctor $doctor = null)
    {
      $this->doctor = $doctor;
    }

}
