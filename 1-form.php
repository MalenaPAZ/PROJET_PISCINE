<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<!-- (A) SEARCH FORM -->
<form method="post" action="1-form.php">
  <h1>SEARCH FOR USERS</h1>
  <input type="text" name="search" required/>
  <input type="submit" value="Search"/>
</form>

</body>
</html>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
  // (B1) SEARCH FOR USERS
  require "2-search.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
    printf("<div>%s - %s</div>", $r["nom"], $r["prenom"]);
  }} else { echo "No results found"; }
}
?>