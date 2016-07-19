<?php include ROOT.'/views/layouts/header.php'; ?>
    <h1>ALL NEWS</h1>


    <?php foreach($newsList as $itemNews): ?>
       <article class="item_post">
           <a href="/news/<?php echo $itemNews['id']; ?>"><img src="/template/img/<?php  echo $itemNews['image']; ?>"></a>
            <h2>
                <a href="/news/<?php echo $itemNews['id']; ?>">
                    <?php echo $itemNews['title']; ?>
                    </a>
            </h2>
            <p class="date"><i><?php echo $itemNews['date']; ?></i></p>
            <div class="description">
                <p><?php echo $itemNews['description']; ?></p>
            </div>
            <a href="/news/<?php echo $itemNews['id']; ?>"><i>More &rarr; </i>  </a>
       </article>
    <?php endforeach; ?>


<?php include ROOT.'/views/layouts/footer.php'; ?>
