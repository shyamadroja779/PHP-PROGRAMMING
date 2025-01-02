<html>
<head>
<title>lab-8-4</title>
</head>
<body>
<?php
$file="demo3.txt";
if(file_exists($file))
{
    if(unlink($file))
{
    echo "{$file} is found and delete sucessfully";
}
else{
    echo "{$file} is found but not  delete sucessfully,thre some error. contact to admin ";
}
}
else{
    echo "($file) is not found . hence can not be delete";
}
?>
</body>
</html>