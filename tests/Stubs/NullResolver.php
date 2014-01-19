<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Stubs;

use Breadcrumbr\Context\ContextInterface;
use Breadcrumbr\Resolver\AbstractResolver;
use Breadcrumbr\Trail\TrailInterface;

/**
 * @author Dries De Peuter <dries@nousefreak.be>
 */ 
class NullResolver extends AbstractResolver
{
    /**
     * @param ContextInterface $context
     * @param TrailInterface $trail
     * @return TrailInterface
     */
    public function doResolve(ContextInterface $context, TrailInterface $trail)
    {
        return $trail;
    }
}
