<?php
require './inc/gora_inc.php';
?>
<body>
    <div class="main-container">
        <div class="main wrapper clearfix">

            
            <section id="pytania">
            <h1>QUIZ</h1>
                <h2 class="pytanie">Jamajka, Kuba, Dominikana <br> to państwa:</h2>
                <?php
                $odp1 = filter_var($_GET['odp1'], FILTER_VALIDATE_INT);
                ?>
                <div class="odpowiedzi">
                    <div><a href="quiz3.php?odp2=1&amp;odp1=<?php echo $odp1; ?>">a) Ameryki Południowej</a></div>
                    <div><a href="quiz3.php?odp2=2&amp;odp1=<?php echo $odp1; ?>">b) Ameryki Północnej</a></div>
                    <div><a href="quiz3.php?odp2=1&amp;odp1=<?php echo $odp1; ?>">c) Ameryki Północnej</a></div>
                </div>
<?php ?>
            </section>
        </div> <!-- #main -->
    </div> <!-- #main-container -->
</body>
</html>
