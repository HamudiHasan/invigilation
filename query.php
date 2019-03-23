<?php
$conn = mysqli_connect("localhost","root","","exam_routine");

$sqlSelect = "SELECT * FROM invigilation";
$result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_array($result)) {
        
        $courseCode = $row['course_code'];
        $examDay = "SELECT course_code FROM exam_schedule";
        $result2 = mysqli_query($conn, $sqlSelect);

        while($row2 = mysqli_fetch_array($result2)){
            $examDay = $row2['']
            echo $examDay;
        }
  
    }      
}