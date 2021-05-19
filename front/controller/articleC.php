<?php
	include "config.php";
	require_once 'Model/article.php';


class articleC {

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

    


    
    function afficherarticle()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article WHERE categorie='lies aux plantes' OR categorie='lies aux animaux'";
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

    function afficherarticle1()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 0,1";
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

    function afficherarticle2()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 1,1";
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

    function afficherarticle3()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 2,1";
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
    function afficherarticle4()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 0,1";
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
    function afficherarticle5()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 1,1";
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

    function afficherarticle6()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article WHERE categorie='lies aux plantes' OR categorie='lies aux animaux' LIMIT 2,2";
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

    function supprimerarticle($article)
    {
        $sql="DELETE FROM article where id= :id ";
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

    function modifierarticle($article, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE article SET 
                    type = :type, 
                    description = :description, 
                    nom = :nom,
                    date = :date,
                    datef = :datef

                   
                WHERE id = :id'
            );
            $query->execute([
                'type' => $article->gettype(),
                'description' => $article->getdescription(),
                'nom' => $article->getnom(),
                'date' => $article->getdate(),
                'datef' => $article->getdatef(),

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function ajouterarticle($article){
        $sql="INSERT INTO article (type,description, nom, date,datef) 
        VALUES (:type,:description,:nom,:date,:datef)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'type' => $article->gettype(),
                'description' => $article->getdescription(),
                'nom' => $article->getnom(),
                'date' => $article->getdate(),
                'datef' => $article->getdatef(),

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    
}

	

?>