<?php

$conn = new mysqli('localhost', 'root', '', 'studentdb');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if (isset($_GET['module_code'])) {
    
    $selectedModule = $_GET['module_code'];

    $query = "SELECT * FROM studyorganizer WHERE module_code = '$selectedModule'";
    $result = $conn->query($query);

    if ($result) {
        $relatedData = $result->fetch_assoc();

        
        $moduleCredits = $relatedData['module_credits'];
        $numWeeks = $relatedData['num_weeks'];
        $classHours = $relatedData['class_hours'];
        $selfStudyHours = round(($moduleCredits * 10) / $numWeeks - $classHours);

        
       $relatedData['self_study_hours'] = $selfStudyHours;

        
        $hoursStudied = $relatedData['hours_studied']; 
        $selfStudyRemaining = $selfStudyHours- $hoursStudied;
       $relatedData['self_study_remaining'] = $selfStudyRemaining;

        
        echo json_encode($relatedData);
    } else {
        echo json_encode(array()); 
    }
} else {

    $query = "SELECT module_code, module_name FROM studyorganizer";
    $result = $conn->query($query);

    if ($result) {
        $moduleData = array();

        while ($row = $result->fetch_assoc()) {
            $moduleData[] = $row;
        }

        echo json_encode($moduleData);
    } else {
        echo json_encode(array());
    }
}

$conn->close();
?>
