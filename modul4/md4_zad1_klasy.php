<?php

class MyClass {
    public function __construct()
    {
        echo 'MyClass class has initialized !'."\n";
    }
}
$userclass = new MyClass;


class UserMessage {
    public $message = 'Hello All, I am ';

    public function introduce($name) {
        return $this->message.$name;
    }

}

