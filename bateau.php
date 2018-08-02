<?php
	include 'moyen_transport.php';

	class Bateau extends moyenTransport
	{

		// Les données membres de la classe
		private $typeBateau;	// Voilier ou Moteur
		private $nbCoques;

		// ***********************************
		//   Les getters et les setters
		// ***********************************

		// Les getters
		public function getTypeBateau() {
			return $this->typeBateau;
		}

		public function getNbCoques() {
			return $this->nbCoques;
		}

		// Les setters
		public function setTypeBateau($t) {
			$this->typeBateau = $t;
		}

		public function setNbCoques($nbc) {
			$this->nbCoques = $nbc;
		}


		// ********************************************
		//	Autre(s) méthode(s) de la classe
		// ********************************************
		function afficheTypeBateau() {
			echo '<br />Type de bateau : ' . $this->typeBateau;
		}

		function afficheCoques() {
			echo '<br />Nombre de coques : ' . $this->nbCoques;
		}
	}
