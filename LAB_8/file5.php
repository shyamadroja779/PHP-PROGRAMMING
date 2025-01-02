<html>
    <head>
        <title>lab-8</title>
</head>
<body>
    <?php
        $file="example.txt";
       
        if(file_exists($file)){

            $handle=fopen($file,"r");
            $size=filesize($file);

            rewind($handle);
            $read_data=fread($handle,$size);

            echo nl2br(htmlspecialchars($read_data));
            $count =1;
            for($i=0;$i<strlen($read_data);$i++)
            {
                if($read_data[$i]=="\n")
                {
                    $count++;
                }
            }
            echo "<br/>"."count : ". $count; 
               }
        else{
            echo"($file) does not exist";
        }
    ?>
    </body>
    </html>