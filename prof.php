<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <div id="header">
        <link href="prof.css" rel="stylesheet" type="text/css" />
        <a href="Acceuil.html"><img src="logo.jpg" width="250" class="centrer"></a>        
    </div>

    <script>
    function masquer_div(id)
    {
        if (document.getElementById(id).style.display == 'none')
        {
            document.getElementById(id).style.display = 'block';
        }
        else
        {
            document.getElementById(id).style.display = 'none';
        }
    }
    </script>
</head>

<body>
    <div id="section">
        <ul>
            <li><a href="Accueil.html">Accueil</a></li>
            <li><a href="tout_parcourir.html">Tout parcourir</a></li>
            <li><a href="Recherche.html">Recherche</a></li>
            <li><a href="accueil.html">Rendez-vous</a></li>
            <li><a href="connexion.html">Votre compte</a></li>
        </ul>
    </div>

    <!--------------------------- PHP ----------------------------------------------------------------------->

    <?php
    //connexion de la seesion bdd
    session_start();

    $ID = $_GET['id'];

    //identifier votre BDD
    $database = "projet_web";

    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    $sql = "";

    $sql = "SELECT * FROM enseignant WHERE code_enseignant LIKE '$ID'";

    $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {

        echo '<div class="E1"><a href="';
        echo $data['photo'];
        echo '"><img src="';
        echo $data['photo'];
        echo '" height="280" width="250"></a></div>';

        echo '<div class="E2">';
        echo '<div class="E4">';
        echo $data['nom'] . '  ' . $data['prenom'] . "<br>";
        echo '</div>';
        echo '<br><br>';
        echo "E-mail : " . $data['email'] . "<br>". "<br>";
        echo "Tel : 0" . $data['tel'] . "<br>" . "<br>";
        echo "Department : " . $data['departement'] . "<br>". "<br>";
        echo "Bureau : " . $data['bureau'] . "<br>". "<br>";
        echo "<br>";

        echo "</div>";
    }

    /************       EMPLOI DU TEMPS        *********************************************************/

    echo '<h1>Disponibilités</h1>';

    echo '<div class="calendrier">';
        echo '<div class="table-responsive">';         
        echo '<table class="table">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th></th>';
                    echo '<th>Lundi</th>';
                    echo '<th>Mardi</th>';
                    echo '<th>Mercredi</th>';
                    echo '<th>Jeudi</th>';
                    echo '<th>Vendredi</th>';
                echo '</tr>';
            echo '</thead>';

            echo '<tbody>';
                echo '<tr>';

                    /**$$$$$$$$$$$$$$$$$$$$$$$$$$$$     8H - 12H       $$$$$$$$$$$$$$$$$$$$$$$$$$$$**/

                    echo '<td>8h - 10h</td>';
                    /********* LUNDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Monday' && $heure == '') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MARDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Tuesday' && $heure == '8') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MERCREDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Wednesday' && $heure == '8') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Jeudi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Thursday' && $heure == '8') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Vendredi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Friday' && $heure == '8') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';
                echo '</tr>';

                /**$$$$$$$$$$$$$$$$$$$$$$$$$$$$     10H - 12H       $$$$$$$$$$$$$$$$$$$$$$$$$$$$**/

                echo '<tr>';
                    echo '<td>10h - 12h</td>';
                    /********* LUNDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Monday' && $heure == '10') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MARDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Tuesday' && $heure == '10') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MERCREDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Wednesday' && $heure == '10') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Jeudi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Thursday' && $heure == '10') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Vendredi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Friday' && $heure == '10') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';
                echo '</tr>';

                /**$$$$$$$$$$$$$$$$$$$$$$$$$$$$     12H - 14H       $$$$$$$$$$$$$$$$$$$$$$$$$$$$**/

                echo '<tr>';
                    echo '<td>12h - 14h</td>';
                    /********* LUNDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Monday' && $heure == '12') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MARDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Tuesday' && $heure == '12') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MERCREDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Wednesday' && $heure == '12') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Jeudi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Thursday' && $heure == '12') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Vendredi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Friday' && $heure == '12') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';
                echo '</tr>';

                /**$$$$$$$$$$$$$$$$$$$$$$$$$$$$     14H - 16H       $$$$$$$$$$$$$$$$$$$$$$$$$$$$**/

                echo '<tr>';
                    echo '<td>14h - 16h</td>';
                    /********* LUNDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Monday' && $heure == '14') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MARDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Tuesday' && $heure == '14') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* MERCREDI *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Wednesday' && $heure == '14') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Jeudi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Thursday' && $heure == '14') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';

                    /********* Vendredi *******/
                    echo '<td>';
                    $sql = "SELECT * FROM rdv WHERE code_enseignant LIKE '$ID'";
                    $result = mysqli_query($db_handle, $sql);
                    $test = 0;
                    while ($data = mysqli_fetch_assoc($result)) {

                        $var_date = $data['date_debut'];
                        //separation de la variable en deux partie une pour les date une pour les heures
                        list($date, $time) = explode(" ", $var_date);
                        //separation de dates entre les 3 autres
                        list($year, $month, $day) = explode("-", $date);
                        //separation des heures en sous variable
                        list($hour, $min, $sec) = explode(":", $time);
                        $jour=date("l", mktime(0, 0, 0, $month, $day, $year));
                        $heure=$hour;

                        if ($jour == 'Friday' && $heure == '14') {
                            echo '<div class="indispo">';
                            echo 'Indisponible';
                            echo '</div>';
                            $test = 1;
                        }
                    }
                    if($test !=1) {
                        echo '<a onclick="masquer_div("RDVvalide");">';
                        echo '<div class="dispo">';
                        echo 'Disponible';
                        echo '</div>';
                        echo '</a>';
                    }
                    echo '</td>';
                echo '</tr>';

            echo '</tbody>';
        echo '</table>';
        echo '</div>';
    echo '</div>';

    //fermer la connexion
    mysqli_close($db_handle);
    ?>

    <!--------------------------- FIN PHP ----------------------------------------------------------------------->

    
    

    <br><br>

    <div id="footer">
        <h3>Nous contacter:</h3>
        e-mail : <a href="mailto:prime.properties@gmail.com">prime.properties@gmail.com</a> 
        <br>
        téléphone : +33 7 68 42 30 98
        <br> <br>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.351862863769!2d2.2872323999999997!3d48.8515004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6700497ee3ec5%3A0xdd60f514adcdb346!2s37%20Quai%20de%20Grenelle%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653389691791!5m2!1sfr!2sfr" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <br>

        <p class="contact">Copyright &copy; 2022 Prime Properties</p>
    </div>
</body>

</html