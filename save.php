<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=online_courses', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['courseSelect'];
    $category = $_POST['catSelect'];


    $stmt = $pdo->prepare("INSERT INTO registration_form (firstname, lastname, email, phone, course, category, date_joined)
                            VALUES (:firstname, :lastname, :email, :phone, :course, :category, :date)");
    $stmt->bindValue(':firstname', $firstname);
    $stmt->bindValue(':lastname', $lastname);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':course', $course);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':date', date('Y-m-d H:i:s'));
    $stmt->execute();
endif;


?>