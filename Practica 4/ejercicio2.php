<?php
     echo " A) Estos codigos son equivalentes y tienen misma salida<br>";
?>
<?php
    $i = 1;
    while ($i <= 10) {
        print $i++;  
    }
?>
<br> 
<?php
    $i = 1;
    while ($i <= 10):
        print $i;
        $i++;
    endwhile;
?>
<br> 
<?php
    $i = 0;
    do {
        print ++$i;
    } while ($i<10);
?>

<?php
    echo "<br> B) Estos codigos son equivalentes y tienen misma salida<br>";
?>


<?php
    for ($i = 1; $i <= 10; $i++) {
        print $i;
    }
?>
<br> 
<?php
    for ($i = 1; ;$i++) {
        if ($i > 10) {
            break;
        }
        print $i;
    }
?>
<br> 
<?php
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        print $i;
        $i++; 
    } 
?> 
 <br> 
<?php
    for ($i = 1; $i <= 10; print $i, $i++);
?>

<?php
    echo "<br> C) Estos codigos son equivalentes y tienen misma salida<br>";
?>

<?php
    $i = 1;
    if ($i == 0) {
        print "i equals 0";
    } elseif ($i == 1) {
        print "i equals 1";
    } elseif ($i == 2) {
        print "i equals 2";
    }
?>
<br> 
<?php
    $i = 1;
    switch ($i) {
        case 0:
            print "i equals 0";
            break;
        case 1:
            print "i equals 1";
            break;
        case 2:
            print "i equals 2";
            break;
    } 
?> 
 