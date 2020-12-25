<?php
declare(strict_types=1);

namespace App\Authentication;

use Authentication\AuthenticationService;
use Authentication\AuthenticationServiceInterface;
use Authentication\AuthenticationServiceProviderInterface;
use Cake\Routing\Router;
use Psr\Http\Message\ServerRequestInterface;

class AppAuthenticationServiceProvider implements AuthenticationServiceProviderInterface
{
    public function getAuthenticationService(ServerRequestInterface $request): AuthenticationServiceInterface
    {

        // ログイン必須ページにアクセスしたときのリダイレクト先
        $service = new AuthenticationService();

        // 識別子をロードして、アカウントとパスワードのフィールドを確認します
        $service->loadIdentifier('Authentication.Password', [
            'fields' => [
                'username' => 'account_name',
                'password' => 'password',
            ],
        ]);

        // メールとパスワードを選択するためのフォームデータチェックの設定
        $service->loadAuthenticator('Authentication.Form', [
            'fields' => [
                'username' => 'account_name',
                'password' => 'password',
            ],
            //POST先になる(ディレクトリは気をつけよう)
            'loginUrl' => SITE_DIRECTORY .'/users/login',
        ]);

        // 認証子をロードするには、最初にセッションを実行する必要があります
        $service->loadAuthenticator('Authentication.Session');

        return $service;
    }
}