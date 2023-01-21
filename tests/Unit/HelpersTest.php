<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testPriceCents()
    {
        $result = price_on_cents(66.9927);
        $this->assertIsInt($result);
    }
}
