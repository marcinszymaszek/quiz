<?php
require './inc/gora_inc.php';
?>

<body>
    <div class="main-container">
        <div class="main wrapper clearfix">

            
            <section id="wyniki">
            <h1>QUIZ</h1>
  
                    <?php
                    $odp1 = filter_var($_GET['odp1'], FILTER_SANITIZE_NUMBER_INT);
                    $odp2 = filter_var($_GET['odp2'], FILTER_SANITIZE_NUMBER_INT);
                    $odp3 = filter_var($_GET['odp3'], FILTER_SANITIZE_NUMBER_INT);
                    $odp4 = filter_var($_GET['odp4'], FILTER_SANITIZE_NUMBER_INT);

                    $wynik = $odp1 + $odp2 + $odp3 + $odp4 - 4;
                    echo '<h2>Uzyskano wynik: ' . $wynik . '</h2><br>'
                    . '<p id="od-nowa"><a href="quiz-start.php">Spróbuj ponownie</a></p>';
                    ?>


            </section>
        </div> <!-- #main -->
    </div> <!-- #main-container -->
</body>
</html>
