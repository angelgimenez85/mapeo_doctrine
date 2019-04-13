<?php

/**
 * @Entity
 * @Table(name="cursos")
 */
class Curso
{
    /** @Id @Column(type="integer", name="cod_curso") * @GeneratedValue */ 
	private $codigo;

    /**
     * @Column(type="string", length=100)
     */
	private $nombre;

    /**
     * @ManyToOne(targetEntity="Profesor")
     * @JoinColumn(name="profesor", referencedColumnName="id_profesor")
     */
    private $profesor;


    public function __construct($nombre)
    {
        $this->nombre = $nombre;
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

    public function getProfesor()
    {
        return $this->profesor;
    }

    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
    }
}
