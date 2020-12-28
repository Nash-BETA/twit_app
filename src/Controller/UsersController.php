<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Logic\UserLogic;

use App\Controller\AppController;
use Cake\Event\EventInterface;
class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $logicTest = new UserLogic();

        //未ログイン時でもアクセスできるアクションの指定
        $this->Authentication->allowUnauthenticated(['signin','add','login']);
    }

    /**
     * index - mypage
     *
     */
    public function index()
    {
        $auth_user = $this->Authentication->getResult()->getData();
    }


    /**
     * home - ホーム画面
     *
     */
    public function home()
    {
        $auth_user = $this->Authentication->getResult()->getData();
    }

    /**
     * signin - ログイン画面
     *
     */
    public function signin()
    {
    }

    /**
     * login - ログイン処理
     *
     */
    public function login()
    {

        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // POSTやGETに関係なく、ユーザーがログインしていればリダイレクトします
        if ($result->isValid()) {
            // ログイン成功後に /にリダイレクトします

            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
        // ユーザーの送信と認証に失敗した場合にエラーを表示します
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid email or password'));
            return $this->redirect(['controller' => 'Users', 'action' => 'signin']);

        }
    }

    //ログアウトの処理
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // POSTやGETに関係なく、ユーザーがログインしていればリダイレクトします
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'signin']);
        }
    }

    /**
     * Add
     *
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('アカウントを作成しました.'));

                return $this->redirect(['action' => 'sigin']);
            }
            $this->Flash->error(__('登録に失敗しました.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
