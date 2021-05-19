<?php
	include_once "../config.php";
	require_once '../Model/article.php';


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
        $sql="SElECT * From article";
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
                    categorie = :categorie,
                    date = :date,
                    datef = :datef,
                    image = :image
                   

                   
                WHERE id = :id'
            );
            $query->execute([
                'type' => $article->gettype(),
                'description' => $article->getdescription(),
                'nom' => $article->getnom(),
                'categorie' => $article->getcategorie(),
                'date' => $article->getdate(),
                'datef' => $article->getdatef(),
                'image' => $article->getimage(),

               

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function ajouterarticle($article){
        $sql="INSERT INTO article (type,description, nom,categorie, date,datef,image) 
        VALUES (:type,:description,:nom,:categorie,:date,:datef,:image)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'type' => $article->gettype(),
                'description' => $article->getdescription(),
                'nom' => $article->getnom(),
                'categorie' => $article->getcategorie(),
                'date' => $article->getdate(),
                'datef' => $article->getdatef(),
                'image' => $article->getimage()



                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function trierarticle(){
			
        $sql="SELECT * FROM article ORDER BY date DESC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function trierarticle2(){
			
        $sql="SELECT * FROM article ORDER BY date ASC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }


}

	

?>