<?php

/**
 * 正在玩的员工
 */
namespace observer_factory;

class NbaObserver extends ObserverAbstract
{
    protected $name;

    protected $secretary;

    public function __construct(string $name, SubjectInterface $secretary)
    {
        $this->name = $name;

        $this->secretary = $secretary;
    }

    /**
     * 收到通知后的具体操作
     * @param $news
     */
    public function update($news)
    {
        echo $this->name.$news.'不要在玩了，继续工作！';
    }
}