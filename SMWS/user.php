<?php
class user{
    function login(){
        $con = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        if (isset($_SESSION['email']) && isset($_SESSION['uPassword']))  {
            $existingUserMail = $_SESSION['email'];
            $existingpassword = $_SESSION['uPassword'];
        } else {
            die("Not found data");
        }

        $que = "SELECT * FROM user WHERE email = '$existingUserMail' AND uPassword = '$existingpassword'";
        $info = $con->query($que);
        $row = mysqli_fetch_assoc($info);
        return $row;
    }

    function list(){
        $con = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME);
        $sql = "SELECT * FROM `user`";
        $result = mysqli_query($con, $sql);
   //   *******Records********
        $num = mysqli_num_rows($result);     
        echo $num;
        echo " records found in the DataBase<br>";   
        echo "<br>";
       if($num>0){
    //    return mysqli_fetch_assoc($result);
            // $row = mysqli_fetch_assoc($result);
           //  $row = mysqli_fetch_assoc($result);
           // echo var_dump($row);
        //    print_r($user_list_arr);
           while($row = mysqli_fetch_assoc($result)){
              $arr[] = $row;
            }
            return $arr;
       }else{
        return 0;
       }
    }
    // function get($userId){
    //     if($num> 0){
    //         $num = mysqli_num_rows($result);     
    //         echo $num;
    //         $row = mysqli_fetch_assoc($result);
    //         echo var_dump($row);

    //     }
    // }

}
$userInfo = new User();

?>
