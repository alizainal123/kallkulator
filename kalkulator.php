<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .calculator {
            width: 300px;
            background: #86c3fc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            display: block;
        }

        .operations {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }

        select {
            width: 70%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            background-color: #fff;
            cursor: pointer;
        }

        button {
            width: 28%;
            background-color: #ff4b4b;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #e04343;
        }

        .result {
            margin-top: 10px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
            padding: 8px;
            font-size: 16px;
            color: darkslategray;
        }

        h1, h2 {
            text-align: center;
            color: #333;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>KALKULATOR</h1>
        <form action="" method="post">
            <input type="text" name="num1" placeholder="" required>
            <input type="text" name="num2" placeholder="" required>
            <div class="operations">
                <select name="operation">
                    <option value="pertambahan">+</option>
                    <option value="pengurangan">-</option>
                    <option value="perkalian">*</option>
                    <option value="pembagian">/</option>
                </select>
                <button type="submit" name="submit">Hitung</button>
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
                    break;
            }
            echo "<div class='result'>Result: " . $result . "</div>";
        }
        ?>
    </div>
</body> 
</html>
