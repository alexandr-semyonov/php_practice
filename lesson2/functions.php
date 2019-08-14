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
        case ( 0 == strnatcasecmp ($name, 'Alex')): return ucfirst ($name) . ' - is aMan'; break;
        case ( 0 == strnatcasecmp ($name, 'mike')): return ucfirst ($name) . ' - is a Man'; break;
        case ( 0 == strnatcasecmp ($name, 'Angel')): return ucfirst ($name) . ' - is a woman'; break;
        default : return ucfirst ($name) . ' - is a woman';        
    }
}

assert (  'Mike - is a Man' == getGenderOfName ('Mike') );
assert (  'Mike - is a woman' !== getGenderOfName ('mike') );
assert (  'Mike - is woman' !== getGenderOfName ('Mike') );
assert (  'Angel - is a woman' == getGenderOfName ('angel') );
assert (  'Maria - is a woman' == getGenderOfName ('Maria') );