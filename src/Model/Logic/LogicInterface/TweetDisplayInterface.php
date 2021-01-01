<?php
declare(strict_types=1);


namespace App\Model\Logic\LogicInterface;

interface TweetDisplay
{
    /**
     * display - 表示内容
     */
    public function display(array $twiit_date);

}