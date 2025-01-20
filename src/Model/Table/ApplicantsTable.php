<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applicants Model
 *
 * @property \App\Model\Table\ApplicationsTable&\Cake\ORM\Association\HasMany $Applications
 *
 * @method \App\Model\Entity\Applicant newEmptyEntity()
 * @method \App\Model\Entity\Applicant newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Applicant> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Applicant get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Applicant findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Applicant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Applicant> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Applicant|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Applicant saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Applicant>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Applicant>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Applicant>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Applicant> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Applicant>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Applicant>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Applicant>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Applicant> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApplicantsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('applicants');
        $this->setDisplayField('fullname');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Applications', [
            'foreignKey' => 'applicant_id',
        ]);
		$this->addBehavior('AuditStash.AuditLog');


		$this->addBehavior('Search.Search');
		$this->searchManager()
			->value('id')
            ->value('status')
        
				->add('status', 'Search.Like', [
					//'before' => true,
					//'after' => true,
					'fieldMode' => 'OR',
					'multiValue' => true,
					'multiValueSeparator' => '|',
					'comparison' => 'LIKE',
					'wildcardAny' => '*',
					'wildcardOne' => '?',
					'fields' => ['status'],
				]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('fullname')
            ->maxLength('fullname', 255)
            ->requirePresence('fullname', 'create')
            ->notEmptyString('fullname');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->integer('phonenumber')
            ->requirePresence('phonenumber', 'create')
            ->notEmptyString('phonenumber');

        $validator
            ->date('dob')
            ->requirePresence('dob', 'create')
            ->notEmptyDate('dob');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 6)
            ->notEmptyString('gender');

        $validator
            ->requirePresence('picture', 'create')
            ->notEmptyString('picture');

        $validator
            ->scalar('status')
            ->maxLength('status', 15)
            ->allowEmptyString('status');

        return $validator;
    }
}
