<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="maquina")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\MaquinaRepository")
 */
class Maquina
{
	/**
	*
	* @ORM\Column(type="integer")
    * @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/ protected $id;

    /**
	*
	*@ORM\Column(type="integer")
	**/ protected $numero;

    /**
    * Bidirectional    (OWNING SIDE) 
    * @ORM\ManyToOne(targetEntity="Sublinia",inversedBy="maquines")
    * @ORM\JoinColumn(name="sublinia_id",referencedColumnName="id")
    **/ protected $sublinia;

    /**
    * Bidirectional   
    * @ORM\ManyToOne(targetEntity="Familia",inversedBy="maquines")
    * @ORM\JoinColumn(name="familia_id",referencedColumnName="id")
    **/ protected $familia;

    /**
    * @ORM\OneToMany(targetEntity="Resultat" , mappedBy="maquina")
    **/ protected $resultats;

    
    /**
    * Bidirectional    (OWNING SIDE) 
    * @ORM\ManyToOne(targetEntity="Linia",inversedBy="maquines")
    * @ORM\JoinColumn(name="linia_id",referencedColumnName="id")
    **/ protected $linia;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->resultats = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set numero
     *
     * @param integer $numero
     * @return Maquina
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set sublinia
     *
     * @param \AppBundle\Entity\Sublinia $sublinia
     * @return Maquina
     */
    public function setSublinia(\AppBundle\Entity\Sublinia $sublinia = null)
    {
        $this->sublinia = $sublinia;

        return $this;
    }

    /**
     * Get sublinia
     *
     * @return \AppBundle\Entity\Sublinia 
     */
    public function getSublinia()
    {
        return $this->sublinia;
    }

    /**
     * Set familia
     *
     * @param \AppBundle\Entity\Familia $familia
     * @return Maquina
     */
    public function setFamilia(\AppBundle\Entity\Familia $familia = null)
    {
        $this->familia = $familia;

        return $this;
    }

    /**
     * Get familia
     *
     * @return \AppBundle\Entity\Familia 
     */
    public function getFamilia()
    {
        return $this->familia;
    }

    /**
     * Add resultats
     *
     * @param \AppBundle\Entity\Resultat $resultats
     * @return Maquina
     */
    public function addResultat(\AppBundle\Entity\Resultat $resultats)
    {
        $this->resultats[] = $resultats;

        return $this;
    }

    /**
     * Remove resultats
     *
     * @param \AppBundle\Entity\Resultat $resultats
     */
    public function removeResultat(\AppBundle\Entity\Resultat $resultats)
    {
        $this->resultats->removeElement($resultats);
    }

    /**
     * Get resultats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResultats()
    {
        return $this->resultats;
    }

    /**
     * Set linia
     *
     * @param \AppBundle\Entity\Linia $linia
     * @return Maquina
     */
    public function setLinia(\AppBundle\Entity\Linia $linia = null)
    {
        $this->linia = $linia;

        return $this;
    }

    /**
     * Get linia
     *
     * @return \AppBundle\Entity\Linia 
     */
    public function getLinia()
    {
        return $this->linia;
    }
}
