<?php
if (file_exists("main.php")) {

    require 'main.php';
}
else {

    echo "We got nothing here...\n";

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>xkcd Password Generator</title>
<link href="main.css" rel="stylesheet"> <!-- Include CSS File Here-->
<!--script src="http://form-serialize.googlecode.com/svn/trunk/serialize-0.2.min.js" type="text/javascript"></script--> <!-- For Serialization Function -->
<script src="valid.js"></script> <!-- Include JavaScript File Here-->
</head>
<body>
<div class="container">

<div class="main">

<form id="form" method="post" name="form">
<h2>xkcd Password Generator</h2>


<label class="words">Number of words for your password:</label>
<input id="word_number" name="word_number" placeholder="# of words" type="text" value="<?php echo isset($_POST['word_number']) ? $_POST['word_number'] : '' ?>" maxlength="1">


<!--label>Email :</label>
<input id="email" name="email" placeholder="Valid Email" type="text">

<label>Gender :</label>
<input name="gender" type="radio" value="Male">
<label>Male</label>
<input name="gender" type="radio" value="Female">
<label>Female</label-->

<label class="numbers">Add Numbers:</label>
<input class="numb_box" name="add_numbers" type="checkbox" value="numbers" <?php if(isset($_POST['add_numbers'])) echo "checked='checked'"; ?> />

<label class="symbols">Add Symbols: </label>
<input class="symb_box" name="add_symbols" type="checkbox" value="symbols" <?php if(isset($_POST['add_symbols'])) echo "checked='checked'"; ?>>


<!--label>French</label>
<input name="language" type="checkbox" value="English">
<label>English</label>
<label>Contact No. :</label>
<input id="contact" name="contact" placeholder="Contact No." type="text"-->
<!--input onclick="myfunction()" type="button" value="Get me a password!"-->
<!--input type="button" value="Get me a password!"-->
<input type="submit" value="Submit Your Details" />
</form>
<span>New Generated password will be shown below.</span>

<div class="show"><?php echo $result ?></div>
<div class="msg"><?php echo $msg ?></div>

<div>
  <a href="index.php"><button type="button" class="reset_form">Reset</button></a>
</div>

</div>

</div>
</body>
</html>
