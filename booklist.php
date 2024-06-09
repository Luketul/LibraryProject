<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Książek</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fff; margin: 0; padding: 0; text-align: center; }
        main { padding: 20px; width: 80%; max-width: 600px; margin: auto; }
        .logo img { height: 200px; width: auto; margin-right: 100px; }
        ul { list-style-type: none; padding: 0; }
        li { background-color: #fff; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; }
        hr { width: 100%; margin: 20px 0; }
    </style>
    <link rel="icon" href="linklogo.png" type="image/png">
</head>
<body>
    <div class="container">
        <a href="main.php" class="logo">
            <img src="logo.jpg" height=200 weight=200 alt="Logo Biblioteki">
        </a>
        <img src="listaksiazek.jpg" height=150 weight=100>
    </div>
    <hr>
    <main>
        <ul>
            <?php
                $conn = new mysqli("localhost", "root", "", "biblioteka");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT title, author FROM books";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "<li>" . $row["title"]. " - " . $row["author"]. "</li>";
                    }
                } else  
                {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </ul>
    </main>
</body>
</html>
