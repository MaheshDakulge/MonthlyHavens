<?php

    $server ="localhost";
    $username = "root";
    $password = "";
    $dbname = "rutuja_db";


    $conn = mysqli_connect($server, $username, $password, $dbname);

    if ($conn ->connect_error){
        echo("Failed". $conn ->connect_error);
    }

    if(isset($_POST["submit"])){

        $email_sup= $_POST["email_sup"];
        $pass_sup= $_POST["pass_sup"];

        $sql = "INSERT INTO rutuja_sup(email_sup, pass_sup) VALUES ('$email_sup','$pass_sup')";

        if($conn -> query($sql) === TRUE){
            echo'
                <script type="text/javascript">
                    alert("User Created");
                    window.location.href="login.php";
                </script>
            
            ';
        }
        else{echo'
            <script type="text/javascript">
                alert("Something went wrong");
                window.location.href="login.php";
            </script>
        
        ';
        }
    
    }
    else{echo'
        <script type="text/javascript">
            alert("Something went wrong");
            window.location.href="login.php";
        </script>
    
    ';
    }


?>