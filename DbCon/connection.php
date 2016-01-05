
<?php
$conn = mysqli_connect("localhost","root", "064818@@muk","OfferDekho") or die("Could not Connect My Sql");
//mysql_select_db("test",$con)  or die("Could connect to Database");

if (mysqli_connect_errno()) {
    echo"failed to connect :" . mysqli_connect_errno();
}
?>

