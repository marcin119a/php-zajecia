
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
* 
```php
<?php
$W=$argv[1];$L=$argv[2];$P=$argv[3];for($h=0;$h<$W;$h++){for($l=0;$l<$L;$l++){for($w=1;$w<$W*2+1;$w++){if($h+$w<$W||$w-$h>$W){echo" ";continue;}if($h+$w==$W||$w-$h==$W){echo"\033[93m*";}elseif((($h-$w+$W)%4+4)%4==3){echo"\033[97m$";}else{echo"\033[32m#";}}}echo "\n";}for($h=0;$h<$P;$h++){for($l=0;$l<$L*$W*2;$l++){if($l%($W*2)==$W-1){echo"\033[91mH";}else{echo" ";}}echo"\n";}for($w=0;$w<$L*$W*2-1;$w++){echo"\e[97m^";}echo"\n";
