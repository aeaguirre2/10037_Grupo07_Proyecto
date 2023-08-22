<?php
    require_once 'Pais.php';
    require_once 'Provincia.php';
    require_once 'Ciudad.php';
    class CargadorDatosXML {
        public static function cargarDatos($archivo) {
          $xml = simplexml_load_file($archivo);
          $paises = array();
      
          foreach ($xml->children() as $pais) {
            $nombre = (string) $pais->nombre;
            $platosTipicos = array();
            foreach ($pais->plato_tipico as $plato) {
              $platosTipicos[] = (string) $plato;
            }
            $moneda = (string) $pais->moneda;
            $bandera = (string) $pais->bandera;
      
            $provincias = array();
            if (isset($pais->provincias)) {
              foreach ($pais->provincias->children() as $provincia) {
                $nombreProv = (string) $provincia->nombre;
                $numCiudades = (int) $provincia->numCiudades;
      
                $ciudades = array();
                foreach ($provincia->ciudades->children() as $ciudad) {
                  $nombreCiudad = (string) $ciudad->nombre;
                  $codigoPostal = (string) $ciudad->CodigoPostal;
                  $ciudades[] = new Ciudad($nombreCiudad, $codigoPostal);
                }
      
                $provincias[] = new Provincia($nombreProv, $numCiudades, $ciudades);
              }
            } else if (isset($pais->departamentos)) {
              foreach ($pais->departamentos->children() as $departamento) {
                $nombreDep = (string) $departamento->nombre;
                $numDistritos = (int) $departamento->numDistritos;
      
                $distritos = array();
                foreach ($departamento->distritos->children() as $distrito) {
                  $nombreDistrito = (string) $distrito->nombre;
                  $codigoPostal = (string) $distrito->CodigoPostal;
                  $distritos[] = new Ciudad($nombreDistrito, $codigoPostal);
                }
      
                $provincias[] = new Provincia($nombreDep, $numDistritos, $distritos);
              }
            }
      
            $paises[] = new Pais($nombre, $platosTipicos, $moneda, $bandera, $provincias);
          }
      
          return $paises;
        }
      }