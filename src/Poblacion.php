<?php

/**
 * @Entity
 * @Table(name="poblaciones")
 */
class Poblacion
{
    /**
     * @Id
     * @Column(type="integer", name="id_poblacion")
     * @GeneratedValue
     */
	protected $id;

    /**
     * @Column(type="string", length=50, nullable=false)
     */
	protected $nombre;

    /**
     * @Column(type="integer", name="cod_postal", length=4, nullable=false)
     */
	protected $codPostal;


    public function __construct(int $id, string $nombre, int $codPostal)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->codPostal = $codPostal;
    }

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getCodPostal()
	{
		return $this->codPostal;
	}

	public function setCodPostal($codPostal)
	{
		$this->codPostal = $codPostal;
	}
}
