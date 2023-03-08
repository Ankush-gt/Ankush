
<!-- 
// lass Auth{
//     public $isloggedIn = false;
//     function login($userName, $uPassword){
//     //    $userName, $userPassword;
//        global $conn;
//        $sql =  "select * from user where email = '$userName', password = '$uPassword'";


//        echo $sql;exit;
       
//        $result = $conn->query($sql);
//        printc_r($result);
//         if($conn->mysqli_num_rows($result)){
//             echo "found the row";
//         }else{
//             echo "not found";
//         }
//     }
// } -->
<?php
class Auth{
    public $isloggedIn = false;
    function login($userName, $userPassword){
    //    $userName, $userPassword;
       global $conn;
       $sql =  "select * from user where email = '".$userName."' and  uPassword = '".$userPassword."' ";
       
    //    $sql =  "select * from user where eMail = '".$userName."' and  password = '".$userPassword."' ";
       echo $sql;
       //exit;
    //    $result = $conn->query($sql);
        // if($conn->mysqli_num_rows($result)){
        //     echo "found the row";
        // }else{
        //     echo "not found";
        // }
        $result = $conn->query($sql);
        print_r($result);
        if ($result)
          {
  // Return the number of rows in result set
         $rowcount=mysqli_num_rows($result);
         printf("Result set has %d rows.\n",$rowcount);
  // Free result set
         mysqli_free_result($result);
          }
     
    }
}
?>