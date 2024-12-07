<?php
    include 'connect.php';


    
    function create_user($conn, $email, $name, $password){

 
  
        $insert= "INSERT INTO users (name, email,  password) VALUES (?,?,?)";   
        
      


        $stmt2=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt2, $insert)){
            header("location: reg.php?error=stmtfailed");
            exit();
        }
    
        
        $hashed_pwd=password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt2, 'sss', $name, $email, $hashed_pwd);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_close($stmt2);
        
        header("location: reg.php?error=success");
        exit();
    }



    function emptysignup($email, $name, $password, $confirm ){
        $result="";
        if($email=="" or $name=="" or  $password=="" or $confirm=="" ){
            $result= true;
        }
        else {
            $result=false;
        } 

        return $result;
    }

    function emptylogin($email, $password){
        $result="";
        if($email=="" or $password==""){
            $result= true;
        }
        else {
            $result=false;
        } 

        return $result;
    }


    // function invalid_password($password){
    //     // Check if password contains at least one uppercase letter, one lowercase letter, and one special character
    //     if (!preg_match('/[A-Z]/', $password) || // Check for at least one uppercase letter
    //         !preg_match('/[a-z]/', $password) || // Check for at least one lowercase letter
    //         !preg_match('/[^a-zA-Z0-9]/', $password)) { // Check for at least one special character
    //         return true; // Password does not meet the criteria
    //     } else {
    //         return false; // Password meets the criteria
    //     }
    // }

    function invalid_email($email){
   
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result= true;
        }

        else{
            $result= false;
        }

        return $result;
    
    }


    function pwd_match($password, $confirm){
      
        if($password !== $confirm){
            $result= true;
        }
        
        else{
            $result=false;
        }
        return $result;
    }

    function email_exists($conn, $email){
       
    
        $query="SELECT * FROM users WHERE email=?";
    
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $query)){
            header("location: reg.php?error=stmtfailed");
            exit();
        }
    
        
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);
    
        if($row=mysqli_fetch_assoc($result)){
            return $row;
        }

        else{
            $result= false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }








    

    function login($conn, $email, $password){
        $uidexist= email_exists($conn, $email);

        if($uidexist===false){
            header("location: login.php?error=wrongLogin");
            exit();
        }

        $pwdHashed=$uidexist["password"];
        $checkedpwd=password_verify($password, $pwdHashed);

        if($checkedpwd===false){
            header("location: login.php?error=wrongLogin");
            exit();
        }

        else if($checkedpwd===true){
            session_start();

            $_SESSION["id"]=$uidexist["id"];
            $_SESSION["email"]=$uidexist["email"];
            $_SESSION["name"]=$uidexist["name"];
         
          
     
   
         

            header("location: profile.php");
            exit();
        }
    }

