<?php
session_start();
function equation_2_degre($a, $b, $c) {
    if ($a == 0) {
        return "Ce n'est pas une équation quadratique (a ne peut pas être 0).";
    }
    
    $delta = ($b * $b) - (4 * $a * $c);
    
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Deux solutions réelles: x1 = " . round($x1, 2) . "et x2 = " . round($x2, 2);
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Une solution réelle unique: x = " . round($x, 2);
    } else {
        return "Pas de solution réelle, les solutions sont complexes.";
    }
}

$resultat = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = isset($_POST['a']) ? floatval($_POST['a']) : 0;
    $b = isset($_POST['b']) ? floatval($_POST['b']) : 0;
    $c = isset($_POST['c']) ? floatval($_POST['c']) : 0;
    $resultat = equation_2_degre($a, $b, $c);
}

// Stocker les variables dans la session
$_SESSION['resultat'] = $resultat;

// Redirection
header("Location: index.php");
exit();

?>