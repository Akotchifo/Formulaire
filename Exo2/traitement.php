<?php
/*echo"<pre>";
echo var_dump($_POST) ;
echo "</pre>";
*/

// function authentificat($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// function verifVide($nom, $mail, $msg) {
//     if(empty($nom)){
//        $errNom = "Renseignez un nom valide ";
//     }elseif(empty($mail)){
//         $errMail = "Renseignez un email vailide";
//     }elseif(empty($msg)){
//          $errMessage = "Veuillez inserer un message svp";
//     }else{
//         return ["nom"=> $nom,"mail"=> $mail,"msg"=> $msg];
//     }
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = authentificat($_POST["nom"]);
//     $email = authentificat($_POST["email"]);
//     $message = authentificat($_POST["message"]);
//     $user = verifVide($name, $email, $message);
//     // echo"Nom :  ".$user["nom"]. "<br>";
// }

session_start();  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);

    header('Location: home.php');
    exit();
}


