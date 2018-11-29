<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Galery Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $creted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string $name
 * @property string $content
 * @property string $type
 * @property bool $active
 *
 * @property \App\Model\Entity\GaleriesPhoto[] $galeries_photos
 * @property \App\Model\Entity\GaleriesVideo[] $galeries_videos
 */
class Galery extends Entity
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
        'name' => true,
        'content' => true,
        'type' => true,
        'active' => true,
        'galeries_photos' => true,
        'galeries_videos' => true
    ];
}
