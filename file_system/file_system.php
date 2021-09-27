<?php 
/*
! php file system
*/

//? Magic constant
echo __DIR__."<br/>";
echo __FILE__."<br />";
echo __LINE__."<br />";

//? create directory
// mkdir('test');
//? rename
// rename('test', 'test2');
//? delete
// rmdir('test2');

//! Read file
// $files = scandir('./');
// var_dump($files);

// file_put_contents('test.txt', 
//     "At the end of this course we will create a CRUD (CREATE, READ, UPDATE, DELETE) application 3 times. First, we will create it as beginner and see what PHP code looks like without best practices, then we will refactor our application and make it more optimal. We will learn how to use composer, autoloading and we'll create a mini MVC framework with custom routing and then build the final version of our CRUD application using the framework"
// );

// echo file_get_contents('test.txt'); 
echo "<br />";

//? get content from URL
// $user_json = file_get_contents('https://jsonplaceholder.typicode.com/users'); 
// $convert_into_array = json_decode($user_json, true);
// var_dump($convert_into_array);

?>