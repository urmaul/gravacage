# Gravacage

Gravatar class that uses Nicolas Cage images as default avatars. Same Cage for same email forever!

Images are grabbed from [gravacage.urmaul.com](http://gravacage.urmaul.com/).

```php
use urmaul\gravacage\Gravacage;

// Get gravatar image url
Gravacage::forEmail('test@test.com')->imageUrl(100);

// Get Nicolas image url
Gravacage::forEmail('test@test.com')->nicolasUrl(100);
```

### Installing via Composer

The recommended way to install Gravacage is through [Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Gravacage:

```bash
composer.phar require urmaul/gravacage
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```
