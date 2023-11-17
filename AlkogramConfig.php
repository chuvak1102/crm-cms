<?php
namespace App;

class Config
{
    // меняет только вывод ошибок - test/production
    const Mode = 'test';
    // все хеши в проекте \Core\Hash::hash('хуй')
    const SECRET = 'lj*Y&^G%F%#S%$DF%^G&()OKIJNHBVCFDSW#$R^&OLKJUIOL<LOP:"":{}';
    // ну эт ясно
    const DB = [
        'host' => 'localhost',
        'base' => 'u0742521_ecopacking',
        'user' => 'u0742521_default',
        'pass' => 'j3x3HI!Q'
    ];
    // если массив не пустой, то все что отправляет сайт отправляется только сюда:
    // для тестов
    const TestEmails = [
//        'dan0@mail.ru',
    ];
    // домены для маршрутов
    const SiteDomain = 'alkogram.ru';
    const AdminDomain = 'admin.alkogram.ru';
    const ClientDomain = 'lk.alkogram.ru';
    const ShopEmailFrom = 'dan0@mail.ru';
    // кто под кем
    const SiteProtocol = 'https';
    const AdminProtocol = 'http';
    const ClientProtocol = 'http';
}






