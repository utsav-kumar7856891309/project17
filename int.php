<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>

    <h2>Temperature Converter</h2>

    <!-- Temperature conversion form -->
    <form method="POST" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" id="temperature" name="temperature" step="0.1" required><br><br>

        <label for="conversion">Convert to:</label>
        <select id="conversion" name="conversion">
            <option value="toFahrenheit">Celsius to Fahrenheit</option>
            <option value="toCelsius">Fahrenheit to Celsius</option>
        </select><br><br>

        <button type="submit">Convert</button>
    </form>

    <h3>Result:</h3>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = intval($_POST['temperature']);
        $conversion = $_POST['conversion'];
        $result = 0;

        if ($conversion === "toFahrenheit") {
            // Celsius to Fahrenheit formula: (C * 9/5) + 32
            $result = ($temperature * 9/5) + 32;
            echo "$temperature °C is equal to " . round($result, 2) . " °F";
        } elseif ($conversion === "toCelsius") {
            // Fahrenheit to Celsius formula: (F - 32) * 5/9
            $result = ($temperature - 32) * 5/9;
            echo "$temperature °F is equal to " . round($result, 2) . " °C";
        } else {
            echo "Invalid conversion type.";
        }
    }
    ?>

</body>
</html>
