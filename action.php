<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ansani";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();


if (isset ($_POST['submit'])) {
    $f_name = htmlspecialchars($_POST['name']);
    $e_email = htmlspecialchars($_POST['email']);
        
    $name = mysqli_real_escape_string($conn,$f_name);
    $email = mysqli_real_escape_string($conn, $e_email);
    
    $success = false;
    $errorempty = false;
    $error = false;
    
    
   /* if (!preg_match("/^[a-z A-Z]*$/", $name)){
        echo "<p>Name is not valid</p>";
        $error = true;
        exit();
    } else {
        if (!preg_match("/^[0-9a-z A-Z]*$/", $name)){
        echo "<p>Email is not valid</p>";
        $error = true;
        exit();
    }
    }*/
    
    if (empty($name)) {
        echo "<p>Name is empty</p>";
        $errorempty = true;
        exit();
    } else {
        if (empty($email)) {
            echo "<p>Email is empty</p>";
            $errorempty = true;
            exit();
        }else{
            $sql = "SELECT * FROM `user` WHERE `name` = '$name' AND `email` = '$email' OR `email` = '$email';";
            $squery = mysqli_query($conn, $sql);
            if ($chack_result = mysqli_num_rows($squery) > 0) {
                echo "<p>Name OR Email is USED</p>";
                $error = true;
            }else {
                $date = date("d-m-Y, h:i:sa");
                $sql = "INSERT INTO `user` (`name`, `email`, `date`) VALUES ('$name', '$email', '$date')";
                $mysql_reselt = mysqli_query($conn, $sql);
                echo "<p class='text-light bg-danger'>Successfully Send</p>";
                $success = true;
            }
        }
    }

} else{
echo "<p>There was an error</p>";
$error = true;
    header("Location: index.html");
exit();
}


if (isset($_POST['submit_1'])) {
    
    echo "working ooooooo Testing Testing Testing Testing Testing Testing Testing ";
    
   /* $f_name1 = htmlspecialchars($_POST['name']);
    $e_email1 = htmlspecialchars($_POST['email']);
        
    
    $Speaking = htmlspecialchars($_POST['Speaking']);
    $conference_N = htmlspecialchars($_POST['conference_N']);
    $conference_about = htmlspecialchars($_POST['conference_about']);
    $speak_about = htmlspecialchars($_POST['speak_about']);
    $anything_else = htmlspecialchars($_POST['anything_else']);    
    
    $Speaking = mysqli_real_escape_string($_POST['Speaking']);
    $conference_N = mysqli_real_escape_string($_POST['conference_N']);
    $conference_about = mysqli_real_escape_string($_POST['conference_about']);
    $speak_about = mysqli_real_escape_string($_POST['speak_about']);
    $anything_else = mysqli_real_escape_string($_POST['anything_else']);

    $Workshop = htmlspecialchars($_POST['Workshop']);
    $topic = htmlspecialchars($_POST['topic']);
    $company_conference = htmlspecialchars($_POST['company_conference']);
    $anything_else_Workshop = htmlspecialchars($_POST['anything_else_Workshop']);


    $Workshop = mysqli_real_escape_string($_POST['Workshop']);
    $topic = mysqli_real_escape_string($_POST['topic']);
    $company_conference = mysqli_real_escape_string($_POST['company_conference']);
    $anything_else_Workshop = mysqli_real_escape_string($_POST['anything_else_Workshop']);

    $Something = htmlspecialchars($_POST['Something']);
    $What_is_up = htmlspecialchars($_POST['What_is_up']);

    $Something = mysqli_real_escape_string($_POST['Something']);
    $What_is_up = mysqli_real_escape_string($_POST['What_is_up']);

    $name =  htmlspecialchars($_POST['name']);
    $email =  htmlspecialchars($_POST['email']);
    $submit0 = htmlspecialchars($_POST['submit0']); 

    $name = mysqli_real_escape_string($_POST['name']);;
    $email = mysqli_real_escape_string($_POST['email']);
    $submit0 = mysqli_real_escape_string($_POST['submit0']);
    
    echo "Testing Testing Testing Testing Testing Testing Testing ";
    $success1 = false;
    $errorempty1 = false;
    $error1 = false;
    */
    echo "<br>Testing Testing Testing Testing Testing Testing Testing ";
//    $error1 = false;
}

?>


<script>
    $("#inputName4, #inputEmail4").removeClass("error");


    var errorempty = "<?php echo $errorempty; ?>";
    var error = "<?php echo $error; ?>";
    var success = "<?php echo $success; ?>";
    
    var errorempty = "<?php echo $errorempty1; ?>";
    var error = "<?php echo $error1; ?>";
    var success = "<?php echo $success1; ?>";

    if (errorempty == true) {
        $("#inputName4").addClass("error");
    }
    if (error == true) {
        $("#inputEmail4").addClass("error");
    }
    if (success == true) {
        $("#inputEmail4, #inputName4").addClass("success");
    }
    if (errorempty == false) {
        $("#inputName4, #inputEmail4").val("");
    }
    if ($success == false) {
        $("#inputName4, #inputEmail4").val("");
    }

</script>
