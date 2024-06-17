<?php
session_start();
require("connect.php");
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <title>Kalkulator</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
    <div id="all">
        <div id="header">
            <div id="logo">
                <a href="../index.php" class="logolink">
                   
                    <span class="logotekst1">Kalkulator Walut</span>
                </a>
            </div>
        </div>
        <div id="navigation">
            <ol>
                <li><a href="../index.php">Strona Główna</a></li>
                
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                    echo "<li><a href="."#".">".$_SESSION['Username']."</a>
                        <ul>
                            <li><a href="?><?php
                                if($_SESSION['Username']=='admin')
                                {

                                    echo "adminpage.php";

                                }
                                else
                                {
                                    echo "userpage.php";
                                }
                            ?><?php echo">Profil</a></li>
                            <li><a href="."settings.php".">Ustawienia</a></li>
                            <li><a href="."logout.php".">Wyloguj</a></li>
                            </ul></li>";
                }
                else
                {
                    echo "<li><a href="."login.php".">Logowanie</a></li>";
                }
                ?>
            </ol>
        </div>
        <div id="content">
            <div id="user">
                <h1>
                    <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            echo "Witaj ".$_SESSION['Username'];
                        }
                        else {
                            echo "Nie powinno cię tu być, wróć tu gdy się zalogujesz";
                        }           
                    ?>
                </h1>
            </div>

            <div>

            <?php
                include("userdetails.php");
            ?>

            </div>

        </div>
        <div id="footer">
            2022&copy;Marcin Piasek, Dawid Piątek. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
