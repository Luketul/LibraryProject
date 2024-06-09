<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka Tuliszkiewicz</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fff; margin: 0; padding: 0; text-align: center; }
        .container { display: flex; justify-content: space-between; align-items: center; padding: 20px; }
        .logo img { height: 200px; width: 180px; }
        .buttons { flex: 1; }
        .buttons a { padding: 30px 120px; margin: 30px; background-color: #00aeff; color: #fff; font-size: 16px; text-decoration: none; }
        .buttons a:hover { background-color: #0094cc; }
        hr { width: 100%; margin: 10px; }
    </style>
    <link rel="icon" href="linklogo.png" type="image/png">
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="main.php"><img src="logo.jpg" alt="Logo Biblioteki"></a>
        </div>
        <div class="buttons">
            <a href="booklist.php" class="button">Lista Książek</a>
            <a href="wypozyczksiazke.php" class="button">Wypożycz Książke</a>
            <a href="contact.php" class="button">Kontakt</a>
        </div>
    </div>
    <hr>
    <img src="biblioteka1.jpeg" height=500 width=100%>
    <img src="biblioteka2.jpeg" height=600 width=100%>
</body>
</html>
