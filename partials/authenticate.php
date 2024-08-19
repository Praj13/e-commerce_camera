<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];


$sql="select username and password from admin";

    if($_SESSION['username'] = $username && $_SESSION['password']=$password){
        header("Location: partials/admin_dashboard.php");
    
    }
 else {
    echo "<span class='error-message'>Invalid username or password </span>";
}
}

// Close database connection
$conn->close();

?>