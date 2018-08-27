<?php
require './inc/gora_inc.php';
?>
<body>
    <div class="main-container">
        <div class="main wrapper clearfix">

            
            <section id="pytania">
            <h1>QUIZ</h1>
                <?php
                if (isset($_GET['blad']) && $_GET['blad'] == 1) {

                    echo '<h1>Tekst wypelniamy od początku</h1>';
                    ?>

                    <div class="pytanie">Kara Mustafa był przywódcą:</div>

                    <div class="odpowiedzi">

                        <div><a href="quiz2.php?odp1=1">a) Imperium mongolskiego</a></div>
                        <div><a href="quiz2.php?odp1=2">b) Imperium osmańskiego</a></div>
                        <div><a href="quiz2.php?odp1=1">c) Rusi Kijowskiej</a></div>

                    </div>


                    <?php
                } else {
                    ?>

                    <h2 class="pytanie">Kara Mustafa był przywódcą:</h2>

                    <div class="odpowiedzi">

                        <a href="quiz2.php?odp1=1">a) Imperium mongolskiego</a>
                        <a href="quiz2.php?odp1=2">b) Imperium osmańskiego</a>
                        <a href="quiz2.php?odp1=1">c) Rusi Kijowskiej</a>

                    </div>
                    <?php
                }
                ?>

            </section>
        </div> <!-- #main -->
    </div> <!-- #main-container -->
</body>
</html>
