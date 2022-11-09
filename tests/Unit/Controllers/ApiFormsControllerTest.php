<?php

namespace Tests\Unit\Controllers;

use App\Http\Controllers\ApiFormsController;
use Illuminate\Http\Response;
use Tests\TestCase;

class ApiFormsControllerTest extends TestCase {

    public function testIfControllerHasRightMethods() {
        $apiFormsController = new ApiFormsController();
        $this->assertTrue(method_exists($apiFormsController,'index'));
        $this->assertTrue(method_exists($apiFormsController,'show'));
    }

}
