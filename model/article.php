<?php
class article 
{

   private $type ;
	private $description;
	private $nom;
	private $date;
	private $datef;
	private $categorie;
	private $image;


	 

	function __construct($type,$description,$nom,$categorie,$date,$datef,$image)
				{
					$this->type=$type ;
		$this->description=$description;
		$this->nom=$nom;
		$this->categorie=$categorie;
		$this->date=$date;
		$this->datef=$datef;
		$this->image=$image;



		
				}
	function getid()
	{
		return $this->id;
	}
	function gettype(){
		return $this->type;
	}
	function getdescription(){
		return $this->description;
	}
	function getnom(){
		return $this->nom;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getdate(){
		return $this->date;
	}
	function getdatef(){
		return $this->datef;
	}
	function getimage(){
		return $this->image;
	}
	
	

	function settype($type)
	{
		$this->type=$type;
	}
function setdescription($description)
{
	$this->description=$description;
}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setdatef($datef){
		$this->datef=$datef;
	}
	function setimage($image){
		$this->image=$image;
	}
	
	

}

?>
