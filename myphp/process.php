<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["fruits"])) {
        echo "<h2>You selected:</h2>";
        echo "<ul>";
        foreach ($_POST["fruits"] as $fruit) {
            echo "<li>" . htmlspecialchars($fruit) . "</li>";
        }
        echo "</ul>";

        // Conditional output example
        if (in_array("Mango", $_POST["fruits"])) {
            echo "<p>Great choice! Mango is rich in vitamins.</p>";
        }
    } else {
        echo "<h2>No fruits selected. Please choose at least one.</h2>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form method="POST">
        <h3>Select Your Favorite Fruits:</h3>
        <input type="checkbox" name="fruits[]" value="Apple"> Apple <br>
        <input type="checkbox" name="fruits[]" value="Banana"> Banana <br>
        <input type="checkbox" name="fruits[]" value="Orange"> Orange <br>
        <input type="checkbox" name="fruits[]" value="Mango"> Mango <br>
        <input type="submit" name="submit" value="Submit">
    </form>
<!DOCTYPE html>
<html>
<head>
    <title>Fruit Selector</title>
</head>
<body>

    <form method="POST">
        <h3>Select Your Fruits and Quantity:</h3>
        
        <input type="checkbox" name="fruits[Apple]" value="Apple"> Apple  
        <input type="number" name="quantity[Apple]" min="1" max="10" placeholder="Qty"> <br>

        <input type="checkbox" name="fruits[Banana]" value="Banana"> Banana  
        <input type="number" name="quantity[Banana]" min="1" max="10" placeholder="Qty"> <br>

        <input type="checkbox" name="fruits[Orange]" value="Orange"> Orange  
        <input type="number" name="quantity[Orange]" min="1" max="10" placeholder="Qty"> <br>

        <input type="checkbox" name="fruits[Mango]" value="Mango"> Mango  
        <input type="number" name="quantity[Mango]" min="1" max="10" placeholder="Qty"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['fruits'])) {
            echo "<h3>You selected:</h3>";
            echo "<ul>";
            foreach ($_POST['fruits'] as $fruit) {
                $qty = $_POST['quantity'][$fruit] ?? 1; 
                echo "<li>$fruit - Quantity: $qty</li>";
            }
            echo "</ul>";
        } else {
            echo "<h3>No fruits selected.</h3>";
        }
    }
    ?>
    <!DOCTYPE html>
<html>
<head>
    <title>Fruit Selector</title>
</head>
<body>

    <form method="POST">
        <h3>Select Your Fruits and Quantity:</h3>
        
        <input type="checkbox" name="fruits[]" value="Apple"> Apple  
        <input type="number" name="quantity[Apple]" min="1" max="10" placeholder="Qty"> <br>

        <input type="checkbox" name="fruits[]" value="Banana"> Banana  
        <input type="number" name="quantity[Banana]" min="1" max="10" placeholder="Qty"> <br>

        <input type="checkbox" name="fruits[]" value="Orange"> Orange  
        <input type="number" name="quantity[Orange]" min="1" max="10" placeholder="Qty"> <br>

        <input type="checkbox" name="fruits[]" value="Mango"> Mango  
        <input type="number" name="quantity[Mango]" min="1" max="10" placeholder="Qty"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['fruits'])) {
            echo "<h3>You selected:</h3>";
            echo "<ul>";
            foreach ($_POST['fruits'] as $fruit) {
                // Checking if a quantity was selected
                $qty = isset($_POST['quantity'][$fruit]) ? $_POST['quantity'][$fruit] : 1;
                
                // Using in_array() to verify selection (not strictly needed but good practice)
                if (in_array($fruit, $_POST['fruits'])) {
                    echo "<li>$fruit - Quantity: $qty</li>";
                }
            }
            echo "</ul>";
        } else {
            echo "<h3>No fruits selected.</h3>";
        }
    }
    ?>

</body>
</html>