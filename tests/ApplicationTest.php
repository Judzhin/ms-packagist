<?php
/**
 * @access protected
 * @author Jduzhin Miles <info[woof-woof]msbios.com>
 */

namespace PackagistTest;

use Packagist\Application;
use Packagist\ApplicationInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationTest
 * @package PackagistTest
 */
class ApplicationTest extends TestCase
{
    public function testCanWeCreate()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject $mock */
        $mock = $this->createMock(Application::class);
        $this->assertInstanceOf(ApplicationInterface::class, $mock);
    }

    public function testCanWeCallInit()
    {
        $this->assertInstanceOf(ApplicationInterface::class, Application::init([]));
    }

    public function testCanWeRun()
    {
        /** @var Application $instance */
        $instance = new Application;

        /** @var \PHPUnit_Framework_MockObject_MockObject $mock */
        $mock = $this->createMock(Application::class);
        $mock->expects($this->any())
            ->method('bootstrap')
            ->will($this->returnValue($instance));

        $this->assertEquals('foo', $mock->bootstrap([])->run());
    }
}