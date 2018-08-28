<?php

/**
 * 正在玩的员工
 */
namespace observer_factory;

class PlayObserver
{
    private $name;

    private $secretary;

    public function __construct($name, $secretary)
    {
        $this->name = $name;

        $this->secretary = $secretary;
    }

    public function update($news)
    {
        echo $this->name.$news.'不要在玩了，继续工作！';
    }
}