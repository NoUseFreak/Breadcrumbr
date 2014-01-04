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

use Breadcrumbr\Crumb\Crumb;
use Breadcrumbr\Trail\Trail;

/**
 * @author Dries De Peuter <dries@nousefreak.be>
 */ 
class TrailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Trail
     */
    protected $trail;

    public function setUp()
    {
        $this->trail = new Trail();
    }

    public function tearDown()
    {
        unset($this->trail);
    }

    public function testAdd()
    {
        $this->assertEquals(array(), $this->trail->getCrumbs());

        $this->trail->addCrumb(new Crumb());
        $this->assertEquals(array(new Crumb()), $this->trail->getCrumbs());
    }
}
