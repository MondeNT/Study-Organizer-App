<?php

$conn = new mysqli('localhost', 'root', '', 'studentdb');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $moduleCode = $_POST['module_code'];

    
    $newModuleName = $_POST['module_name'];

    $query = "UPDATE studyorganizer SET module_name = ? WHERE module_code = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $newModuleName, $moduleCode);

    if ($stmt->execute()) {
        echo "Module details updated successfully.";
    } else {
        echo "Error updating module details: " . $stmt->error;
    }

    $stmt->close();
} else {
    
    echo "Invalid request method.";
}

$conn->close();
?>
