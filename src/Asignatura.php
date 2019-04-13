<?php

/**
 * @Entity
 * @Table(name="asignaturas")
 */
class Asignatura
{
    /** @Id @Column(type="integer", name="cod_asignatura") * @GeneratedValue */ 
	private $codigo;

    /** @Column(type="string", length=50) */
	private $nombre;

    /** @Column(type="integer", length=2, name="hs_semanales") */
	private $hsSemanales;

    /**
     * @ManyToOne(targetEntity="Profesor")
     * @JoinColumn(name="profesor", referencedColumnName="id_profesor")
     */
    private $profesor;

    /**
     * @ManyToOne(targetEntity="Curso")
     * @JoinColumn(name="curso", referencedColumnName="cod_curso")
     */
    private $curso;

    /**
    * @OneToMany(targetEntity="Clase", mappedBy="asignatura", cascade={"all"})
    */
    private $clases;

    /**
    * @OneToMany(targetEntity="Matriculacion", mappedBy="asignatura", cascade={"all"})
    */
    private $matriculaciones;

    public function __construct($nombre, $hsSemanales)
    {
        $this->nombre = $nombre;
        $this->hsSemanales = $hsSemanales;
    }

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
    }

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getHsSemanales()
	{
		return $this->hsSemanales;
	}

	public function setHsSemanales($hsSemanales)
	{
		$this->hsSemanales = $hsSemanales;
	}

    public function getProfesor()
    {
        return $this->profesor;
    }

    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function addClase($clase)
    {
        $this->curses[] = $clase;
        $clase->setAsignatura($this);
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
