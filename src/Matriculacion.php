<?php

/**
 * @Entity
 * @Table(name="matriculaciones")
 */
class Matriculacion
{
    /** @Column(type="decimal", precision=2) */
	private $nota;

    /** @Column(type="text") */
	private $incidencias;

    /**
     * @Id
     * @ManyToOne(targetEntity="Alumno", inversedBy="matriculaciones", cascade={"persist"})
     * @JoinColumn(name="alumno", referencedColumnName="id_alumno", nullable=false, onDelete="CASCADE")
     */
    private $alumno;

    /**
     * @Id
     * @ManyToOne(targetEntity="Asignatura", inversedBy="matriculaciones")
     * @JoinColumn(name="asignatura", referencedColumnName="cod_asignatura", nullable=false, onDelete="CASCADE")
     */
    private $asignatura;


    public function __construct($nota, $incidencias = "")
    {
        $this->nota = $nota;
        $this->incidencias = $incidencias;
    }

	public function getNota()
	{
		return $this->nota;
	}

	public function setNota($nota)
	{
        $this->nota = $nota;
	}

	public function getIncidencias()
	{
		return $this->incidencias;
	}

	public function setIncidencias($incidencias)
	{
        $this->incidencias = $incidencias;
	}

    public function getAlumno()
    {
        return $this->alumno;
    }

    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;
    }

    public function getAsignatura()
    {
        return $this->asignatura;
    }

    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;
    }
}
