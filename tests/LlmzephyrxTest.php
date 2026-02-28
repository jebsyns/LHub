<?php
/**
 * Tests for LLMZephyrx
 */

use PHPUnit\Framework\TestCase;
use Llmzephyrx\Llmzephyrx;

class LlmzephyrxTest extends TestCase {
    private Llmzephyrx $instance;

    protected function setUp(): void {
        $this->instance = new Llmzephyrx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Llmzephyrx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
