<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Insurance Eligibility</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select, button {
            padding: 8px;
            margin-bottom: 10px;
            width: 100%;
            max-width: 300px;
        }
        .result {
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .eligible {
            background-color: #d4edda;
            color: #155724;
        }
        .not-eligible {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <h1>Car Insurance Eligibility Checker</h1>
    <form method="POST" action="">
        <label for="age">Enter Your Age:</label>
        <input type="number" name="age" id="age" placeholder="Enter your age" required min="1">

        <label for="license">Do You Have a Driving License?</label>
        <select name="license" id="license" required>
            <option value="">Select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label for="experience">Years of Driving Experience:</label>
        <input type="number" name="experience" id="experience" placeholder="Enter years of experience" required min="0">

        <button type="submit">Check Eligibility</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Collect form data
        $age = (int) $_POST['age'];
        $license = $_POST['license'];
        $experience = (int) $_POST['experience'];

        // Eligibility checks
        if ($age >= 18 && $license === "yes" && $experience >= 1) {
            echo "<div class='result eligible'><strong>Congratulations!</strong> You are eligible for car insurance.</div>";
        } else {
            echo "<div class='result not-eligible'><strong>Sorry!</strong> You are not eligible for car insurance because:</div>";
            echo "<ul class='not-eligible'>";
            if ($age < 18) {
                echo "<li>You must be at least 18 years old.</li>";
            }
            if ($license !== "yes") {
                echo "<li>You must have a valid driving license.</li>";
            }
            if ($experience < 1) {
                echo "<li>You must have at least 1 year of driving experience.</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>