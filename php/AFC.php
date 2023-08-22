<?php
class Afc implements Organizacion{
    private string $sello;
    private int $numPaises;
    private array $paises = [];
    public function __construct(string $sello, int $numPaises){
        $this->sello = $sello;
        $this->numPaises = $numPaises;
    }

    public function afilicion(): string{
        return "Afc";
    }

    public function getSello(): string{
        return $this->sello;
    }

    public function getNumPaises(): int{
        return $this->numPaises;
    }

    public function setSello(string $sello): void{
        $this->sello = $sello;
    }

    public function setNumPaises(int $numPaises): void{
        $this->numPaises = $numPaises;
    }

    public function agregarPais(Pais $pais): void {
        $this->paises[] = $pais;
    }

    public function getPaises(): array {
        return $this->paises;
    } 
}