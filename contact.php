<?php



if (isset($_POST['btn'])) {
    $userName = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
}


?>




<h1> userName- <?php

                if (isset($userName)) {
                    echo $userName;
                }



                ?> </h1>


<h1> userEmail- <?php

                if (isset($email)) {
                    echo $email;
                }



                ?> </h1>



<h1> passWord- <?php

                if (isset($password)) {
                    echo $password;
                }



                ?> </h1>