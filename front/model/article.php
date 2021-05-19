<?php
class article 
{

   private $type ;
	private $description;
	private $nom;
	private $date;
	private $datef;
	 

	function __construct($type,$description,$nom,$date,$datef)
				{
					$this->type=$type ;
		$this->description=$description;
		$this->nom=$nom;
		$this->date=$date;
		$this->datef=$datef;

		
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
	function getdate(){
		return $this->date;
	}
	function getdatef(){
		return $this->datef;
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
	function setdate($date){
		$this->date=$date;
	}
	function setdatef($datef){
		$this->datef=$datef;
	}
	

}

?>
