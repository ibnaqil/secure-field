# Secure Field for Filament

A secure text input field for Filament that encrypts data when saving and decrypts on load — useful for passphrases or confidential input.

## Installation

```bash
composer require ibnaqil/secure-field
```

Or if it's not published to Packagist yet:

composer require ibnaqil/secure-field --repository='{"type":"vcs", "url":"https://github.com/ibnaqil/secure-field"}'

Usage

use Ibnaqil\SecureField\Components\SecureField;

SecureField::make('passphrase')
->label('Secure Passphrase')
->required(),

That's it! Your data will be encrypted in storage and decrypted when displayed.

🔐 Notes

    Requires Laravel 10+ and Filament 3

    Uses Laravel's built-in encrypt() and decrypt() helpers
