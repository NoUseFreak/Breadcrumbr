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

    public function testIterator()
    {
        $crumb1 = new Crumb();
        $crumb1->setLabel(1);
        $crumb2 = new Crumb();
        $crumb2->setLabel(2);
        $crumbs = array($crumb1, $crumb2);

        $this->breadcrumb->getTrail()->addCrumb($crumbs[0]);
        $this->breadcrumb->getTrail()->addCrumb($crumbs[1]);

        foreach ($this->breadcrumb as $index => $crumb) {
            $this->assertEquals($crumbs[$index], $crumb);
        }
    }
}
