<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Relay\Connection;

use Overblog\GraphQLBundle\Definition\Builder\MappingInterface;

final class BackwardConnectionArgsDefinition implements MappingInterface
{
    /**
     * @param array $config
     *
     * @return array
     */
    public function toMappingDefinition(array $config): array
    {
        return [
            'before' => [
                'type' => 'String',
            ],
            'last' => [
                'type' => 'Int',
            ],
        ];
    }
}
