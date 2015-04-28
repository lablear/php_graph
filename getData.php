<?php


// example of reading server side data and sending it to the client.

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// It reads a json formatted text file and outputs it.
// as we have the google chart set to read json, we need to prepare and feed it with data, here
// we use the php function "file_get_contents" — Which reads an entire file into a string.

// this is a test


//This function is similar to file(), except that file_get_contents() returns the file in a string,
//starting at the specified offset up to maxlen bytes. On failure, file_get_contents() will return FALSE.
//file_get_contents() is the preferred way to read the contents of a file into a string. It will use memory mapping techniques
// if supported by your OS to enhance performance.

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//The JSON should all be data, and if you include a comment, then it will be data too.

$string = file_get_contents("sampleData.json");
echo $string;

// query database (mysqli) and parse the data into JSON




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Get the content of the JSON file using file_get_contents():

//$str = file_get_contents('http://example.com/example.json/');
//Now decode the JSON using json_decode():

//$json = json_decode($str, true); // decode the JSON into an associative array
//You have an associative array containing all the information. To figure out how to access the values you need, you can do the following:

//echo '<pre>' . print_r($json, true) . '</pre>';
//This will print out the contents of the array in a nice readable format. Then, you access the elements you want.


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
