<?php 

/*
	Find Tuto on: http://devzone.zend.com/article/1081
	cURL is enabled by uncommenting the line 'extension=php_curl.dll' in the php.ini file.

*/

// FIND BOOKS ON PHP AND MYSQL ON AMAZON 
$url = "http://www.amazon.com/exec/obidos/search-handle-form/002-5640957-2809605"; 
$ch = curl_init();    // initialize curl handle 
curl_setopt($ch, CURLOPT_URL,$url); // set url to post to 
curl_setopt($ch, CURLOPT_FAILONERROR, 1); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable 
curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s 
curl_setopt($ch, CURLOPT_POST, 1); // set POST method 
curl_setopt($ch, CURLOPT_POSTFIELDS, "url=index%3Dbooks&field-keywords=PHP+MYSQL"); // add POST fields 
$result = curl_exec($ch); // run the whole process 


print_r(curl_getinfo($ch));  
echo "\n\ncURL error number:" .curl_errno($ch);  
echo "\n\ncURL error:" . curl_error($ch); 


curl_close($ch);  
echo $result; 
?>