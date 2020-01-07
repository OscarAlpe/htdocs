<?php
  namespace controladores;
  
  class Controlador {
      private $coordenadas_hospitales;
      private $coordenadas_bares;
      private $coordenadas_estacionesAutobuses;
      
      public function __construct($ch, $cb, $cea) {
          $this->setCoordenadas_hospitales($ch);
          $this->setCoordenadas_bares($cb);
          $this->setCoordenadas_estacionesAutobuses($cea);
      }
      
      private function getCoordenadas_hospitales() {
          return $this->coordenadas_hospitales;
      }

      private function getCoordenadas_bares() {
          return $this->coordenadas_bares;
      }

      private function getCoordenadas_estacionesAutobuses() {
          return $this->coordenadas_estacionesAutobuses;
      }

      private function setCoordenadas_hospitales($coordenadas_hospitales) {
          $this->coordenadas_hospitales = $coordenadas_hospitales;
          return $this;
      }

      private function setCoordenadas_bares($coordenadas_bares) {
          $this->coordenadas_bares = $coordenadas_bares;
          return $this;
      }

      private function setCoordenadas_estacionesAutobuses($coordenadas_estacionesAutobuses) {
          $this->coordenadas_estacionesAutobuses = $coordenadas_estacionesAutobuses;
          return $this;
      }
  }