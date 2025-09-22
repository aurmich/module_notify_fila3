<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;


class NotificationTemplateVersionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    /** @test */
    public function it_extends_base_model(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertInstanceOf(\Modules\Notify\Models\BaseModel::class, $version);
    }

    /** @test */
    public function it_uses_updater_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        $this->assertContains('Modules\Xot\Traits\Updater', $traits);
    }

    /** @test */
    public function it_has_correct_fillable_attributes(): void
    {
        $expectedFillable = [
<<<<<<< HEAD
            'template_id',
            'subject',
            'body_html',
            'body_text',
            'channels',
            'variables',
            'conditions',
            'version',
            'created_by',
            'change_notes',
        ];

        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
            'template_id', 'subject', 'body_html', 'body_text', 'channels',
            'variables', 'conditions', 'version', 'created_by', 'change_notes',
        ];

<<<<<<< HEAD
<<<<<<< HEAD
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
<<<<<<< HEAD
>>>>>>> 2b275b1 (.)
=======
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
>>>>>>> 2e1287d (.)
>>>>>>> facb5f9 (.)
=======
>>>>>>> d1cd7a3 (.)
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)
=======
        $version = new NotificationTemplateVersion;
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2e1287d (.)
>>>>>>> facb5f9 (.)
=======
>>>>>>> d1cd7a3 (.)
        $casts = $version->getCasts();

        $this->assertIsArray($casts);
        $this->assertEquals('array', $casts['channels']);
        $this->assertEquals('array', $casts['variables']);
        $this->assertEquals('array', $casts['conditions']);
    }

    /** @test */
    public function it_has_template_relationship(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertTrue(method_exists($version, 'template'));
    }

    /** @test */
    public function it_has_restore_method(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertTrue(method_exists($version, 'restore'));
    }

    /** @test */
    public function restore_method_returns_notification_template(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

        $this->assertTrue(method_exists($version, 'restore'));

        // Verifica che il metodo restituisca NotificationTemplate
        $reflection = new \ReflectionMethod($version, 'restore');
        $returnType = $reflection->getReturnType();

=======
        $version = new NotificationTemplateVersion();
        
        $this->assertTrue(method_exists($version, 'restore'));
        
        // Verifica che il metodo restituisca NotificationTemplate
        $reflection = new \ReflectionMethod($version, 'restore');
        $returnType = $reflection->getReturnType();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertEquals(NotificationTemplate::class, $returnType->getName());
    }

    /** @test */
    public function it_has_table_name(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertEquals('notification_template_versions', $version->getTable());
    }

    /** @test */
    public function it_has_primary_key(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertEquals('id', $version->getKeyName());
    }

    /** @test */
    public function it_uses_timestamps(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertTrue($version->usesTimestamps());
    }

    /** @test */
    public function it_has_soft_deletes(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        $this->assertContains('Illuminate\Database\Eloquent\Concerns\HasUuids', $traits);
    }

    /** @test */
    public function it_has_factory_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        $this->assertContains('Modules\Xot\Traits\HasFactory', $traits);
    }

    /** @test */
    public function it_has_media_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        $this->assertContains('Spatie\MediaLibrary\HasMedia', $traits);
    }

    /** @test */
    public function it_has_creator_and_updater_relationships(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertTrue(method_exists($version, 'creator'));
        $this->assertTrue(method_exists($version, 'updater'));
    }

    /** @test */
    public function it_has_media_relationship(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
=======
>>>>>>> facb5f9 (.)
        $version = new NotificationTemplateVersion;
>>>>>>> 2b275b1 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        $this->assertTrue(method_exists($version, 'media'));
    }
}
