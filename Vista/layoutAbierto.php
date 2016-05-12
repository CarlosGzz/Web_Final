  	
<!-- NAVBAR -->
<nav class="red" role="navigation">
    <div class="nav-wrapper container">
        <a href="login-signup.php" class="brand-logo">Party DOG!</a>
        <a href="misEventos.php" class="brand-logo">Party DOG!</a>
        <ul class="right hide-on-med-and-down">

            <li><a  id="result" href="misEventos.php">Mis Eventos</a></li>
            <?php
            	session_start();
             	if(!isset($_SESSION)){
            			require '../facebookLogin/app.php';
            		}else{
            			echo "<!-- Dropdown Trigger -->
                              <li><a class='dropdown-button' data-beloworigin='true' data-hover='true' data-constrain_width='true' href='#' data-activates='logout'>".$_SESSION['nombre']."</a></li>

                              <!-- Dropdown Structure -->
                              <ul id='logout' class='dropdown-content'>
                                <li><a href='#'>logout</a></li>
                              </ul>";
            			//echo '<img src="https://graph.facebook.com/'.$_SESSION['id'].'/picture?type=small">';
            		} 
            ?>
        </ul>
        <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
        	<li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>