<?PHP
require_once "config.php";
class AccessC{
	
function afficheranimaux ($Animal){
		echo "ida: ".$Access->getida()."<br>";
		echo "noma: ".$Access->getnoma()."<br>";
		echo "prixa: ".$Access->getage()."<br>";
		echo "idc: ".$Access->getcouleur()."<br>";
		
		
		
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
function afficher1($idcat){
	
	//$ids = $_GET['taskOption'];
	$module = $idcat;
		$sql="SELECT access.noma, access.prixa , cat.nomc , access.image , access.ida FROM access , cat where cat.idc = access.idc AND cat.nomc = '".$module."'";
		
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

}
	function ajouteracc($Access){ 
		$sql="INSERT INTO access (ida, noma, prixa, idc, image) VALUES (:ida, :noma, :prixa ,:idc, :image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idA=$Access->getida();
        $nomA=$Access->getnoma();
        $prixA=$Access->getprixa();
        $idc=$Access->getidc();
		$image=$Access->getimage();
        
        
		$req->bindValue(':ida',$idA);
		$req->bindValue(':noma',$nomA);
		$req->bindValue(':prixa',$prixA);
		$req->bindValue(':idc',$idc);
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
	
	function afficheracc(){
		

		$sql="SELECT * FROM access ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAc($idc){
		$sql="DELETE FROM access where ida= :idc";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idc',$idc);
		try{
            $req->execute();
            header('Location: tabels.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAc($Access,$ida)
		{
		$sql="UPDATE access SET ida=:ida, noma=:nomA, prixa=:prixA, idc=:idc, image=:image WHERE ida=:ida";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $ida=$Access->getida();
        $nomA=$Access->getnoma();
        $prixA=$Access->getprixa();
        $idc=$Access->getidc();
		$image=$Access->getimage();
$datas = array( ':ida'=>$ida, ':nomA'=>$nomA,':prixA'=>$prixA,':idc'=>$idc,':image'=>$image);
	
		$req->bindValue(':ida',$ida);
		$req->bindValue(':nomA',$nomA);
		$req->bindValue(':prixA',$prixA);
		$req->bindValue(':idc',$idc);
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
		$sql="SELECT * from access where ida=$ida";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherAnimal($ida){
		$sql="SELECT * from access where ida=$ida";
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