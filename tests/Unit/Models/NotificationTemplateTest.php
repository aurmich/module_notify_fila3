<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Enums\NotificationTypeEnum;
use PHPUnit\Framework\TestCase;

class NotificationTemplateTest extends TestCase
{
    /** @test */
    public function it_extends_base_model(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertInstanceOf(\Modules\Notify\Models\BaseModel::class, $template);
    }

    /** @test */
    public function it_implements_has_media(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertInstanceOf(\Spatie\MediaLibrary\HasMedia::class, $template);
    }

    /** @test */
    public function it_has_correct_fillable_attributes(): void
    {
        $expectedFillable = [
            'name', 'code', 'description', 'subject', 'body_html', 'body_text',
            'channels', 'variables', 'conditions', 'preview_data', 'metadata',
            'category', 'is_active', 'version', 'tenant_id', 'grapesjs_data', 'type',
        ];

        $this->assertEquals($expectedFillable, (new NotificationTemplate())->getFillable());
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
        $template = new NotificationTemplate();
        $casts = $template->getCasts();

        $this->assertIsArray($casts);
        $this->assertEquals(NotificationTypeEnum::class, $casts['type']);
        $this->assertEquals('array', $casts['preview_data']);
        $this->assertEquals('string', $casts['body_html']);
        $this->assertEquals('string', $casts['body_text']);
        $this->assertEquals('array', $casts['channels']);
        $this->assertEquals('array', $casts['variables']);
        $this->assertEquals('array', $casts['conditions']);
        $this->assertEquals('array', $casts['metadata']);
        $this->assertEquals('boolean', $casts['is_active']);
        $this->assertEquals('array', $casts['grapesjs_data']);
    }

    /** @test */
    public function it_has_translatable_attributes(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertIsArray($template->translatable);
        $this->assertContains('subject', $template->translatable);
        $this->assertContains('body_text', $template->translatable);
        $this->assertContains('body_html', $template->translatable);
    }

    /** @test */
    public function it_has_media_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplate::class);
        $traits = $reflection->getTraitNames();
        
        $this->assertContains('Spatie\MediaLibrary\InteractsWithMedia', $traits);
        $this->assertContains('Spatie\Translatable\HasTranslations', $traits);
    }

    /** @test */
    public function it_has_factory_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplate::class);
        $traits = $reflection->getTraitNames();
        
        $this->assertContains('Modules\Xot\Traits\HasFactory', $traits);
    }

    /** @test */
    public function it_has_compile_method(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertTrue(method_exists($template, 'compile'));
    }

    /** @test */
    public function it_has_should_send_method(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertTrue(method_exists($template, 'shouldSend'));
    }

    /** @test */
    public function it_has_compile_string_method(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertTrue(method_exists($template, 'compileString'));
    }

    /** @test */
    public function it_has_register_media_collections_method(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertTrue(method_exists($template, 'registerMediaCollections'));
    }

    /** @test */
    public function it_has_table_name(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertEquals('notification_templates', $template->getTable());
    }

    /** @test */
    public function it_has_primary_key(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertEquals('id', $template->getKeyName());
    }

    /** @test */
    public function it_uses_timestamps(): void
    {
        $template = new NotificationTemplate();
        
        $this->assertTrue($template->usesTimestamps());
    }

    /** @test */
    public function it_has_soft_deletes(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplate::class);
        $traits = $reflection->getTraitNames();
        
        $this->assertContains('Illuminate\Database\Eloquent\Concerns\HasUuids', $traits);
    }
}
