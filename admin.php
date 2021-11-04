<html>
<?php
    require_once 'header.php'
    ?>
<body>
    <div class="admin">
        <form action="" method="GET">
        <select name="afdeling" >
            <option value=""> Kies een categorie</option>
            <option value="personeel">songteksten</option>
            <option value="horeca">boeken</option>
        </select>
        <input type="submit" value="filter">
    </form>    
    </div>
</body>
<?php
    require_once 'footer.php'
    ?>
</html>
