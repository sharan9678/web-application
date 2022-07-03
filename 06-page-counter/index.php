<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Hits</title>
</head>
<body style="background-color: grey; color: pink;">
    <?php
        $my_file = "counter.txt";
        $handle = fopen($my_file, "r");
        $count = fgets($handle);
        $count = $count + 1;
        $handle = fopen($my_file, "w") or die("cannot open file:".$my_file);
        fwrite($handle, $count);
        echo"This page has been viewed $count times";
    ?>
</body>
</html>