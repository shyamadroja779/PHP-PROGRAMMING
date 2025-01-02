<html>
    <head>
        <title>lab-8</title>
</head>
<body>
    <?php
        $file="example.txt";
        if(file_exists($file)){
            $handle=fopen($file,"r");
            $size = filesize($file);
            rewind($handle);
            $read_data=fread($handle,$size);
            echo "<hr/>";
            
            echo nl2br(string: $read_data);
            echo "<hr/>";
            
        }
        else{
            echo "the file '$file'does not  exist";
        }
    ?>
    </body>
    </html>
