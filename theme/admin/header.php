<nav class="navbar navbar-default navbar-fixed-side">
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
                        <img src="http://wfmu.org/Gfx/user_images/Wade_icon_4186000591528803.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?= $this->user->fullname ?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <a href="<?= base_url('/admin/me/setting') ?>" type="button" class="btn btn-success btn-sm"><?= _l('Settings') ?></a>
                        <a href="<?= base_url('/admin/me/logout') ?>" type="button" class="btn btn-danger btn-sm"><?= _l('Logout') ?></a>
                    </div>
                </div>  
                <?php endif; ?>  
                <?= $this->theme->file('header-menu') ?>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= base_url() ?>"><?= _l('Back to site') ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>