<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="linia")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LiniaRepository")
 */
class Linia
{
	/**
	*
	* @ORM\Column(type="integer")
    * @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

    /**
	*
	*@ORM\Column(type="integer", nullable=true)
	*/ protected $numero;

    /**
    * Bidirectional  (REVERSE SIDE)
    * @ORM\OneToMany(targetEntity="Sublinia",mappedBy="linia")
    */ protected $sublinies;

    /**
    * Bidirectional  (REVERSE SIDE)
    * @ORM\OneToMany(targetEntity="Maquina",mappedBy="linia")
    */ protected $maquines;

    /**
    * Bidirectional  (REVERSE SIDE)
    * @ORM\OneToMany(targetEntity="Of",mappedBy="linia")
    */ protected $ordres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sublinies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ordres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Linia
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return Linia
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
     * Add sublinies
     *
     * @param \AppBundle\Entity\Sublinia $sublinies
     * @return Linia
     */
    public function addSubliny(\AppBundle\Entity\Sublinia $sublinies)
    {
        $this->sublinies[] = $sublinies;

        return $this;
    }

    /**
     * Remove sublinies
     *
     * @param \AppBundle\Entity\Sublinia $sublinies
     */
    public function removeSubliny(\AppBundle\Entity\Sublinia $sublinies)
    {
        $this->sublinies->removeElement($sublinies);
    }

    /**
     * Get sublinies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSublinies()
    {
        return $this->sublinies;
    }

    /**
     * Add ordres
     *
     * @param \AppBundle\Entity\Of $ordres
     * @return Linia
     */
    public function addOrdre(\AppBundle\Entity\Of $ordres)
    {
        $this->ordres[] = $ordres;

        return $this;
    }

    /**
     * Remove ordres
     *
     * @param \AppBundle\Entity\Of $ordres
     */
    public function removeOrdre(\AppBundle\Entity\Of $ordres)
    {
        $this->ordres->removeElement($ordres);
    }

    /**
     * Get ordres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdres()
    {
        return $this->ordres;
    }

    /**
     * Add maquines
     *
     * @param \AppBundle\Entity\Maquina $maquines
     * @return Linia
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
