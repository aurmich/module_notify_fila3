<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> facb5f9 (.)
namespace Modules\Notify\Tests\Unit;

>>>>>>> 2b275b1 (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Notifications\GenericNotification;
=======
use Modules\Notify\Notifications\GenericNotification;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)

// Basic unit tests focusing on business logic of recipient name resolution

describe('GenericNotification getRecipientName', function (): void {
    it('prefers getFullName() when available', function (): void {
        $notification = new GenericNotification('Title', 'Message');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $notifiable = new class {
=======
=======
>>>>>>> facb5f9 (.)
        $notifiable = new class
        {
>>>>>>> 2b275b1 (.)
            public function getFullName(): string
            {
                return 'John Doe';
            }
=======
        $notifiable = new class {
            public function getFullName(): string { return 'John Doe'; }
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)
        };

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $notifiable))->toBe('John Doe');
    });

    it('uses Eloquent model full_name when present and non-empty', function (): void {
        $notification = new GenericNotification('Title', 'Message');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $model = new class extends Model {
=======
        $model = new class extends Model
        {
>>>>>>> 2b275b1 (.)
=======
        $model = new class extends Model
        {
=======
        $model = new class extends Model {
>>>>>>> 2e1287d (.)
>>>>>>> facb5f9 (.)
=======
>>>>>>> d1cd7a3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        $model1 = new class extends Model {
            protected $attributes = ['first_name' => 'Alice'];
        };
        // name present
        $model2 = new class extends Model {
            protected $attributes = ['name' => 'Bob'];
        };
        // none present
        $model3 = new class extends Model {
=======
=======
>>>>>>> facb5f9 (.)
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
>>>>>>> 2b275b1 (.)
            protected $attributes = [];
        };
=======
        $model1 = new class extends Model { protected $attributes = ['first_name' => 'Alice']; };
        // name present
        $model2 = new class extends Model { protected $attributes = ['name' => 'Bob']; };
        // none present
        $model3 = new class extends Model { protected $attributes = []; };
>>>>>>> 2e1287d (.)
=======
>>>>>>> d1cd7a3 (.)

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $model1))->toBe('Alice');
        expect($method->invoke($notification, $model2))->toBe('Bob');
        expect($method->invoke($notification, $model3))->toBe('Utente');
    });
});
