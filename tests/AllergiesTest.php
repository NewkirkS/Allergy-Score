<?php
    require_once __DIR__."/../src/Allergies.php";

    class AllergiesTest extends PHPUnit_Framework_TestCase
    {
        function test_parseAllergens()
        {
            //Arrange
            $test_Allergies = new Allergies(48);
            // Act
            $test_Allergies->parseAllergens();
            //Assert
            $this->assertEquals(array("Chocolate", "Tomatoes"), $test_Allergies->allergenArray);
        }

        // function test_parseAllergens_firstCase()
        // {
        //     //Arrange
        //     $test_Allergies = new Allergies(128);
        //     // Act
        //     $test_Allergies->parseAllergens();
        //     //Assert
        //     $this->assertEquals(array("Cats"), $test_Allergies->allergenArray);
        // }

    }
 ?>
