<?php
  //require_once("../Model/Article.class.php");
  require_once("../Model/Utilisateur.class.php");
  require_once("../Model/DAO.class.php");
  require_once("../Framework/View.class.php");
  require_once("../Model/Actualite.class.php");
  /*session_start();

  if(!isset($_SESSION['db'])){
    //$_SESSION['db'] = new DAO;
  }

  if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
  }

  if(!isset($page)){
    $page = $_GET['page'];
    $page = 1;
  }*/


/*ICI ON VA CREER UNE FONCTION QUI NOUS PERMET DE RECUPERER L'ACTUALITE
GRACE A UNE DAOCLASS*/

  $a1 = array("act1_2.jpg","act1_3.jpg");
  $a2 = array("act2_2.jpg","act2_3.jpg");

  $ac1 = new Actualite(1,"Compte Rendu de la réunion du 10/12/2019","act1_1.jpg","11/12/2019",
                      1,"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.",$a1);
  $ac2 = new Actualite(2,"Podium des jeune à Chamonix","act2_1.jpg","25/10/2019",
                     1,"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo consequat.
                     Duis aute irure dolor in reprehenderit in voluptate velit
                     esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                     occaecat cupidatat non proident, sunt in culpa qui officia
                     deserunt mollit anim id est laborum.",$a2);


  $view = new View("Actualite");
  //$view->page = $page;
  $view->afficher();

 ?>