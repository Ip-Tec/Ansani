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

if (isset($_POST['submit_1'])) {
    
    $Speaking1 = htmlspecialchars($_POST['Speaking']);
    $conference_N1 = htmlspecialchars($_POST['Speaking_conference_N']);
    $conference_about1 = htmlspecialchars($_POST['Speaking_about']);
    $speak_about1 = htmlspecialchars($_POST['Speaking_speak_about']);
    $anything_else1 = htmlspecialchars($_POST['Speaking_anything_else']);    
    
     $Workshop1 = htmlspecialchars($_POST['Workshops']);
    $topic1 = htmlspecialchars($_POST['Workshop_topic']);
    $company_conference1 = htmlspecialchars($_POST['Workshop_company_conference']);
    $anything_else_Workshop1 = htmlspecialchars($_POST['Workshop_anything_else_Workshop']);
    
    $Something1 = htmlspecialchars($_POST['Something']);
    $What_is_up1 = htmlspecialchars($_POST['Something_What_is_up']);

    $name1 =  htmlspecialchars($_POST['name']);
    $email1 =  htmlspecialchars($_POST['email']);
    $submit1 = htmlspecialchars($_POST['submit_1']);
    
    $Speaking = mysqli_real_escape_string($conn, $Speaking1);
    $conference_N = mysqli_real_escape_string($conn, $conference_N1);
    $conference_about = mysqli_real_escape_string($conn, $conference_about1);
    $speak_about = mysqli_real_escape_string($conn, $speak_about1);
    $anything_else = mysqli_real_escape_string($conn, $anything_else1);

    $Workshop = mysqli_real_escape_string($conn,$Workshop1);
    $topic = mysqli_real_escape_string($conn,$topic1);
    $company_conference = mysqli_real_escape_string($conn,$company_conference1);
    $anything_else_Workshop = mysqli_real_escape_string($conn,$anything_else_Workshop1);

    $Something = mysqli_real_escape_string($conn, $Something1);
    $What_is_up = mysqli_real_escape_string($conn, $What_is_up1);
    
    $name = mysqli_real_escape_string($conn, $name1);;
    $email = mysqli_real_escape_string($conn, $email1);
    $submit0 = mysqli_real_escape_string($conn, $submit1);
    
    $error = true;
    $error = true;
    $error = true;
    
    if (isset($_POST['Speaking'])) {
        if (empty($conference_N)) {
            echo "The name of your conference is empty?";
            $error = false;
        }else{
            if (empty($conference_about)) {
                echo "What’s your conference about is empty?";
                $error = false;
            }else{
                if (empty($speak_about)) {
                    echo"What would you like me to speak about is empty?";
                    $error = false;
                }else{
                    if (empty($anything_else)) {
                        echo"Anything else I should know about is empty?";
                        $error = false;
                    }else{
                        $sql = "INSERT INTO `Speaking` VALUES ('$conference_N', '$conference_about', '$anything_else')";
                        $queryR = mysqli_query($conn,$sql);
                        echo "<h5>Your Messages have been send</h5>";
                        
                    }
                }
            }
        }
    } 
    elseif (isset($_POST['Workshop'])) {
            if (empty($topic)) {
                echo "The name of your conference is empty?";
                $error = false;
            }else{
                if (empty($company_conference)) {
                    echo "What’s your conference about is empty?";
                    $error = false;
                }else{
                    if (empty($anything_else_Workshop)) {
                        echo"What would you like me to speak about is empty?";
                        $error = false;
                    }else{
                            $sql = "INSERT INTO `Speaking` VALUES ('$conference_N', '$conference_about', '$anything_else')";
                            $queryR = mysqli_query($conn,$sql);
                            echo "<h5>Your Messages have been send</h5>";

                        }
                    }
                }
            }        
    elseif (isset($_POST['Something'])) {
        if (empty($What_is_up)) {
            echo "The name of your conference is empty?";
            $error = false;
        }else{
             $sql = "INSERT INTO `Speaking` VALUES ('$conference_N', '$conference_about', '$anything_else')";
                        $queryR = mysqli_query($conn,$sql);
                        echo "<h5>Your Messages have been send</h5>";
        }
        }
}else{
    print "ERROR";
}
