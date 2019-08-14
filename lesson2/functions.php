<?php
// Discriminant

function calculateDiscriminant ( $a, $b, $c){
    return ($b**2) - 4 * $a * $c;
}

function showDiscriminant ( $a, $b, $c){
    echo '<p>Discriminant of quadratic equation  ' . $a . 'x <sup>2</sup> ' . ' + ' . $b . 'x' . ' + ' . $c . '  is <b>' . calculateDiscriminant ($a, $b, $c) . '</b></p>'; 
}

//Gender

function getGenderOfName ($name){
    switch ($name) {
        case ( 0 == strnatcasecmp ($name, 'Alex')): return $name . ' - is Man'; break;
        case ( 0 == strnatcasecmp ($name, 'mike')): return $name . ' - is Man'; break;
        default : echo $name . ' - is a woman';        
    }
}