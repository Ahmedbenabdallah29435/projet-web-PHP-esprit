<?PHP
include "config.php";
class AnimalC{
function afficheranimaux ($Animal){
		echo "idA: ".$Animal->getidA()."<br>";
		echo "nomA: ".$Animal->getNom()."<br>";
		echo "ageA: ".$Animal->getage()."<br>";
		echo "couleurA: ".$Animal->getcouleur()."<br>";
		echo "image: ".$Animal->getimage()."<br>";
		
		
		
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterAnimal($Animal){ 
		$sql="INSERT INTO anim (id, name, age, couleur, image) VALUES (:idA, :nomA, :ageA ,:couleurA, :image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idA=$Animal->getidA();
        $nomA=$Animal->getNom();
        $ageA=$Animal->getage();
        $couleurA=$Animal->getcouleur();
		$image=$Animal->getimage();
        
        
		$req->bindValue(':idA',$idA);
		$req->bindValue(':nomA',$nomA);
		$req->bindValue(':ageA',$ageA);
		$req->bindValue(':couleurA',$couleurA);
		$req->bindValue(':image',$image);
            $req->execute();
		
          if(move_uploaded_file($_FILES['tmp_name']['name'], $target)) {
          	$msg="aaaa" ;
          }
          else{
          	$msg="laaa" ; 
          }
        }
        catch (Exception $m){
            echo 'Erreur: '.$m->getMessage();
        }
		
	}
	
	function afficherAnimal(){
		
		$sql="SELECT * FROM anim";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAnimal($idA){
		$sql="DELETE FROM anim where id= :idA";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idA',$idA);
		try{
            $req->execute();
            header('Location: tabels.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAnimal($animal,$idA){
		$sql="UPDATE anim SET name=:nomA,age=:ageA,couleur=:couleurA WHERE id=:idA";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idA=$animal->getidA();
        $nomA=$animal->getNom();
        $ageA=$animal->getage();
        $couleurA=$animal->getcouleur();
       
$datas = array( ':idA'=>$idA, ':nomA'=>$nomA,':ageA'=>$ageA,':couleurA'=>$couleur);
	
		$req->bindValue(':idA',$idA);
		$req->bindValue(':nomA',$nomA);
		$req->bindValue(':ageA',$ageA);
		$req->bindValue(':couleur',$couleurA);
	
            $s=$req->execute();
			
            header('Location: tabels.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAnimal($idA){
		$sql="SELECT * from anim where id=$idA";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherAnimal($idP){
		$sql="SELECT * from produit where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>