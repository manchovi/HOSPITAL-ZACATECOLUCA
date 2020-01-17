<?php

header('Content-Type: application/json');
include_once("conn.php");

    /* $dataPoints = array(
        array("y" => 17363, "label" => "2005-06"),
        array("y" => 28726, "label" => "2006-07"),
        array("y" => 35000, "label" => "2007-08"),
        array("y" => 25250, "label" => "2008-09"),
        array("y" => 19750, "label" => "2009-10"),
        array("y" => 18850, "label" => "2010-11"),
        array("y" => 26700, "label" => "2011-12"),
        array("y" => 16000, "label" => "2012-13"),
        array("y" => 19000, "label" => "2013-14"),
        array("y" => 18000, "label" => "2014-15")
        ); */

    $data_points = array();
    //$result = mysqli_query($con, "SELECT * FROM sales");
    $result = mysqli_query($conn, "SELECT * FROM `tb_sensores` ORDER BY id DESC LIMIT 10");
    while($row = mysqli_fetch_array($result)){
        $point = array("y" => $row['temp_corporal'] , "label" => $row['fecha']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
    //echo json_encode($data_points);

    //mysqli_close($conn);

?>