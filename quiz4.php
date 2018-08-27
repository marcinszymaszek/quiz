<?php
require './inc/gora_inc.php';
?>
<body>
    <div class="main-container">
        <div class="main wrapper clearfix">

            
            <section id="pytania">
            <h1>QUIZ</h1>
                <h2 class="pytanie">Chitynowy pancerz jest charakterystyczny dla:</h2>
                <?php
                $odp3 = filter_var($_GET['odp3'], FILTER_VALIDATE_INT);
                $odp2 = filter_var($_GET['odp2'], FILTER_VALIDATE_INT);
                $odp1 = filter_var($_GET['odp1'], FILTER_VALIDATE_INT);
                ?>
                <div class="odpowiedzi">
                    <div><a href="quiz-end.php?odp4=1&amp;odp3=<?php echo $odp3; ?>&amp;odp2=<?php echo $odp2; ?>&amp;odp1=<?php echo $odp1; ?>">a) Nicieni</a></div>
                    <div><a href="quiz-end.php?odp4=1&amp;odp3=<?php echo $odp3; ?>&amp;odp2=<?php echo $odp2; ?>&amp;odp1=<?php echo $odp1; ?>">b) Strunowców</a></div>
                    <div><a href="quiz-end.php?odp4=2&amp;odp3=<?php echo $odp3; ?>&amp;odp2=<?php echo $odp2; ?>&amp;odp1=<?php echo $odp1; ?>">c) Stawonogów</a></div>
                </div>
<?php
?>
            </section>
        </div> <!-- #main -->
    </div> <!-- #main-container -->
</body>
</html>
