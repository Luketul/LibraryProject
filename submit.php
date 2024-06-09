<?php
$conn = new mysqli("localhost", "root", "", "biblioteka");

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$surname = $_POST['nazwisko'];
$email = $_POST['email'];
$book_title = $_POST['message'];

$name = $conn->real_escape_string($name);
$surname = $conn->real_escape_string($surname);
$email = $conn->real_escape_string($email);
$book_title = $conn->real_escape_string($book_title);

$sql = "INSERT INTO borrow_books (name, surname, email, book_title) VALUES ('$name', '$surname', '$email', '$book_title')";

if ($conn->query($sql) === TRUE) 
{
    echo "Wniosek został złożony pomyślnie!";
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
