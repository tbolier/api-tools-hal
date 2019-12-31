<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-hal for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-hal/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-hal/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ApiTools\Hal\Plugin\TestAsset;

use Laminas\Stdlib\JsonSerializable;

class JsonSerializableEntity extends Entity implements JsonSerializable
{
    public function __construct($id, $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
        ];
    }
}