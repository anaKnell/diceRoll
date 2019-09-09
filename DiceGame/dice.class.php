<?php

class dice{

	public function rollDice(){
		if(!empty($_POST)){
			$diceTab=array();			
			foreach ($_POST as $key=> $value){
				foreach($_POST as $key=> $value){
					if($value !== 0){
						$diceTab[$key] = $value;
					}
				}
			}

		$temp=array();

		foreach($diceTab as $max=> $nb){
			$tabRandom=array();

			for($i=0; $i<$nb; $i++){
				$random = rand(1,$max);
				array_push($temp,$random);
				array_push($tabRandom,$random);
			}

			$stringTab = implode(",",$tabRandom);
			$displayResultat .= $max."d".$nb."[".$stringTab."]+";
		}
		$displayResultat =substr_replace($displayResultat , "" , -1);

		$sum =array_sum($temp);
		$resultFinal = $displayResultat ." = ".$sum;
		return $resultFinal;


	}

}}
