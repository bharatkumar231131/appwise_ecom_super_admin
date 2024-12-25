<?php

namespace App\Observers;

use App\Models\Inquiry;
use App\Http\Controllers\NotificationController;
use App\Models\User;

class InquiryObserver
{
    public function created(Inquiry $inquiry)
    {
        $notificationController = new NotificationController();
        
        // Get all admin users
        $adminUsers = User::where('role', 'admin')->get();
        
        foreach ($adminUsers as $admin) {
            if ($admin->fcm_token) {
                $notificationController->sendNotification(
                    'New Inquiry',
                    'A new inquiry has been received',
                    $admin->fcm_token
                );
            }
        }
    }
}
