<?php

class Team {
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    // Constructor
    public function __construct($teamName) {
        $this->teamName = $teamName;
    }

    // Method to calculate and update score
    public function finalScore($homeScore, $opposingScore) {
        // Update goals scored in this game to totalGoals
        $this->totalGoals += $homeScore;
        
        // Increase totalGames count by 1
        $this->totalGames += 1;

        // Determine game result and update points accordingly
        if ($homeScore > $opposingScore) {
            // Home team won
            $this->totalPoints += 3;
        } elseif ($homeScore == $opposingScore) {
            // Draw
            $this->totalPoints += 1;
        }
        // If homeScore < opposingScore, no points added for a loss
    }

    // Method to calculate and return the goal average
    public function getGoalAverage() {
        // Check if totalGames is greater than 0 to avoid division by zero
        if ($this->totalGames > 0) {
            return $this->totalGoals / $this->totalGames;
        } else {
            return 0;
        }
    }

    // Getters to access private properties
    public function getTeamName() {
        return $this->teamName;
    }

    public function getTotalPoints() {
        return $this->totalPoints;
    }

    public function getTotalGoals() {
        return $this->totalGoals;
    }

    public function getTotalGames() {
        return $this->totalGames;
    }
}

?>
