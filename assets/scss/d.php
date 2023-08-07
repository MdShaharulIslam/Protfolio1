<?php
if (isset($_POST['submit'])) {
  // Get the file name from the form.
  $Differentiation Practice Sheet (FRB).pdf = $_POST['filename'];
  // Check if the file exists.
  if (file_exists($Differentiation Practice Sheet (FRB).pdf)) {
    // Download the file to the user's computer.
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    readfile($Differentiation Practice Sheet (FRB).pdf);
  } else {
    // The file does not exist.
    echo 'The file does not exist.';
  }
}
?>