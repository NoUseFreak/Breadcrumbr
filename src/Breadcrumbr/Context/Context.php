<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Breadcrumbr\Context;

/**
 * ContextInterface.
 *
 * @author Dries De Peuter <dries@nousefreak.be>
 */
class Context implements ContextInterface
{
    /**
     * @var mixed[]
     */
    protected $context = array();

    /**
     * @param string $name
     * @param mixed[] $context
     */
    public function setContext($name, $context)
    {
        $this->context[$name] = $context;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getContext($name)
    {
        return $this->context[$name];
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasContext($name)
    {
        return isset($this->context[$name]);
    }
}
