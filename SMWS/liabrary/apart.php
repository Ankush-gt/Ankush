<?php
// include('../../includes/database.php');
// include(PROJECT_ROOT . '/includes/config.php');
// include($_SERVER['DOCUMENT_ROOT'].'/smws/protected/header.php');

class apartment
{

    function getAptlist() //view list of all users
    {
        //code to get all users 
        global $conn;

        $sql = "SELECT * FROM `apartment`";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        // echo '$num';
        $sql2 = "SELECT DISTINCT(aptId) FROM `apartment`";
        $result2 = mysqli_query($conn, $sql2);
        $num2 = mysqli_num_rows($result2);

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $userList[] = $row;
            }
            return $userList;
        } else {
            return 0;
        }
    }


    function addApt($aptName, $aCity, $aState, $aCountry)
    {
        global $conn;
        $query = "INSERT INTO apartment ( `aptName`,`aCity`,`aState`,`aCountry`) VALUES ('$aptName','$aCity','$aState','$aCountry')";
        $result = $conn->query($query);
        if ($result) {
            $sql = "SELECT aId FROM user WHERE aState  = $aState And aCountry = $aCountry";
            $row = $conn->query($query);
            $id = mysqli_fetch_assoc($row);
            echo "Added sucessfully";
            return $id;
        } else {
            echo "error";
        }
    }
    // **********update info********
    function get($apaId)
    {
        global $conn;
        $query = "SELECT *FROM  apartment where aId ='$apaId'";
        $result2 = $conn->query($query);
        $row = mysqli_fetch_array($result2);
        return $row;
    }
    function Aptupdate($aId,$aptName, $Address,$aCity)
    {
        global $conn;
        $sql = "UPDATE apartment SET aId= '".$aId."',aptName='".$aptName."',`Address`='".$Address."',aCity='".$aCity."'
        WHERE aId =$aId ";
        // echo $sql;
        $result =$conn->query($sql);
        echo "Updated successfully";


      
    }
// function addApt($aptName, $aptAddress, $aptCity, $aptState, $aptCountry) //adding new user
//  {
//     //code to add new user entry
//     global $conn;
//     $sqlAddApt = "INSERT INTO apartment(name, address, city, state, country) VALUES('$aptName','$aptAddress','$aptCity','$aptState', '$aptCountry')";

//     $output = $conn->query($sqlAddApt);
//     if (!$output) {
//         echo 'not done';
//     } else {
//         echo 'done ';
//     }
// }
// function getAptById($aptId) //get specific user by userId
// {
//     //code to get single Apartment details from database.

// }
// //new lines starts
// function updateAptInfo()
// {
//new line ends
// }
}

// }
// $apt = new apartment();