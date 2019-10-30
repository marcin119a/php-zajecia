### XDebug

### Instalacja:

https://burhandodhy.me/2017/08/29/how-to-install-xdebug-on-windows/


Jednym z najbardziej użytecznych narzędzi podczas programowania jest debugger. Debugger pozwala na śledzenie wykonywania kodu i monitorowanie zawartości stosu. W PHP dostępny jest debugger o nazwie XDebug. Można go używać z poziomu IDE do śledzenia wykonywania kodu, a także wykorzystywać do profilowania aplikacji za pomocą KCacheGrind, czy tworzenia raportów pokrycia kodu testami w PHPUnit.

Debugger przydaje się tam, gdzie ręczny debug za pomocą funkcji print_r/var_dump nie daje rady.

Instalacja XDebuga może okazać się dość skomplikowana. Najważniejszą funkcjonalnością jest zdalne debuggowanie (“Remote Debugging”) - przydaje się, gdy tworzysz kod lokalnie, a testujesz go na wirtualnej maszynie, bądź na zdalnym serwerze.

Aby skorzystać z tej funkcji, należy zmodyfikować konfigurację vhosta w poniższy sposób:

```
php_value xdebug.remote_host "?.?.?.?"
php_value xdebug.remote_port "9000"
```

Wartości dyrektyw remote_host i remote_port powinny wskazywać na adres IP lokalnego komputera i port na którym nasłuchuje IDE. Po załadowaniu adresu z dodatkowym parametrem XDEBUG_SESSION_START o wartości 1 (np. http://your-website.example.com/index.php?XDEBUG_SESSION_START=1), IDE przechwyci bieżący stan wykonywanego skryptu umożliwiając kontrolę jego wykonywania. To bardzo ułatwia debuggowanie aplikacji.