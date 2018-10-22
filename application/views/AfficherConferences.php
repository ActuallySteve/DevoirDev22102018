<?php

foreach($lesConferences as $uneConference)
{
    echo '<input type="text" value="Numéro de la conférence" disabled><input type="text" value='.$uneConference->IDCONFERENCE.'><input type="text" value="Titre de la conference" disabled><input type="text" value='.$uneConference->TITRE.'><br><input type="text" value="Contenu de la conférence" disabled><input type="text" value='.$uneConference->CONTENU.'><input type="text" value="Choix du niveau" disabled>';
}

?>