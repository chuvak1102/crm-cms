<?php

namespace App;

class Config
{
    // меняет только вывод ошибок - test/production
    const Mode = 'production';
    // все хеши в проекте \Core\Hash::hash('хуй')
    const SECRET = 'lj*Y&^G%F%#S%$DF%^G&()OKIJNHBVCFDSW#$R^&OLKJUIOL<LOP:"":{}';
    // ну эт ясно
    const DB = [
        'host' => 'u390913.mysql.masterhost.ru',
        'base' => 'u390913_ecopacking',
        'user' => 'u390913',
        'pass' => 'RIonoNT5.u'
    ];
    // если массив не пустой, то все что отправляет сайт отправляется только сюда:
    // для тестов
    const TestEmails = [
//        'dan0@mail.ru',
    ];
    // домены для маршрутов
    const SiteDomain = 'ecopacking.ru';
    const AdminDomain = 'crm.ecopacking.ru';
    const ClientDomain = 'lk.ecopacking.ru';
    const ShopEmailFrom = 'ecopackingmsk@gmail.com';
}






