<div>
    <?php
        for ($i = 1; $i <= 4; $i++) { 
            echo "<div>";
            for ($j = 1; $j <= 9; $j++) {
                if ($i % 2 == 0) { 
                    echo $j == 9 ? $j : $j . "  ";
                } else {
                    echo $j == 9 ? 10 - $j : 10 - $j . "  ";
                }
            }
            echo "</div>";
        }
        ?>
    </body>
</html>






</div>