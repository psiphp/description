<?php

declare(strict_types=1);

namespace Psi\Component\Description\Tests\Unit\Descriptor;

use Psi\Component\Description\Descriptor\UriDescriptor;

class UriDescriptorTest extends \PHPUnit_Framework_TestCase
{
    private $descriptor;

    public function setUp()
    {
        $this->descriptor = new UriDescriptor('https://foobar.com/admin/edit/123');
    }

    public function testGetValue()
    {
        $this->assertEquals('https://foobar.com/admin/edit/123', $this->descriptor->getValue());
    }
}
