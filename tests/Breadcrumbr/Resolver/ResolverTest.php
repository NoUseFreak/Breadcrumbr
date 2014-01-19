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

use Breadcrumbr\Trail\Trail;
use Stubs\Context;
use Stubs\NullResolver;
use Stubs\Resolver;

/**
 * @author Dries De Peuter <dries@nousefreak.be>
 */ 
class ResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractResolver
     */
    protected $resolver;

    public function setUp()
    {
        $this->resolver = new NullResolver();
    }

    public function tearDown()
    {
        unset($this->resolver);
    }

    public function testSuccess()
    {
        $this->assertNull($this->resolver->isSuccess());
        $this->resolver->resolve(new Context(), new Trail());
        $this->assertInternalType('bool', $this->resolver->isSuccess());
    }
}
