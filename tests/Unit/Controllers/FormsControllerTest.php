<?php

namespace Tests\Unit\Controllers;

use App\Http\Controllers\FormsController;
use Tests\TestCase;

class FormsControllerTest extends TestCase {

    public function testIfControllerHasRightMethods() {
        $formsController = new formsController();
        $this->assertTrue(method_exists($formsController,'index'));
        $this->assertTrue(method_exists($formsController,'show'));
        $this->assertTrue(method_exists($formsController,'store'));
        $this->assertTrue(method_exists($formsController,'destroy'));
        $this->assertTrue(method_exists($formsController,'edit'));
    }

}
