<?php
    include("connection.php");
    if(isset($_POST["submit"])){
    $user_password = $_POST["user_password"];
        $user_mail = $_POST["user_mail"];
            $user_name = $_POST["user_name"];
}
echo "<br>";
if(empty($user_password)){
    echo "field empty";
}
echo "<br>";
if(empty($user_mail)){
    echo "field empty";
}
    echo "<br>";
if(empty($user_name)){
    echo "field empty";
}else{
    $processquery = mysqli_query($connection, "INSERT INTO `user`(user_id, user_password, user_mail, user_name)values('', '$user_name', '$user_mail', '$user_password')");
    if($processquery){
        echo "record saved";
    }
    else{
        echo "not saved";
    }
}
?>