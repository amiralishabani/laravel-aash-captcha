# Laravel Aash Captcha

A customizable and lightweight CAPTCHA package for Laravel applications, designed to protect your forms from bots without relying on external services.

## 🧩 Installation

You can install the package via Composer:

```
composer require amiralishabani/laravel-aash-captcha
```

If you're using Laravel 10 or newer, the package will auto-discover. For older versions, you can add the service provider manually (not recommended).

## 🚀 Publishing Assets

To publish the configuration and assets (fonts, sounds, views), run:

```
php artisan vendor:publish --tag=aash-captcha
```

## ⚙️ Configuration

A configuration file `aash-captcha.php` will be created in your `config` directory. You can modify it to customize fonts, colors, noise level, route prefix, and more.

## 🧪 Usage

You can use the captcha image in your blade view like this:

```blade
<form method="POST" action="/your-form-handler">
    @csrf

    <div>
        <img src="{{ route('aash.captcha.image') }}" alt="CAPTCHA">
        <button type="button" onclick="refreshCaptcha()">Reload</button>
    </div>

    <input type="text" name="captcha" placeholder="Enter CAPTCHA">

    <button type="submit">Submit</button>
</form>

<script>
function refreshCaptcha() {
    const img = document.querySelector('img[alt=CAPTCHA]');
    img.src = '{{ route('aash.captcha.image') }}?t=' + Date.now();
}
</script>
```

In your form handler (controller or route), validate the captcha input:

```php
use AashCaptcha\Facades\AashCaptcha;

public function submit(Request $request)
{
    if (!AashCaptcha::check($request->input('captcha'))) {
        return back()->withErrors(['captcha' => 'Invalid CAPTCHA'])->withInput();
    }

    // Proceed with your form logic...
}
```

## 🧰 License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
