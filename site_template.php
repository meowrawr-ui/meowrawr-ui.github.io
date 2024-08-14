<!DOCTYPE html>
<?php
session_start();
if (substr($_SERVER['HTTP_HOST'],0,3) == "es.") {
  $lang = "es";
} else {
  $lang = "en";
}
$str = array (  "en"  =>  array ( "home" => "Home",
                                  "config" => "Config",
                                  "search" => "Search",
                                  "cart" => "Cart",
                                  "product" => "Product",
                                  "checkout" => "Checkout",
                                  "hi" => "Hi",
                                  "login" => "Enter",
                                  "logout" => "Logout",
                                  "user" => "Login",
                                  "pass" => "Pass",
                                  "create_account" => "Create account",
                                  "username" => "Username",
                                  "email" => "Email",
                                  "old_password" => "Old password",
                                  "new_password" => "New password",
                                  "change_password" => "Change password",
                                  "delete_account" => "Delete account",
                                  "account_to_delete" => "Account to delete",
                                  "change_campaign" => "Change campaign",
                                  "choose_right_column_campaign" => "Choose right column campaign",
                                  "choose_left_column_campaign" => "Choose left column campaign",
                                  "create_campaign" => "Create campaign",
                                  "image_of_new_campaign" => "Image of new campaign",
                                  "text_of_new_campaign" => "Text of new campaign",
                                  "name_of_new_campaign" => "Name of new campaign",
                                  "delete_campaign" => "Delete campaign",
                                  "choose_campaign_to_delete" => "Choose campaign to delete",
                                  "logistics" => "Logistics",
                                  "stock_of_products" => "Stock of products",
                                  "exp_date" => "EXP date",
                                  "price" => "Price",
                                  "stock" => "Stock",
                                  "order" => "Order",
                                  "no_product_chosen_you_can_use_the_search_tab" => "No product chosen.  You can use the Search tab!",
                                  "ban_account" => "Ban account",
                                  "account_to_ban" => "Account to ban"
                                     ),
                "es"  =>  array ( "home" => "Inicio",
                                  "config" => "Configuración",
                                  "search" => "Buscar",
                                  "cart" => "Carro",
                                  "product" => "Producto",
                                  "checkout" => "Pago",
                                  "hi" => "Hola",
                                  "login" => "Iniciar sesion",
                                  "logout" => "Cerrar sesion",
                                  "user" => "Usuario",
                                  "pass" => "Contraseña",
                                  "create_account" => "Crear cuenta",
                                  "username" => "Nombre de usuario",
                                  "email" => "Correo electronico",
                                  "old_password" => "Contraseña antigua",
                                  "new_password" => "Nueva contraseña",
                                  "change_password" => "Cambiar contraseña",
                                  "delete_account" => "Eliminar cuenta",
                                  "account_to_delete" => "Cuenta a eliminar",
                                  "change_campaign" => "Cambiar campaña",
                                  "choose_right_column_campaign" => "Escoje la campaña de la columna derecha",
                                  "choose_left_column_campaign" => "Escoje la campaña de la columna izquierda",
                                  "create_campaign" => "Crear campaña",
                                  "image_of_new_campaign" => "Imagen de nueva campaña",
                                  "text_of_new_campaign" => "Texto de nueva campaña",
                                  "name_of_new_campaign" => "Nombre de nueva campaña",
                                  "delete_campaign" => "Eliminar campaña",
                                  "choose_campaign_to_delete" => "Campaña a eliminar",
                                  "logistics" => "Logistica",
                                  "stock_of_products" => "Stock de productos",
                                  "exp_date" => "Fecha de expiracion",
                                  "price" => "Precio",
                                  "stock" => "Unidades disponibles",
                                  "order" => "Pedir una orden",
                                  "no_product_chosen_you_can_use_the_search_tab" => "No se ha escojido un producto.  Puedes usar la pestaña de busqueda!",
                                  "ban_account" => "Suspender cuenta",
                                  "account_to_ban" => "Cuenta a suspender"
                                )
              );


$pagename = basename($_SERVER['PHP_SELF']);
$index = array (
  array($str[$lang]["home"],'./','#ff0000'),
  array($str[$lang]["config"],'./config.php','#ff8000'),
  array($str[$lang]["search"],'./search.php','#ffff00'),
  array($str[$lang]["cart"],'./','#00ff00'),
  array($str[$lang]["product"],'./product.php','#0000ff'),
  array($str[$lang]["checkout"],'./','#8000ff')
);
$page_index = "";
for ($i = 0; $i < count($index); $i++){
$tempstr = "<div class='navlink' style='background-color: " . $index[$i][2] . ";'><a href='" . $index[$i][1] . "'>" . $index[$i][0] . "</a></div>";
if ("$pagename" == $index[$i][1]) {$page_title = $index[$i][0]; $tempstr = $page_title;}
$page_index = $page_index . "$tempstr";
}
$footer = '
        </div>
        <div class="productrow">
          <div class="singlecolumn">
            <img src="sf5.gif">           
            <img src="an_suohei.gif">
            <img src="danielkitty.gif">
            <img src="Fo_Fo_the_kitty.gif">
            <img src="an_ban.gif">
            <img src="an_hana.gif">
            <img src="cat_pointer.gif">
            <img src="choco.gif">
            <img src="hello.gif">
            <img src="cute_cat.gif">
            <img src="cat_.gif">
            <img src="cutiecat.gif">
            <img src="sf6.gif">
          </div>
        </div>
    
      </div>
      
    </div>
  </center>

  <!--Music script-->
  <script src="./nsf-player/libgme/libgme.js"></script>
  <script src="./nsf-player/index.js"></script>
  <script>
    let musicbox = document.getElementById("musictoggle");
    const nsfPlayer = createNsfPlayer(); // An audio context is created for you.
    // Add an event handler for the click event
    musicbox.addEventListener("click", musicfunction);
    function musicfunction(){
      if (document.getElementById("musictoggle").innerHTML == "<img src=\"off.png\">") {
        nsfPlayer.play("./Little Nemo - The Dream Master [Nemo - Pajama Hero] (1990-09)(Capcom).nsf", 10);
        document.getElementById("musictoggle").innerHTML = "<img src=\"on.png\">";
      } else {
        nsfPlayer.stop();
        document.getElementById("musictoggle").innerHTML = "<img src=\"off.png\">";
      }
    }
  </script>
  <!--End of music script-->

</body>
</html>
';
function connect_to_db($DB_USER, $DB_PASSWORD) {
  ini_set('display_errors', 1);
  error_reporting(-1);

  $DB_NAME = 'meowrawr_db';
  $DB_HOST = 'localhost';
  $link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD);

  if (!$link) {
      die('Could not connect: ' . mysqli_error($link));
  }

  $db_selected = mysqli_select_db($link, $DB_NAME);

  if (!$db_selected) {
      die('Cannot access' . $DB_NAME . ': ' . mysqli_error($link));
  }
  return $link;
}
function disconnect_from_db($link) {
  mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Meowrawr⚡ shop</title>
  <link rel="stylesheet" href="modern-normalize.css">
  <link rel="stylesheet" href="stylish.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  
  

</head>
<body>
  <center>
    <img src="kittysma.gif" height="90px">
    <img src="TituloIMG0001.png">
    <img src="movingpocha.gif">
    <div id="musictoggle"><img src="off.png"></div>
    <div id="mainbox">
      <div id="indexcolumn">
        <nav>
<?php echo "$page_index"; ?>
        </nav>
        <?php 
          if(!isset($_SESSION['login_user'])){
          echo '<form action="" method="POST">
          <label for="login_user"><img src="sf3.gif">' . $str[$lang]["user"] . ':<img src="sf4.gif"></label>
          <input type="username" id="login_user" name="login_user" required="required">
          <label for="login_pass"><img src="sf2.gif">' . $str[$lang]["pass"] . ':<img src="sf.gif"></label>
          <input type="password" id="login_pass" name="login_pass" required="required">
          <input type="submit" value="Submit" name="' . $str[$lang]["login"] . '">
        </form>';
         } else {
          if(array_key_exists('logout_button', $_POST)) { 
            session_destroy();
            header("Location: " . basename($_SERVER['PHP_SELF']));
          } 

          echo $str[$lang]["hi"] . ", " . $_SESSION['login_user'] . '!<br>
          <form method="post"> 
           <input type="submit" name="logout_button"
            value="' . $str[$lang]["logout"] . '" /> 
          </form> ';
          
        }
        ?>
         
        <img src="mail.gif">
      </div>
      <div id="productcolumn">

          <?php
          //echo "<script>alert(\"" . $_SERVER['HTTP_HOST'] . "\");</script>";
          /*$bytes = random_bytes(11);
$message = $message . bin2hex($bytes) . "<br>";
$message = $message .crypt('meowrawr',"$2y$09$" . bin2hex($bytes)) . "<br>";*/
            $message = ""; 
            if (isset($_POST["login"]))   {
              $DB_USER = "meowrawr_db-users_r";
              $DB_PASSWORD ='password';
              $dbc1 = connect_to_db($DB_USER, $DB_PASSWORD);
              $DB_USER = "meowrawr_db-salts_r";
              $DB_PASSWORD ='password';
              $dbc2 = connect_to_db($DB_USER, $DB_PASSWORD);
              // Escape characters, may help against SQL injection a bit (Using Prepared Statements is better)
              $login_user = $dbc1 -> real_escape_string($_POST["login_user"]);
              $login_pass = $dbc1 -> real_escape_string($_POST["login_pass"]);
              // Query to check user
              $stmt = $dbc1->prepare("SELECT user_id FROM users WHERE user_name = ?");
              $stmt->bind_param("s", $login_user);
              $stmt->execute();
              $stmt->bind_result($result1);
              $stmt->fetch();
              $stmt->close();
              if(isset($result1)){
                // Query to check salt of hashed password of user
                $stmt = $dbc2->prepare("SELECT pass_salt FROM salts WHERE user_id = ?");
                $stmt->bind_param("s", $result1);
                $stmt->execute();
                $stmt->bind_result($result2);
                $stmt->fetch();
                $pass_salt = $result2;
                $stmt->close();
                disconnect_from_db($dbc2);
                if(isset($result2)){
                  // Query to check hashed password
                  $hashed_pass = crypt("$login_pass","\$2y\$09\$$result2");
                  $stmt = $dbc1->prepare("SELECT user_name FROM users WHERE user_hashedpass = ?");
                  $stmt->bind_param("s", $hashed_pass);
                  $stmt->execute();
                  $stmt->bind_result($result3);
                  $stmt->fetch();
                  $stmt->close();
                  disconnect_from_db($dbc1);
                  if(isset($result3)){
                    // Log in!
                    // Check user is deleted flag sometime?
                    $_SESSION['login_user'] = $login_user;
                    
                    header("Location: " . basename($_SERVER['PHP_SELF']));
                  } else {
                      if($lang == "es") {$message = $message . "El usuario o CONTRASEÑA no coinciden.<br>";} else {$message = $message . "The user or PASSWORD doesn't matches.<br>";}
                  }
                } else {
                  $message = $message . "Can't authenticate user;  this is an odd case:  Please contact us mentioning your username and what happened!<br>";
                } 
              } else {
                $message = $message . "The USER or password doesn't matches<br>";
              }  
            }



            if (isset($_POST["register"]))   {
              $DB_USER = "meowrawr_db-users_w";
              $DB_PASSWORD ='password';
              $dbc1 = connect_to_db($DB_USER, $DB_PASSWORD);
              $DB_USER = "meowrawr_db-salts_w";
              $DB_PASSWORD ='password';
              $dbc2 = connect_to_db($DB_USER, $DB_PASSWORD);
              $DB_USER = "meowrawr_db-users_r";
              $DB_PASSWORD ='password';
              $dbc3 = connect_to_db($DB_USER, $DB_PASSWORD);
              //echo "<script>alert(\"Thing\");</script>";

              // Escape characters, may help against SQL injection a bit (Using Prepared Statements is better)
              $register_user = $dbc1 -> real_escape_string($_POST["register_user"]);
              $register_pass = $dbc1 -> real_escape_string($_POST["register_pass"]);
              $register_email = $dbc1 -> real_escape_string($_POST["register_email"]);
              // Query to check user
              $stmt = $dbc3->prepare("SELECT user_id FROM users WHERE user_name = ?");
              $stmt->bind_param("s", $register_user);
              $stmt->execute();
              $stmt->bind_result($result1);
              $stmt->fetch();
              $stmt->close();
              if(!isset($result1)){
                // Query to check email
                // TODO: Check email validness:  Must have two characters after a dot after the last @, and not start with a number (RFC 1034)
                $stmt = $dbc3->prepare("SELECT user_id FROM users WHERE user_email = ?");
                $stmt->bind_param("s", $register_email);
                $stmt->execute();
                $stmt->bind_result($result2);
                $stmt->fetch();
                $pass_salt = $result2;
                $stmt->close();
                disconnect_from_db($dbc3);
                if(!isset($result2)){
                  // Register new user
                  // TODO: Check password validness (Check criteria in config.php register_pass input)
                  $pass_salt = bin2hex(random_bytes(11)); //TODO all alpha
                  $hashed_pass = crypt("$register_pass","\$2y\$09\$$pass_salt");
                  $stmt = $dbc1->prepare("INSERT INTO users(user_name, user_hashedpass, user_email) VALUES (?, ?, ?)");
                  $stmt->bind_param("sss", $register_user, $hashed_pass, $register_email);
                  $stmt->execute();
                  $stmt->close();
                  // Add hashed password salt to salts table
                  $stmt = $dbc2->prepare("INSERT INTO salts(pass_salt) VALUES (?)");
                  $stmt->bind_param("s", $pass_salt);
                  $stmt->execute();
                  $stmt->close();
                  disconnect_from_db($dbc1);
                  disconnect_from_db($dbc2);
                  $message = $message . "Account created!<br>";
                } else {
                  $message = $message . "The email already registered!<br>";
                } 
              } else {
                $message = $message . "The username already exists!<br>";
              }  
            }

            //Errors, and notices like wrong login appears here
            if ($message !== "") {
              echo '<div class="headercolumn message">';
                echo "<p>$message</p>";
              echo '</div>';
            } 
          ?>
        <div class="headercolumn">
          <marquee><p><?php echo $str[$lang]["hi"]; ?> :3</p></marquee>
        </div>

        <div class="productrow">