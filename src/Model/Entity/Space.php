<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Space Entity
 *
 * @property int $id
 * @property string $name
 * @property int $capacity
 * @property string $location
 * @property string $observations
 * @property bool $internet
 * @property bool $board
 * @property bool $projector
 * @property bool $blind
 * @property bool $speakers
 * @property string $type
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Space extends Entity
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
        'name' => true,
        'capacity' => true,
        'location' => true,
        'observations' => true,
        'internet' => true,
        'board' => true,
        'projector' => true,
        'blind' => true,
        'speakers' => true,
        'type' => true,
        'active' => true,
        'created' => true,
        'modified' => true
    ];
}
