<?php
 include('index.php');
 /*kodo kabaliukas kuris nurodo kitą failą */
?>
<div class="tab-content">
    <div class="tab-pane active">
        <?php //include('Seniunija/seniunija.php'); ?>
        <?php if($tab == 'Seniunija/seniunija.php')
        {
          include('Seniunija/struktura.php');
        }
        elseif ($tab == 'Seniunija/struktura.php')
        {
          include('Seniunija/seniunija.php');
        }
        ?>
    </div>
</div>
