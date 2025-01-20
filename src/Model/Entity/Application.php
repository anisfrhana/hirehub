<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property int $job_id
 * @property int $applicant_id
 * @property int $phone_number
 * @property int $nric
 * @property string $pic_name
 * @property string $pic_email
 * @property string $company_name
 * @property string $street_1
 * @property string $street_2
 * @property string $postcode
 * @property string $city
 * @property string $state
 * @property \Cake\I18n\DateTime $start_date
 * @property \Cake\I18n\DateTime $end_date
 * @property int $reference_no
 * @property string $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Applicant $applicant
 */
class Application extends Entity
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
        'job_id' => true,
        'applicant_id' => true,
        'phone_number' => true,
        'nric' => true,
        'pic_name' => true,
        'pic_email' => true,
        'company_name' => true,
        'street_1' => true,
        'street_2' => true,
        'postcode' => true,
        'city' => true,
        'state' => true,
        'start_date' => true,
        'end_date' => true,
        'reference_no' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'job' => true,
        'applicant' => true,
    ];
}
