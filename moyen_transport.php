<?php
	class MoyenTransport 
	{
		// Les données membres de la classe
		private $nbPlaces;
		private $vitesseMax;
		private $poids;

		// ***********************************
		//		Les getters et les setters
		// ***********************************

		// Les getters
		public function getNbPlaces() {
			return $this->nbPlaces;
		}

		public function getVitesseMax() {
			return $this->vitesseMax;
		}

		public function getPoids(){
			return $this->poids;
		}

		// Les setters
		public function setNbPlaces($nbp) {
			$this->nbPlaces = $nbp;
		}

		public function setVitesseMax($v) {
			$this->vitesseMax = $v;
		}

		public function setPoids($p) {
			$this->poids = $p;
		}

		// ********************************************
		// 		Autre(s) méthode(s) de la classe
		// ********************************************
		public function affichePlaces() {
			echo '<br />Nombre de places : ' . $this->nbPlaces;
		}

		public function afficheVitesse() {
			echo '<br />Vitesse maximale : ' . $this->vitesseMax;
		}

		public function affichePoids() {
			echo '<br />Poids : ' . $this->poids;
		}
	}
