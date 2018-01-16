<?php
namespace Framework\Core\ORM;

interface EntityManagerInterface
{
    public function persist($entity);
    public function flush();
}