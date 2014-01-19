<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Breadcrumbr\Resolver;

use Breadcrumbr\Context\ContextInterface;
use Breadcrumbr\Trail\TrailInterface;

/**
 * @author Dries De Peuter <dries@nousefreak.be>
 */
interface ResolverInterface
{
    /**
     * @param  ContextInterface $context
     * @param  TrailInterface   $trail
     * @return TrailInterface
     */
    public function resolve(ContextInterface $context, TrailInterface $trail);

    /**
     * Indicate if the resolve method could handle the context.
     *
     * @return bool
     */
    public function isSuccess();
}
