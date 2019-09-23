<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResultatRepository")
 */
class Resultat
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
     * @ORM\Column(name="formateur", type="string", length=255)
     */
    private $formateur;

    /**
     * @var string
     *
     * @ORM\Column(name="promo", type="string", length=255)
     */
    private $promo;

    /**
     * @var int
     *
     * @ORM\Column(name="salle", type="integer")
     */
    private $salle;

    /**
     * @var int
     *
     * @ORM\Column(name="semaine", type="integer")
     */
    private $semaine;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=255)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="demi", type="string", length=255)
     */
    private $demijournee;


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
     * Set formateur
     *
     * @param string $formateur
     *
     * @return Resultat
     */

    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * Get formateur
     *
     * @return string
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * Set promo
     *
     * @param string $promo
     *
     * @return Resultat
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set salle
     *
     * @param integer $salle
     *
     * @return Resultat
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return int
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set semaine
     *
     * @param integer $semaine
     *
     * @return Resultat
     */
    public function setSemaine($semaine)
    {
        $this->semaine = $semaine;

        return $this;
    }

    /**
     * Get semaine
     *
     * @return int
     */
    public function getSemaine()
    {
        return $this->semaine;
    }

    /**
     * Set jour
     *
     * @param string $jour
     *
     * @return Resultat
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set demijournee
     *
     * @param string $demijournee
     *
     * @return Resultat
     */
    public function setDemijournee($demijournee)
    {
        $this->demijournee= $demijournee;

        return $this;
    }

    /**
     * Get demijournee
     *
     * @return string
     */
    public function getDemijournee()
    {
        return $this->demijournee;
    }

}
