<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }
    </style>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Select CSV file:</label>
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>