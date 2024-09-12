<?php
$servidor="localhost";
$username="root";
$password="";
$dbname="tcc";

$conexao = mysqli_connect($servidor,$username,$password)  or die ("Não foi possível conectar");
mysqli_select_db( $conexao, $dbname);


// Check if 'deleteid' parameter is set in the URL
if(isset($_GET['deleteid'])) {
    // Get the 'Nome' from the URL
    $Nome = $_GET['deleteid'];

    // Construct a DELETE query and execute it
    $sql = "DELETE FROM horario WHERE id = '$Nome'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado) {
        echo "User with Nome '$Nome' has been deleted successfully.";
    } else {
        echo "Error deleting user: " . mysqli_error($conexao);
    }
} else {
    echo "No user specified for deletion.";
}
?>
    <meta http-equiv="refresh" content="0.000000001;comentario.php">