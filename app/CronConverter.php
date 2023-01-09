<?php



class CronConverter
{
    public function __construct()
    {

    }

    /**
     * Convert Date time to Cron Expression
     *
     * input : "2023-01-09 13:18:24"
     * output: "18 13 09 01 *"
     */
    public function toCronExpression($dateTime){
        $separatedVar = explode(" ",$dateTime); // Separate the date time
        $date = $separatedVar[0];
        $time = $separatedVar[1];

        $dateParts = explode("-", $date);
        $day = $dateParts[2];
        $month = $dateParts[1];

        $timeParts = explode(":", $time);
        $hour = $timeParts[0];
        $minute = $timeParts[1];

        $cron = $minute." ". $hour." " . $day." " . $month." " ."*";
        echo $cron ;

    }
}