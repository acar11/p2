
<?php
$input_array = array("White", "Black", "Green", "Blue", "Red");
$rand_keys = array_rand($input_array , 1); // this 2nd argument can be a variable
//echo "<br><br>".$rand_keys. "<br><br>Test<br><br>"; //gives first random array item
//echo "<br><br>".$input_array[$rand_keys[0]] . "<br><br>Test<br><br>"; //gives first random array item
//echo $input_array[$rand_keys[1]] . "\n"; //gives second random array item
?>

<?php


$word_number = "";
$numbers     = "";
$symbols     = "";

$word_number = ($_POST["word_number"]) ? $_POST["word_number"] : '';
$numbers     = ($_POST["add_numbers"]) ? $_POST["add_numbers"] : '';
$symbols     = ($_POST["add_symbols"]) ? $_POST["add_symbols"] : '';


//$result;
//$test = "";
//$word_number = 2;

//if ($word_number =~ /\d{1}/) {
if (preg_match('/^\d{1}/', $word_number)) {
//if ($word_number) {

  //$result = "Word NUmber = $word_number";
 // $result;
//  $words_arr = array("White", "Black", "Green", "Blue", "Red","foo1", "bar2", "baz3", "test", "phone");
  $words_arr = array( "Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "Sun", "Moon");

  $numb_arr = range(1,9);

  $symb_arr = array("@", "#", "%". "&", "$", "*", "+", "_", "-");

 // $words_arr = array_merge($words_arr,$numb_arr); // if $numbers;
  $words_arr = ($numbers) ? array_merge($words_arr,$numb_arr) : $words_arr;
  $words_arr = ($symbols) ? array_merge($words_arr,$symb_arr) : $words_arr;

  //$arr_out = array_combine($words_arr,$numb_arr);
  //$arr_out = $words_arr + $numb_arr;

  //$rand_keys = array_rand($input_array , $word_number); // this 2nd argument can be a variable

  //$result = $input_array[$rand_keys[0]];

  $words = array_rand(array_flip($words_arr), $word_number);
  //$words = array_rand(array_flip($arr_out), $word_number);

  $arr_length = count($words);

  for( $x=0; $x<$arr_length; $x++ ) {

    $result .= $words[$x].'&nbsp;&nbsp;';
    substr_replace($result, "", -1);
    rtrim($result, "-");
    //$test.=$words[$x];
    //echo $result;

   }

}elseif( $word_number == ""){ //preg_match('/^\d{1}/', $word_number)) { if (preg_match('/^\d+$/', $var)

//  $msg = '';

}else{

  $msg = 'Only digits from 1 through 9 are allowed.';

}

//echo "<br><br>44 ".$result. "<br><br>";
//echo "<br><br>46 ".$test. "<br><br>";

    //$a = ['http://php.net/', 'http://google.com/', 'http://bbc.co.uk/'];
    //$website = $a[mt_rand(0, count($a) - 1)];
    //echo "<br><br>38 ".$website. "<br><br>";
    //$inarray = range(0,100);
    //shuffle($inarray);
    //$outarray = array_slice($inarray, 0, 10);
    //echo "<br><br>47 ".$outarray . "<br><br>";
?>


<?php
$arr_words = array("foo1", "bar2", "baz3", "White", "Black", "Green", "Blue", "Red");
//$word = $arr_words[array_rand($arr_words)];

$word = array_rand(array_flip($arr_words), 5);
$arr_length = count($word);

//echo "<br><br>59 ".$arr_length. "<br><br>";

for( $x=0; $x<$arr_length; $x++ ) {

  //echo $word[$x];
  //echo "<br>";

}
?>



<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 3);
//echo $input[$rand_keys[0]] . "<br>";
//echo $input[$rand_keys[1]] . "<br>";
//echo $input[$rand_keys[2]] . "<br>";
?>
