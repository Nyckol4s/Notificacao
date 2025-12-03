<?php

namespace App\Services;

class NotificationService
{
    public function send($user, $message)
    {
        return "Notificação enviada para {$user}: {$message}";
    }
}
