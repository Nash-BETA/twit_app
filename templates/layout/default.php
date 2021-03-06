<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'default']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <nav class="top-nav display_flex_wrap wd_100">
            <div class="display_flex_wrap wd_100">
                <div class="top-nav-title wd_10">
                    <a href="<?= $this->Url->build('/') ?>">T</a>
                </div>
                <div class="wd_90">
                    <input type="text">
                </div>
            </div>
            <div class="top-nav-links display_flex_wrap wd_100">
                <?php if($login_user):?>
                    <a href="<?= SITE_URL . "users/logout"?>">
                        ログアウト
                    </a>
                <?php else: ?>
                    <a href="<?= SITE_URL . "users/signin"?>">
                        ログイン
                    </a>
                    <a href="<?= SITE_URL . "users/add"?>">
                        新規作成
                    </a>
                <?php endif ?>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <div class="row">
                <aside class="column">
                    <div class="side-nav">
                        <h4 class="heading"><?= __('Actions') ?></h4>
                        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    </div>
                </aside>
                <div class="column-responsive column-80">
                    <div class="users form content">
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
