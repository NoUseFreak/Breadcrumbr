<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Breadcrumbr\Trail;

use Breadcrumbr\Crumb\CrumbInterface;

/**
 * Trail.
 *
 * @author Dries De Peuter <dries@nousefreak.be>
 */
class Trail implements TrailInterface
{
    protected $position = 0;

    /**
     * @var CrumbInterface[]
     */
    protected $crumbs = array();

    /**
     * @param CrumbInterface $crumb
     */
    public function addCrumb(CrumbInterface $crumb)
    {
        $this->crumbs[] = $crumb;
    }

    /**
     * @return \Breadcrumbr\Crumb\CrumbInterface[]
     */
    public function getCrumbs()
    {
        return $this->crumbs;
    }

    /**
     * @return CrumbInterface
     */
    public function current()
    {
        return $this->crumbs[$this->position];
    }

    /**
     * @return void
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return boolean The return value will be casted to boolean and then evaluated.
     */
    public function valid()
    {
        return isset($this->crumbs[$this->position]);
    }

    /**
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->position = 0;
    }
}
