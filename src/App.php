<?php
namespace Jphp;

class App
{
    public function run()
    {
        echo "这是一个测试";
        $this->ok();
    }

    public function ok()
    {
        echo "Hello,World";
    }
}
