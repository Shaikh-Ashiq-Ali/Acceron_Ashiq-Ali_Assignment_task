<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>

<?php

if($_GET['info']){
    echo `<h1 style="color:green">$_GET['info]</h1>`;
}

?>

<body>
    <form action="upload.inc.php" method="post" enctype="multipart">
        <div class="mb-3">
        <label for="" class="form-label">Choose file</label>
        <input type="file" class="form-control" name="file" id="file" aria-describedby="fileHelpId">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>