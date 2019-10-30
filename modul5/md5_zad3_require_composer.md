
### Jak dodać zależności do composera.

Composer śledzi zależności projektu w pliku zwanym composer.json. Możesz zarządzać nim ręcznie, jeśli chcesz, lub użyć samego kompozytora. Composer wymaga polecenia, dodaje zależność od projektu i jeśli nie masz pliku composer.json, zostanie on utworzony. Oto przykład, który dodaje Twig jako zależność od Twojego projektu.

```
composer require twig/twig:^2.0
```

po tym odpalamy:

```bash
composer install
```

Ważne jest to, aby dodać taką linijkę:
```php
<?php
require 'vendor/autoload.php';

```