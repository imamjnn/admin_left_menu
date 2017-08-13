<!DOCTYPE html>
<html lang="en-US">
<head>
    <?= $this->theme->file('head') ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3 col-lg-2">
    <?= $this->theme->file('header') ?>
</div>
    <div class="col-sm-9 col-lg-10">
        <div class="row">
            <div class="col-md-12">
                <?php if($success): ?>
                <div class="alert alert-success" role="alert"><?= _l('All setting saved') ?></div>
                <?php endif; ?>
                <div class="page-header">
                    <h1><?= $title ?></h1>    
                </div>
                <form method="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <?= $this->form->field('avatar') ?>
                            <?= $this->form->field('about') ?>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <?= $this->form->field('name') ?>
                            <?= $this->form->field('fullname') ?>
                            <?= $this->form->field('password') ?>
                            <?= $this->form->field('website') ?>
                            <?= $this->form->field('email') ?>
                        </div>
                        <div class="col-md-4 col-sm-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-right">
                            <a href="<?= base_url('/admin') ?>" class="btn btn-default"><?= _l('Cancel') ?></a>
                            <button class="btn btn-primary"><?= _l('Save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?= $this->theme->file('foot') ?>
    <?= $this->form->focusInput(); ?>
</div>
</body>
</html>