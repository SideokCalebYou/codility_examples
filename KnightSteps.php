<?php

	function solution($a, $b){

	$dest_x = $a;
	$dest_y = $b;
	$count = 0;

		for($x = 2; $x < 100000000; $x = $x + 2){

			$count++;

			if($dest_x <= $x && $dest_y <= $x){

				//need to draw square

				$j = $x;

				for($i = $x-$count; $i <= $x; $i++){
					#3, 4, 5, 6
					
					if($dest_x == $i && $dest_y == $j){
						return $count;
					}

					$j--;

				}

				return -1;
			}
		}
	
	}

	echo solution(4, 8) . "\n";


?>