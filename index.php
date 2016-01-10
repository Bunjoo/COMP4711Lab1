<!DOCTYPE html>
<html>

    <head>
            <title>Lab01</title>
    </head>

    <body>
        <?php

        // Tic Tac Toe starts here

        /*if(isset($_GET['board'])){
            $position = $_GET['board'];
            $squares = str_split($position);

            if (win('x', $squares)) echo 'You win!';
            else if (win('o', $squares)) echo 'I win!';
            else echo 'No winners yet.';
        }
        else{
            echo "No board parameter given.";
        }
            */

        if(isset($_GET['board'])) {
            $squares = $_GET['board'];

            $game = new Game($squares);
            if ($game->win('x'))
                echo "You win. Lucky guesses!";
            else if ($game->win('o'))
                echo "I win. Muahahhaahaha";
            else
                echo "No winners yet, but you're losing!";
        }else{
            echo "No board parameter given.";
        }

        ?>
    </body>
</html>


<?php
/*
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
}*/

class Game{
    var $position;

    function __construct($squares)
    {
        $this->position = str_split($squares);
    }

    function win($token){
        $result = true;


        for($row=0; $row < 3 ; $row++){
            for($col = 0; $col < 3; $col++){
                if($this->position[3 * $row + $col] != $token)
                    $result = false;
            }
            if($result == true){
                return $result;
            }
        }

        for($col=0; $col < 3 ; $col++){
            for($row = 0; $row < 3; $row++){
                if($this->position[3 * $col + $row] != $token)
                    $result = false;
            }
            if($result == true){
                return $result;
            }
        }

        if(($this->position[0] == $token) && ($this->position[4] == $token) && ($this->position[8] == $token)) {
            $result = true;
        }
        else if(($this->position[2] == $token) && ($this->position[4] == $token) && ($this->position[6] == $token)) {
            $result = true;
        }

        return $result;
    }
}

?>