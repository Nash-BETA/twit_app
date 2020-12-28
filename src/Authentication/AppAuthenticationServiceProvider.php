<?php
declare(strict_types=1);

namespace App\Authentication;

use Authentication\AuthenticationService;
use Authentication\AuthenticationServiceInterface;
use Authentication\Identifier\IdentifierInterface;
use Authentication\AuthenticationServiceProviderInterface;
use Cake\Routing\Router;
use Psr\Http\Message\ServerRequestInterface;

class AppAuthenticationServiceProvider implements AuthenticationServiceProviderInterface
{
    public function getAuthenticationService(ServerRequestInterface $request): AuthenticationServiceInterface
    {

        // ログイン必須ページにアクセスしたときのリダイレクト先
        $service = new AuthenticationService();

        // 認証されていない場合にユーザーがどこにリダイレクトするかを定義します。
        $service->setConfig([
            'unauthenticatedRedirect' => SITE_DIRECTORY . '/users/signin',
            'queryParam' => 'redirect',
        ]);

        $fields = [
            IdentifierInterface::CREDENTIAL_USERNAME => 'account_name',
            IdentifierInterface::CREDENTIAL_PASSWORD => 'password'
        ];

        // 認証者を読み込みます。セッションを優先してください。
        $service->loadAuthenticator('Authentication.Session');
        $service->loadAuthenticator('Authentication.Form', [
            'fields' => [
                'username' => 'account_name',
                'password' => 'password'
            ],
            'loginUrl' => SITE_DIRECTORY .'/users/login',
        ]);

        // 識別子を読み込みます。
        $service->loadIdentifier('Authentication.Password', compact('fields'));


        return $service;
    }
}