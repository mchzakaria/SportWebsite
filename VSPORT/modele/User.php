<!-- <?php

// include("Connexion.php");

// class User extends Connexion
// {
	//la fontion qui permet d'envoyer la requet SQL et retourn la reponse sous form table
	// public function tableRequet($sql){
	// 	$table = array();

	// 	$req = $this->getPDO()->query($sql);

	// 	while ($data = $req->fetch()) {
	// 		$table[] = $data;
	// 	}
	// 	return $table;
	// }

	/************************************/
	/***** CONNEXION ET INSCRIPTION *****/
	/************************************/

// 	public function emailExists($email){
// 		$sql = "SELECT * FROM user WHERE email='$email'";
// 		$req = $this->getPDO()->query($sql);
// 		$res = $req->fetch();

// 		if($res){
// 			return true;
// 		}else{
// 			return false;
// 		}
// 	}
//  // une foncion pour comparer les mot de passe
//  	public function validatePassword($password,$password_confirm) {
// 		if($password === $password_confirm)
// 		return true;
// 		else
// 		return false;

//   	}


  //INSERT INTO user (Nom,Prenom,Email,date_Naissance,Password,Date_insc) VALUES ('Admin','Admin','Admin@gmail.com','2023-04-15','Admin1234',NOW())

	// la fonction de l'inscription
	/* pour crypté le mot de passe avec :  MD5  -  RSA   -  DES */
	
// 	public function inscription($nom, $prenom, $email, $datenaissance, $password,$password_confirm,$sexe){
	
//        $vp= $this->validatePassword($password,$password_confirm);
// 	   if($vp)
//         {        
// 	    $role='sportif';
// 		$sql = "INSERT INTO user (nom,prenom,email,date_naissance,password,sexe,date_insc,role) VALUES ('$nom','$prenom','$email','$datenaissance','$password','$sexe',NOW(),'$role')";
// 		$req = $this->getPDO()->query($sql);
// 		return $req;
// 		}
// 		else{
// 			return false;
// 		}
		
// 	}


// 	//la fonction d'authentification
// public function valide($email, $Password){

// 	$sql = "SELECT * FROM user WHERE email='$email' AND password='$Password'";
// 	$req = $this->getPDO()->query($sql);

// 	$user = $req->fetch();
// 	if ($user) {
// 		//Verifie si la sensibilité à case de mot de passe
// 		if (strcmp($user['Password'], $Password) != 0) {
// 			return false;
// 		}
// 		return $user;
// 	} else {

// 		return false;
// 	}
// }


// 	//la fonction d'avoir infos sur user id 

// 	public function sup_user($user_id){

// 		$sql = "DELETE FROM user WHERE id-user=$user_id";

// 		$req = $this->getPDO()->query($sql);
// 		return $req;
// 	}

// 	//la fontion qui permet de modifier le mpt de passe
// 	public function modifier_Password($iduser, $Password){
// 		$sql = "UPDATE user SET password='$Password' WHERE id-user=$iduser";
// 		$req = $this->getPDO()->query($sql);
// 		return $req;
// 	}



// 	//LISTE COACHS
// 	public function get_coachs(){
// 		$sql="SELECT * From coach";
// 		$req = $this->getPDO()->query($sql);
// 		return $req;
		
		
// 	}

// 	//LISTE des emplois d'un coach
// 	public function get_emplois($id_coach){
// 		$sql="SELECT * From emploi WHERE id-coach=$id_coach";
//         $req = $this->getPDO()->query($sql);
// 		return   $req ;
		
// 	}
// 	//fonction qui retourne les coaches disponible
// 	public function coach_disponible(){
// 		$sql="SELECT * From coach  WHERE etat='disponible'";
// 		$req = $this->getPDO()->query($sql);
// 		return   $req ;

// 	}

// 	//le sportif peut reserver un equipe choisi (en attend)
// 	public function sportif_reserve($id_user,$id_equipe){
// 		$sql="INSERT INTO reservation WHERE id-equipe=$id_equipe AND id-user=$id_user";
// 		$req = $this->getPDO()->query($sql);
// 		return $req;

// 	}

// 	//le secretaire peut changer le status d'un reservation demandé d'apres le sportif
// 	public function set_Statut_reservation($id_reservation){
// 	$sql = "UPDATE reservation SET statut ='accepté' WHERE id-reservation = $id_reservation";
// 	$req=$this->getPDO()->query($sql);
// 	return $req;
	
// 	}

// 	//le secretaire peut voir les reservations 
// 	public function get_reservation(){
//      $sql ="SELECT  * from reservation ";
// 	 $req=$this->getPDO()->query($sql);
// 	 return $req;
// 	}
//     // modifier l'etat de coach 
// 	public function set_statut_coach($id_coach){
// 		$req ="SELECT nbr-equipe, nmax-equipe from  coach WHERE id-coach=$id_coach";
// 		$req=$this->getPDO()->query($sql);
// 		if ($req) {
// 			// Verifiez si une ligne a ete retournee
// 			if ($result->num_rows > 0) {
// 				// Recuperez la premiere ligne du resultat
// 				$row = $result->fetch_assoc();
				
// 				// Recuperez les valeurs des colonnes et stockez-les dans les variables appropriees
// 				$nbrEquipe = $row['nbr-equipe'];
// 				$nbrMaxEquipe = $row['nmax-equipe'];
				
// 			//metttre non disponible si le nombre des equipe plus que 2 equipe
// 			   if($nbrEquipe>$nbrMaxEquipe){
// 				$statut="occupe";
// 				$req2=$sql="UPDATE coach SET etat= $statut WHERE id-coach=$id_equipe";
// 				$req2=$this->getPDO()->query($sql);
// 			   }else{
// 			//metrre diponible 			
// 				$statut="disponible";
// 				$req3=$sql="UPDATE coach SET etat= $statut WHERE id-coach=$id_equipe";
// 				$req3=$this->getPDO()->query($sql);
// 			   }
				
				
// 			}
// 		}
// 	}
	
//   	//set statut equipe plein 
// 	public function set_Statut_equipe($id_equipe){
// 			$req ="SELECT nbr-joueur-eqp ,id-sport from equipe WHERE id-equipe=$id_equipe";
// 			$req=$this->getPDO()->query($sql);
// 			if($req){
// 				$row = $result->fetch_assoc();
// 				$Nbr_j_equipe=$row['nbr-joueur-eqp'];
// 				$id_sport=$row['id-sport'];
// 				$req2 ="SELECT nbr-joueur FROM sport WHERE id-sport=$id_sport";
// 				if($req2){
// 					$row1 = $result->fetch_assoc();
// 					$Nbr_jMax=$row1['nbr-joueur'];
// 					if($Nbr_jMax=$Nbr_j_equipe){
// 					$req3 ="UPDATE equipe SET etat='plein' WHERE id-equipe=$id_equipe";
// 					$req3=$this->getPDO()->query($sql);
// 					}		
// 				}
// 				else{
// 					$req4 ="UPDATE equipe SET etat='disponible' WHERE id-equipe=$id_equipe";
// 					$req3=$this->getPDO()->query($sql);
// 				}
// 			}
// 		}
// 	// affiche les equipe disponible 	
//  	public function get_coachs_dispo(){
	
// 	$sql="SELECT * From equipe WHERE etat='disponible'";
// 	$req = $this->getPDO()->query($sql);
// 	return $req;
	
// 	}
// 	//Afficher au sportif les equipes réservé et accepté
// 	public function get_equipe_reserve_accepte($id_sportif){
// 		$sql="SELECT * From equipe WHERE ";
// 		return tableRequet($sql);
		
// 	}
// 	//Afficher au sportif les equipes réservé et accepté
// 	public function get_equipe_reserve($id_sportif){
// 		$sql="SELECT * From equipe WHERE etat='reserve' ";
// 		return tableRequet($sql);
		
// 	}
// //Afficher au sportif les equipes en attenet
// 	public function get_equipe_enattent($id_sportif){
// 	$sql="SELECT * From equipe WHERE etat='en attend' ";
// 		return tableRequet($sql);
// 	}
// //retourne le role de user
// 	public function get_role($id_user){
// 	$sql="SELECT role FROM user where id-user=$id_user";
// 	$req = $this->getPDO()->query($sql);
// 	$role;
// 	if($req){
// 		$row = $req->fetch_assoc();
// 	$role=$row['role'];
	
// 	}
// 	return $role;
// 	}

//}

?>
 -->
