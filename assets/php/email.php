<?php
    function display(){
        echo "Redirecting...";
    }

    if(isset($_POST['submit'])){
       display();
    } 
    // $currentTime = time() + (7 * 24 * 60 * 60);
    $myfile = fopen("email_list.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $_POST["email"]."\n");
    fclose($myfile);
    echo "<script>window.location = '../../acknowledge.html'</script>";
?>
