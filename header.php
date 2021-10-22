<?php require_once 'backend/config.php'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

<header>
    <div class="container">
        <nav>
            <img src="<?php echo $base_url; ?>/img/transparentBG.png" alt="logo">
            <div class="links">
                <a href="<?php echo $base_url; ?>/index.php">Home</a> 
                <div class="dropdown">
                <button
                class="dropbtn">Songteksten</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/Songteksten/br_queen.php">Bohemian Rapsody</a> 
                        <a href="<?php echo $base_url; ?>/Songteksten/kq_queen.php">Killer Queen </a> 
                        <a href="<?php echo $base_url; ?>/Songteksten/madness_muse.php">Madness</a>
                        <a href="<?php echo $base_url; ?>/Songteksten/uprising_mybaby.php">Uprising (MyBaby)</a>  
                        <a href="<?php echo $base_url; ?>/Songteksten/uprising_muse.php">Uprising (Muse)</a>
                        <a href="<?php echo $base_url; ?>/Songteksten/pib_muse.php">Plug in baby</a>  
                        <a href="<?php echo $base_url; ?>/Songteksten/watc_queen.php ">We are the champions</a>
                    </div>
                </div>
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
                class="dropbtn">Information</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/information/darthvader.php">Darth Vader</a> 
                        <a href="<?php echo $base_url; ?>/information/timotydalto.php">Timoty Dalto</a> 
                        <a href="<?php echo $base_url; ?>/information/lukeskywalker.php">Luke Skywalker</a>
                        <a href="<?php echo $base_url; ?>/information/jamesbond.php">James Bond</a>
                        <a href="<?php echo $base_url; ?>/information/roger_moore.php">Roger Moore</a>

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