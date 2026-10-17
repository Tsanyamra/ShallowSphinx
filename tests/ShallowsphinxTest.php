<?php
/**
 * Tests for ShallowSphinx
 */

use PHPUnit\Framework\TestCase;
use Shallowsphinx\Shallowsphinx;

class ShallowsphinxTest extends TestCase {
    private Shallowsphinx $instance;

    protected function setUp(): void {
        $this->instance = new Shallowsphinx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shallowsphinx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
