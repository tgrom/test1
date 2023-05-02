<?php
if(!empty($_POST['stroka'])) {
    $stroka = $_POST['stroka'];

    $answer = right($stroka);
}

function right($stroka) {

    $error = "<p style='color:red'>Ошибка!</p>";    
    $len = strlen($stroka);
    $open = 0;
    $closed = 0;    

    for ($i = 0; $i <= $len; $i++) {
        if ($stroka[$i] === '{') {
            $open ++;
        }elseif ($stroka[$i] === '}') {
            $closed ++;
        }
    
    }
    $a = $open - $closed;
    $c = $a % 10;
    $b = $closed - $open;
    $d = $b % 10;
    if ($open > $closed) {
        echo $error;        
        echo 'Не достает ' .$a . ending_open($c);
    }elseif ($open < $closed) {
        echo $error;
        echo 'Не достает '.$b. ending_close($d);
    }else echo 'Корректный ввод данных<br>'; 
}


function ending_open($c){
    if($c == 1) {
        return ' закрывающейся скобки';
    }else {
        return ' закрывающихся скобок';
    }}
function ending_close($d) {
    if($d == 1) {
        return ' открывающейся скобки';
    }else {
        return ' открывающихся скобок';
    }
}    
    
    

