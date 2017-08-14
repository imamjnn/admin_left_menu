<nav class="navbar <?= ($this->user ? ($this->user->theme == 1 ? 'navbar-default':'navbar-inverse') : 'navbar-default') ?> navbar-fixed-side">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#header-menu" data-toggle="collapse" type="button">
                <span class="sr-only"><?= _l('Toggle navigation'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand txt-brand" href="<?= base_url('/admin') ?>"><?= $this->setting->item('site_name') ?></a>
        </div>
        <div class="collapse navbar-collapse" id="header-menu">

            <ul class="nav navbar-nav">
                <?php if($this->user): ?>    
                <div class="user-prof">
                    <div class="profile-userpic">
                        <img src="<?= $this->user->avatar->_150x150 ?>" class="img-responsive" alt="">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?= $this->user->fullname ?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <a href="<?= base_url('/admin/me/setting') ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit My Profile"><span class="glyphicon glyphicon-wrench"></span></a>
                        <a href="<?= base_url('/admin/me/logout') ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Logout"><span class="glyphicon glyphicon-log-out"></span></a>
                        <a href="<?= base_url() ?>" target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" title="View Site"><span class="glyphicon glyphicon-globe"></span></a>
                    </div>
                </div>  
                 
                <?= $this->theme->file('header-menu') ?>
                <li>
                <div class="choose-theme">
                    <div class="btn-group" id="status" data-toggle="buttons">
                      <button id="default" class="btn btn-default btn-on btn-xs <?= ($this->user->theme == 1 ? 'active':'') ?>">
                      <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">Default</button>
                      <button id="dark" class="btn btn-default btn-off btn-xs <?= ($this->user->theme == 2 ? 'active':'') ?>">
                      <input type="radio" value="0" name="multifeatured_module[module_id][status]">Dark</button>
                    </div>
                </div>
                </li>
                <?php endif; ?> 
            </ul>
        </div>
        
    </div>
</nav>