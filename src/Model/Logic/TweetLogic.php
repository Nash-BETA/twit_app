<?php
declare(strict_types=1);

namespace App\Model\Logic;

use App\Model\Logic\LogicInterface;

class TweetLogic
{
    /**
     * submission - 投稿処理
     */
    public function submission()
    {

    }

    /**
     * outputDisplay - 表示処理
     *
     */
    public function outputDisplay(object $obj){
        $obj->display;
    }
}