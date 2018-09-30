<?php
/**
 * 正在炒股的用户
 */
namespace observer_factory;

class StockObserver extends ObserverAbstract
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
        echo $this->name.$news.'不要在看股票，继续工作！';
    }
}