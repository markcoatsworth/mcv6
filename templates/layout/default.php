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

$cakeDescription = 'Mark Coatsworth Photography';
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

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'mcv6']) ?>
    <?php if ($this->request->getSession()->read('Auth.username')): ?>
        <?= $this->Html->script(['jquery-3.6.0.min', 'jquery-ui', 'mcv6']); ?>
    <?php endif; ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav id="side-nav">
        <div class="side-nav-title">
            <h1><a href="<?= $this->Url->build('/') ?>">Mark Coatsworth Photography</a></h1>
        </div>
        <div class="side-nav-links">
            <ul class="galleries">
                <li><?= $this->Html->link('Midwestern Winters', ['controller' => 'photos', 'action' => 'gallery', 'midwestern-winters']); ?></li>
                <li><?= $this->Html->link('Abandon', ['controller' => 'photos', 'action' => 'gallery', 'abandon']); ?></li>
                <li><?= $this->Html->link('North', ['controller' => 'photos', 'action' => 'gallery', 'north']); ?></li>
                <li><?= $this->Html->link('Metal', ['controller' => 'photos', 'action' => 'gallery', 'metal']); ?></li>
            </ul>
            <ul class="pages">
                <li><?= $this->Html->link('About', ['controller' => 'pages', 'action' => 'about']); ?></li>
                <li><?= $this->Html->link('Contact', ['controller' => 'pages', 'action' => 'contact']); ?></li>
            </ul>
            <?php if ($this->request->getSession()->read('Auth.username')): ?>
                <ul class="admin">
                    <li><h3>Administration</h3></li>
                    <li><?= $this->Html->link('Photo Manager', ['controller' => 'photos', 'action' => 'index']); ?></li>
                    <li><?= $this->Html->link('Gallery Manager', ['controller' => 'galleries', 'action' => 'index']); ?></li>
                    <li><?= $this->Html->link('Page Manager', ['controller' => 'pages', 'action' => 'index']); ?></li>
                    <li><?= $this->Html->link('User Manager', ['controller' => 'users', 'action' => 'index']); ?></li>
                    <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
    <main>
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
