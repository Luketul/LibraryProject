<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypozycz Ksiazke</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header 
        {
            background-color: #00aeff;
            color: #fff;
            width: 100%;
            padding: 10px 0;
            text-align: center;
        }

        main 
        {
            padding: 20px;
            width: 80%;
            max-width: 600px;
            margin: auto;
        }

        form 
        {
            display: flex;
            flex-direction: column;
        }

        input, textarea 
        {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
        }

        button 
        {
            padding: 10px 15px;
            background-color: #5cb85c;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .logo img
         {
            height: 200px;
            width: auto;
            margin-right: 100px;
        }

        button:hover 
        {
            background-color: #4cae4c;
        }

        
        hr 
        {
            width: 100%;
            margin: 20px 0;
        }
    </style>
<link rel="icon" href="linklogo.png" type="image/png">

<div class="container">
    <a href="main.php" class="logo">
        <img src="logo.jpg" height=200 weight=200 alt="Logo Biblioteki">
    </a>
    <img src="wypozyczksiazke.jpg" height=150 weight=100>
    <hr>
</head>
<body>
    <main>
        <form>
            <input type="text" id="name" name="name" placeholder="Imię" required>
            <input type="text" id="nazwisko" surname="nazwisko" placeholder="Nazwisko" required>
            <input type="email" id="email" name="email" placeholder="Twój email" required>
            <textarea id="message" name="message" rows="2" placeholder="Nazwa Książki" required></textarea>
            <button type="submit">Wyślij</button>
        </form>
    </main>
</body>
</html>
