<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__User__CLASSMETADATA__' => 0,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'email' => $o[2],
                        'first_name' => $o[3],
                        'last_name' => $o[4],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'first_name' => 'first_name',
                        'last_name' => 'last_name',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'first_name' => 'first_name',
                        'last_name' => 'last_name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                    ],
                ],
                'idGenerator' => [
                    $o[5],
                ],
                'name' => [
                    'App\\Entity\\User',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'string',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'email',
                    'first_name',
                    'last_name',
                ],
                'columnName' => [
                    1 => 'id',
                    'email',
                    'first_name',
                    'last_name',
                ],
                'length' => [
                    2 => 255,
                    50,
                    50,
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
