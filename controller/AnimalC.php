<?PHP
include "../config.php";
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
		$sort_options = array('id asc','id desc','name asc','name desc','age asc','age desc');
if(!isset($_GET['field'])){
   $_GET['field'] = 'name';
}
if (!isset($_GET['order'])){
   $_GET['order'] = 'asc';
}

$full_query_sort = $_GET['field'].' '.$_GET['order'];
if (!in_array($full_query_sort,$sort_options)){
   die('invalid selection');
}
		$sql="SELECT * FROM anim ORDER BY ".$full_query_sort;
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
	function modifierAnimal($animal,$id){
		$sql="UPDATE anim SET id=:id, name=:name, age=:age, couleur=:couleur, image=:image WHERE id=:id";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$animal->getidA();
        $name=$animal->getNom();
        $age=$animal->getage();
        $couleur=$animal->getcouleur();
        $image=$animal->getimage();
$datas = array( ':id'=>$id, ':name'=>$name,':age'=>$age,':couleur'=>$couleur,':image'=>$image);
	
		$req->bindValue(':id',$id);
		$req->bindValue(':name',$name);
		$req->bindValue(':age',$age);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':image',$image);		
            		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
	
	function recupererAnimal($ida){
		$sql="SELECT * from anim where id=$ida";
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