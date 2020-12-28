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


    public function index()
    {

    }
}
