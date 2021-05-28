<?php require_once __DIR__ . '/partials/script/get-stanze.php';?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . '/partials/templates/head.php';?>

<body>
    
    <main>
    <h1>Stanze</h1>
    <table class='tabella'>
             <thead>
             <tr>
             <th>ID</th>
             <th>Room Number</th>
             </tr>
             </thead>
             <tbody>
             <?php
                if(!empty($stanze)) {
                    foreach($stanze as $stanza) { ?>
                <tr>
                    <td class="text"><?php echo $stanza['id']; ?></td>
                    <td class="text"><?php echo $stanza['room_number']; ?></td>
                    <td class="text">
                        <a class="text-success" 
                            href="./show.php?id=<?php echo $stanza['id']; ?>">
                         show more
                        </a>
                    </td>
                </tr>
                   <?php }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>