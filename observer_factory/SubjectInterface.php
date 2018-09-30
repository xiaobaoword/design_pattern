<?php
/**
 * 抽象通知者
 */
namespace observer_factory;

interface SubjectInterface
{
    /**
     * 增加同事
     * @param ObserverAbstract $observer 针对抽象变成，减少了与具体类的耦合，也就是只有在继承抽象观察者的具体观察者才可以使用
     */
    public function attach($key, ObserverAbstract $observer);

    /**
     * 删除同事
     * @param ObserverAbstract $observer 针对抽象变成，减少了与具体类的耦合，也就是只有在继承抽象观察者的具体观察者才可以使用
     */
    public function detach($key);

    /**
     * 发送消息
     */
    public function notify();

    /**
     * @param $news
     */
    public function secretaryNews($news);
}