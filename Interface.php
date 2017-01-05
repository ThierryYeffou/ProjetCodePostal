<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head >
	     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <title>Chercher ville Par code postale </title>
		 <link rel = "stylesheet" type="text/css" href="Interface.css">
	</head>
	<body>
	              <center><h1 class="btn btn-lg btn-primary"> Bienvenue sur la page web  <center></h1> <br/> <br/>
				  
	        <p>   
			      <center>
				            <h4><b><i> Cette page web permet de renseigner la/les ville(s) de France pour un code postale rentré dans le champ ci-dessous.<br/> 
	                        Exemple pour le code 72000 on obtient la ville Le Mans<br/></i></b></h4>
				  </center>
	        </p>
		<form  method = "post" action="AutoCompletion.php">
            <div class="panel panel-default">
                   <div class="panel-body">
                        <h2> <center> Pour un code postale donné trouver la/les ville(s) </center></h2>
                        <label for="exampleInputCode2"><h5>Code Postale</h5></label>
                        <input type="search"  placeholder="exemple 72000"  required=""  class="form-control" aria-required="true" name="codePostal"><br/>
	                   <center><button type="submit" class ="btn btn-warning btn-lg" style='width: 93px; height: 40px' name="valider">Valider</button></center>
	               </div>
            </div>
  
  
        </form>


	</body>
</html>
