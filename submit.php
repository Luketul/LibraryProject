<?php
$conn = new mysqli("localhost", "root", "", "biblioteka");

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['message'])) 
{
    $sql = "INSERT INTO borrow_books (name, surname, email, book_title) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['message']);
    
    if ($stmt->execute()) 
    {
        echo "Wniosek został złożony pomyślnie!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $stmt->close();
} 
else 
{
    echo "Proszę wypełnić wszystkie wymagane pola.";
}

$conn->close();
?>
