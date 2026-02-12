<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    // Redirect to provider (google, facebook)
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Handle callback from provider
    public function callback(string $provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Login gagal via ' . $provider . '. Silakan coba lagi.');
        }

        $email = $socialUser->getEmail();

        // If provider doesn't provide email, abort
        if (! $email) {
            return redirect()->route('login')->with('error', 'Provider tidak memberikan email.');
        }

        $user = User::where('email', $email)->first();

        if (! $user) {
            $user = User::create([
                'name' => $socialUser->getName() ?? $socialUser->getNickname() ?? $email,
                'email' => $email,
                'password' => bcrypt(Str::random(24)),
                'role' => 'user',
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
            ]);
        } else {
            // update provider info
            $user->update([
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
            ]);
        }

        Auth::login($user, true);

        return redirect()->route('classes.index');
    }
}
