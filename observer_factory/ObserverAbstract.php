<?php
/**
 * 抽象观察者
 */
namespace observer_factory;

abstract class ObserverAbstract
{
    public abstract function update($news);
}