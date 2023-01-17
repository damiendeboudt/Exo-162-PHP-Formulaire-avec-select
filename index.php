<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 162</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="container">
  <h1>Formulaire 1</h1>
  <form action="user.php" method="get">
    <div class="form">
      <label for="username">Nom</label>
      <input type="text" id="username" name="username">
    </div>
    <div class="form">
      <label for="name">Prenom</label>
      <input type="text" id="name" name="name">
    </div>
    <input type="submit" name="Envoyer">
  </form>
</div>

<div>
  <h1>Formulaire 2</h1>
  <form action="user.php" method="post">
    <div class="form">
      <label for="username1">Nom</label>
      <input type="text" id="username1" name="username">
    </div>
    <div class="form">
      <label for="name1">Prenom</label>
      <input type="text" id="name1" name="name">
    </div>
    <input type="submit" name="Envoyer">
  </form>
</div>

    <h1>Formulaire 3</h1>
  <form action="index.php" method="post">
    <div class="form">
      <label for="Gender">Votre sexe</label>
      <select name="Genre" id="Gender">
        <option value="Male">Homme</option>
        <option value="Female">Femme</option>
      </select>
    </div>
    <div class="form">
      <label for="username2">Nom</label>
      <input type="text" id="username2" name="username">
    </div>
    <div class="form">
      <label for="name2">Prenom</label>
      <input type="text" id="name2" name="name">
    </div>
      <div>
          <input type="file" name="file">
          <input type="submit" name="send" id="send">
      </div>
    <input type="submit" name="Envoyer">
  </form>
</div>

</body>
</html>