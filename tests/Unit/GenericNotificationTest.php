<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Notify\Notifications\GenericNotification;
use Illuminate\Database\Eloquent\Model;
=======
namespace Modules\Notify\Tests\Unit;

use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Notifications\GenericNotification;
>>>>>>> 2b275b1a (.)

// Basic unit tests focusing on business logic of recipient name resolution

describe('GenericNotification getRecipientName', function (): void {
    it('prefers getFullName() when available', function (): void {
        $notification = new GenericNotification('Title', 'Message');

<<<<<<< HEAD
        $notifiable = new class {
            public function getFullName(): string { return 'John Doe'; }
=======
        $notifiable = new class
        {
            public function getFullName(): string
            {
                return 'John Doe';
            }
>>>>>>> 2b275b1a (.)
        };

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $notifiable))->toBe('John Doe');
    });

    it('uses Eloquent model full_name when present and non-empty', function (): void {
        $notification = new GenericNotification('Title', 'Message');

<<<<<<< HEAD
        $model = new class extends Model {
=======
        $model = new class extends Model
        {
>>>>>>> 2b275b1a (.)
            protected $attributes = [
                'full_name' => 'Jane Roe',
            ];
        };

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $model))->toBe('Jane Roe');
    });

    it('falls back to first_name then name then default', function (): void {
        $notification = new GenericNotification('Title', 'Message');

        // first_name present
<<<<<<< HEAD
        $model1 = new class extends Model { protected $attributes = ['first_name' => 'Alice']; };
        // name present
        $model2 = new class extends Model { protected $attributes = ['name' => 'Bob']; };
        // none present
        $model3 = new class extends Model { protected $attributes = []; };
=======
        $model1 = new class extends Model
        {
            protected $attributes = ['first_name' => 'Alice'];
        };
        // name present
        $model2 = new class extends Model
        {
            protected $attributes = ['name' => 'Bob'];
        };
        // none present
        $model3 = new class extends Model
        {
            protected $attributes = [];
        };
>>>>>>> 2b275b1a (.)

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $model1))->toBe('Alice');
        expect($method->invoke($notification, $model2))->toBe('Bob');
        expect($method->invoke($notification, $model3))->toBe('Utente');
    });
});
