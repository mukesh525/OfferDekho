<?php

include './connection.php';

$_name = $_POST["name"];
$_email = $_POST["email"];
$_status = $_POST["status"];




if (isset($_name)) {

    if (isset($_email)) {

        if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            $msg = array("Sataus" => 0, "Message" => "Invalid email format");
            echo $jsonformat = json_encode($msg);
        } else {

            if (isset($_status)) {
                $sql = "insert into user (id,name,email,text) values (null,'$_name','$_email','$_status')";
                $rs1 = mysqli_query($conn, $sql)or die("Couldn't execute query: " . mysqli_error());

                if (mysqli_affected_rows($conn) > 0) {
                    $msg = array("Sataus" => 1, "Message" => "your records inserted sucessfully");
                } else {
                    echo "Error:" . $sql . "<br/>" . mysqli_errno($conn);
                }
                echo $jsonformat = json_encode($msg);
                @mysqli_close($conn);
            } else {
                $msg = array("Sataus" => 0, "Message" => "Status fields is empty");
                echo $jsonformat = json_encode($msg);
            }
        }
    } else {
        $msg = array("Sataus" => 0, "Message" => "Email fields is empty");
        echo $jsonformat = json_encode($msg);
    }
} else {
    $msg = array("Sataus" => 0, "Message" => "Name fields is empty");
    echo $jsonformat = json_encode($msg);
}
?>

