// generar una tabla de 40 elementos, y que se divide cada 10 elementos
< table  border = " 1 " cellspacing = " 0 " >
    < tbody >
    < tr >
    <? php
    $ i = 1 ;
    mientras que ( $ i <= 40 ) {
        echo  "<td> $ i </td>" ;
        if ( $ i % 5 == 0 ) {
            echo  "</tr> <tr>" ;
        }
        $ i ++;
    }
    ?>
    </ tbody >
</ table >