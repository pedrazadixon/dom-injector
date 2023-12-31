<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Element Entity
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $uuid
 * @property string|null $html
 * @property string|null $css
 * @property string|null $js
 */
class Element extends Entity
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
        'title' => true,
        'uuid' => true,
        'html' => true,
        'css' => true,
        'js' => true,
    ];
}
