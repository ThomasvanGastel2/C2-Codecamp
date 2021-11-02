<?php require_once 'backend/config.php'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="img/favicon.ico">

<header>
    <div class="container">
        <nav>
            <img src="<?php echo $base_url; ?>/img/transparentBG.png" alt="logo">
            <div class="links">
                <a href="<?php echo $base_url; ?>/index.php">Home</a> 
                <a href="<?php echo $base_url; ?>/Songteksten/songteksten.php">Songteksten</a>
                <div class="dropdown">
                <button
                class="dropbtn">Wiki</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/wiki/boeken.php">Boeken</a> 
                        <a href="<?php echo $base_url; ?>/wiki/Gereedschap/Zagen/cirkelzagen.php">Cirkelzagen </a> 
                        <a href="<?php echo $base_url; ?>/wiki/Gereedschap/hamers.php">Hamers</a>
                        <a href="<?php echo $base_url; ?>/wiki/Gereedschap/schroevendraaiers.php">Schroevendraaiers</a>   
                        <a href="<?php echo $base_url; ?>/wiki/Gereedschap/Zagen/handzagen.php">Handzagen</a> 
                        <a href="<?php echo $base_url; ?>/wiki/koffie.php">Koffie</a>     
                    </div>
                </div>
                 
                <div class="dropdown">
                <button
                class="dropbtn">Informatie</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/acteurs/acteurs.php">Acteurs</a> 
                        <a href="<?php echo $base_url; ?>/gereedschap/gereedschap.php">Gereedschap</a> 
                        <a href="<?php echo $base_url; ?>/boeken/boeken.php">Boeken</a>

                    </div>
                </div>
                <div class="dropdown">
                <button
                class="dropbtn">Dranken</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/dranken/Warme Dranken/warmdrank.php">Warme dranken</a> 
                        <a href="<?php echo $base_url; ?>/dranken/Frisdranken/frisdrank.php">Frisdrank</a> 
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>