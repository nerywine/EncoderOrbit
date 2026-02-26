<?php
/**
 * Tests for EncoderOrbit
 */

use PHPUnit\Framework\TestCase;
use Encoderorbit\Encoderorbit;

class EncoderorbitTest extends TestCase {
    private Encoderorbit $instance;

    protected function setUp(): void {
        $this->instance = new Encoderorbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Encoderorbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
