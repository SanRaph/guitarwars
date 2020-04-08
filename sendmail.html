<html><!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>


<?php 
//Check incomplete data on submission not the first time the form displays
if (isset($_POST['submit'])) {

//Grab form data
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$OUTPUT_FORM_FLAG = false;

if (empty($subject) && (empty($message)) {
	# code...
	echo "You forgot email subject and body";
	$OUTPUT_FORM_FLAG = true;
}

if (empty($subject) && (!empty($message)) {
	# code...
	echo "You forgot email subject";
	$OUTPUT_FORM_FLAG = true;
}

if ((!empty($subject) && (empty($message)) {
	# code...
	echo "You forgot email body";
	$OUTPUT_FORM_FLAG = true;
}


if ((!empty($subject)) && (empty($message))) {
	# code...


//build connection to the server
$dbc = mysql_connect('localhost', 'sanraphus', 'raphytexpw', 'sanstoredb') or die('Could not connect to the server');

//creat a query
$query = "SELECT * FROM email_list ";

//query database
$result = mysql_query($dbc $query) or die('could query data');


//since we are going to get the result as array to store in $row, we will be needing mysql_fetch_array function to processs the array, also the values in $result are 
//not actual data but id's of the said rows of data which we are looping through
while ($row = mysql_fetch_array($result)) {
	# code... grab the values returned from db and put in to php variables
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];

	$msg = "Dear $first_name $last_name, \n $message";

	$to = $row['email'];

	mail($to, $subject, $msg, 'From'.$from);

	echo "Email sent to $to";



}


//close the connection to database to free resources
mysql_close($dbc);
}

} //closes the check which says if the form was submitted
else{
	$OUTPUT_FORM_FLAG = true; //if the form is never been submitted, we need to throw it
}


if ($OUTPUT_FORM_FLAG) {
   ?>

//we have dropped out php but anything prior to the } is still considered part of the if action in this it is html code for the form, after which dont forget to jump back
//into php php code and close also make the form sticky by plugging in values retrieved from the post superglobal
   <form method="post"  action=" <?php echo $_SERVER['PHP_SELF'] ?>">

	<label for="from">From:</label><br />
	<input type="text" name="from" id="from" value="<?php echo &from; ?" />

	<label for="subject">Subject:</label>
	<input type="text" name="subject" id="subject" value="<?php echo &subject; ?" />

	<label for="message">Message:</label>
	<textarea id="message" type="textarea" name="message" rows="30" cols="60" value="<?php echo &message; ?" />

	<input type="submit" name="submit" value="Submit" />
	
</form>


<?php
}
?>


</body>
</html>