<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor
 *
 * @ORM\Table(name="doctor")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\DoctorRepository")
 */
class Doctor
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
     * @ORM\Column(name="firstname_doc", type="string", length=255)
     */
    private $firstnameDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="name_doc", type="string", length=255)
     */
    private $nameDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="cardio", type="string", length=255)
     */
    private $cardio;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_doc", type="string", length=255)
     */
    private $mailDoc;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     */
    private $patientId;


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
     * Set firstnameDoc
     *
     * @param string $firstnameDoc
     *
     * @return Doctor
     */
    public function setFirstnameDoc($firstnameDoc)
    {
        $this->firstnameDoc = $firstnameDoc;

        return $this;
    }

    /**
     * Get firstnameDoc
     *
     * @return string
     */
    public function getFirstnameDoc()
    {
        return $this->firstnameDoc;
    }

    /**
     * Set nameDoc
     *
     * @param string $nameDoc
     *
     * @return Doctor
     */
    public function setNameDoc($nameDoc)
    {
        $this->nameDoc = $nameDoc;

        return $this;
    }

    /**
     * Get nameDoc
     *
     * @return string
     */
    public function getNameDoc()
    {
        return $this->nameDoc;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Doctor
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set cardio
     *
     * @param string $cardio
     *
     * @return Doctor
     */
    public function setCardio($cardio)
    {
        $this->cardio = $cardio;

        return $this;
    }

    /**
     * Get cardio
     *
     * @return string
     */
    public function getCardio()
    {
        return $this->cardio;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Doctor
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set mailDoc
     *
     * @param string $mailDoc
     *
     * @return Doctor
     */
    public function setMailDoc($mailDoc)
    {
        $this->mailDoc = $mailDoc;

        return $this;
    }

    /**
     * Get mailDoc
     *
     * @return string
     */
    public function getMailDoc()
    {
        return $this->mailDoc;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Doctor
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;

        return $this;
    }

    /**
     * Get patientId
     *
     * @return int
     */
    public function getPatientId()
    {
        return $this->patientId;
    }
}

