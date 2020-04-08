<html>
<head>
<title>Fang the Dog Abduction</title>
</head>

<body>
<p> Information on Fang's Abduction</p>

<form method="POST" action="fang.php">
<label for="firstname">First Name:</label>
<input type="text" name="firstname" id="firstname" /><br />

<label for="lastname">Last name:</label>
<input type="text" name="lastname" id="lastname" /> <br />

<label for="fangspotted">Fang spotted?</label>
<input type="radio" value="yes" name="fangspotted" id="fangspotted" />
<input type="radio" value="no" name="fangspotted" id="fangspotted"><br />

<label for="Additionalinfo"> Additional Infor:</label>
<input type="textarea" name="additionalinfo" size="32" ><br />

<img src="" width="100" height="175" alt="fangimage" name="fangphoto"></img>

<input type="submit" name="submit" value="Submit" />

<form>




<<?php 
//Grab values from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fangspotted = $_POST['fangspotted'];
$additionalinfo = $_POST['additionalinfo'];
$image = $_POST['fangphoto']


//Open connection to the server 
$dbc = mysql_connect('localhost', 'SanRaph', 'phytexypassword', 'alienadopt') or die('Can not connect to the server please');

//Build a SQL query
$query = "INSERT INTO (firstname, lastname, whenithappened, fangspotted, description)".
         "VALUES      (  '$firstname',   '$lastname',    '$fangspotted',    '$additionalinfo')";


$result = mysql_query($dbc $query) or die('Error querying database');


mysql_close($dbc);         


echo 'Thank you for participating in this search <br />';
echo 'your name is'. $firstname ."".$lastname 'and you said you spotted fang'.$fangspotted 'and added this info'. $additionalinfo'<br />';
echo 'Have a great day!'



 ?>


</body>
</html>