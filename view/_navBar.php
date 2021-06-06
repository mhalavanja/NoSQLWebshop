<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a href="<?php echo __SITE_URL; ?>/index.php?rt=products/index" class="nav-link" type="button">My products</a>
        <a href="<?php echo __SITE_URL; ?>/index.php?rt=products/newProduct" class="nav-link" type="button">Add a new product</a>
        <a href="<?php echo __SITE_URL; ?>/index.php?rt=products/shoppingHistory" class="nav-link" type="button">Shopping history</a>
        <a href="<?php echo __SITE_URL; ?>/index.php?rt=search" class="nav-link" type="button">Search</a>
        <a href="<?php echo __SITE_URL; ?>/index.php?rt=users/index" class="nav-link" type="button">Profile</a>
        <?php if (isset($_SESSION["user"]) && $_SESSION["user"]->getIsAdmin()) { ?>
            <a href="<?php echo __SITE_URL; ?>/index.php?rt=users/users" class="nav-link" type="button" >Users</a>
        <?php } ?>
            <a href="<?php echo __SITE_URL; ?>/index.php?rt=login/processLogout" class="btn btn-danger" type="button">Logout</a>
    </div>
</nav>
<script>
    $(document).ready(function () {
        params={};location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(s,k,v){params[k]=v});
        $("a").filter(function(){
            return $(this).attr('href').includes(params["rt"]);
        }).addClass("active");
    });
</script>