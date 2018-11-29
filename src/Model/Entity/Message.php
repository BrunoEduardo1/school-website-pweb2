<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $creted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string $sender_name
 * @property string $sender_email
 * @property string $subject
 * @property string $content
 * @property bool $active
 */
class Message extends Entity
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
        'sender_name' => true,
        'sender_email' => true,
        'subject' => true,
        'content' => true,
        'active' => true
    ];
}
