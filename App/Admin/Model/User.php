<?php

namespace App\Admin\Model;

use App\Client\Model\UserDetail;
use App\Config;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\Hash;
use Core\Model\Model;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * table = user
 */
class User extends Model {

    const ROLE_DRIVER = 5;
    private $roleDriver = [5];
    private $roleWarehouse = [3];
    private $roleManager = [100, 2, 6];

    function isWarehouse()
    {
        return in_array($this->department, $this->roleWarehouse);
    }

    function isManager()
    {
        return in_array($this->department, $this->roleManager);
    }

    function getDetail()
    {
        UserDetail::one($this->id, 'user_id');
    }

    function lastOrder()
    {
        return DB::select(DB::expr('MAX(created) created'))
            ->from('order')
            ->where('user_id', '=', $this->id)
            ->execute()
            ->fetch();
    }

    function getCompany()
    {
        return DB::select('name')
            ->from('user_detail_company')
            ->where('user_id', '=', $this->id)
            ->limit(1)
            ->execute()
            ->fetch();
    }

    function ordersPerMonth()
    {
        return intval(DB::select(DB::expr('sum(product_count * price_row_total) sum'))
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order.created', '>=', DB::expr('(now() - INTERVAL 1 month)'))
            ->where('order.user_id', '=', $this->id)
            ->execute()
            ->get('sum'));
    }

    function emailChangePassword()
    {
        $email = $this->login;
        $emailOk = filter_var($email, FILTER_VALIDATE_EMAIL) == true ? 1 : 0;

        if (!$emailOk) {
            Error::add("{$this->id} смена пароля - bad эмейл - {$email}");
            return;
        }

        try {

            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->setFrom(Config::ShopEmailFrom);
            if (!Config::TestEmails) {
                $mail->addAddress($email);
            } else {
                foreach (Config::TestEmails as $e)
                    $mail->addAddress($e);
            }
            $mail->isHTML(true);
            $mail->Subject = 'ЭкоПак - смена пароля';

            $html = 'Здравствуйте! <br> Для смены пароля перейдите по ссылке: <br><br>';
            $html .= 'https://'.Config::SiteDomain.'/restore?token='.($this->restore);
            $html .= '<br>';

            $mail->Body = $html;
            $mail->send();

        } catch (Exception $e) {

            Error::add('ошибка письма change pass => '.$this->id.' - '.$e->getMessage());
        }
    }

    static function changePassword($hash)
    {
        $user = DB::select('*')
            ->from('user')
            ->where('restore', '=', $hash)
            ->execute()
            ->fetch();

        if ($user) {

            DB::update('user')->set([
                'password' => $hash,
                'restore' => '',
            ])->where('login', '=', $user->login)
                ->execute();
        }
    }

}