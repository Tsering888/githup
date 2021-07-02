<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
     
    
    <title>vérification de formulaire</title>
</head>
<body>
  <div class="container">
    <img src="IMAGES/jarditou_logo.jpg" alt="logo de jarditoo" titre="jarditoo logo" width="200" height="90">
    <aside class=" h2 float-right mr-5 mt-4">tout le jardin</aside>
        

                <!--NAV  -->
                    
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <a class="nav-link" href="jarditoo.html">Jarditoo.com</a>
            <ul class="navbar-nav mr-auto">
                
                 
               
                <li class="nav-item">
                    <a class="nav-link" href="bootstrap-index.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bootstrap-tableau.html">Tableau</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bootstrap-contact.html">contact</a>
                </li>
            </ul>


                 <!-- SEARCH BUTTAN -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div> 
     </nav>
     <img src="IMAGES/promotion.jpg" width="100%" alt="Promotion" title="Promotion">



           <!-- FORMULAIRE -->
     <fieldset>
            <form name="form" id="form" action="http://bienvu.net/script.php" method="POST"> <br>
                <!-- action="http://bienvu.net/script.php" method="POST"> -->
            <h4>vos coordonnées</h4>
           
              <label for="nom">Votre nom</label>
              <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" class="form-control"><br>
              <span id="Error" style="color: crimson;"></span><br>
               <?php
              if (empty($_POST["nom"])) 
    {
        echo "Le nom doit être renseigné";
    } 
             ?>
              <label for="prénom"> Votre prénom</label>
              <input type="text" id="prénom" name="prenom" class="form-control" ><br>
              <span id="pError" style="color: crimson;"></span><br>
              <label for="sexe">sexe*:</label>
              <input type="radio" name="sexe" value="Féminin" id="femme" checked>Féminin
              <span id="Error" style="color: crimson;"></span><br>
              <input type="radio" name="sexe" value="Masculin" id="homme" >Masculin
              <span id="Error" style="color: crimson;"></span><br>
                 

    
              <br><br><br>
    
                <label for="ddn">Date de naissance:</label>
                <input type="date" id="ddn" name="ddn" class="form-control"><br>
                <span id="Error" style="color: crimson;"></span><br>
                <label for="CP">Code postal*:</label>
                <input type="number" id="CP" name="CP" class="form-control"><br>
                <span id="Error" style="color: crimson;"></span><br>
                
                <label for="adresse">Adresse*:</label>
                <input type="text"  id=adresse name="adresse" class="form-control"> <br>
                <span id="Error" style="color: crimson;"></span><br>
                
                <label for="ville">Ville*:</label>
                <input type="text" id="ville" name="ville" class="form-control"><br>
                <span id="Error" style="color: crimson;"></span><br>
                
                <label for="amil">Email*:</label>
                <input type="email" id="mail" name="mail" placeholder="dave.loper@gmail.com"  class="form-control">
                <span id="Error" style="color: crimson;"></span><br>
    
       </fieldset><br><br>
    
    <fieldset>
       <h4>Votre demande</h4> 
    
    
           <label for="sujet"> Sujet*:</label>
           <select id="sujet" name="sujet" class="form-control"> 
               <option value=""> veille selectionez un sujet*:</option>
               <option value="mes commande">mes commendes</option>
               <option value="question"> Question sur un produit</option>
               <option value="réclamation">Réclamation</option>
               <span id="pError" style="color: crimson;"></span><br>
           </select>
           <br>
    
           <label for="question"> Votre questions*:</label>
           <textarea id="question"  class="form-control">
    </textarea>
    <span id="Error" style="color: crimson;"></span><br>
    
    
        </fieldset>
           <br>
           <input type="checkbox" >
           <label>J'accepte le traitement informatique de ce formulaire</label>
           <br><br>
           
           <input type="submit" value="Envoyer" id="Envoyer" class="btn-primary">
           <input type="submit" value="Annuler" class="btn-primary">
          
        </form>
    </fieldset>
    





     <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-3">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="navabrSupportedContent">
        
            <ul class="navbar-nav mr-auto">
                
             <li class="nav-item">
                    <a class="nav-link" href="https://ncode.amorce.org/ressources/Pool/TB/WEB_CSS/CSS_07_Responsive.html">ncode.amorce.org</a>
                </li>
                <li class="nav-item">
                   
                    <a class="nav-link" href="https://www.google.com/search?q=w3schools&rlz=1C1GCEA_enFR953FR953&oq=3wschool&aqs=chrome.1.69i57j0i10l9.5773j0j7&sourceid=chrome&ie=UTF-8 ">3wschool</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link"href="https://www.youtube.com/">youtube</a>
                </li>
            </ul>
    
        
        </div>
        </nav>
        </div>
        <script src="verification-form.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>