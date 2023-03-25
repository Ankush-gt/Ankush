<?php
// include("../include/database.php");

class user
{
    
    function getinfo()
    {
        // session_start();
        global $conn;
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_SESSION['email']) && isset($_SESSION['uPassword'])) {
            $existingUserMail = $_SESSION['email'];
            $existingpassword = $_SESSION['uPassword'];
            // echo $existingUserMail ,$existingpassword;
        } else {
            die("Not found data");
        }

        $que = "SELECT * FROM user WHERE email = '$existingUserMail' AND uPassword = '$existingpassword'";
        $info = $conn->query($que);
        $row = mysqli_fetch_assoc($info);
     
        return $row;
    }

    function list()
    {
        global $conn;
        $sql = "SELECT * FROM `user`";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        echo $num;
        echo " records found in the DataBase<br>";
        echo "<br>";
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $arr[] = $row;
            }
            return $arr;
        } else {
            return 0;
        }
    }
    function get($userId)
    {
        global $conn;
        $query = "SELECT *FROM user where uId ='$userId'";
        $result2 = $conn->query($query);
        $row = mysqli_fetch_array($result2);
        return $row;
    }
    function add($firstName, $lastname, $email, $uPassword, $r_Id)
    {
        global $conn;
        $query = "INSERT INTO user ( `firstName`,`lastName`,`email`,`uPassword`,`r_Id`) VALUES ('$firstName','$lastname','$email','$uPassword','$r_Id')";
        $result = $conn->query($query);
        if ($result) {
            $sql = "SELECT uId FROM user WHERE email = '$email' And uPassword = '$uPassword'";
            $row = $conn->query($sql);
            $id = mysqli_fetch_assoc($row);
            echo "Added sucessfully";
            return $id;
        } else {
            echo "error";
        
        }
       
    }
    function update ($uId, $firstName,$lastName, $email, $uPassword){
        global $conn;
        $sql = "UPDATE user SET uId = '" . $uId . "',firstName= '" . $firstName . "',lastName='" . $lastName . "',`email`='" . $email . "',uPassword='" . $uPassword . "'
        WHERE uId = $uId";
        // echo $sql;
        $result = $conn->query($sql);
        echo "Updated successfully";
    }
    function  deleteUser($uId, $firstName, $lastName, $email,$uPassword)
    {
        global $conn;
        $sql = "DELETE FROM `user`
        WHERE uId =$uId ";
        // echo $sql;
        $result =$conn->query($sql);
        echo "Deleted SuccessFully successfully";
}
}
$userInfo = new User();

?>