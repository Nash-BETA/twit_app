<?php
declare(strict_types=1);

namespace App\Model\Logic;

use App\Model\Logic\LogicInterface;

class TweetTextLogic implements TweetDisplay
{
    /**
     * display - 表示処理
     *
     */
    public function display(object $obj){
        $obj->display;
    }
}