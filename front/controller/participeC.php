<?php
	include "config.php";
	require_once 'Model/participe.php';
    require_once 'Model/participe.php';



class participeC {

	function recupereretat($id)
    {
        $sql="SELECT * from article where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ajouterparticipe($participe){
        $sql="INSERT INTO participe (id,nbre_participant) 
        VALUES (:id,:nbre_participant)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'id' => $participe->getid_article(),
                'nbre_participant' => $participe->getnbre_participant(),
                
                

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}

	

?>