<?php

/**
 * @Entity
 * @Table(name="alumnos")
 */
class Alumno extends Persona
{
    /** @Id @Column(type="integer", name="id_alumno") * @GeneratedValue */ 
    private $id;

    /**
    * @OneToMany(targetEntity="Matriculacion", mappedBy="alumno", cascade={"all"})
    */
    private $matriculaciones;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getMatriculaciones()
    {
        return $this->matriculaciones;
    }

    public function addMatriculacion($matriculacion)
    {
        $this->matriculacion[] = $matriculacion;
        $matriculacion->setAsignatura($this);
    }
}
