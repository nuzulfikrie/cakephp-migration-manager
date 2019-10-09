<?php
/**
 * Copyright 2019 ELASTIC Consultants Inc.
 */

use Cake\View\View;
use Elastic\MigrationManager\Model\Entity\MigrationStatus;
use Elastic\MigrationManager\Model\Migration\MigrationGroup;

/* @var $this View */
/* @var $migrationGroup MigrationGroup */
/* @var $migration MigrationStatus */
/* @var $fileContent string */

$this->Html->meta('robots', 'noindex,nofollow', ['block' => true]);
?>
<h1><?= __d('elastic.migration_manager', '{0} Migrations', $migrationGroup->getName()) ?></h1>
<h2><?= __d('elastic.migration_manager', 'File content: {0} {1}', $migration->id, $migration->name) ?></h2>
<nav class="columns">
    <ul class="no-bullet">
        <li>
            <?=
            $this->Html->link(
                __d('elastic.migration_manager', 'Return to {0} migrations', $migrationGroup->getName()),
                ['action' => 'view', '?' => ['name' => $migrationGroup->getName()]]
            )
            ?>
        </li>
    </ul>
</nav>
<pre class="code-highlight code"><?= h($fileContent) ?></pre>
