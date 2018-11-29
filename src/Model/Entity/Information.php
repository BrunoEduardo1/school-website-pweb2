<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Information Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $creted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string $email
 * @property string $phone
 * @property string $adress
 * @property string $twitter
 * @property string $instgram
 * @property string $youtube
 * @property string $facebook
 * @property bool $active
 */
class Information extends Entity
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
        'creted_at' => true,
        'updated_at' => true,
        'email' => true,
        'phone' => true,
        'adress' => true,
        'twitter' => true,
        'instgram' => true,
        'youtube' => true,
        'facebook' => true,
        'active' => true
    ];
}
