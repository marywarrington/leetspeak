<?php

    require_once "src/LeetSpeakGenerator.php";

    class LeetSpeakGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_returnString()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "x";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals(["x"], $result);
        }
        function test_replaceE()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "hell";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals(["h3ll"], $result);
        }

        function test_replaceO()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "hello";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals(["h3ll0"], $result);
        }

        function test_replaceI()
        {
            //Arrange
            $test_LeetSpeakGenerator = new LeetSpeakGenerator;
            $input = "Ice";

            //Act
            $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals(["1c3"], $result);
        }

        // function test_replaceS()
        // {
        //     //Arrange
        //     $test_LeetSpeakGenerator = new LeetSpeakGenerator;
        //     $input = "dogs";
        //
        //     //Act
        //     $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);
        //
        //     //Assert
        //     $this->assertEquals(["d0gz"], $result);
        // }

        // function test_replaceSpaceS()
        // {
        //     //Arrange
        //     $test_LeetSpeakGenerator = new LeetSpeakGenerator;
        //     $input = "dogs speak";
        //
        //     //Act
        //     $result = $test_LeetSpeakGenerator->makeLeetSpeak($input);
        //
        //     //Assert
        //     $this->assertEquals("d0gz sp3ak", $result);
        // }

        // function test_returnMultpile()
        // {
        //     //Arrange
        //     $test_PingPongGenerator = new PingPongGenerator;
        //     $input = 2;
        //
        //     //Act
        //     $result = $test_PingPongGenerator->makePingPong($input);
        //
        //     //Assert
        //     $this->assertEquals([1, 2], $result);
        // }
        // function test_replaceThree()
        // {
        //     //Arrange
        //     $test_PingPongGenerator = new PingPongGenerator;
        //     $input = 4;
        //     //Act
        //     $result = $test_PingPongGenerator->makePingPong($input);
        //
        //     //Assert
        //     $this->assertEquals([1, 2, "ping", 4], $result);
        // }
        // function test_replaceFive()
        // {
        //     //Arrange
        //     $test_PingPongGenerator = new PingPongGenerator;
        //     $input = 5;
        //     //Act
        //     $result = $test_PingPongGenerator->makePingPong($input);
        //
        //     //Assert
        //     $this->assertEquals([1, 2, "ping", 4, "pong"], $result);
        // }
        // function test_replaceFifteen()
        // {
        //     //Arrange
        //     $test_PingPongGenerator = new PingPongGenerator;
        //     $input = 15;
        //     //Act
        //     $result = $test_PingPongGenerator->makePingPong($input);
        //
        //     //Assert
        //     $this->assertEquals([1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong", 11, "ping", 13, 14, "pingpong"], $result);
        // }
        //

    }

?>
