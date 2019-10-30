
### Instaacja paczek do zależności composer

Composer jest zalecanym menedżerem zależności dla PHP. Wymień zależności projektu w pliku composer.json i za pomocą kilku prostych poleceń Composer automatycznie pobierze zależności projektu i ustawi autoloading dla Ciebie. Composer jest analogiczny do NPM w świecie node.js lub Bundler w świecie Rubiego.


### https://getcomposer.org/download/


```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

```
### windows:

Dla użytkowników systemu Windows najprostszym sposobem na uruchomienie jest użycie instalatora ComposerSetup, który wykonuje globalną instalację i ustawia $PATH tak, że można po prostu wywołać kompozytora z dowolnego katalogu w linii poleceń.

```https://getcomposer.org/Composer-Setup.exe```


### Zadanie
* Zainstaluj composer na komputrze. 
* Wykonaj zadanie projekt na swoim komputerze.