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
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1><?= $title ?></h1>
                <hr>
                <form method="post" data-name="<?= $this->form->name ?>">
                    <?= $this->form->field('name') ?>
                    <?= $this->form->field('password') ?>
                    
                    <div class="form-group text-right">
                        <button class="btn btn-primary"><?= _l('Login') ?></button>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
    <?= $this->theme->file('foot') ?>
    <?= $this->form->focusInput(); ?>
</div>    
</body>
</html>