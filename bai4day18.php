<?php
	function isPalindrome($string){
		$newstr = strrev($string);
		if($string == $newstr)
		{
			echo "String is Palindrome";
		}
		else
		{
			echo "String not Palindrome";
		}
	}

	isPalindrome("aka");
?>