<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" method="post">
        <h2 class="form-login-heading">Connexion</h2>
        <div class="login-wrap">
         
          <label for="nameInput">Votre nom</label>
          <input type="text" class="form-control" id="nameInput" name="login" placeholder="Nom d'utilisateur" autofocus>
         
          <label for="passwordInput">Mot de passe</label>
          <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Mot de passe">
          
          <button class="btn btn-theme btn-block" type="submit">
            <i class="fa fa-lock"></i> Connexion
        </button>
       </div>
      </form>
    </div>
  </div>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
