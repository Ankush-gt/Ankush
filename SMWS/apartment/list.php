<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/public/meta.php') ;

?>
<style>
    table,
    th,
    td {
        border: 1px solid;
    }
</style>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>
                List of All Apartments
            </h1>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <!-- <i class='bx bxs-smile'></i> -->
            <span class="text">
                <h3>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>Apt Id</th>
                                <th>Apt Name</th>
                                <th>Apt Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM apartment";
                            $result = $conn->query($sql);
                            if (!$result) { ?>
                                <tr>
                                    <td colspan="4">No Results found</td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                while ($row = $result->fetch_assoc()) {

                                    echo
                                        "<tr>
                                                            <td>" . $row['aId'] . "</td>
                                                            <td>" . $row['aptName'] . "</td>
                                                            <td>" . $row['aCity'] . "</td>
                                                           
                                                        </tr>"
                                        // **********
                                        ?>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </h3>
            </span>
        </li>
    </ul>
</main>
<!-- MAIN -->

<?php

?>