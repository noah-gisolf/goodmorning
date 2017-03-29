<?php
$hour = date("H");
$minut = date("i");
$second = date("s");
if ($hour >= 0)
{
 $class = "night";
 if ($hour >= 6)
 {
  $class = "morning";
  if ($hour >= 12)
  {
   $class = "afternoon";
   if ($hour >= 18)
   {
    $class = "evening";
   }
  }
 }
}
?>

<!DOCTYPE html>
<html lang="NL">
<head>
   <title>Good Morning</title>
    <meta charset="utf-8" http-equiv="refresh" content="1">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body class="<?php echo $class;?>">

 <div class="core">
  <h1>Good <?php echo $class; ?>!</h1>
  <h1>It's <?php echo "$hour:$minut:$second"; ?> O'clock</h1>
 </div>

</body>
</html>