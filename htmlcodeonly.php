<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Code Only</title>
</head>
<body>
<h1>This is another way to write php</h1>
<p>I will put my paragraphs below:</p>
<?php
$i = 0;
while ($i < 10){
    //echo "<p>this is the ".$i."th line</p>";
    ?>
<p>this is the <?php echo $i; ?>th line</p>
<?php
    $i++;
}

?>
</body>
</html>
