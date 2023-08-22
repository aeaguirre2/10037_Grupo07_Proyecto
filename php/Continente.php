<?php 
    abstract class Continente{
        private string $nombre;
        private int $maxPaises;

        public function __construct(string $nombre, int $maxPaises){
            $this->nombre = $nombre;
            $this->maxPaises = $maxPaises;
        }
        abstract public function imprimir(): void;

        public function getNombre(): string{
            return $this->nombre;
        }
        public function getMaxPaises(): int{
            return $this->maxPaises;
        }

        public function setNombre(string $nombre): void{
            $this->nombre = $nombre;
        }

        public function setMaxPaises(int $maxPaises): void{
            $this->maxPaises = $maxPaises;
        }

    }