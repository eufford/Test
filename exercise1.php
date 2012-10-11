<?php
/**************************************************************
* Exercise 1
* Description: Write a script that accepts a positive integer 
* range and for each increment in the range, prints:
* - "Fizz" if a multiple of 3
* - "Buzz" if a multiple of 5
* - The integer itself otherwise
*
* E.g. for f[12..16], the output is "Fizz 13 14 FizzBuzz 16".
*
* Author: Eufford Go Javier(Ej)
* Date: Oct. 12, 2012
**************************************************************/
function fizzBuzzInt($nStart, $nFinish) {
	// Initialize result array
	$aResult = array();

	// Loop through the range of integers specified by $nStart and $nFinish
	foreach ( range($nStart, $nFinish) as $nNumber ) {
		// Initialize string value 
		$sValue = '';
		
		// "Fizz" if a multiple of 3
		if ( !($nNumber % 3) ) 
			$sValue .= 'Fizz';

		// "Buzz" if a multiple of 5
		if ( !($nNumber % 5) )
			$sValue .= 'Buzz';

		// The integer itself otherwise
		if ( empty( $sValue ) )
			$sValue = $nNumber;

		// Add the string value into the result array
		$aResult[] = $sValue;
	}

	// Convert the result array into a string delimited by a space and return 
	// the string value
	return implode(' ', $aResult);
}

// Support for both command-line and GET parameters
// $argv parameters are only available if you enabled register_argc_argv
if ( ini_get('register_argc_argv') ) {
        $nParam1 = !empty( $argv[1] ) ? $argv[1] : null;
        $nParam2 = !empty( $argv[2] ) ? $argv[2] : null;
} else {
        $nParam1 = !empty( $_GET['start'] ) ? $_GET['start'] : null;
        $nParam2 = !empty( $_GET['finish'] ) ? $_GET['finish'] : null;
}

if ( empty( $nParam1 ) || empty( $nParam2 ) ) {
        echo 'No proper parameters supplied...' . "\n";
        exit;
}

// Call the function with desired parameters
echo fizzBuzzInt($nParam1, $nParam2) . "\n";
?>
