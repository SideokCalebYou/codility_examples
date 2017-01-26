<?php
	
	function binaryGap($n){

		$integer = $n;	
		$binary = decbin($integer);
		$gap = array();
		$temp_sum = 0;

		for($i = 1 ; $i < strlen($binary); $i++){

			if($binary[$i-1] == 1 && $binary[$i] == 0){
				#left		
				$temp_sum++;
			}

			if($binary[$i-1] == 0 && $binary[$i] == 0){
				$temp_sum++;
			}



			if($binary[$i-1] == 0 && $binary[$i] == 1){
				#right
				array_push($gap, $temp_sum);
				$temp_sum = 0;
			}

		}

		if(count($gap) > 0){
			return max($gap);	
		}else{
			return 0;
		}
	
	}

	#test
	#type any integer within the typical boundary of integer.
	$input = 1414;

	echo binaryGap($input);

?>