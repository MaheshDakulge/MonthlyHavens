<?php

    $server ="localhost";
    $username = "root";
    $password = "";
    $dbname = "rutuja_db";


    $conn = mysqli_connect($server, $username, $password, $dbname);

    if ($conn ->connect_error){
        echo("Failed". $conn ->connect_error);
    }

    
    if(isset($_POST["submit_log"])){
        $email_log= $_POST["email_log"];

        $password_log= $_POST["password_log"];

        
        $sql = "SELECT * FROM rutuja_sup WHERE email_sup='$email_log'";

        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){

            
            if($row = mysqli_fetch_assoc($result))
            
            {
                
                $email_sup = $row["email_sup"];
                $pass_sup = $row["pass_sup"];

                if($email_log == $email_sup && $pass_sup == $pass_sup){
                {
                    echo'
                    <script type="text/javascript">
                        alert("Login Successfull");
                        window.location.href="login.php";
                    </script>
                
                ';            
                }
            }

        }
        else{
            echo 'Something went wrong';
        }
        
        }
        else
        {
            echo"Not found";
        }
    }
    else{
        echo "Not Ok";
    }

?>