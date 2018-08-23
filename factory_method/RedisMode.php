<?php
namespace factory;

class MemcachedMode implements PayModeInterface
{
    public function createdMode()
    {
        new MemcachedMode();
    }
}