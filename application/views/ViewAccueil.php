<!DOCTYPE html>
<html>
<head>
<script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/mesFonctions.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Devoir TechDays</h1>
<?php
    echo '<input type="button" value="Créer une conférence" onclick="AfficherConferences()"><br><br>';
    echo '<input type="button" value="Voter pour une conférence">';
?>
    <div id="divConferences"></div><br>
</body>
</html>