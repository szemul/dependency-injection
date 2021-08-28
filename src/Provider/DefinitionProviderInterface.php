<?php
declare(strict_types=1);

namespace Szemul\DependencyInjection\Provider;

interface DefinitionProviderInterface
{
    /** @return array<string,mixed> */
    public function getDefinitions(): array;
}
