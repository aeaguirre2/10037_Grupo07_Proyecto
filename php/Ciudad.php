<?php
class Ciudad
{
    private string $nombre;
    private string $codigoPostal;

    public function __construct(string $nombre, string $codigoPostal)
    {
        $this->nombre = $nombre;
        $this->codigoPostal = $codigoPostal;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getCodigoPostal(): string
    {
        return $this->codigoPostal;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setCodigoPostal(string $codigoPostal): void
    {
        $this->codigoPostal = $codigoPostal;
    }
}
