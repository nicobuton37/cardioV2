<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post_imp
 *
 * @ORM\Table(name="post_imp")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\Post_impRepository")
 */
class Post_imp
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
     * @ORM\Column(name="eto_imp", type="string", length=255)
     */
    private $etoImp;

    /**
     * @var string
     *
     * @ORM\Column(name="ett_imp", type="string", length=255)
     */
    private $ettImp;

    /**
     * @var string
     *
     * @ORM\Column(name="scanner", type="string", length=255)
     */
    private $scanner;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_neuro", type="string", length=255)
     */
    private $csNeuro;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_cardio", type="string", length=255)
     */
    private $csCardio;


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
     * Set etoImp
     *
     * @param string $etoImp
     *
     * @return Post_imp
     */
    public function setEtoImp($etoImp)
    {
        $this->etoImp = $etoImp;

        return $this;
    }

    /**
     * Get etoImp
     *
     * @return string
     */
    public function getEtoImp()
    {
        return $this->etoImp;
    }

    /**
     * Set ettImp
     *
     * @param string $ettImp
     *
     * @return Post_imp
     */
    public function setEttImp($ettImp)
    {
        $this->ettImp = $ettImp;

        return $this;
    }

    /**
     * Get ettImp
     *
     * @return string
     */
    public function getEttImp()
    {
        return $this->ettImp;
    }

    /**
     * Set scanner
     *
     * @param string $scanner
     *
     * @return Post_imp
     */
    public function setScanner($scanner)
    {
        $this->scanner = $scanner;

        return $this;
    }

    /**
     * Get scanner
     *
     * @return string
     */
    public function getScanner()
    {
        return $this->scanner;
    }

    /**
     * Set csNeuro
     *
     * @param string $csNeuro
     *
     * @return Post_imp
     */
    public function setCsNeuro($csNeuro)
    {
        $this->csNeuro = $csNeuro;

        return $this;
    }

    /**
     * Get csNeuro
     *
     * @return string
     */
    public function getCsNeuro()
    {
        return $this->csNeuro;
    }

    /**
     * Set csCardio
     *
     * @param string $csCardio
     *
     * @return Post_imp
     */
    public function setCsCardio($csCardio)
    {
        $this->csCardio = $csCardio;

        return $this;
    }

    /**
     * Get csCardio
     *
     * @return string
     */
    public function getCsCardio()
    {
        return $this->csCardio;
    }
}

