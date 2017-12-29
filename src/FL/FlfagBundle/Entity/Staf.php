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
     *@var string
     *
     *@ORM\Column(name="codePatient", type="string", length=255)
     *
     */
    private $codePatient;

    /**
     * @ORM\OneToOne(targetEntity="FL\FlfagBundle\Entity\Post_close", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $postClose;

    /**
     * @ORM\OneToOne(targetEntity="FL\FlfagBundle\Entity\Post_imp", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $postImp;

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
     * @var string
     *
     * @ORM\Column(name="close", type="string", length=255)
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
     * @param string $close
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
     * @return string
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

    public function getPostClose()
    {
        return $this->postClose;
    }

    public function setPostClose(Post_close $postClose = null)
    {
        $this->postClose = $postClose;
    }

    public function getPostImp()
    {
        return $this->postImp;
    }

    public function setPostImp(Post_imp $postImp = null)
    {
        $this->postImp = $postImp;
    }

    /**
     * @return mixed
     */
    public function getCodePatient()
    {
        return $this->codePatient;
    }

    /**
     * @param mixed $codePatient
     */
    public function setCodePatient($codePatient)
    {
        $this->codePatient = $codePatient;
    }
}
