<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .calculator {
            background: #fff;
            padding: 20px;
            background-color: #557C56;
            border: 1px solid #493628;
            border-radius: 10px;
            text-align: center;
        }

        input,
        select,
        button {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #493628;
            border-radius: 5px;
            width: 98%;
            font-size: 16px;
            background-color: #CBE2B5;
        }

        button {
            cursor: pointer;
            background-color: #FCC737;
            border: 1px solid 493628;
        }

        button:hover {
            background-color: #FCC737;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="calculator">
        <form action="" method="GET">
            <input type="number" name="num1" placeholder="Enter first number">
            <input type="number" name="num2" placeholder="Enter second number">
            <select name="operation">
                <option value="sum">Sum (+)</option>
                <option value="minus">Minus (-)</option>
                <option value="multiply">Multiply (*)</option>
                <option value="divide">Divide (/)</option>
            </select>
            <button type="submit" name="calculate">Calculate</button>
            <button type="reset" id="resetBtn">Reset</button>
        </form>
        <input type="text" class="result" readonly value="<?php echo getResult(); ?>">
    </div>
    <?php
    function getResult()
    {
        if (isset($_GET['calculate'])) {
            if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $operation = $_GET['operation'];

                if (!empty($num1) && !empty($num2)) {
                    switch ($operation) {
                        case 'sum':
                            return $num1 . " + " . $num2 . " = " . ($num1 + $num2);
                        case 'minus':
                            return $num1 . " - " . $num2 . " = " . ($num1 - $num2);
                        case 'multiply':
                            return $num1 . " * " . $num2 . " = " . ($num1 * $num2);
                        case 'divide':
                            return $num1 . " / " . $num2 . " = " . ($num1 / $num2);
                        default:
                            return "Invalid operation.";
                    }
                } else {
                    return "Fields cannot be empty.";
                }
            }
        }
    }
    ?>
</body>

</html>