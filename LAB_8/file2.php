<html>
    <head>
        <title>lab-8</title>
</head>
<body>
    <?php
        function check_fp($file)
    {
        if(file_exists($file))
        {
            echo "found";
        }
        else{
            echo "not found";
        }
    }
   // $file="example.txt";
    check_fp("example.txt");
    
    
    ?>
</body>
</html>