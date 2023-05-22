<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$home = '../';

include $home . "modele/MyUser.php";
include $home . "modele/Session.php";

// //pour la conexion je dois verfier dans la premier temps est ce que j'ai les variable 
// if (!$_SESSION['connecter']) {
//   if (!empty($_POST['email']) and !empty($_POST['password'])) {


//     //* la fonction valide pour chercher est-ce que ce user existe
//     $userInfo = false;

//     // if(!strcmp($_POST['email'],"hajar@gmail.com") && !strcmp($_POST['password'],"123456") )
//     //     $userInfo = true;

//     $userInfo = $user->valide($_POST['email'], $_POST['password']);
//     if ($userInfo) {

//       $_SESSION['connecter'] = true;

//       $_SESSION['id-user'] = $userInfo['id-user'];
//       $_SESSION['Nom'] = $userInfo['Nom'];
//       $_SESSION['Prenom'] = $userInfo['Prenom'];
//       $_SESSION['Email'] = $userInfo['Email'];

//       $_SESSION['role'] = $userInfo['role'];
  
      
//       $_SESSION['date_Naissance'] = $userInfo['date_Naissance'];
//       $_SESSION['Date_insc'] = $userInfo['Date_insc'];

//       $_SESSION['alert'] = "Vous êtes connectés !";
//       $_SESSION['alert_type']="success";

//       echo "Connected Succesfully mtf";
//       // header("Location: $home");
//       exit;


//     } else {
//       $_SESSION['alert'] = "E-mail ou mot de passe incorrect!";
//       $_SESSION['alert_type']="error";
//     }
//   }
// }


if (isset($_POST['submit'])) {
    $user = new User();
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($user->valide($email , $password)){
      if($user->){
        echo "Loged in";
      }
      
    }
    else{
      echo "no on logged in";
    }
}

























include $home . 'composantes/header.php';

?>


<main>
  
  <div class="form-container">
    <h2 class="login-title">Log in</h2>

    <form class="login-form" method="Post">
      <div>
        <label for="email">Email </label>
        <input id="email" type="email" placeholder="me@example.com" name="email" required />
      </div>

      <div>
        <label for="password">Password </label>
        <input id="password" type="password" placeholder="password" name="password" required />
      </div>

      <button class="btn btn--form" name = "submit" type="submit" value="Log in">
        Log in
      </button>
    </form>
  </div>
</main>

<?php
include $home . 'composantes/footer.php';
?>
</body>
</html>