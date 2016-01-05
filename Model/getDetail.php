<?php
include './DbCon/connection.php';

$sql = "select * from user where `text`='online'";

print recordSetToJson(mysqli_query($conn, $sql));

function recordSetToJson($mysqlresult) {
    $rows1 = array();
    $i = 0;
    while ($row = mysqli_fetch_row($mysqlresult)) {
        $rows1[$i]['id'] = $row[0];
        $rows1[$i]['userdata']['name'] = $row[1];
        $rows1[$i]['userdata']['personal']['email'] = $row[2];
        $rows1[$i]['userdata']['personal']['status'] = $row[3];
        $i++;
    }






    return json_encode($rows1);
}
?>

<!--<html>
    <title>MY PHP Site</title>
    <body>

<table style="border:"1px">

//<?php
//$rows1 = array();
//$i = 0;
//while ($row = mysqli_fetch_row(mysqli_query($conn, $sql))) {
//    $rows1[$i]['id'] = $row[0];
//    $rows1[$i]['userdata']['name'] = $row[1];
//    $rows1[$i]['userdata']['personal']['email'] = $row[2];
//    $rows1[$i]['userdata']['personal']['status'] = $row[3];
//   
//    
?>
        

                <tr>


                    <td> ID  </td><td><?php $row[0] ?></td>


                </tr>

                <tr>
                    <td> Name </td><td><?php $row[1] ?></td>


                </tr>
                <tr>
                    <td> Email  </td><td><?php $row[2] ?></td>


                </tr>
                <tr>
                    <td> Status  </td><td><?php $row[3]; ?></td>


                </tr>





            </table>
        
        
        














    <body>

</html>-->



