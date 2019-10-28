### Problem

Po co używać switcha?

### Rozwiązanie:

```php
<?php 
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
```

### Zadanie:

* Napisz odpowiedniego ```switch```, który określa jaki jest Twój ulubiony kwiat. (zbiór możliwości to irys, dracena, roza)
