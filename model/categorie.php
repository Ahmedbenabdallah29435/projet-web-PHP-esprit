<?PHP
class Categorie{
	private $idc;
	private $nomc;
	private $occ;
	function __construct($idc,$nomc,$occ){
		$this->idc=$idc;
		$this->nomc=$nomc;
		$this->occ=$occ;
	}
	
	function getidc(){
		return $this->idc;
	}
	function getnomc(){
		return $this->nomc;
	}
	function getocc(){
		return $this->occ;
	}
	function setidC($idc){
		$this->idC=$idc;
	}
	function setNom($nomc){
		$this->nomC=$nomc;
	}
	function setocc($occ){
		$this->occ=$occ;
	}
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>