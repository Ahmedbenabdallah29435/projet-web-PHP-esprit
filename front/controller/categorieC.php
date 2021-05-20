<?PHP
require_once "config.php";
include "../model/categorie.php";
class CategorieC {
function afficherCategorie ($produit){
		echo "idc: ".$categorie->getidc()."<br>";
		echo "nomc: ".$categorie->getnomc()."<br>";
		echo "occ: ".$categorie->getocc()."<br>";
	}
	
	
	function ajouterCategorie($produit){
		$sql="INSERT INTO cat (idc, nomc, occ) VALUES (:idc, :nomc, :occ)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idC=$categorie->getidc();
        $nomC=$categorie->getnomc();
        $famille=$categorie->getocc();
		$req->bindValue(':idc',$idc);
		$req->bindValue(':nomc',$nomc);
		$req->bindValue(':occ',$occ);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function affichercat(){
		
		$sql="SElECT nomc From cat ORDER BY nomc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($idc){
		$sql="DELETE FROM cat where idc= :idc";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie,$idc){
		$sql="UPDATE categorie SET idc=:idc, nomc=:nomc,famille=:famille WHERE idc=:idc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idC=$categorie->getidC();
        $nomC=$categorie->getNom();
        $famille=$categorie->getFamille();
$datas = array( ':idc'=>$idC, ':nomc'=>$nomc,':occ'=>$occ);
	
		$req->bindValue(':idc',$idc);
		$req->bindValue(':nomc',$nomc);
		$req->bindValue(':occ',$occ);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($idc){
		$sql="SELECT * from cat where idc=$idc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherCategorie($idc){
		$sql="SELECT * from cat where idc=$idc";
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