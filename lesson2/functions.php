<?php
// Discriminant

function calculateDiscriminant ( $a, $b, $c){
    return ($b**2) - 4 * $a * $c;
}

function calculateQuadraticEquationX1($a, $b, $c){
    $discriminant = calculateDiscriminant ( $a, $b, $c);
    return $x1 = ((-$b + sqrt($discriminant))/2*$a);
}

function calculateQuadraticEquationX2($a, $b, $c){
    $discriminant = calculateDiscriminant ( $a, $b, $c);
    return $x2 = ((-$b - sqrt($discriminant))/2*$a);
}

function showQuadraticSolution($a, $b, $c){
    $x1 = calculateQuadraticEquationX1($a, $b, $c);
    $x2 = calculateQuadraticEquationX2($a, $b, $c);
    if (!is_nan($x1) && !is_nan($x2)){
    echo '<p>Discriminant of quadratic equation  ' . $a . 'x <sup>2</sup> ' . ' + ' . $b . 'x' . ' + ' . $c . '  is <b>' . calculateDiscriminant ($a, $b, $c) . '</b></p>
    <p> x1 is <b>' . $x1 . '</b> and x2 is <b>' . $x2 . '</b></p><hr>';
    } else {
        echo '<p>Sorry, but equation ' . $a . 'x <sup>2</sup> ' . ' + ' . $b . 'x' . ' + ' . $c . ' do not have a solution. </p><hr>';
    }
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