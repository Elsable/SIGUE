<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string|null $motherlastname
 * @property string $email
 * @property string $telephone
 * @property bool $active
 * @property string $password
 * @property string $fullname
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'firstname' => true,
        'lastname' => true,
        'motherlastname' => true,
        'email' => true,
        'telephone' => true,
        'active' => true,
        'password' => true,
        'fullname' => true,
        'created' => true,
        'modified' => true
    ];

    // Add this method
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
