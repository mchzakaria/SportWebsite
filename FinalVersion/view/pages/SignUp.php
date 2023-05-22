<?php
  $home='../';
  include $home."modele/Session.php";

  if(isset($_POST['submit'])){
    $nom=$_POST['Nom'];
    $prenom=$_POST['Prenom'];
    $email=$_POST['Email'];
    $date_Naissance=$_POST['date_Naissance'];
    $password=$_POST['Password'];
    $password_confirm=$_POST['Password_conf'];
    $sexe=$_POST['sexe'];
    
  
    //Check if it exist :
    if(!$user->emailExists($email)){
      $response = $user->inscription($nom, $prenom, $email, $date_Naissance, $password,$password_confirm,$sexe);
      $vp= $user->validatePassword($password,$password_confirm);
      if($response){
        $_SESSION['alert']="Well signed up, please follow this link to login. 
        <a href='". $home . "pages/login.php'>Click here!</a>";
        $_SESSION['alert_type']="success";
      }
      
      elseif($vp==false){
        $_SESSION['alert']="password wrong, please try again";
        $_SESSION['alert_type']="error";
      }

  
      }
      else{
        $_SESSION['alert']="Something wrong occured while signing in, please try again";
        $_SESSION['alert_type']="error";
      }
    }else{
      $_SESSION['alert']="The email is already in use, please follow this link to login. 
      <a href='". $home . "pages/login.php'>Click here!</a>";
      $_SESSION['alert_type']="error";
    }
    

  

  include $home.'composantes/header.php';
?>


<main>
  <div class="form1-container">
    <h2 class="SignUp-title">Sign Up</h2>

    <form class="SignUp-form" method="Post" action="SignUp.php"> 
    <div>
        <label for="Nom">Nom </label>
        <input
              id="Nom"
              type="Nom"
              placeholder="User"
              name="Nom"
              required
              />
      </div>
      <div>
        <label for="Prenom">Prenom </label>
        <input
              id="Prenom"
              type="Prenom"
              placeholder="User"
              name="Prenom"
              required
              />
      </div>

      <div>
        <label for="email">Email </label>
        <input
              id="email"
              type="email"
              placeholder="me@example.com"
              name="Email"
              required
              />
      </div>

      <div>
        <label for="password">Password </label>
        <input
              id="password"
              type="password"
              placeholder="password"
              name="Password"
              required
              />
      </div>
      <div>
        <label for="Password_conf">Confirmation Password</label>
        <input
              id="Password_conf"
              type="password"
              placeholder="Password_confirm"
              name="Password_conf"
              required
              />
      </div>
      
      
      <div>
        <label for="date_Naissance">Date naissance </label>
        <input
              id="date_Naissance"
              type="date"
              placeholder="Date naissance"
              name="date_Naissance"
              min="1900-01-01" max="<?php echo date('Y-m-d', strtotime('-5 years')); ?>" 
              required
              />
      </div>
      <div>
  <label for="sexe">Sexe :</label>
  <div class="radio-container">
  <input type="radio" name="sexe" value="homme" id="sexe_homme" required>
  <label for="sexe_homme">Homme</label>
  </div>
  <div class="radio-container">
  <input type="radio" name="sexe" value="femme" id="sexe_femme" required>
  <label for="sexe_femme">Femme</label>
  </div>
</div>
      
      <button class="btn btn--form" name="submit" type="submit" value="Sign Up">
        Sign Up
       
      </button>
     
    </form>
  </div>
 
</main>

<?php
  include $home.'composantes/footer.php';
?>

