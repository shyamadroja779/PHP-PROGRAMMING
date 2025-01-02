<!--WAP to find sum of all odd array elements by passing array as an argument using user define functions.-->
<html>

<head>
    <title>LAB 5_5C</title>
</head>

<body>
    <?php
    function sumodd($arry1)
    {
        $sum = 0;
        foreach ($arry1 as $value) {
            if ($value % 2 != 0) {
                $sum =$sum + $value;
            }
        }
        echo "Sum of odd numbers: " . $sum;
    }
    sumodd([1, 2, 3, 4, 5, 6])

        ?>
</body>

</html>