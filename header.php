<?php require_once 'backend/config.php'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

<header>
    <div class="container">
        <nav>
            <img src="<?php echo $base_url; ?>/img/aubergine.png" alt="logo">
            <div class="links">
                <a href="<?php echo $base_url; ?>/index.php">Home</a> 
                <div class="dropdown">
                <button
                class="dropbtn">Songteksten</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/Songteksten/BR_Queen.php">Bohemian Rapsody</a> 
                        <a href="<?php echo $base_url; ?>/Songteksten/KQ_Queen.php">Killer Queen </a> 
                        <a href="<?php echo $base_url; ?>/Songteksten/Madness_Muse.php">Madness</a>
                        <a href="<?php echo $base_url; ?>/Songteksten/Uprising_MyBaby.php">Uprising (MyBaby)</a>  
                        <a href="<?php echo $base_url; ?>/Songteksten/Uprising_Muse.php">Uprising (Muse)</a>
                        <a href="<?php echo $base_url; ?>/Songteksten/PIB_Muse.php">Plug in baby</a>  
                        <a href="<?php echo $base_url; ?>/Songteksten/Transylvania_IronMaiden.php">Transylvia</a>  
                    </div>
                </div>
                <div class="dropdown">
                <button
                class="dropbtn">Wiki</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/wiki/boeken.php">Boeken</a> 
                        <a href="<?php echo $base_url; ?>/wiki/cirkelzagen.php">Cirkelzagen </a> 
                        <a href="<?php echo $base_url; ?>/wiki/hamers.php">Hamers</a>
                        <a href="<?php echo $base_url; ?>/wiki/kettingzagen.php">Kettingzagen</a>   
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>