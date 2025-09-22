<?php

declare(strict_types=1);

use Modules\Notify\Models\NotificationType;

describe('NotificationType Business Logic', function () {
    test('notification type extends eloquent model', function () {
        expect(NotificationType::class)->toBeSubclassOf(\Illuminate\Database\Eloquent\Model::class);
    });

    test('notification type has expected fillable fields', function () {
        $notificationType = new NotificationType();
        $expectedFillable = [
            'name',
            'description',
            'template',
        ];
<<<<<<< HEAD

=======
        
>>>>>>> 2b275b1 (.)
        expect($notificationType->getFillable())->toEqual($expectedFillable);
    });

    test('notification type can store basic information', function () {
        $notificationType = new NotificationType();
        $notificationType->name = 'Email Verification';
        $notificationType->description = 'Email verification notification type';
        $notificationType->template = 'email-verification-template';
<<<<<<< HEAD

=======
        
>>>>>>> 2b275b1 (.)
        expect($notificationType->name)->toBe('Email Verification');
        expect($notificationType->description)->toBe('Email verification notification type');
        expect($notificationType->template)->toBe('email-verification-template');
    });

    test('notification type model can be instantiated without errors', function () {
        $notificationType = new NotificationType();
<<<<<<< HEAD

=======
        
>>>>>>> 2b275b1 (.)
        expect($notificationType)->toBeInstanceOf(NotificationType::class);
        expect($notificationType)->toBeInstanceOf(\Illuminate\Database\Eloquent\Model::class);
    });

    test('notification type can be queried', function () {
        $query = NotificationType::query();
<<<<<<< HEAD

        expect($query)->toBeInstanceOf(\Illuminate\Database\Eloquent\Builder::class);
    });
});
=======
        
        expect($query)->toBeInstanceOf(\Illuminate\Database\Eloquent\Builder::class);
    });
});
>>>>>>> 2b275b1 (.)
