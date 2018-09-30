<?php

namespace observer_factory;

class SubjectB implements SubjectInterface
{
    /**
     * 同事列表
     */
    private $list = [];

    private $news;

    /**
     * 增加同事
     * @param ObserverAbstract $observer 针对抽象变成，减少了与具体类的耦合，也就是只有在继承抽象观察者的具体观察者才可以使用
     */
    public function attach($key, ObserverAbstract $observer)
    {
        $this->list[$key] = $observer;
    }

    /**
     * 删除同事
     * @param ObserverAbstract $observer 针对抽象变成，减少了与具体类的耦合，也就是只有在继承抽象观察者的具体观察者才可以使用
     */
    public function detach($key)
    {
        unset($this->list[$key]);
    }

    /**
     * 发送消息
     */
    public function notify()
    {
        foreach ($this->list AS $val) {
            $val->update($this->news);
        }
    }

    /**
     * @param $news
     */
    public function secretaryNews($news)
    {
        $this->news = $news;
    }
}