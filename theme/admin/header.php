<nav class="navbar navbar-inverse navbar-fixed-side">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#header-menu" data-toggle="collapse" type="button">
                <span class="sr-only"><?= _l('Toggle navigation'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('/admin') ?>"><?= $this->setting->item('site_name') ?></a>
        </div>
        <div class="collapse navbar-collapse" id="header-menu">

            <ul class="nav navbar-nav">
                <?php if($this->user): ?>    
                <div class="user-prof">
                    <div class="profile-userpic">
                        <img src="<?= $this->user->avatar ?>" class="img-responsive" alt="">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?= $this->user->fullname ?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <a href="<?= base_url('/admin/me/setting') ?>" class="btn btn-default btn-xs" title="Edit My Profile"><span class="glyphicon glyphicon-wrench"></span></a>
                        <a href="<?= base_url('/admin/me/logout') ?>" class="btn btn-default btn-xs" title="Logout"><span class="glyphicon glyphicon-log-out"></span></a>
                        <a href="<?= base_url() ?>" target="_blank" class="btn btn-default btn-xs"><?= _l('View site') ?></a>
                    </div>
                </div>  
                <?php endif; ?>  
                <?= $this->theme->file('header-menu') ?>
            </ul>
        </div>
    </div>
</nav>