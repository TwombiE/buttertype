<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $profile_image = '';

    // Bild hochladen
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Überprüfen, ob es sich um ein Bild handelt
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
                $profile_image = $target_file;
            } else {
                echo "Fehler beim Hochladen des Bildes.";
            }
        } else {
            echo "Die Datei ist kein Bild.";
        }
    }

    $sql = "INSERT INTO users (username, password, profile_image) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $profile_image);

    if ($stmt->execute()) {
        echo "Registrierung erfolgreich!";
    } else {
        echo "Fehler: " . $stmt->error;
    }
}
?>

<form method="post" action="register.php" enctype="multipart/form-data">
    Benutzername: <input type="text" name="username" required><br>
    Passwort: <input type="password" name="password" required><br>
    Profilbild: <input type="file" name="profile_image" accept="image/*"><br>
    <input type="submit" value="Registrieren">
</form>
