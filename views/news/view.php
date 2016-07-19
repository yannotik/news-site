<?php include ROOT.'/views/layouts/header.php'; ?>
    <article class="post_content">
        <h1><?php echo $newsItem['title']?></h1>
        <img src="/template/img/<?php  echo $newsItem['image']; ?>">
        <p class="date"><i><?php echo $newsItem['date']; ?></i></p>
        <div class="news_content">
            <?php echo $newsItem['text']; ?>
        </div>
    </article>

<?php include ROOT.'/views/layouts/footer.php'; ?>
