<?php require_once __DIR__ . '/partials/script/get-camera-singola.php';?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . '/partials/templates/head.php';?>

<body>
    
    <main class='room'>
    <?php if(!empty($stanza)) { ?>
        <h1> Camera <?php echo $stanza['id']; ?></h1>
        <ul>
            <li class="list">
                <h1> Numero <?php echo $stanza['room_number']; ?></h1>
            </li>
            <li class="list">
                <h1> Situata al: <?php echo $stanza['floor']; ?>° piano</h1>
            </li>
            <li class="list">
                <h1>Posti Letto: <?php echo $stanza['beds']; ?></h1>
            </li>
           
        </ul>
        <?php } else { ?>
                <h2>Stanza non trovata</h2>
        <?php } ?>
      
      <a href="./">Torna alle stanze</a>
    </main>


</body>
</html>