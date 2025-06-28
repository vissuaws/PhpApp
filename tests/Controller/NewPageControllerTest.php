<?php 

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\NewPageController;

class NewPageControllerTest extends TestCase
{
    public function testSomething()
    {
        $newPage = new NewPageController;
        $this->assertEquals("PHP is cool", $newPage->personalMessage());
    }
}
