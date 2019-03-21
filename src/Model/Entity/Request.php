<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $id
 * @property int $academic_id
 * @property string $event
 * @property string $period
 * @property string $type
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property \Cake\I18n\FrozenTime $start_hour
 * @property \Cake\I18n\FrozenTime $end_hour
 * @property string $observations
 * @property bool $monday
 * @property bool $tuesday
 * @property bool $wednesday
 * @property bool $thursday
 * @property bool $friday
 * @property bool $saturday
 * @property int|null $space_id
 * @property bool|null $vobo
 * @property \Cake\I18n\FrozenTime|null $vobo_register
 * @property int|null $vobo_attendant_id
 * @property string|null $vobo_observations
 * @property bool|null $aproved
 * @property \Cake\I18n\FrozenTime|null $aproved_register
 * @property int|null $aproved_attendant_id
 * @property string|null $aproved_observations
 * @property bool|null $cancelled
 * @property \Cake\I18n\FrozenTime|null $cancelled_register
 * @property int|null $cancelled_attendant_id
 * @property string|null $cancelled_observations
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Academic $academic
 */
class Request extends Entity
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
        'academic_id' => true,
        'event' => true,
        'period' => true,
        'type' => true,
        'start_date' => true,
        'end_date' => true,
        'start_hour' => true,
        'end_hour' => true,
        'observations' => true,
        'monday' => true,
        'tuesday' => true,
        'wednesday' => true,
        'thursday' => true,
        'friday' => true,
        'saturday' => true,
        'space_id' => true,
        'vobo' => true,
        'vobo_register' => true,
        'vobo_attendant_id' => true,
        'vobo_observations' => true,
        'aproved' => true,
        'aproved_register' => true,
        'aproved_attendant_id' => true,
        'aproved_observations' => true,
        'cancelled' => true,
        'cancelled_register' => true,
        'cancelled_attendant_id' => true,
        'cancelled_observations' => true,
        'created' => true,
        'modified' => true,
        'academic' => true
    ];
}
