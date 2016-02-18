<?php
class Game
    {

        function outcome($p1input)
        {
            $computer_choice = "";
            $roll = rand(1, 3);
            if ($roll == 1) {
                $computer_choice = "rock";
            } elseif ($roll == 2) {
                $computer_choice = "scissors";
            } else {
                $computer_choice = "paper";
            }

            if ($p1input == $computer_choice) {
                return "It's a tie!";
            } elseif ($p1input == "rock") {
                if ($computer_choice == "paper") {
                    return "Computer chose paper. Computer wins!";
                } elseif ($computer_choice == "scissors") {
                    return "Computer chose scissors.  You win!";
                }
            } elseif ($p1input == "scissors") {
                if ($computer_choice == "rock") {
                    return "Computer chose rock.  Computer wins!";
                } elseif ($computer_choice == "paper") {
                    return "Computer chose paper.  You win!";
                }
            } elseif ($p1input == "paper") {
                if ($computer_choice == "scissors") {
                    return "Computer chose scissors.  Computer wins!";
                } elseif ($computer_choice == "rock") {
                    return "Computer chose rock.  You win!";
                }
            }
        }
    }


 ?>
