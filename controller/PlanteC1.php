<?PHP
	include '../config1.php';
	require_once '../Model/Plante.php';

	class PlantesC {


		public function recherche_user($u){
			$sql="SELECT * from plante where id= :z ";
			$db=config1::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':z',$u);
			try
			{
				$req->execute();
			   // $query->execute();
		return $req;
				
		
			}
			catch(Exeption $e)
			{
				die('Erreur: '.$e->getMessage());
			}
		
		}


		


		function trierplantes(){
			
			$sql="SELECT * FROM plante ORDER BY prix DESC";
			$db = config1::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function trierplantesasc(){
			
			$sql="SELECT * FROM plante ORDER BY prix ASC";
			$db = config1::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		


		function addPlantes($plantes){
		$sql="INSERT INTO plante (nom, longeur, prix, type, image) 
			VALUES (:nom,:longeur,:prix,:type,:image)";
			$db = config1::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $plantes->getnom(),
					'longeur' => $plantes->getlongeur(),
					'prix' => $plantes->getprix(),
					'type' => $plantes->gettype(),
					'image' => $plantes->getimage()
				
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function displayPlantes(){
			
			$sql="SELECT * FROM plante";
			$db = config1::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function deletePlantes($id){
			$sql="DELETE FROM plante WHERE id= :id";
			$db = config1::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function updatePlantes($plantes, $id){
			try {
				$db = config1::getConnexion();
				$query = $db->prepare(
					'UPDATE plante SET 
						nom = :nom, 
						longeur = :longeur,
						prix = :prix,
						type = :type,
						image = :image
                       WHERE id = :id'
				);
				$query->execute([
					'nom' => $plantes->getnom(),
					'longeur' => $plantes->getlongeur(),
					'prix' => $plantes->getprix(),
					'type' => $plantes->gettype(),
					'image' => $plantes->getimage(),
					'id' => $id
				]);
			
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recoverPlantesbyid($id){
			$sql="SELECT * from plante where id=:id";
			$db = config1::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute(['id'=>$id]);

				$plantes=$query->fetch();
				return $plantes;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
	
	
	
	
	}










