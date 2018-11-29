<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GaleriesVideo Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $creted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $galery_id
 * @property string $link
 * @property string $caption
 * @property bool $active
 *
 * @property \App\Model\Entity\Galery $galery
 */
class GaleriesVideo extends Entity
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
        'galery_id' => true,
        'link' => true,
        'caption' => true,
        'active' => true,
        'galery' => true
    ];
}
