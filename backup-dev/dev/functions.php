<?php

function nav_items(string $lien, string $titre, string $linkClass = ''): string
{
  $classe = 'nav-link';
  $currentpath = pathinfo($_SERVER['SCRIPT_NAME']);
  if ($currentpath['basename'] === $lien) {
    $classe = $classe . ' active';
  }
  if ($linkClass != '') {
    return '<li class="' . $linkClass . '">
                <a class="' . $classe . '" href="' . $lien . '">' . $titre . '</a>
                </li>';
  } else {
    return '<li>
                <a class="' . $classe . '" href="' . $lien . '">' . $titre . '</a>
                </li>';
  }

  //<<<HTML - HTML
}


function nav_menu(string $linkClass = ''): string
{
  return  nav_items('index.php', 'Accueil', $linkClass) .
    nav_items('equipe.php', 'Équipe', $linkClass) .
    nav_items('contact.php', 'Nous Contacter', $linkClass);
}
