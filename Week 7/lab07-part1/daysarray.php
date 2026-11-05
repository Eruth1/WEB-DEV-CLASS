<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    
    <?php
        
        $days_en = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        echo "<p>The days of the week in English are:<br>";
        echo implode(", ", $days_en) . ".</p>";

        $days_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        
        echo "<p>The days of the week in French are:<br>";
        echo implode(", ", $days_fr) . ".</p>";
    ?>
</body>
</html>