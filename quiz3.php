<?php
require './inc/gora_inc.php';
?>
<body>
    <div class="main-container">
        <div class="main wrapper clearfix">

            
            <section id="pytania">
            <h1>QUIZ</h1>
                <h2 class="pytanie">Który z wymienionych utworów literackich jest satyrą?</h2>
                <?php
                $odp2 = filter_var($_GET['odp2'], FILTER_VALIDATE_INT);
                $odp1 = filter_var($_GET['odp1'], FILTER_VALIDATE_INT);
                ?>
                <div class="odpowiedzi">
                    <div><a href="quiz4.php?odp3=1&amp;odp2=<?php echo $odp2; ?>&amp;odp1=<?php echo $odp1; ?>">a) "Emancypantki", Bolesław Prus"</a></div>
                    <div><a href="quiz4.php?odp3=1&amp;odp2=<?php echo $odp2; ?>&amp;odp1=<?php echo $odp1; ?>">b) "Noce i dnie", Maria Dąbrowska</a></div>
                    <div><a href="quiz4.php?odp3=2&amp;odp2=<?php echo $odp2; ?>&amp;odp1=<?php echo $odp1; ?>">c) "Żona modna", Ignacy Krasicki</a></div>
                </div>
<?php
?>
            </section>
        </div> <!-- #main -->
    </div> <!-- #main-container -->
</body>
</html>
