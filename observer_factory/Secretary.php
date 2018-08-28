<?php
/**
 * 通知者
 */
namespace observer_factory;

class Secretary
{
    /**
     * 同事列表
     */
    private $list = [];

    private $news;

    public function attach(PlayObserver $observer)
    {
        array_push($this->list, $observer);
    }

    public function notify()
    {
        foreach ($this->list AS $val) {
            $val->update($this->news);
        }
    }

    public function secretaryNews($news)
    {
        $this->news = $news;
    }
}