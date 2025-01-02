<html>
    <head>
        <title>lab-8</title>
</head>
<body>
    <?php
        $file="example.txt";
       
        if(file_exists($file)){
            echo"($file) does exist"."<br/>";
            echo "is now overwriting"."<br/>";
            $handle=fopen($file,"w+");
            fwrite($handle,"Lab-8 ->3 generated and completed");

            rewind($handle);
            $size=filesize($file);
            $read_data=fread($handle,$size);

            echo nl2br(htmlspecialchars($read_data));
            fclose($handle);
        }
        else{
            echo"($file) does not exist"."<br/>";
            echo "error"."<br/>";
            $handle=fopen($file,"w+");
            fwrite($handle,"Lab-8 ->3 generated and completed");

            rewind($handle);
            $size=filesize($size);
            $read_data=fread($handle,$size);

            echo nl2br(htmlspecialchars($read_data));
            fclose($handle);
        }
    ?>
    </body>
    </html>