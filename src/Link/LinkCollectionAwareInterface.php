<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-hal for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-hal/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-hal/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\Hal\Link;

interface LinkCollectionAwareInterface
{
    /**
     * @param LinkCollection $links
     * @return mixed
     */
    public function setLinks(LinkCollection $links);
    
    /**
     * @return LinkCollection
     */
    public function getLinks();
}
