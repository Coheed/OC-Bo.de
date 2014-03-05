<!-- Footer ----------------------------->
<div class="padding"><?php echo $this->replaceInsertTags( '{{insert_module::19}}' ); ?></div>
<?php if ($objPage->id == 5): ?>
    <h3 class="imp">Impressionen aus der Praxis</h3>
    <?php echo $this->replaceInsertTags( '{{insert_article::31}}' ); ?>
<?php endif;?>

<!-- Footer  --------------------------->
<div id="bigFooter">
    <!-- aktuell -->
    <div id="social">
        <div class="BFsocialmedia">
            <h1>social media</h1>
            <p>
                <a href="https://www.facebook.com/zahnchirurgie.bochum" target="_blank">facebook</a>
                <a href="http://www.jameda.de/bochum/zahnaerzte/oralchirurgen/dr-stefan-koenig/uebersicht/80238686_1/"
                   target="_blank">jameda</a>
                <a href="#" target="_blank">twitter</a>
                <a href="#">newsletter</a>
            </p></div>
        <div class="BFnavigation">
            <h1>navigation</h1>
            <p>
                <a href="<?php echo $this->replaceInsertTags( '{{link_url::6}}' ); ?>">philosophie</a>
                <a href="<?php echo $this->replaceInsertTags( '{{link_url::7}}' ); ?>">praxis</a>
                <a href="<?php echo $this->replaceInsertTags( '{{link_url::8}}' ); ?>">menschen</a>
                <a href="<?php echo $this->replaceInsertTags( '{{link_url::9}}' ); ?>">behandlung</a>
                <a href="<?php echo $this->replaceInsertTags( '{{link_url::10}}' ); ?>">aktuelles</a>
            </p>
            <div id="copyright">© dr. stefan könig . alle rechte vorbehalten</div>
        </div>
    </div>
    <div id="loginBox">
        <?php if (FE_USER_LOGGED_IN OR BE_USER_LOGGED_IN): ?>
            <?php else: ?>
            <a href="<?php echo $this->replaceInsertTags( '{{link_url::42}}' ); ?>">Registrierung</a>
            <?php echo $this->replaceInsertTags( '{{insert_module::31}}' ); ?>
<?php endif; ?>
    </div>
    <div id="blueFooter">
        <div class="left">
            <a href="<?php echo $this->replaceInsertTags( '{{link_url::11}}' ); ?>">Kontakt</a>
            <a href="<?php echo $this->replaceInsertTags( '{{link_url::54}}' ); ?>">Jobs</a>
            <a href="<?php echo $this->replaceInsertTags( '{{link_url::55}}' ); ?>">partner</a>
        </div>
        <div class="right">
            <a href="<?php echo $this->replaceInsertTags( '{{link_url::39}}' ); ?>#">dr. stefan könig</a>
            <a href="<?php echo $this->replaceInsertTags( '{{link_url::14}}' ); ?>">datenschutz</a>
            <a href="<?php echo $this->replaceInsertTags( '{{link_url::13}}' ); ?>">impressum</a>
            <?php if (FE_USER_LOGGED_IN OR BE_USER_LOGGED_IN): ?>
                <a href="<?php echo $this->replaceInsertTags( '{{link_url::41}}' ); ?>">  <button id="logout">Logout</button></a>
            <?php else: ?>
                <button id="login">login</button>
            <?php endif; ?>
        </div>
    </div>
</div>


