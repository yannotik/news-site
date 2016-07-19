<?php include ROOT.'/views/layouts/header.php'; ?>

    <div class="size_content">
        <div id="owl-demo1" class="clearfix">
            <?php foreach($imgPost as $itemImg): ?>
                <div class="item">
                    <a href="/news/<?=$itemImg['id']?>"><img src="template/img/<?=$itemImg['image']?>" alt=""></a>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

    <?php include ROOT.'/views/layouts/left.php'; ?>

        <div id="main_content">

            <?php foreach($categories as $itemCategory): ?>
                <h1><a href="/category/<?=$itemCategory['id']?>"><?=$itemCategory['title']?></a></h1>
            <?php endforeach; ?>
            <!--div class="block_news">
                <h2><a href="">Title category1</a></h2>
                <h4><a href="">Title news</a></h4>
                <h4><a href="">Title news</a></h4>
                <h4><a href="">Title news</a></h4>
                <h4><a href="">Title news</a></h4>
                <h2><a href="">Title category2</a></h2>
                <h4><a href="">Title news</a></h4>
                <h4><a href="">Title news</a></h4>
                <h4><a href="">Title news</a></h4>
                <h4><a href="">Title news</a></h4>
            </div-->
        </div>

        <?php include ROOT.'/views/layouts/right.php'; ?>




<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.888978260268!2d30.518384416202068!3d50.44316857947442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca0844f4853c923f!2sBessarabskiy+rynok!5e0!3m2!1sen!2sua!4v1467283608106" width="100%" height="450" frameborder="0" style="border:0;pointer-events:none;" allowfullscreen></iframe>
</div>

<?php include ROOT.'/views/layouts/footer.php'; ?>
