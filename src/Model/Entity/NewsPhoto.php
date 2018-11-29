<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NewsPhoto Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $creted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $news_id
 * @property string $photo
 * @property string $description
 * @property bool $active
 *
 * @property \App\Model\Entity\News $news
 */
class NewsPhoto extends Entity
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
        'news_id' => true,
        'photo' => true,
        'description' => true,
        'active' => true,
        'news' => true
    ];
}
