<?php
/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
print "Welcome to PHP!";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/

print "PHP stands for \"Hypertext Preprocessor
 \"!";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/
$paragraph = "Hello and welcome to my intro to php. Here I learned about PHP. PHP stands for \"Hypertext Preprocessor\"!";

print $paragraph;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
   
$html = 'HTML - Stands for Hypertext Markup Language';
$css = 'CSS - Stands for Cascading Stylesheet';
$js = 'JS - Stands for JavaScript';
$php = 'PHP - Stands for Hypertext Preprocessor'; 
$sql = 'SQL - Stands for Structural Query Language';
   
print "$html";
print "<br>";
print "$css"; 
print "<br>";
print "$js";
print "<br>";
print "$php";
print "<br>";
print "$sql";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

print "<ul>";
print "$html";
print "<br>";
print "$css"; 
print "<br>";
print "$js";
print "<br>";
print "$php";
print "<br>";
print "$sql";
print "</ul>";

?>