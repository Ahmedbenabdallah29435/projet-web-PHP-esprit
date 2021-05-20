<?php
	include_once '../config.php';
	require_once '../Model/lieu.php';


class lieuC {

	function recupereretat($id)
    {
        $sql="SELECT * from lieu where id=$id";
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

    


    
    function afficherlieu()
    {
        
        $sql="SElECT * From lieu";
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

    function supprimerlieu($lieu)
    {
        $sql="DELETE FROM lieu WHERE lieu = :lieu";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':lieu',$_POST["lieu"]);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererlieu($id){
        $sql="SELECT * from lieu where id =$id";
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

     function modifierlieu($lieu,$id){
        try {
            $db = config::getConnexion();
            $sql= "UPDATE lieu SET 
                    
            lieu = :lieu, 
            
            adress = :adress

           
        WHERE id = $id";
            $query = $db->prepare($sql);
            $query->execute([
                
                'lieu' => $lieu->getlieu(),
                'adress' => $lieu->getadress(),
                

                
            ]);
            echo $query->rowcount()."records UPDATED successfully <br>";
            
        }
         catch (PDOException $e)
          {
            $e->getMessage();
        }
    }

    function ajouterlieu($l){
        $sql="INSERT INTO lieu (lieu,adress,id) 
        VALUES (:lieu,:adress,:id)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            
        
            $query->execute([
                'lieu' => $l->getlieu(),
                'adress' => $l->getadress(),
                'id' => $l->getid()
                

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}

	

?>