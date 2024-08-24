<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add-module'])){
    $conn = mysqli_connect('localhost', 'root', '', 'student') or die("Connection failed: " . mysqli_connect_error());
    if(isset($_POST['module-code']) && isset($_POST['module-name']) && isset($_POST['module-credits']) && isset($_POST['class-hours'])){
        $module_c = $_POST['module-code'];
        $module_n =$_POST['module-name'];
        $module_Cre = $_POST['module-credits'];
        $class_h = $_POST['class-hours'];
      $sql = "INSERT INTO `users` (`module_name`, `module_code`, `module_credits`, `module_hours`) VALUES ('$module_c','$module_n','$module_Cre','$class_h')";
      $query = mysqli_query($conn, $sql);
    if ($query) {
    echo 'Entry Successful';
    }
}
}

?>