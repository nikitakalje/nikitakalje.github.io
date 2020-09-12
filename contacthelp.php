<?php

	$name = $_POST['name'];
	$mailFrom = $_POST['Email'];
	$message = $_POST['Message'];

	if(isset($_POST['submit']))
	{

	//echo '<script>alert("Message sent successfully!")</script>';

	//$mailTo = "kalje.nikita@gmail.com";
	$mailTo = "kalje.nikita@gmail.com";
	//$headers = "From: ".$mailFrom. $message;
	$headers = "From: ".$mailFrom;
	$txt = "You have received a message from ".$name.":\n\n".$message;

	
	//mail($mailTo, $txt, $headers);
	//mail($mailTo, $headers, $txt);
	
	//$message= "Email ".$mailFrom."\nMessage: \n";


	mail("kalje.nikita@gmail.com", "Email Submission", $message, "From: $name
		<$mailFrom>");
	header("Location: index.html?mailsend");


	//alert("your message sent successfully");

	/*function function_alert($message1) 
	{ 
      
    	// Display the alert box  
    	echo "<script>alert('$message1');</script>"; 
	} 
  
  
	// Function call 
	function_alert("Message successfully sent!"); */


	}

