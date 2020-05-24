<?php
	function ispalindrome($string,$a)
	{
		// Base codition to end the recursive process 
		if ((strlen($string) == 1) || (strlen($string) == 0)){ 
			echo "palindrome"; 
		} 
		else{ 
			  
			// First character is compared with the last one 
			if (substr($string,0,1) == substr($string,($a - 1),1)){ 
				  
				// Checked letters are discarded and passed for next call 
				return ispalindrome(substr($string,1,$a -2),$a-2); 
			} 
			else{  
				echo "not palindrome"; } 
		} 
	} 
		
		$array = "livil";
		ispalindrome($array,strlen($array));
?>