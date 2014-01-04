<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Breadcrumbr;

use Breadcrumbr\Trail\Trail;
use Breadcrumbr\Trail\TrailInterface;
use Traversable;

/**
 * Breadcrumb.
 *
 * @author Dries De Peuter <dries@nousefreak.be>
 */
class Breadcrumb implements \IteratorAggregate
{
    /**
     * @var TrailInterface
     */
    protected $trail;

    public function __construct()
    {
        $this->trail = new Trail();
    }
    /**
     * @return TrailInterface
     */
    public function getTrail()
    {
        return $this->trail;
    }

    /**
     * @return Traversable
     */
    public function getIterator()
    {
        return $this->getTrail();
    }
}
