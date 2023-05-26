<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>
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
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
        }
        .result {
            font-weight: bold;
            width: 200px;
            padding: 10px;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hasil Nilai UAS</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nilaiUAS = $_POST['angka'];

            if ($nilaiUAS >= 80) {
                $grade = "A";
            } elseif ($nilaiUAS >= 75) {
                $grade = "B";
            } elseif ($nilaiUAS >= 60) {
                $grade = "C";
            } elseif ($nilaiUAS >= 45) {
                $grade = "D";
            } else {
                $grade = "E";
            }

            echo "<div class='result'>";
            echo "Nilai UAS Anda : " . $nilaiUAS . "<br>";
            echo "Grade = " . $grade . "<br>";
            echo "</div>";
        }
        ?>

        <br><br><br>
        <p>By Rizki Fauziah Arief</p>
    </div>

</body>
</html>
