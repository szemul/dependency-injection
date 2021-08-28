<?php
declare(strict_types=1);

namespace Szemul\DependencyInjection\Provider;

use Szemul\Config\ConfigInterface;

interface DefinitionProviderInterface
{
    public function getDefinitions(): array;
}
