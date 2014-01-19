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

use Breadcrumbr\Crumb\Crumb;
use Stubs\ArrayResolver;
use Stubs\NullResolver;

/**
 * Breadcrumb.
 *
 * @author Dries De Peuter <dries@nousefreak.be>
 */
class BreadcrumbTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Breadcrumb
     */
    protected $breadcrumb;

    public function setUp()
    {
        $this->breadcrumb = new Breadcrumb();
    }

    public function tearDown()
    {
        unset($this->breadcrumb);
    }

    protected function createCrumbArray($size = 10)
    {
        $crumbs = array();

        for ($i = 0; $i < $size; $i++) {
            $crumb = new Crumb();
            $crumb->setLabel(1);
            $crumbs[] = $crumb;
        }

        return $crumbs;
    }

    public function testIterator()
    {
        $crumbs = $this->createCrumbArray();

        foreach ($crumbs as $crumb) {
            $this->breadcrumb->addCrumb($crumb);
        }

        foreach ($this->breadcrumb as $index => $crumb) {
            $this->assertEquals($crumbs[$index], $crumb);
        }
    }

    public function testResolver()
    {
        $this->breadcrumb->addResolver(new NullResolver());

        $count = 0;
        foreach ($this->breadcrumb as $item) {
            $count++;
        }
        $this->assertEquals(0, $count);
    }

    public function testArrayResolver()
    {
        $crumbs = $this->createCrumbArray();
        $this->breadcrumb->addResolver(new ArrayResolver($crumbs));

        foreach ($this->breadcrumb as $index => $crumb) {
            $this->assertEquals($crumbs[$index], $crumb);
        }
    }
}
