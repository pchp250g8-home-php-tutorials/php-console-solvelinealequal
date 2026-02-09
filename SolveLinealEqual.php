<?php
    system("cls");
    echo("Input coefficients of lineal equation\r\n");
    $a = floatval(chop(fgets(STDIN)));
    $b = floatval(chop(fgets(STDIN)));
    printf("Try to solve the equation:%f*x+%f=0\r\n",$a, $b);
    if(($a == 0) && ($b == 0))
        echo("The answer is any number\r\n");
    else if (($a == 0) && ($b != 0))
        echo("The equation has no solution");
    else
        printf("The equation has the following solution:%f\r\n", -$b / $a);
    fgetc(STDIN);
?>