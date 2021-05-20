<?php
class evenement 
{

   private $id ;
	private $nom;
	private $nbrP;
	private $date;
	private $type;
	 

	function __construct($nom,$nbrP,$date,$type)
				{

		$this->nom=$nom;
		$this->nbrP=$nbrP;
		$this->date=$date;
		$this->type=$type;

		
				}

	function getid()
	{
		return $this->id;
	}
	function gettype(){
		return $this->type;
	}
	function getnbrP(){
		return $this->nbrP;
	}
	function getnom(){
		return $this->nom;
	}
	function getdate(){
		return $this->date;
	}
	
	

	function settype($type)
	{
		$this->type=$type;
	}
	function setnbrP($nbrP)
	{
		$this->nbrP=$nbrP;
	}
	function setnom($nom){
		$this->nom=$nom;
	}

	function setdate($date){
		$this->date=$date;
	}
	
	

}

?>
