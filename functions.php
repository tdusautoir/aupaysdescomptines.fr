<?php

function nav_items(string $lien, string $titre, string $linkClass = ''): string
    {
      $classe = 'nav-link';
      if($_SERVER['SCRIPT_NAME'] === $lien)
      {
        $classe = $classe.' active';
      } 
      return '<li class="'.$linkClass.'">
              <a class="'.$classe.'" href="'.$lien.'">'.$titre.'</a>
              </li>';

      //<<<HTML - HTML
    }


function nav_menu(string $linkClass = '') : string
{
  return  nav_items('index.php', 'Accueil', $linkClass).
          nav_items('equipe.php', 'Équipe', $linkClass).
          nav_items('contact.php', 'Nous Contacter', $linkClass);
}