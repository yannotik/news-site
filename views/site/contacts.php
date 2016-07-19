<?php include ROOT.'/views/layouts/header.php'; ?>

                <?php if ($result): ?>
                    <p>Сообщение отправлено! </p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                         <h2>Обратная связь</h2>
                        <br/>
                        <form action="#" method="post">
                            <input type="email" name="userEmail" placeholder="E-mail"  value="<?php echo $userEmail; ?>"><br/><br/>
                            <textarea name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/></textarea><br/><br/>
                            <input type="submit" name="submit" />
                        </form>
                    <?php endif; ?>

                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.888978260268!2d30.518384416202068!3d50.44316857947442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca0844f4853c923f!2sBessarabskiy+rynok!5e0!3m2!1sen!2sua!4v1467283608106" width="100%" height="450" frameborder="0" style="border:0;pointer-events:none;" allowfullscreen></iframe>
                </div>




<?php include ROOT.'/views/layouts/footer.php'; ?>

