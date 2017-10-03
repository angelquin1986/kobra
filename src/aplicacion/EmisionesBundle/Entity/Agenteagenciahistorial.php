<?php

namespace aplicacion\EmisionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenteagenciahistorial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Agenteagenciahistorial
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
     * @ORM\Column(name="agente", type="integer")
     */
    private $agente;

    /**
     * @var integer
     *
     * @ORM\Column(name="agencia", type="integer")
     */
    private $agencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaModificacion", type="datetime")
     */
    private $fechaModificacion;


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
     * Set agente
     *
     * @param integer $agente
     * @return Agenteagenciahistorial
     */
    public function setAgente($agente)
    {
        $this->agente = $agente;

        return $this;
    }

    /**
     * Get agente
     *
     * @return integer 
     */
    public function getAgente()
    {
        return $this->agente;
    }

    /**
     * Set agencia
     *
     * @param integer $agencia
     * @return Agenteagenciahistorial
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get agencia
     *
     * @return integer 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return Agenteagenciahistorial
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }
}
