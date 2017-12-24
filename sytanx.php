<?php
//    echo '<html>';
//        echo '<head>';
//            echo '<title>';
//                echo 'HOME';
//            echo '</title>';
//        echo '</head>';
//        echo '<body>';
//            echo '<h1>This is heading</h1>';
//            echo '<p>This is paragraph</p>';
//        echo '</body>';
//    echo '</html>';
?>

<!--<html>-->
<!--    <head>-->
<!--        <title>--><?php //"HOME"; ?><!--</title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <h1>--><?php //echo "This is heading." ?><!--</h1>-->
<!--        <p>--><?php //echo "This is paragraph." ?><!--</p>-->
<!---->
<!--        <input type="text" value="--><?php //echo "Hello World."; ?><!--"/>-->
<!---->
<!--    </body>-->
<!--</html>-->

<?php

    //3 major rules for creating a variable
        /*
         *Start with $ sign
         * A-Z, a-z, 0-9
         * No number is first *
         */
    //3 standard rules for creating a variable
        /*
         * small letter
         * meaning full
         * readable
         */
        $NAME;
        $name;
        $NaMe;
        $_9name;
        $name9;

//        $number=100;
//        $firstName= 'Rakib';
//        $lastName= 'Hassan';
//        echo $firstName.' '.$lastName;


        $name = 123; //loosely coupled variable


        /*
         * Arithmetic operator
                *Binary (+,-,*,/,%)
                *Unary(++,--)
         * Assignment operator
                =,==,-=,+=,/=,%=, .=
         * Conditional operator
                >,>=,<,<=, ==, !=, ===, !==
         * Logical operator
                &&, ||, !
         */

//        $x=10;
//        $y=20;
//        echo $x+=$y; //$x=$x+$y
//        echo $x+$y;

        //Statement
            /*
             * Single line
             * Conditional
                *if
                *if else
                *if else if
                *switch
             * Repeated
                *for
                *while
                *do while
                *foreach
             */

            $x = 10;
            $y = 20;
            if($x<$y){
                $z = $x + $y;
                echo $z;
            }











