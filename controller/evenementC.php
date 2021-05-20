<?php
	include_once "../config.php";
	require_once '../Model/evenement.php';


class evenementC {

	function recupereretat($id)
    {
        $sql="SELECT * from evenement where id=$id";
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

    function trierevenement()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From evenement ORDER BY nbrP";
        $db = config::getConnexion();
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }


    
    function afficherevenement()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT * From evenement";
        $db = config::getConnexion();
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }

    function supprimerevenement($id)
    {
        $sql="DELETE FROM evenement WHERE id = :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id',$_POST["id"]);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function recupererevenement($id){
        $sql="SELECT * from evenement where id =$id";
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

    function modifierevenement($evenement,$id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE evenement SET 
                    
                    nom = :nom, 
                    nbrP = :nbrP,
                    date = :date,
                    type = :type

                   
                WHERE id = :id'
            );
            $query->execute([
                
                'nom' => $evenement->getnom(),
                'nbrP' => $evenement->getnbrP(),
                'date' => $evenement->getdate(),
                'type' => $evenement->gettype(),

                'id' => $id
            ]);
            echo $query->rowcount()."records UPDATED successfully <br>";
            
        }
         catch (PDOException $e)
          {
            $e->getMessage();
        }
    }

    function ajouterevenement($evenement){
        $sql="INSERT INTO evenement (nom,nbrP,date,type) 
        VALUES (:nom,:nbrP,:date,:type)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'nom' => $evenement->getnom(),
                'nbrP' => $evenement->getnbrP(),
                'date' => $evenement->getdate(),
                'type' => $evenement->gettype(),

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}

	

?>