<?php

/**
 * @Entity
 * @Table(name="clases")
 */
class Clase
{
    /** @Column(type="integer", length=2) */
    private $mes;

    /** @Column(type="integer", length=2) */
    private $dia;

    /** @Column(type="time") */
    private $hora;

    /**
     * @Id
     * @ManyToOne(targetEntity="Asignatura", inversedBy="clases")
     * @JoinColumn(name="asignatura", referencedColumnName="cod_asignatura", nullable=false, onDelete="CASCADE")
     */
    private $asignatura;

    /**
     * @Id
     * @ManyToOne(targetEntity="Aula", inversedBy="clases")
     * @JoinColumn(name="aula", referencedColumnName="cod_aula", nullable=false, onDelete="CASCADE")
     */
    private $aula;

    public function __construct($mes, $dia, $hora)
    {
        $this->mes = $mes;
        $this->dia = $dia;
        $this->hora = $hora;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function getAsignatura()
    {
        return $this->asignatura;
    }

    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;
    }

    public function getAula()
    {
        return $this->aula;
    }

    public function setAula($aula)
    {
        $this->aula = $aula;
    }
}