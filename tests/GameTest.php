<?php
    require_once __DIR__ . '/../src/Game.php';

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_outcome()
        {
            // Arrange
            $test_Game = new Game;
            $p1input = "rock";
            // Act
            $result = $test_Game->outcome($p1input);
            // Assert
            $this->assertEquals("Computer chose paper. Computer wins!", $result);
        }
    }
 ?>
