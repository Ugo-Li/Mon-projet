	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CONNEXION</title>
	</head>
	<body>
		<div class="container">

		<h2>Veulliez vous identifier s'il vous plait :</h2>

		<center>
		<form method="get" action="accueil.php">
			<input type="text" name="prenom" placeholder="prénom"><br>
			<input type="text" name="nom" placeholder="nom"><br><br></center>
			
			<h3>Veuillez sécletionner votre sexe :</h3>

<style>
.button {
  background-color: #555555; /* Black */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button:hover {
  background-color: #555555;
  color: white;
}
</style>
	</head>
	<center>
				<img src="img/boy.png" width="30px">
				<input type="radio" name="genre" value="boy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="img/girl.png" width="30px">
				<input type="radio" name="genre" value="girl"><br><br></center>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
    }
    h1 {
      text-align: center;
      color: #333;
    }
    p {
      color: #555;
    }
    label {
      margin-right: 10px;
    }
.button {
  background-color: #555555; /* Black */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button:hover {
  background-color: #555555;
  color: white;
}
</style>

				
<center>
<button type="reset" class="button">annuler</button>
<button type="submit" class="button button" value="valider">connexion</button></center>
		</form>
	
	</body>
	</html>

