<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationsFixture
 */
class ApplicationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'job_id' => 1,
                'applicant_id' => 1,
                'phone_number' => 1,
                'nric' => 1,
                'pic_name' => 'Lorem ipsum dolor sit amet',
                'pic_email' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'street_1' => 'Lorem ipsum dolor sit amet',
                'street_2' => 'Lorem ipsum dolor sit amet',
                'postcode' => 'Lorem ip',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2025-01-17 18:12:09',
                'end_date' => '2025-01-17 18:12:09',
                'reference_no' => 1,
                'status' => 'Lorem ipsum d',
                'created' => '2025-01-17 18:12:09',
                'modified' => '2025-01-17 18:12:09',
            ],
        ];
        parent::init();
    }
}
