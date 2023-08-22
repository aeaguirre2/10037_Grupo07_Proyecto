<?php

class Pais
{
    public string $nombre;
    public string $platoTipico;
    public string $moneda;
    public string $bandera;
    public Provincia $ObjProvincia;

    public function __construct(string $nombre, string $platoTipico, string $moneda, string $bandera, Provincia $ObjProvincia)
    {
        $this->nombre = $nombre;
        $this->platoTipico = $platoTipico;
        $this->moneda = $moneda;
        $this->bandera = $bandera;
        $this->ObjProvincia = $ObjProvincia;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPlatoTipico(): string
    {
        return $this->platoTipico;
    }

    public function getMoneda(): string
    {
        return $this->moneda;
    }

    public function getBandera(): string
    {
        return $this->bandera;
    }

    public function getObjProvincia(): Provincia
    {
        return $this->ObjProvincia;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setPlatoTipico(string $platoTipico): void
    {
        $this->platoTipico = $platoTipico;
    }

    public function setMoneda(string $moneda): void
    {
        $this->moneda = $moneda;
    }

    public function setBandera(string $bandera): void
    {
        $this->bandera = $bandera;
    }

    public function setObjProvincia(Provincia $ObjProvincia): void
    {
        $this->ObjProvincia = $ObjProvincia;
    }
}