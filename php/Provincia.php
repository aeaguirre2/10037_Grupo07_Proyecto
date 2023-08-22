<?php
class Provincia
{
    public string $nombre;
    public int $numCiudades;
    public Ciudad $ObjCiudad;

    public function __construct(string $nombre, int $numCiudades, Ciudad $ObjCiudad)
    {
        $this->nombre = $nombre;
        $this->numCiudades = $numCiudades;
        $this->ObjCiudad = $ObjCiudad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getNumCiudades(): int
    {
        return $this->numCiudades;
    }

    public function getObjCiudad(): Ciudad
    {
        return $this->ObjCiudad;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setNumCiudades(int $numCiudades): void
    {
        $this->numCiudades = $numCiudades;
    }

    public function setObjCiudad(Ciudad $ObjCiudad): void
    {
        $this->ObjCiudad = $ObjCiudad;
    }

    
}
