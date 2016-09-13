<<?php
    class Allergies
    {
        public $allergenArray;
        public $allergyScore;

        function __construct($inputScore)
        {
            $this->allergenArray = array();
            $this->allergyScore = intval($inputScore);
        }

        function parseAllergens()
        {
            while ($this->allergyScore > 0) {
                switch (true) {
                    case $this->allergyScore >= 128:
                        array_push($this->allergenArray, "Cats");
                        $this->allergyScore -= 128;
                        break;
                    case $this->allergyScore >= 64:
                        array_push($this->allergenArray, "Pollen");
                        $this->allergyScore -= 64;
                        break;
                    case $this->allergyScore >= 32:
                        array_push($this->allergenArray, "Chocolate");
                        $this->allergyScore -= 32;
                        break;
                    case $this->allergyScore >= 16:
                        array_push($this->allergenArray, "Tomatoes");
                        $this->allergyScore -= 16;
                        break;
                    case $this->allergyScore >= 8:
                        array_push($this->allergenArray, "Strawberries");
                        $this->allergyScore -= 8;
                        break;
                    case $this->allergyScore >= 4:
                        array_push($this->allergenArray, "Shellfish");
                        $this->allergyScore -= 4;
                        break;
                    case $this->allergyScore >= 2:
                        array_push($this->allergenArray, "Peanuts");
                        $this->allergyScore -= 2;
                        break;
                    case $this->allergyScore >= 1:
                        array_push($this->allergenArray, "Eggs");
                        $this->allergyScore -= 1;
                        break;
                }
            }
        }
    }
 ?>
