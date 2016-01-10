<!DOCTYPE html>
<html>

    <head>
            <title>Lab01</title>
    </head>

    <body>
        <?php

        /*

        $temp = "Jim";
        echo "Hi, my name is $temp";

        echo "<br/>";

        $temp = "geek";
        echo "I am a $temp";

        echo '<br/>';

        $name = "Amanda";
        $what = 'nerd';
        $level = '50';

        echo 'Hi, my name is ' . $name . ', and I am a level ' . $level . ' ' . $what;

        echo "<br/>";

        $hours = 10;
        $rate = 12;
        $total = $hours * $rate ;

        echo "You owe me $total";

        echo "<br/>";

        if($hours > 40){
            $total = $hours * $rate * 1.5;
        }else {
            $total = $hours * $rate;
        }

        echo ($total > 0) ? 'You owe me ' . $total : "You're welcome";

        echo "<br/>";

        */

        // Tic Tac Toe starts here

        if(isset($_GET['board'])){
            $position = $_GET['board'];
            $squares = str_split($position);

            if (win('x', $squares)) echo 'You win!';
            else if (win('o', $squares)) echo 'I win!';
            else echo 'No winners yet.';
        }
        else{
            echo "No board parameter given.";
        }

        ?>
    </body>
</html>


<?php

function winner($token,$position){
    $won = false;
    if(($position[0] == $token) &&
       ($position[1] == $token) &&
       ($position[2] == $token)){
        $won = true;
    } else if(($position[3] == $token) &&
              ($position[4] == $token) &&
              ($position[5] == $token)){
        $won = true;
    } else if(($position[6] == $token) &&
              ($position[7] == $token) &&
              ($position[8] == $token)){
        $won = true;
    } else if(($position[0] == $token) &&
              ($position[3] == $token) &&
              ($position[6] == $token)){
        $won = true;
    } else if(($position[1] == $token) &&
              ($position[4] == $token) &&
              ($position[7] == $token)){
        $won = true;
    } else if(($position[2] == $token) &&
              ($position[5] == $token) &&
              ($position[8] == $token)){
        $won = true;
    } else if(($position[0] == $token) &&
              ($position[4] == $token) &&
              ($position[8] == $token)){
        $won = true;
    } else if(($position[2] == $token) &&
              ($position[4] == $token) &&
              ($position[6] == $token)){
        $won = true;
    }
    return $won;
}

function win($token, $position){
    $result = true;


    for($row=0; $row < 3 ; $row++){
        for($col = 0; $col < 3; $col++){
            if($position[3 * $row + $col] != $token)
                $result = false;
        }
        if($result == true){
            return $result;
        }
    }

    for($col=0; $col < 3 ; $col++){
        for($row = 0; $row < 3; $row++){
            if($position[3 * $col + $row] != $token)
                $result = false;
        }
        if($result == true){
            return $result;
        }
    }

    if(($position[0] == $token) && ($position[4] == $token) && ($position[8] == $token)) {
        $result = true;
    }
    else if(($position[2] == $token) && ($position[4] == $token) && ($position[6] == $token)) {
        $result = true;
    }

    return $result;
}

?>