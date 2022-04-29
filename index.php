<?php
require "connection.php";
header('Content-language: en-GB');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Us</title>
</head>

<body class="bg-[#0d8187]">
    <div class="flex justify-center">
        <form class="" action="test.php" method="post">

            <div class="flex p-2 gap-2">
                <div>
                    <input class="box-content p-1 w-48 border-2 border-[#303030]" type="text" name="name" placeholder="Votre nom" required>
                </div>
                <div>
                    <input class="box-content p-1 w-48 border-2 border-[#303030]" type="text" name="lastname" placeholder="Votre prénom" required>
                </div>
            </div>

            <div class="flex p-2 gap-2">
                <div class="flex justify-around box-content p-1 w-48 border-2 border-[#303030]">
                    <div>
                        <label>Homme</label>
                        <input class="border-[#303030]" type="radio" name="gender" value="H">
                    </div>
                    <div>
                        <label>Femme</label>
                        <input class="border-[#303030]" type="radio" name="gender" value="F">
                    </div>
                </div>
                <div>
                    <input class="box-content p-1 w-48 border-2 border-[#303030]" type="text" name="mail" placeholder="Votre adresse mail" required>
                </div>
            </div>

            <div class="flex p-2 gap-2">
                <div>
                    <input class="box-content p-1 w-48 border-2 border-[#303030]" type="text" name="country" placeholder="Votre pays">
                </div>
                <div>
                    <select name="subject" class="box-content p-1 w-48 border-2 border-[#303030]">
                        <option value="autres">Sujet</option>
                        <option value="Abonnement">Abonnement</option>
                        <option value="Carrière">Carrière</option>
                        <option value="Matériel">Matériel</option>
                    </select>
                </div>
            </div>
            <div class="p-2">
                <textarea class="box-content p-1 h-[5rem] w-[25.25rem] border-2 resize-none border-[#303030]" type="text" name="message" placeholder="Entrez votre message ici" required></textarea>
            </div>
            <div class="flex justify-center">
                <input class="box-content w-[5rem] p-1 border-2 bg-white border-[#303030]" type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>

</html>