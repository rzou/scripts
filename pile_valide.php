<?php
$chaine = "]([]())";
$chaine2 = "([](]";

$p = new SplStack();

for($i=0; $i<strlen($chaine); $i++){
    if(($chaine[$i] === "(") || ($chaine[$i] === "[")) {
        $p->push($chaine[$i]);
        $p->rewind();
    } else{
        if($p->isEmpty()){
            echo "Invalide, désoléééé";
            exit;
        }
        $current = $p->current();

        $eq = $current.''.$chaine[$i];
        if( $eq==='[]' || $eq==='()') {
            $p->pop();
            $p->rewind();
        } else {
            echo "Invalide, désolé";
            exit;
        }
    }
}
if($p->isEmpty()){
    echo "Valide";
    exit;
}


