<div class ="fb_login">
    <?php if(isset($user_profile)) : ?>
        <div class ="user_info">
            <?php foreach($user_profile as $user) : ?>
                <h1>Bem vindo(a) <?php echo $user['name']; ?></h1>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p><a href="<?php echo $login_url; ?>"</p>
    <?php endif; ?>
</div>
