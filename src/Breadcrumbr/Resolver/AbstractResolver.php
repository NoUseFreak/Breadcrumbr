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
abstract class AbstractResolver implements ResolverInterface
{
    /**
     * @var bool
     */
    private $success;

    /**
     * {@inheritdoc}
     */
    final public function resolve(ContextInterface $context, TrailInterface $trail)
    {
        $this->success = false;

        return $this->doResolve($context, $trail);
    }

    /**
     * @param ContextInterface $context
     * @param TrailInterface $trail
     * @return TrailInterface
     */
    abstract public function doResolve(ContextInterface $context, TrailInterface $trail);

    /**
     * Set the success indicator to true.
     */
    protected function markSuccess()
    {
        $this->success = true;
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccess()
    {
        return $this->success;
    }
}
