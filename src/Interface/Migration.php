<?php

declare(strict_types=1);

namespace Tempest\Interface;

use Tempest\Database\Builder\TableBuilder;

interface Migration
{
    public function getName(): string;

    public function up(TableBuilder $builder): TableBuilder;

    public function down(TableBuilder $builder): TableBuilder;
}
