<?PHP
require_once "../config.php";
class CategorieC {
function afficherCategorie ($categorie){
		echo "idc: ".$categorie->getidc()."<br>";
		echo "nomc: ".$categorie->getnomc()."<br>";
		echo "occ: ".$categorie->getocc()."<br>";
	}
	
	
	function ajouterCategorie($Categorie){
		$sql="INSERT INTO cat (idc, nomc, occ) VALUES (:idc, :nomc, :occ)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idc=$Categorie->getidc();
        $nomc=$Categorie->getnomc();
        $occ=$Categorie->getocc();
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
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From cat ORDER BY idc";
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
		$sql="DELETE FROM cat where idc=:idc";
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
	function modifiercategorie($categorie,$idc){
		$sql="UPDATE cat SET idc=:idc, nomc=:nomc,occ=:occ WHERE idc=:idc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idc=$categorie->getidc();
        $nomc=$categorie->getnomc();
        $occ=$categorie->getocc();
$datas = array( ':idc'=>$idc, ':nomc'=>$nomc,':occ'=>$occ);
	
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