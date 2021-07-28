<?php
  session_start();

 

if(isset($_POST['login'])){
    
     include('connection.php');

    $username = $_POST['username'];
    $password = $_POST['pass'];

    if(empty($username) || empty($password)){
        header('Location:loginform.php?fields=empty');
        exit();
    }
    else{
    $stmt = "SELECT Password FROM users WHERE UserName ='$username';";
    $result = mysqli_query($conn, $stmt);
    $row = mysqli_fetch_array($result);
    
    
      $stmt1 = "SELECT Password FROM admin WHERE UserName ='$username';";
      $result1 = mysqli_query($conn, $stmt1);
        
        if(mysqli_num_rows($result1) > 0){

          
            $row1 = mysqli_fetch_assoc ($result1);

            if(password_verify($password, $row1['Password'])){
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] =  $username; 

            header('Location:indexadmin.php');
            exit();
        }
            else{
               
                    
                header('Location:loginform.php?fields=wrongusernameorpassword');
            
        }
            
    
                
            }else {
            if(password_verify($password, $row['Password'])){
                    session_start();
    
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username; 
        
                    header('Location:indexprofile.php');
                    exit();
                }
                else{
                    header('Location:loginform.php?fields=wrongusernameorpassword');
               
                }
            }
        }

        

    }



        