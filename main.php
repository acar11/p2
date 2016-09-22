<?php

//$word_number = "";
//$numbers     = "";
//$symbols     = "";

$word_number = ($_POST["word_number"]) ? $_POST["word_number"] : '';
$numbers     = ($_POST["add_numbers"]) ? $_POST["add_numbers"] : '';
$symbols     = ($_POST["add_symbols"]) ? $_POST["add_symbols"] : '';


if (preg_match('/^\d{1}/', $word_number)) {

  $words_arr = array( "Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "Sun", "Moon");
  $numb_arr = range(1,9);
  $symb_arr = array("@", "#", "%". "&", "$", "*", "+", "_", "~");

 // $words_arr = ($numbers) ? array_merge($words_arr,$numb_arr) : $words_arr;
 // $words_arr = ($symbols) ? array_merge($words_arr,$symb_arr) : $words_arr;

  //$arr_out = array_combine($words_arr,$numb_arr);

  $words = array_rand(array_flip($words_arr), $word_number);
  //$words = array_rand(array_flip($arr_out), $word_number);

  $arr_length = count($words);

  for( $x=0; $x<$arr_length; $x++ ) {

    if($word_number && !$numbers && !$symbols){

      $pwd .= $words[$x].'-';
      // Remove the last - from the result string
      $result = substr($pwd, 0, -1);

    }

    if($word_number && $numbers && !$symbols) {

      $numb = array_rand(array_flip($numb_arr), 1);
      //echo "<br>41  ".$words[$x].$numb."<br>";
      $pwd .= $words[$x].$numb.'-';
      // Remove the last - from the result string
      $result = substr($pwd, 0, -1);

    }

    if($word_number && !$numbers && $symbols) {

      $sym = array_rand(array_flip($symb_arr), 1);
      //echo "<br>51  ".$words[$x].$sym[0]."<br>";
      $pwd .= $words[$x].$sym[0].'-';
      // Remove the last - from the result string
      $result = substr($pwd, 0, -1);

    }

    if($word_number && $numbers && $symbols) {

      $sym  = array_rand(array_flip($symb_arr), 1);
      $numb = array_rand(array_flip($numb_arr), 1);
      //echo "<br>62  ".$words[$x].$sym[0].$numb."<br>";
      $pwd .= $words[$x].$sym[0].$numb.'-';
      // Remove the last - from the result string
      $result = substr($pwd, 0, -1);

    }

   }

// echo "<br><br>Result: ".$result. "<br><br>";

}elseif( $word_number == ""){

  $msg = '';

}else{

  $msg = 'Only digits from 1 through 9 are allowed.';

}

?>
