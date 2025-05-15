<<<<<<< HEAD


=======

=======

>>>>>>> aurmich/dev

=======

>>>>>>> aurmich/dev
=======

>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
# Rapporto PHPStan Livello 7 per il modulo Notify

Data analisi: 2025-04-15 21:51:24

🎉 **Congratulazioni!** Nessun errore trovato a questo livello.


=======
aurmich/dev
=======

>>>>>>> aurmich/dev

=======
aurmich/dev
>>>>>>> aurmich/dev
=======
aurmich/dev
>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
=======
# PHPStan Report - Livello 7

## Errori rilevati
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $appointment of method Modules\Notify\Actions\SendAppointmentNotificationAction::execute() has invalid type Modules\Dental\Models\Appointment. (line 35)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $appointment of method Modules\Notify\Actions\SendAppointmentNotificationAction::execute() has invalid type Modules\Dental\Models\Appointment. (line 35)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $patient_id on an unknown class Modules\Dental\Models\Appointment. (line 41)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Call to static method with() on an unknown class Modules\Patient\Models\Patient. (line 41)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $id on an unknown class Modules\Dental\Models\Appointment. (line 45)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $patient_id on an unknown class Modules\Dental\Models\Appointment. (line 46)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter #1 $model of method Spatie\Activitylog\ActivityLogger::performedOn() expects Illuminate\Database\Eloquent\Model, Modules\Dental\Models\Appointment given. (line 70)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $id on an unknown class Modules\Dental\Models\Appointment. (line 81)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $appointment of method Modules\Notify\Actions\SendAppointmentNotificationAction::recordNotification() has invalid type Modules\Dental\Models\Appointment. (line 99)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $appointment of method Modules\Notify\Actions\SendAppointmentNotificationAction::recordNotification() has invalid type Modules\Dental\Models\Appointment. (line 99)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $patient of method Modules\Notify\Actions\SendAppointmentNotificationAction::recordNotification() has invalid type Modules\Patient\Models\Patient. (line 100)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $patient of method Modules\Notify\Actions\SendAppointmentNotificationAction::recordNotification() has invalid type Modules\Patient\Models\Patient. (line 100)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to an undefined property Modules\Notify\Models\Notification::$tenant_id. (line 106)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $tenant_id on an unknown class Modules\Dental\Models\Appointment. (line 106)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to an undefined property Modules\Notify\Models\Notification::$user_id. (line 107)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $user on an unknown class Modules\Patient\Models\Patient. (line 107)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to an undefined property Modules\Notify\Models\Notification::$subject_type. (line 108)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Class Modules\Dental\Models\Appointment not found. (line 108)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to an undefined property Modules\Notify\Models\Notification::$subject_id. (line 109)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $id on an unknown class Modules\Dental\Models\Appointment. (line 109)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to an undefined property Modules\Notify\Models\Notification::$channels. (line 111)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to an undefined property Modules\Notify\Models\Notification::$status. (line 112)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Property Modules\Notify\Models\Notification::$data (string) does not accept array<string, mixed>. (line 113)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $id on an unknown class Modules\Dental\Models\Appointment. (line 114)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $id on an unknown class Modules\Patient\Models\Patient. (line 115)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $date on an unknown class Modules\Dental\Models\Appointment. (line 116)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to property $start_time on an unknown class Modules\Dental\Models\Appointment. (line 117)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Access to an undefined property Modules\Notify\Models\Notification::$sent_at. (line 119)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendNotificationAction.php: Access to an undefined property Illuminate\Database\Eloquent\Model::$id. (line 61)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendNotificationAction.php: Access to an undefined property Illuminate\Database\Eloquent\Model::$id. (line 89)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendNotificationAction.php: Access to an undefined property Illuminate\Database\Eloquent\Model::$id. (line 101)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Datas/EmailData.php: Property Modules\Notify\Datas\EmailData::$body in isset() is not nullable nor uninitialized. (line 72)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Mail/AppointmentNotificationMail.php: Access to property $id on an unknown class Modules\Dental\Models\Appointment. (line 52)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Mail/AppointmentNotificationMail.php: Class Modules\Dental\Models\Appointment not found. (line 52)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Mail/AppointmentNotificationMail.php: Access to property $id on an unknown class Modules\Dental\Models\Appointment. (line 53)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Mail/AppointmentNotificationMail.php: Access to property $id on an unknown class Modules\Dental\Models\Appointment. (line 60)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Mail/AppointmentNotificationMail.php: Class Modules\Dental\Models\Appointment not found. (line 60)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Models/NotificationLog.php: PHPDoc type array<int, string> of property Modules\Notify\Models\NotificationLog::$fillable is not covariant with PHPDoc type list<string> of overridden property Illuminate\Database\Eloquent\Model::$fillable. (line 30)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Notifications/GenericNotification.php: Method Modules\Notify\Notifications\GenericNotification::toTwilio() has invalid return type NotificationChannels\Twilio\TwilioSmsMessage. (line 103)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Notifications/GenericNotification.php: Method Modules\Notify\Notifications\GenericNotification::toTwilio() has invalid return type NotificationChannels\Twilio\TwilioSmsMessage. (line 103)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Notifications/GenericNotification.php: Call to method content() on an unknown class NotificationChannels\Twilio\TwilioSmsMessage. (line 112)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Notifications/GenericNotification.php: Instantiated class NotificationChannels\Twilio\TwilioSmsMessage not found. (line 112)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Notifications/GenericNotification.php: Cannot call method getFullName() on class-string|object. (line 142)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/tests/Feature/JsonComponentsTest.php: Function json_decode is unsafe to use. It can return FALSE instead of throwing an exception. Please add 'use function Safe\json_decode;' at the beginning of the file to use the variant provided by the 'thecodingmachine/safe' library. (line 25)

## Soluzioni proposte

> TODO: descrivere soluzioni architetturali e funzionali
>>>>>>> 064a54f (.)
