<?php

/** @MappedSuperclass */
abstract class Persona
{
    /** @Column(type="string", length=8) */
	private $dni;

    /** @Column(type="string", length=100) */
	private $nombres;

    /** @Column(type="string", length=100) */
	private $apellido;

    /** @Column(type="date", name="fecha_nac") */
	private $fechaNac;

    /** @Column(type="string", length=150) */
	private $direccion;

    /** @Column(type="string", length=20) */
	private $telefono;

    /**
     * @ManyToOne(targetEntity="Poblacion")
     * @JoinColumn(name="poblacion", referencedColumnName="id_poblacion")
     */
	private $poblacion;


	public function getDni()
	{
		return $this->id;
	}

	public function setDni($dni)
	{
		$this->dni = $dni;
	}

	public function getNombres()
	{
		return $this->nombres;
	}

	public function setNombres($nombres)
	{
		$this->nombres = $nombres;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getFechaNac()
	{
		return $this->fechaNac;
	}

	public function setFechaNac($fechaNac)
	{
		$this->fechaNac = $fechaNac;
	}

	public function getDireccion()
	{
		return $this->direccion;
	}

	public function setDireccion($direccion)
	{
		$this->direccion = $direccion;
	}

	public function getTelefono()
	{
		return $this->telefono;
	}

	public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}

	public function getPoblacion()
	{
		return $this->poblacion;
	}

	public function setPoblacion(Poblacion $poblacion)
	{
		$this->poblacion = $poblacion;
	}

}
