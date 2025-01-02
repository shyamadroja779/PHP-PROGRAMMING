<html>
    <head>
        <title>lab-8-6</title>
</head>
<body>
    <?php
  $file="student.csv";
  if(file_exists($file)){
    $handle=fopen($file,"r");
    //$data=fgetcsv($handle);

     while($data=fgetcsv($handle)){
        echo "<table border=1>";
            echo "<tr>";
            foreach($data as $colmn){
                echo "<td>".htmlspecialchars($colmn)."</td>";
            }
            echo "</tr>";
        "</table>";
     }
    }
    ?>
    </body>
    </html>