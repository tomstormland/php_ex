<?php

session_start();

if (!isset($_SESSION['names']) || empty($_SESSION['names'])) {
  $_SESSION['names'] = [
    'Tom Storm', 'William Langer', 'Annie Labruk'
  ];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  /* collect data from input field. */

  $name = $_REQUEST['name'];

  if (!isset($name) || empty($name)) {
    echo 'Name is empty' . '<br>';
  } else {
    $_SESSION['names'][] = $name;
    header('Location: index.php');
  }

} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>LIST</title>
  </head>
  <body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="name">Name: </label>
      <input type="text" name="name" id="name" autofocus>
      <button type="submit">Add</button>
    </form>

    <br>

<?php

  echo '<table style="border: 1px solid #333;">';
  echo '<tr>';
  echo '<th style="border: 1px solid #333;">Name</th>';
  echo '</tr>';
  foreach ($_SESSION['names'] as $name) {
    echo '<tr>';
    echo '<td style="border: 1px solid #333;">'.$name.'</td>';
    echo '</tr>';
  }
  echo '</table>';

?>

  </body>
</html>
<?php
}
?>
