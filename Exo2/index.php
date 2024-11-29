<?php

session_start();


/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    verifVide($_POST["nom"], $_POST["email"], $_POST["message"])
    
    $nom = htmlspecialchars(stripslashes(trim($_POST["nom"])));
    $email = htmlspecialchars(stripslashes(trim($_POST["email"])));
    $message = htmlspecialchars(stripslashes(trim($_POST["message"])));
    

    $user = ["nom" => $nom, "email" => $email, "message" => $message];
    if (empty($nom)) {
        $errNom = "Renseignez un nom valide ";
    }
    if (empty($email)) {
        $errMail = "Renseignez un email valide";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errMail = "L'adresse email n'est pas valide";
    }
    if (empty($message)) {
        $errMessage = "Veuillez insérer un message svp";
    }
        
}*/
// function verifVide()
// {
//     $errNom = $errMail = $errMessage = '';
//     $user = null;

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $nom = htmlspecialchars(stripslashes(trim($_POST["nom"])));
//         $email = htmlspecialchars(stripslashes(trim($_POST["email"])));
//         $message = htmlspecialchars(stripslashes(trim($_POST["message"])));

//         if (empty($nom)) {
//             $errNom = "Renseignez un nom valide ";
//         }

//         if (empty($email)) {
//             $errMail = "Renseignez un email valide";
//         } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $errMail = "L'adresse email n'est pas valide";
//         }

//         if (empty($message)) {
//             $errMessage = "Veuillez insérer un message svp";
//         }

//         if (empty($errNom) && empty($errMail) && empty($errMessage)) {
//             $user = ["nom" => $nom, "email" => $email, "message" => $message];
//         }

//         return [$user, $errNom, $errMail, $errMessage];
//     }
//     return [null, $errNom, $errMail, $errMessage];
// }

// list($user, $errNom, $errMail, $errMessage) = verifVide();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout d'utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Ajouter un utilisateur</h2>
        <form action="traitement.php " method="POST">

            <div class="form-group">
                <label for="nom">Nom complet</label>
                <input type="text" id="name" name="name" placeholder="Entrez le nom complet" value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : ''; ?>">
                <?php
                if (!empty($errNom)) {
                    echo "<div class='error'>$errNom</div>";
                }
                ?>
            </div>

            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="text" id="email" name="email" placeholder="Entrez une adresse email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                <?php
                if (!empty($errMail)) {
                    echo "<div class='error'>$errMail</div>";
                }
                ?>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
                <?php
                if (!empty($errMessage)) {
                    echo "<div class='error'>$errMessage</div>";
                }
                ?>
            </div>
                
            <div class="form-footer">
                <button type="submit">Ajouter l'utilisateur</button>
            </div>
        </form>
    </div>

</body>

</html>