<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');


$user = new note();
$user_list_arr = $note1->nlist();


?>
  <style>
        table,
        th,
        td {
            border: 1px solid;
            text-align:center;
            padding: 10px 10px;
            margin-left: 10px;
        }
    </style>
<table class='table'>
    <thead>
        <tr>
            <th>note id</th>
            <th>note Aid</th>
            <th>note title</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM notes";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc())
            echo
                "<tr>
                                        <td>" . $row['n_Id'] . "</td>
                                        <td>" . $row['n_Aid'] .  "</td>
                                        <td>" . $row['n_Title'] . "</td>
                                       
                                    </tr>"
                ?>
        </tbody>
    </table>