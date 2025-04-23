<<<<<<< HEAD
# Rapporto PHPStan Livello 1 per il modulo Notify

Data analisi: 2025-04-15 21:50:10

🎉 **Congratulazioni!** Nessun errore trovato a questo livello.
=======
# PHPStan Report - Livello 1

## Errori rilevati
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $appointment of method Modules\Notify\Actions\SendAppointmentNotificationAction::execute() has invalid type Modules\Dental\Models\Appointment. (line 35)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Call to static method with() on an unknown class Modules\Patient\Models\Patient. (line 41)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $appointment of method Modules\Notify\Actions\SendAppointmentNotificationAction::recordNotification() has invalid type Modules\Dental\Models\Appointment. (line 99)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Parameter $patient of method Modules\Notify\Actions\SendAppointmentNotificationAction::recordNotification() has invalid type Modules\Patient\Models\Patient. (line 100)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Actions/SendAppointmentNotificationAction.php: Class Modules\Dental\Models\Appointment not found. (line 108)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Datas/EmailData.php: Property Modules\Notify\Datas\EmailData::$body in isset() is not nullable nor uninitialized. (line 72)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Mail/AppointmentNotificationMail.php: Class Modules\Dental\Models\Appointment not found. (line 52)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Mail/AppointmentNotificationMail.php: Class Modules\Dental\Models\Appointment not found. (line 60)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Notifications/GenericNotification.php: Method Modules\Notify\Notifications\GenericNotification::toTwilio() has invalid return type NotificationChannels\Twilio\TwilioSmsMessage. (line 103)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/app/Notifications/GenericNotification.php: Instantiated class NotificationChannels\Twilio\TwilioSmsMessage not found. (line 112)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Notify/tests/Feature/JsonComponentsTest.php: Function json_decode is unsafe to use. It can return FALSE instead of throwing an exception. Please add 'use function Safe\json_decode;' at the beginning of the file to use the variant provided by the 'thecodingmachine/safe' library. (line 25)

## Soluzioni proposte

> TODO: descrivere soluzioni architetturali e funzionali
>>>>>>> aurmich/dev
