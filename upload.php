<?php
if (isset($_POST["submit"])) {
  // Get the uploaded file
  $file = $_FILES["file"];

  // Check if the file is a CSV file
  $fileType = pathinfo($file["name"], PATHINFO_EXTENSION);
  if ($fileType !== "csv") {
    echo "Error: Only CSV files are allowed.";
    exit;
  }

  // Open the file
  $fileHandle = fopen($file["tmp_name"], "r");

  // Check if the file contains the correct columns
  $columns = fgetcsv($fileHandle);
  if ($columns !== ["product name", "description", "price", "quantity"]) {
    echo "Error: Incorrect columns in CSV file.";
    exit;
  }

  // Display the table
  echo "<table>";
  while (($data = fgetcsv($fileHandle)) !== false) {
    echo "<tr>";
    foreach ($data as $value) {
      echo "<td>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

  // Close the file
  fclose($fileHandle);
}
?>
