<?php

namespace aplicacion\EmisionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aerolineafee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="aplicacion\EmisionesBundle\Entity\AerolineafeeRepository")
 */
class Aerolineafee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="aerolinea", type="integer")
     */
    private $aerolinea;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tipoaerolinea", type="string", length=255)
     */
    private $tipoaerolinea;

    /**
     * @var string
     *
     * @ORM\Column(name="esPredeterminada", type="string", length=255)
     */
    private $esPredeterminada;

    /**
     * @var float
     *
     * @ORM\Column(name="valorfee", type="float")
     */
    private $valorfee;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposervicio", type="string", length=255)
     */
    private $tiposervicio;
    
     /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=255)
     */
    private $origen;


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
     * Set tipoaerolinea
     *
     * @param string $tipoaerolinea
     * @return Aerolineafee
     */
    public function setTipoaerolinea($tipoaerolinea)
    {
        $this->tipoaerolinea = $tipoaerolinea;

        return $this;
    }

    /**
     * Get tipoaerolinea
     *
     * @return string 
     */
    public function getTipoaerolinea()
    {
        return $this->tipoaerolinea;
    }

    function getAerolinea() {
        return $this->aerolinea;
    }

    function getEsPredeterminada() {
        return $this->esPredeterminada;
    }

    function setAerolinea($aerolinea) {
        $this->aerolinea = $aerolinea;
    }

    function setEsPredeterminada($esPredeterminada) {
        $this->esPredeterminada = $esPredeterminada;
    }

    
    /**
     * Set valorfee
     *
     * @param float $valorfee
     * @return Aerolineafee
     */
    public function setValorfee($valorfee)
    {
        $this->valorfee = $valorfee;

        return $this;
    }

    /**
     * Get valorfee
     *
     * @return float 
     */
    public function getValorfee()
    {
        return $this->valorfee;
    }

    /**
     * Set tiposervicio
     *
     * @param string $tiposervicio
     * @return Aerolineafee
     */
    public function setTiposervicio($tiposervicio)
    {
        $this->tiposervicio = $tiposervicio;

        return $this;
    }

    /**
     * Get tiposervicio
     *
     * @return string 
     */
    public function getTiposervicio()
    {
        return $this->tiposervicio;
    }
    
    function getOrigen() {
        return $this->origen;
    }

    function setOrigen($origen) {
        $this->origen = $origen;
    }
}
