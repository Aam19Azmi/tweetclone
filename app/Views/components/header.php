<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TC - Twitter Clone</title>
    <?= link_tag('css/bootstrap.min.css') ?>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-ligt" style="background-color: #E3F2FD;">
            <div class="container-fluid">
                <a href="<?= base_url() ?>" class="navbar-brand">
                    <?= img(['src'=>'images/Bootstrap_logo.svg', 'width'=>30, 'height'=>24]) ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle='collapse'
                    data-bs-target="#navbarNavAltMarkup" aria-controls="narvbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <strong>
                            <a href="<?= base_url('/') ?>" class="nav-link">
                                (TC) Twitter Clone
                            </a>
                        </strong>
                        <a href="<?= base_url('/auth') ?>" class="nav-link">
                            Login
                        </a>
                        <a href="<?= base_url('/register') ?>" class="nav-link">
                            register
                        </a>
                    </div>
                </div>
            </div>
        </nav>