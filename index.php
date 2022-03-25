<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="POST">
        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="email">Courriel :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="tel">Telephone :</label>
            <input type="tel" id="tel" name="tel" required>
        </div>
        <div>
            <label for="sujet">Sujet :</label>
            <select name="sujet" id="sujet" required>
                <option value=""></option>
                <option value="sujet1">Sujet 1</option>
                <option value="sujet2">Sujet 2</option>
                <option value="sujet3">Sujet 3</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div class="button">
            <button type="submit" name="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>