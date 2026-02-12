<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
use App\Mail\NewSubscriber;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Invalid email'], 422);
        }

        $email = strtolower(trim($request->input('email')));

        $subscriber = Subscriber::firstOrCreate(
            ['email' => $email],
            ['subscribed_at' => now()]
        );

        // Send notification to admin (set ADMIN_EMAIL in .env)
        $admin = env('ADMIN_EMAIL', config('mail.from.address'));
        if ($admin) {
            try {
                Mail::to($admin)->send(new NewSubscriber($subscriber));
            } catch (\Throwable $e) {
                // Log but don't fail subscription
                logger()->error('Failed to send new subscriber email: '.$e->getMessage());
            }
        }

        return response()->json(['message' => 'Subscribed', 'email' => $subscriber->email]);
    }
}
