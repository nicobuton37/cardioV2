<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staf
 *
 * @ORM\Table(name="staf")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\StafRepository")
 */
class Staf
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
     * @var \DateTime
     *
     * @ORM\Column(name="staff_date", type="date")
     */
    private $staffDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="close", type="boolean")
     */
    private $close;

    /**
     * @var string
     *
     * @ORM\Column(name="examen", type="string", length=255)
     */
    private $examen;

    /**
     * @var string
     *
     * @ORM\Column(name="post_op", type="string", length=255)
     */
    private $postOp;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     */
    private $patientId;

    /**
     * @var int
     *
     * @ORM\Column(name="post_close_id", type="integer")
     */
    private $postCloseId;

    /**
     * @var int
     *
     * @ORM\Column(name="post_imp_id", type="integer")
     */
    private $postImpId;


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
     * Set staffDate
     *
     * @param \DateTime $staffDate
     *
     * @return Staf
     */
    public function setStaffDate($staffDate)
    {
        $this->staffDate = $staffDate;

        return $this;
    }

    /**
     * Get staffDate
     *
     * @return \DateTime
     */
    public function getStaffDate()
    {
        return $this->staffDate;
    }

    /**
     * Set close
     *
     * @param boolean $close
     *
     * @return Staf
     */
    public function setClose($close)
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get close
     *
     * @return bool
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * Set examen
     *
     * @param string $examen
     *
     * @return Staf
     */
    public function setExamen($examen)
    {
        $this->examen = $examen;

        return $this;
    }

    /**
     * Get examen
     *
     * @return string
     */
    public function getExamen()
    {
        return $this->examen;
    }

    /**
     * Set postOp
     *
     * @param string $postOp
     *
     * @return Staf
     */
    public function setPostOp($postOp)
    {
        $this->postOp = $postOp;

        return $this;
    }

    /**
     * Get postOp
     *
     * @return string
     */
    public function getPostOp()
    {
        return $this->postOp;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Staf
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

    /**
     * Set postCloseId
     *
     * @param integer $postCloseId
     *
     * @return Staf
     */
    public function setPostCloseId($postCloseId)
    {
        $this->postCloseId = $postCloseId;

        return $this;
    }

    /**
     * Get postCloseId
     *
     * @return int
     */
    public function getPostCloseId()
    {
        return $this->postCloseId;
    }

    /**
     * Set postImpId
     *
     * @param integer $postImpId
     *
     * @return Staf
     */
    public function setPostImpId($postImpId)
    {
        $this->postImpId = $postImpId;

        return $this;
    }

    /**
     * Get postImpId
     *
     * @return int
     */
    public function getPostImpId()
    {
        return $this->postImpId;
    }
}
