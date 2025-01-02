<html>
    <head>
        <title>lab-8-6</title>
</head>
<body>
    <?php
    $file="student.csv";
    if(file_exists($file))
    {
        $handle=fopen($file,"r");
        echo "<table border = '1'>";
        $data=fgetcsv($handle);
       
        

        while($data=fgetcsv($handle))
        {
            echo"<tr>";
        foreach($data as $colum)
        {
            echo"<td>" .htmlspecialchars($colum)."</td>";
        }
        echo "</tr>";
     }
echo"</table>";
}
    ?>
    </body>
    </html>