<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Applicant Entity
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property int $phonenumber
 * @property \Cake\I18n\Date $dob
 * @property string $address
 * @property string $gender
 * @property string|resource $picture
 * @property string|null $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Application[] $applications
 */
class Applicant extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'fullname' => true,
        'email' => true,
        'password' => true,
        'phonenumber' => true,
        'dob' => true,
        'address' => true,
        'gender' => true,
        'picture' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'applications' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
