<?php
declare(strict_types=1);

namespace App\Model\Logic;

use App\Model\Logic\LogicInterface;

class TweetPictureLogic implements TweetDisplay
{
    /**
     * display - 表示内容
     *
     */
    public function display(object $obj){
        $obj->display;
    }
}