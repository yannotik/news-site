<?php include ROOT.'/views/layouts/header.php'; ?>
    <div style="max-width: 450px; margin: 50px auto;">


        <h2 class="center"> Registration</h2>
            <?php
                if(isset($errors) && is_array($errors))
                    foreach($errors as $error){
                        echo "<p> {$error} </p>";
                    }
            ?>
        <form action="" method="post">
            <div class="item_form">
                <input type="text" name="name" placeholder="Enter name" value="<?=$name;?>">
            </div>

            <div class="item_form">
                <input type="email" name="email" placeholder="Enter email" value="<?=$email;?>">
            </div>

            <div class="item_form">
                <input type="password" name="password" placeholder="Enter password" value="<?=$password;?>">
            </div>

            <div class="item_form">
                <input type="submit" name="registration">
            </div>
        </form>
        </div>
    <?php include ROOT.'/views/layouts/footer.php'; ?>