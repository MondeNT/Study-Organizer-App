<?php

$conn = new mysqli('localhost', 'root', '', 'studentdb');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


$sql = "SELECT module_code, module_name FROM studyorganizer";
$result = $conn->query($sql);


$options = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $moduleCode = $row['module_code'];
        $moduleName = $row['module_name'];
        $options[] = array("value" => $moduleCode, "text" => $moduleName);
    }
}

$conn->close();


echo json_encode($options);
?>
