<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice 4</title>
    </head>
    <body>
        <form method="POST">
            <label for="table">Multiplication table size: </label>
            <input type="number" id="table" name="table"/><br>
            <button type="enter">Enter</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["table"])) {
                $size = intval($_POST["table"]);
                echo "<table border='1'>";
                if ($size>0) {
                    for ($i = 1; $i <= $size; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= $size; $j++) {
                            echo "<td>" . ($i * $j) . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
        ?>
    </body>
</html>