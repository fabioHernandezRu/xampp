<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // El usuario por defecto de MySQL es 'root'
$password = ""; // La contraseña por defecto es vacía
$dbname = "test2";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Salida de datos para cada fila
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre de usuario: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>