<?php
namespace Framework\Component\ORM;

interface EntityManagerInterface
{
    public function persist($entity);
    public function flush();
}