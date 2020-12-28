<?php
declare(strict_types=1);
namespace App\Controller;

class TweetsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        //未ログイン時でもアクセスできるアクションの指定
//        $this->Authentication->addUnauthenticatedActions(['index']);
    }

    /**
     * index - ツイート内容の詳細
     */
    public function index()
    {

        //詳細の処理
        //ツイート　お気に入り数　お気に入り状態自分　コメント　コメントの数

    }
}
