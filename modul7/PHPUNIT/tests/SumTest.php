<?php
namespace Szkolenie\Tests;

use Szkolenie\Arithmetic\Sum;

class CompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $fasade  = new Sum(2,2) ;
        $this->assertEquals(
            4, $fasade->result()
        );
    }
}