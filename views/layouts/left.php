<div id="left_banner">

    <?php foreach($advertising as $itemAdvertising): ?>
       <div class="item_banner">
            <h3><a href="<?php echo $itemAdvertising['link'];?>" target="_blank"><?php echo $itemAdvertising['title'];?></a></h3>
            <p class="price"><?php echo $itemAdvertising['price'];?> грн.</p>
            <p class="price price2"><?php echo $itemAdvertising['price'] - ($itemAdvertising['price'] * 0.1);?> грн.</p>
            <p class="company"><?php echo $itemAdvertising['company'];?></p>
            <div class="sale">Купон на скидку <span> - <?php echo rand(5,15); ?>%</span></div>

       </div>
    <?php endforeach; ?>


</div>