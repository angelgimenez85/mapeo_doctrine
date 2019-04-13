<?php

/**
 * @Entity
 * @Table(name="aulas")
 */
class Aula
{
    /** @Id @Column(type="integer", name="cod_aula") * @GeneratedValue */ 
	private $codigo;

    /** @Column(type="integer", length=3) */
	private $piso;

    /** @Column(name="nro_pupitres", type="integer", length=4) */
	private $nroPupitres;

    /**
    * @OneToMany(targetEntity="Clase", mappedBy="aula", cascade={"all"})
    */
    private $clases;

    public function __construct($piso, $nroPupitres)
    {
        $this->piso = $piso;
        $this->nroPupitres = $nroPupitres;
    }

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}

	public function getPiso()
	{
		return $this->piso;
	}

	public function setPiso($piso)
	{
		$this->piso = $piso;
	}

	public function getNroPupitres()
	{
		return $this->nroPupitres;
	}

	public function setNroPupitres($nroPupitres)
	{
		$this->nroPupitres = $nroPupitres;
	}

    public function getClases()
    {
        return $this->clases;
    }

    public function addClase($clase)
    {
        $this->curses[] = $clase;
        $clase->setAula($this);
    }
}
