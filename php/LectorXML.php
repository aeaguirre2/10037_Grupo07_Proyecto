<?php
class LectorXML {
    private $xml;
  
    public function __construct($xmlPath) {
      $this->xml = simplexml_load_file($xmlPath);
    }
  
    public function getCountryNames() {
      $countryNames = array();
      foreach ($this->xml->children() as $country) {
        $countryNames[] = (string) $country->nombre;
      }
      return $countryNames;
    }
  
    public function getCountry($countryName) {
      foreach ($this->xml->children() as $country) {
        if ((string) $country->nombre === $countryName) {
          return $country;
        }
      }
      return null;
    }
  
    public function getProvinces($countryName) {
      $country = $this->getCountry($countryName);
      if ($country === null) {
        return null;
      }
      $provinces = array();
      foreach ($country->provincias->children() as $province) {
        $provinces[] = (string) $province->nombre;
      }
      return $provinces;
    }
  
    public function getCities($countryName, $provinceName) {
      $country = $this->getCountry($countryName);
      if ($country === null) {
        return null;
      }
      foreach ($country->provincias->children() as $province) {
        if ((string) $province->nombre === $provinceName) {
          $cities = array();
          foreach ($province->ciudades->children() as $city) {
            $cities[] = (string) $city->nombre;
          }
          return $cities;
        }
      }
      return null;
    }
  }