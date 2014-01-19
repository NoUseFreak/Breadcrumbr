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

use Breadcrumbr\Context\Context;

/**
 * @author Dries De Peuter <dries@nousefreak.be>
 */ 
class ContextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Context
     */
    protected $context;

    public function setUp()
    {
        $this->context = new Context();
    }

    public function tearDown()
    {
        unset($this->context);
    }

    public function testHasFalse()
    {
        $this->assertFalse($this->context->hasContext('nonExisting'));
    }

    public function testHasTrue()
    {
        $this->context->setContext('test', 'foobar');
        $this->assertTrue($this->context->hasContext('test'));
    }

    public function testGet()
    {
        $value = new \stdClass();

        $this->context->setContext('test', $value);
        $this->assertEquals($value, $this->context->getContext('test'));
    }
}
