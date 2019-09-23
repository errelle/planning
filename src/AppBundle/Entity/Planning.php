<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlanningRepository")
 */
class Planning
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
     * Set semaine
     *
     * @param integer $semaine
     *
     * @return Planning
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
     * @return Planning
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
     * @return Planning
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
