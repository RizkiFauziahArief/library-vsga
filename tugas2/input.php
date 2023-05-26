<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"] {
            width: 75px;
            padding: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Input Nilai UAS</h1>

        <form action="output.php" method="post">
            <label for="nilai-uas">Nilai UAS:</label>
            <input type="number" id="angka" name="angka" required>
            <br><br>
            <input type="submit" value="Submit">
        </form>

        <br><br><br>
        <p>By Rizki Fauziah Arief</p>
    </div>

</body>
</html>
