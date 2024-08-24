<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   
    $module_code = isset($_POST['module_code']) ? $_POST['module_code'] : '';
    $module_name = isset($_POST['module_name']) ? $_POST['module_name'] : '';
    $module_credits = isset($_POST['module_credits']) ? $_POST['module_credits'] : 0;
    $class_hours = isset($_POST['class_hours']) ? $_POST['class_hours'] : 0;
    $num_weeks = isset($_POST['num_weeks']) ? $_POST['num_weeks'] : 0;
    $starts_date = isset($_POST['starts_date']) ? $_POST['starts_date'] : null;
    $hours_studied = isset($_POST['hours_studied']) ? $_POST['hours_studied'] : '';

    
    $conn = new mysqli('localhost', 'root', '', 'studentdb');

    
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        
        $stmt = $conn->prepare("INSERT INTO studyorganizer (module_code, module_name, module_credits, class_hours, num_weeks, starts_date, hours_studied) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiiss", $module_code, $module_name, $module_credits, $class_hours, $num_weeks, $starts_date, $hours_studied);

        
        if ($stmt->execute()) {
            echo '<script>';
            echo 'var confirmAddMoreModules = confirm("Do you want to add more modules?");';
            echo 'if (confirmAddMoreModules) {';
            echo '   window.location.href = "StudentOrganizer.html";';
            echo '} else {';
            echo '    window.location.href = "StudentDetails.html";';
            echo '}';
            echo '</script>';
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

      
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Invalid Request";
}
?>
