<?php

/**
 * @Entity
 * @Table(name="profesores")
 */
class Profesor extends Persona
{
    /** @Id @Column(type="integer", name="id_profesor") * @GeneratedValue */ 
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
}
