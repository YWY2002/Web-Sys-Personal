<!DOCTYPE html>
<html lang="en">
    <head>
        <title>World of Pets</title>
        <?php
            include "inc/head.inc.php";
            session_start();
        ?>
    </head>
    <body>
        <?php
            include "inc/nav.inc.php";
        ?>
        <main class="container">
            <?php if (isset($_SESSION['message'])) {
                echo "<hr>";            }
            ?>
            <div class="mt-5 mb-5">
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                } else {
                    include "inc/register.inc.php";
                }
                ?>
            </div>
        </main>
        <?php
            include "inc/footer.inc.php";
        ?>
    </body>
</html>