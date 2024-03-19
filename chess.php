<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Define your CSS styles for the chessboard cells here */
        body
        {
            background: linear-gradient(315deg, #5078f2 0%, #efe9f4 74%);
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }

        .Chess{
            margin-left: 430px;
            width: 650px;
            height: 80vh;

        }
        .bg{
            text-align: center;
            color: #265f85;
        }
        .l_color {
            background-color: #12458a; /* Black cells */
        }
        .d_color {
            background-color: #d0eaf6; /* White cells */
        }
        

    </style>
    <title>Chessboard</title>
</head>
<body>
    <div class="bg">
        <h1><i>Chess Board</i></h1>
    </div>
    <table class="Chess">
        <?php
        for ($i = 1; $i <= 8; $i++) 
        {
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++) 
            {
                $t = $i + $j;
                if ($t % 2 == 0) 
                {
                    echo "<td class='l_color'></td>";
                } 
                else {
                    echo "<td class='d_color'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
