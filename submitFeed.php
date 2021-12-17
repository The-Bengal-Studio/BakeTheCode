<?php

if (isset($_POST)) {

    $Email = $_POST["emailId"];
    $FeedValue = $_POST["suggestion"];

    include_once "includes/feedbackdbconfig.php";

    $q = "INSERT INTO `feedback` (`Srl No.`, `email`, `Feedback Value`) VALUES (NULL, '$Email', '$FeedValue')";
    $result = mysqli_query($conn, $q);
    header("Location:/btc/index.php");
}
