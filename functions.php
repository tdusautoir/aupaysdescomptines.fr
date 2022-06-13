<?php

function nav_items(string $lien, string $titre, string $linkClass = ''): string
{
  $classe = 'nav-link';
  $currentpath = pathinfo($_SERVER['SCRIPT_NAME']);
  if ($currentpath['basename'] === $lien || $currentpath['filename'] === $lien) {
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
  return  nav_items('accueil', 'Accueil', $linkClass) .
    nav_items('equipe', 'Équipe', $linkClass) .
    nav_items('contact', 'Nous Contacter', $linkClass);
}
