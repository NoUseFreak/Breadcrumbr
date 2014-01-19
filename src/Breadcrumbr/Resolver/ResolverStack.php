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
class ResolverStack
{
    /**
     * @var ResolverInterface[]
     */
    protected $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function addResolver(ResolverInterface $resolver)
    {
        $this->stack[] = $resolver;
    }

    public function resolve(ContextInterface $context, TrailInterface $trail)
    {
        foreach ($this->stack as $resolver) {
            $trail = $resolver->resolve($context, $trail);
        }

        return $trail;
    }
}
