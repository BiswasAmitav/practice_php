<?php

    echo date("d-m-Y",(strtotime("now"))) . "<br>";
    echo date("d-m-Y H:m", strtotime("+5 hours")) . "<br>";

    // Str f time ....

    echo strftime("%B %d %Y, %X %Z ") . "<br>";

?>    