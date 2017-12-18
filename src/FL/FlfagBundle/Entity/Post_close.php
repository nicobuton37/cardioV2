<?php

namespace FL\FlfagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post_close
 *
 * @ORM\Table(name="post_close")
 * @ORM\Entity(repositoryClass="FL\FlfagBundle\Repository\Post_closeRepository")
 */
class Post_close
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
     * @ORM\Column(name="anesthesie", type="boolean")
     */
    private $anesthesie;

    /**
     * @var bool
     *
     * @ORM\Column(name="eto_close", type="boolean")
     */
    private $etoClose;

    /**
     * @var bool
     *
     * @ORM\Column(name="tdm_coeur", type="boolean")
     */
    private $tdmCoeur;

    /**
     * @var bool
     *
     * @ORM\Column(name="tdm_cerebral", type="boolean")
     */
    private $tdmCerebral;

    /**
     * @var bool
     *
     * @ORM\Column(name="geriatrique", type="boolean")
     */
    private $geriatrique;


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
     * Set anesthesie
     *
     * @param boolean $anesthesie
     *
     * @return Post_close
     */
    public function setAnesthesie($anesthesie)
    {
        $this->anesthesie = $anesthesie;

        return $this;
    }

    /**
     * Get anesthesie
     *
     * @return bool
     */
    public function getAnesthesie()
    {
        return $this->anesthesie;
    }

    /**
     * Set etoClose
     *
     * @param boolean $etoClose
     *
     * @return Post_close
     */
    public function setEtoClose($etoClose)
    {
        $this->etoClose = $etoClose;

        return $this;
    }

    /**
     * Get etoClose
     *
     * @return bool
     */
    public function getEtoClose()
    {
        return $this->etoClose;
    }

    /**
     * Set tdmCoeur
     *
     * @param boolean $tdmCoeur
     *
     * @return Post_close
     */
    public function setTdmCoeur($tdmCoeur)
    {
        $this->tdmCoeur = $tdmCoeur;

        return $this;
    }

    /**
     * Get tdmCoeur
     *
     * @return bool
     */
    public function getTdmCoeur()
    {
        return $this->tdmCoeur;
    }

    /**
     * Set tdmCerebral
     *
     * @param boolean $tdmCerebral
     *
     * @return Post_close
     */
    public function setTdmCerebral($tdmCerebral)
    {
        $this->tdmCerebral = $tdmCerebral;

        return $this;
    }

    /**
     * Get tdmCerebral
     *
     * @return bool
     */
    public function getTdmCerebral()
    {
        return $this->tdmCerebral;
    }

    /**
     * Set geriatrique
     *
     * @param boolean $geriatrique
     *
     * @return Post_close
     */
    public function setGeriatrique($geriatrique)
    {
        $this->geriatrique = $geriatrique;

        return $this;
    }

    /**
     * Get geriatrique
     *
     * @return bool
     */
    public function getGeriatrique()
    {
        return $this->geriatrique;
    }
}

