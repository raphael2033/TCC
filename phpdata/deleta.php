<?php
// Include your database connection file
include "bancotinta.php";

// Check if 'deleteid' parameter is set in the URL
if(isset($_GET['deleteid'])) {
    // Get the 'email' from the URL
    $email = $_GET['deleteid'];

    // Construct a DELETE query and execute it
    $sql = "DELETE FROM observador WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado) {
        echo "User with email '$email' has been deleted successfully.";
    } else {
        echo "Error deleting user: " . mysqli_error($conexao);
    }
} else {
    echo "No user specified for deletion.";
}
?>
    <meta http-equiv="refresh" content="0.1;tintasecantephp.php">