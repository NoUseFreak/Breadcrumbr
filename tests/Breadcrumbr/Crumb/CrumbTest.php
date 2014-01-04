<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Breadcrumbr\Crumb;

/**
 * @author Dries De Peuter <dries@nousefreak.be>
 */ 
class CrumbTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Crumb
     */
    protected $crumb;

    public function setUp()
    {
        $this->crumb = new Crumb();
    }

    public function tearDown()
    {
        unset($this->crumb);
    }

    public function testLabel()
    {
        $this->assertNull($this->crumb->getLabel());
        $this->crumb->setLabel('test');
        $this->assertEquals('test', $this->crumb->getLabel());
    }
}
