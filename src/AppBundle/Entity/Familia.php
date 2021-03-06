<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="familia")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\FamiliaRepository")
 */
class Familia
{
    
/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/ protected $id;

/**
* El nom està format per tipus + model
*
* @ORM\Column(type="string", length=250)
*/protected $nom;

/**
* @ORM\Column(type="string", length=250 , nullable= true)
*/protected $tipus;

/**
* @ORM\Column(type="string", length=250 , nullable= true)
*/protected $model;

 /**
* Bidirectional   
* @ORM\OneToMany(targetEntity="Maquina",mappedBy="familia")
**/protected $maquines;


/**
 Getters i Setters
*/
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Familia
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set tipus
     *
     * @param string $tipus
     * @return Familia
     */
    public function setTipus($tipus)
    {
        $this->tipus = $tipus;

        return $this;
    }

    /**
     * Get tipus
     *
     * @return string 
     */
    public function getTipus()
    {
        return $this->tipus;
    }

    /**
     * Set model
     *
     * @param integer $model
     * @return Familia
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return integer 
     */
    public function getModel()
    {
        return $this->model;
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return Familia
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

/**

*/

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->maquines = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add maquines
     *
     * @param \AppBundle\Entity\Maquina $maquines
     * @return Familia
     */
    public function addMaquine(\AppBundle\Entity\Maquina $maquines)
    {
        $this->maquines[] = $maquines;

        return $this;
    }

    /**
     * Remove maquines
     *
     * @param \AppBundle\Entity\Maquina $maquines
     */
    public function removeMaquine(\AppBundle\Entity\Maquina $maquines)
    {
        $this->maquines->removeElement($maquines);
    }

    /**
     * Get maquines
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaquines()
    {
        return $this->maquines;
    }
}
