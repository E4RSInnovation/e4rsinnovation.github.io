<?php
	function display(){
	    echo "Redirecting...";
	}

	if(isset($_POST['submit'])){
	   display();
	} 
	// $currentTime = time() + (7 * 24 * 60 * 60);
	$myfile = fopen("file.txt", "a") or die("Unable to open file!");
	fwrite($myfile, "[name] ".$_POST["name"]."\n");
	fwrite($myfile, "[email] ".$_POST["email"]."\n");
	fwrite($myfile, "[comments] ".$_POST["multi"]."\n");
	fclose($myfile);
	echo "<script>window.location = '../../thankyou.html'</script>";
?>
