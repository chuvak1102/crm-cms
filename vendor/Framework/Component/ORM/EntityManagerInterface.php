<?php
namespace Framework\Component\ORM;

interface EntityManagerInterface
{
    public function persist(Entity $entity);
    public function remove(Entity $entity);
    public function flush();
}