<?php

namespace Modules\Notify\Tests\Unit\Services\MailEngines;

use MailtrapEngine as MailtrapEngineAlias;
use Mockery;
use Modules\Notify\Services\MailEngines\MailtrapEngine;
use ReflectionClass;
use Tests\TestCase;

/**
 * Class MailtrapEngineTest.
 *
 * @covers \Modules\Notify\Services\MailEngines\MailtrapEngine
 */
final class MailtrapEngineTest extends TestCase
{
    private MailtrapEngine $mailtrapEngine;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /**
* 
         *
 * @todo Correctly instantiate tested object to use it. 
*/
        $this->mailtrapEngine = new MailtrapEngine();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->mailtrapEngine);
    }

    public function testGetInstance(): void
    {
        $expected = Mockery::mock(MailtrapEngineAlias::class);
        $property = (new ReflectionClass(MailtrapEngine::class))
            ->getProperty('instance');
        $property->setValue(null, $expected);
        self::assertSame($expected, MailtrapEngine::getInstance());
    }

    public function testMake(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }

    public function testSetLocalVars(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }

    public function testSend(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }

    public function testTry(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}