<?php
include "users/config.php";
// session_start();


// SIGNUP USERS
if($_POST["type"]== "signup"){

//use function to strip tags
function validate($data){
    return htmlspecialchars(strip_tags($data));
};


$fullname = validate($_POST["fullname"]);
$username = validate($_POST["username"]);
$email = validate($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

//Check if email already taken
$stmt = $pdo->prepare("SELECT email FROM users WHERE email=:email");
$stmt->bindParam(":email", $email, PDO::PARAM_STR);
$stmt->execute();
if($stmt->rowCount() > 0){
    $exist = "exist";
}


if(!preg_match("/^[a-zA-Z\s]+$/", $fullname)){
    echo '<script>
        $(".errorText").html("Invalid fullname");
        $(".error").fadeIn();
         </script>';
}
elseif(!preg_match("/^[a-zA-Z\s]+$/", $username)){
    echo '<script>
        $(".errorText").html("Invalid username");
        $(".error").fadeIn();
         </script>';
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '<script>
    $(".errorText").html("Invalid email");
    $(".error").fadeIn();
     </script>'; 
}
elseif(strlen($password) < 6){
    echo '<script>
    $(".errorText").html("Password must be upto 6 characters");
    $(".error").fadeIn();
     </script>'; 
}
elseif(!empty($exist)){
    echo '<script>
    $(".errorText").html("Email already taken");
    $(".error").fadeIn();
     </script>'; 
}
else{

    //INSERT stmt
    $hashPass = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users(fullname, username, email, password) VALUES (:fullname, :username, :email, :password)");
    $stmt->bindParam(":fullname", $fullname, PDO::PARAM_STR);
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":password", $hashPass, PDO::PARAM_STR);
    $stmt->execute();

    if($stmt){

        echo 
        '<script>
          $(".successText").html("Registered Successfully");
          $(".success").fadeIn();

          $("#fullname").val("");
          $("#username").val("");
          $("#email").val("");
          $("#password").val("");
          $(".success").fadeOut("");
         
           setTimeout(()=>{
        location.href="login.php";
            }, 1200);

        </script>';
          
    }

}

}




















// LOGIN USERS
if($_POST["type"]== "login"){

    //use function to strip tags
    function validate($data){
        return htmlspecialchars(strip_tags($data));
    };
    
    
    $email = validate($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    
    //Get user Email from DB
    $stmt = $pdo->prepare("SELECT COUNT(email) AS count FROM users WHERE email=:email");
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $getEmail = $stmt->fetch();
    $existEmail = $getEmail["count"];

    //Get hashed Password from DB
    $stmt = $pdo->prepare("SELECT password FROM users WHERE email=:email");
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $hashed = $stmt->fetch();
    
    
    if($existEmail < 1){
        echo '<script>
        $(".errorText").html("Invalid email");
        $(".error").fadeIn();
         </script>'; 
    }
    elseif(!password_verify($password, $hashed["password"])){
        echo '<script>
        $(".errorText").html("Invalid Password");
        $(".error").fadeIn();
         </script>'; 
    }else{

        //Select stmt for SESSION SET
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email=:email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();

        session_start();
        $_SESSION["userId"] = intval($row["id"]);

        echo
        '<script>
          $(".successText").html("Logging in....");
          $(".success").fadeIn();

          $("#email").val("");
          $("#password").val("");
          //$(".success").fadeOut("");

        setTimeout(()=>{
        location.href="users/page.php";
            }, 2000);

        </script>';
    }
            
}


































// UPDATE USER

if($_POST["type"]== "update"){

    //use function to strip tags
    function validate($data){
        return htmlspecialchars(strip_tags($data));
    };
    
    
    $name = validate($_POST["name"]);
    $email = validate($_POST["email"]);
    $id = intval($_POST["id"]);
    
    //Check if email already taken
    $stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM users WHERE email=:email AND id!=:id");
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetch();

 
    
    if(!preg_match("/^[a-zA-Z\s]+$/", $name)){
        echo '<script>
            $(".error'.$id.' .errorText").html("Invalid name");
            $(".error'.$id.'").fadeIn();
            $(".success'.$id.'").fadeOut();
             </script>';
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<script>
        $(".error'.$id.' .errorText").html("Invalid email");
        $(".error'.$id.'").fadeIn();
        $(".success'.$id.'").fadeOut();

         </script>'; 
    }

    elseif($data["count"] > 0){
        echo '<script>
        $(".errorText").html("Email already taken");
        $(".error").fadeIn();
         $(".success'.$id.'").fadeOut();
         </script>'; 
    }
    else{
    
        //INSERT stmt
    
        $stmt = $pdo->prepare("UPDATE users SET name=:name, email=:email WHERE id=:id");
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    
        if($stmt){
            echo 
            '<script>
            $(".success'.$id.' .successText").html("Updated Successfully");
              $(".success'.$id.'").fadeIn();

              $(".userN'.$id.'").html("'.$name.'");
              $(".userE'.$id.'").html("'.$email.'");

            </script>';
        }
    
    }
    
    }








    
// DELETE USER

if($_POST["type"]== "delete"){
    $id = intval($_POST["id"]);

    //delete
    $stmt = $pdo->prepare("DELETE FROM users WHERE id=:id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt){
        echo 1;
    }

}

    