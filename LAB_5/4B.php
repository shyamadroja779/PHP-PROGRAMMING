<!--WAP for simple calculator with the use of simple calculator.-->
<html>

<head>
    <title>LAB 5_4B</title>
</head>

<body>
    <?php
    function calculator($x, $y, $oprater)
    {
        $x;
        $y;
        $oprater;
        switch ($oprater) {
            case ("+"):
                echo "sum is :" . ($x + $y);
                break;
            case ("-"):
                echo "sub is :" . ($x - $y);
                break;
            case ("*"):
                echo "multi is :" . ($x * $y);
                break;
            case ("/"):
                echo "division is :" . ($x / $y);
                break;
            default:
                echo "Invalid oprater";
                break;

        }
    }
    calculator(7, 8, '*');