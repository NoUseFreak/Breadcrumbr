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

use Breadcrumbr\Context\Context;
use Breadcrumbr\Context\ContextInterface;
use Breadcrumbr\Crumb\CrumbInterface;
use Breadcrumbr\Resolver\ResolverInterface;
use Breadcrumbr\Resolver\ResolverStack;
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

    /**
     * @var ResolverStack
     */
    protected $resolver;

    /**
     * @var ContextInterface
     */
    protected $context;

    public function __construct()
    {
        $this->trail = new Trail();
    }

    /**
     * @param CrumbInterface $crumb
     */
    public function addCrumb(CrumbInterface $crumb)
    {
        $this->trail->addCrumb($crumb);
    }

    /**
     * @return TrailInterface
     */
    protected function getTrail()
    {
        return $this->trail;
    }

    /**
     * @param ContextInterface $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return ContextInterface
     */
    public function getContext()
    {
        if (!$this->context) {
            $this->context = new Context();
        }

        return $this->context;
    }

    /**
     * @return Traversable
     */
    public function getIterator()
    {
        if ($this->resolver) {
            $this->trail = $this->resolver->resolve($this->getContext(), $this->trail);
        }

        return $this->getTrail();
    }

    /**
     * @param ResolverInterface $resolver
     */
    public function addResolver(ResolverInterface $resolver)
    {
        if (is_null($this->resolver)) {
            $this->resolver = new ResolverStack();
        }

        $this->resolver->addResolver($resolver);
    }
}
