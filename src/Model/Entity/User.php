<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $account_name
 * @property string $password
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property bool $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 *
 * @property \App\Model\Entity\Tweet[] $tweets
 */
class User extends Entity
{


    protected $_accessible = [
        'account_name' => true,
        'password' => true,
        'name' => true,
        'created' => true,
        'deleted' => true,
        'deleted_date' => true,
    ];


    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    /**
     * _setPassword - パスワードカラムのハッシュ化
     */
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
