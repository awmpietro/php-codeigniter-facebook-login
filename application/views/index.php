<div class ="fb_login">
    <?php if($this->session->userdata('user_profile')) : ?>
        <div class ="user_info">
            <?php print_r($this->session->userdata('user_profile')); ?>
        </div>
        <div class="logout">
            <p><a href="<?php echo $logout_url; ?>">Logout</a></p>
        </div>
    <?php else : ?>
        <p><a href="<?php echo $login_url; ?>">Login com Facebook</a></p>
    <?php endif; ?>
</div>
