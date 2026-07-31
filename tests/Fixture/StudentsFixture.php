<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'sexe' => 'L',
                'email' => 'Lorem ipsum dolor sit amet',
                'class_id' => 1,
                'created' => '2026-07-31 00:21:53',
                'modified' => '2026-07-31 00:21:53',
            ],
        ];
        parent::init();
    }
}
