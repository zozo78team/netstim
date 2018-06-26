<?php

	/**
	*	Classe produit qui permet la gestion de l'ensemble des produits
	*/
    class Produit {
        private $id;
        private $nom;
        private $prix;
        private $poids;



		/**
		*	Les getters et setters de la classe produit avec l'id du produit et son nom.
		*/
        public function getid() {
            return $this->id;
        }
        public function setid($value) {
            $this->id=$value;
        }
        public function getnom() {
            return $this->nom;
        }
        public function setnom($value) {
            $this->nom=$value;
        }
        public function getprix() {
            return $this->prix;
        }
        public function setprix($value) {
            $this->prix=$value;
        }
        public function getpoids() {
            return $this->poids;
        }
        public function setpoids($value) {
            $this->poids=$value;
        }
        /**
        *   Permet l'affichage basique des données d'un produit.
        */
        public static function afficher($id, $nom, $prix, $poids) {
            return $id."/".$nom."/".$prix."/".$poids;
        }
        /**
		*	La fonction qui permet de récupérer la liste de tous les produits.
		*/
		public static function allProduit() {
			$req = "SELECT * from produit"; //La requête sql qui sera envoyé à la base de donnée pour récupérer les données d'un produit.
			$resultat = BD::getInstance()->query($req);
			foreach($resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Produit") as $item ) {
                $produit[] = $item; //Le tableau avec tous les produits
            }
			return $produit;
		}

        public static function unProduit($idPdt) {
            $req = "SELECT * from produit where id = :id"; //La requête sql qui sera envoyé à la base de donnée pour récupérer les données d'un produit.
			$resultat = BD::getInstance()->prepare($req);
            $resultat->bindParam('id', $idPdt);
            $resultat->execute();
            $leProduit=$resultat->fetch(PDO::FETCH_ASSOC);
            return $leProduit;
        }

        //Fonction qui permet l'ajout d'un produit avec son prix, son poids et son nom, l'id est en auto incrémentation
        public static function ajtProduit($prix, $poids, $nom){
            $req = "insert into produit(id, prix, poids, nom) values (null, :prix, :poids, :nom)";
            $resultat = BD::getInstance()->prepare($req);
            $resultat->execute(array(
                'prix' => $prix,
                'poids' => $poids,
                'nom' => $nom
            ));
        }

        //Fonction qui permet la suppression d'un produit simplement en récupérant son id.
        public static function supprProduit($id){
            $req = "delete from produit where id = :id";
            $resultat = BD::getInstance()->prepare($req);
            $resultat->execute(array( 'id' => $id ));
        }

        //Fonction qui permet la modification d'un produit en récupérant son id son nom son prix et son poids.
        public static function modifProduit($id, $nom, $prix, $poids){
            $req = "
UPDATE produit SET nom=:nom, prix=:prix, poids=:poids WHERE  id= :id;";
            $resultat = BD::getInstance()->prepare($req);
            $resultat->execute(array(
            'id' => $id,
            'nom' => $nom,
            'prix' => $prix,
            'poids' => $poids
            ));
        }
    }
