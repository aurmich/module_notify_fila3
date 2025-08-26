# Notify Module Documentation

Comprehensive notification system for Laraxot PTVX providing email, SMS, push notifications, and real-time messaging.

## Quick Reference

### Core Components
- **Email Notifications**: Laravel Mail integration with templates
- **SMS Notifications**: Multi-provider SMS gateway support
- **Push Notifications**: Web and mobile push notifications
- **Real-time Messaging**: WebSocket and broadcasting support
- **Notification Templates**: Customizable notification templates

## Documentation Structure

1. [Notification System](notification-system.md) - Core notification architecture
2. [Email Integration](email-integration.md) - Email notification setup and templates
3. [SMS Integration](sms-integration.md) - SMS provider configuration
4. [Push Notifications](push-notifications.md) - Web and mobile push setup
5. [Real-time Messaging](real-time-messaging.md) - Broadcasting and WebSocket
6. [Template Management](template-management.md) - Notification template system
7. [Configuration](configuration.md) - Module configuration and setup
8. [Troubleshooting](troubleshooting.md) - Common issues and solutions

## Business Logic Focus

- **Multi-channel delivery**: Email, SMS, push, and real-time notifications
- **Template management**: Customizable notification templates
- **Delivery tracking**: Monitor notification delivery status
- **User preferences**: Per-user notification preferences
- **Performance optimization**: Queue-based delivery system

## Quick Start

```php
// Send notification
$user->notify(new WelcomeNotification());

// Queue notification
$user->notify((new InvoiceNotification())->delay(now()->addMinutes(10)));

// Broadcast real-time notification
broadcast(new OrderStatusUpdated($order));
```
