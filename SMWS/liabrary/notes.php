<?php
class note
{
    function nlist()
    {

        global $conn;
        $sql = "SELECT * FROM `notes`";
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
    function nadd( $n_Aid, $n_Title, $n_Details)
    {
        global $conn;
        $query = "INSERT INTO notes (`n_Aid`,`n_Title`,`n_Details`) VALUES ('$n_Aid','$n_Title','$n_Details')";
        $result = $conn->query($query);
        if ($result) {
            $sql = "SELECT n_Id FROM notes WHERE n_Title = '$n_Title' And n_Aid= '$n_Aid'";
            $row = $conn->query($sql);
            $id = mysqli_fetch_assoc($row);
            echo "Added sucessfully";
            return $id;
            
        } else {
            echo "error";
        }

    }

    function nupdate($n_Aid,$n_Details, $n_Title,)
    {
        global $conn;
        $sql = "UPDATE notes SET n_Aid= '".$n_Aid."',n_Details='".$n_Details."',`n_Title`='".$n_Title."'
        WHERE n_AId =$n_Aid ";
        // echo $sql;
        $result =$conn->query($sql);
        echo "Updated successfully";
    }
}
?>