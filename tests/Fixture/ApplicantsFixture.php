<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicantsFixture
 */
class ApplicantsFixture extends TestFixture
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
                'fullname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'phonenumber' => 1,
                'dob' => '2025-01-17',
                'address' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lore',
                'picture' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum d',
                'created' => '2025-01-17 12:02:41',
                'modified' => '2025-01-17 12:02:41',
            ],
        ];
        parent::init();
    }
}
