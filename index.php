
<!DOCTYPE html>
<html lang="en">
    <head>
        <? require "head.php" ?>
    </head>
<body>    
    <? require "header.php" ?>
    
    <?
        if (isset($_GET["page"])) {
            switch ($_GET["page"]) {
              case "start":
                require "start.php";
                break;
              case "register":
                require "register.php";
                break;
              case "login":
                require "login.php";
                break;
              case "catalog":
                require "catalog.php";
                break;
            }
        } else {
          require "start.php";
        }
    ?>

    <? require "footer.php" ?>
</body>
</html>