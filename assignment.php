<!-- 1. Write a PHP script to : -  -->
<!-- a) transform a string all uppercase letters. -->
<?php
  $str = "pain of being a gladitor";
  $uppercase = strtoupper($str);
  echo $uppercase;
?>

<!-- b) transform a string all lowercase letters. -->
<?php
  $str = "PAIN OF BEING A GLADITOR";
  $lowercase = strtolower($str);
  echo $lowercase;
?>

<!-- c) make a strings first character uppercase. -->
<?php
  $str = "pain of being a gladitor";
  $first_char = ucfirst($str);
  echo $first_char;
?>

<!-- d) make a strings first character of all the words uppercase.  -->
<?php
  $str = "pain of being a gladitor";
  $all_uppercase = ucwords($str);
  echo $all_uppercase;
?>

<!-- 2. Write a PHP script to split the following string. 
Sample string : &#39;082307&#39;
Expected Output : 08:23:07 -->

<?php
$str = '082307';
$tame = substr($str,0,2).':'.substr($str,2,2).':'.substr($str,4,2);
echo $tame;
?>

<!-- 3. Write a PHP script to check whether a string contains a specific string? 
Sample string :The quick black fox jumps over the white dog.;
Check whether the said string contains the string over;. -->

<!-- strpos(str,searchstr) usewd to check whether a string is present or not -->
<?php
$str = 'The quick black fox jumps over the white dog.';
$searchkeliye = 'over';

if (strpos($str, $searchkeliye) !== false) {
    echo "String Present";
} else {
    echo "String is not Present";
}
?>

<!-- 4. Write a PHP script to convert the value of a PHP variable to string. -->
<?php
$myVar = 123; 

$convertvar = strval($myVar); 
echo "Variable: " . $myVar . "<br>"; 
echo "String: " . $convertvar;
?>

<!-- 5. Write a PHP script to get the last three characters of a string.
Sample String :ak@creation.com
Expected Output :com -->
<?php
$string="ak@creation.com";
//substr is used to extract part of given string.
echo substr($string,-3);
?>

<!-- 6. Write a PHP script to format values in currency style. 
Sample values : value1 = 65.45, value2 = 104.35
Expected Result : 169.80 -->

<?php
$val1=654.95;
$val2=104.35;
echo sprintf("%.2f",$val1+$val2);
?>

<!-- 7. Write a PHP script to generate simple random password [do not use rand()
function] from a given string.  
Sample string: 1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz;
Note : Password length may be 6, 7, 8 etc. -->

<?php
$string='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($string),0,8);
?>

<!-- 8. Write a PHP script to replace the first 'the' of the following string with 'That'.
Sample date : 'the moon is round in shape'
Expected Result : 'That moon is round in shape.' -->

<?php
$str='the moon is round in shape';
//preg_replace  Perform a regular expression search and replace
echo preg_replace('/the/','That',$str);
?>