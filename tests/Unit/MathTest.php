<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ContactController;

class MathTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_addition_works(): void
    {
     $result = ContactController::sumTest(2,3);
        $this->assertEquals(5, $result);
    }
}
