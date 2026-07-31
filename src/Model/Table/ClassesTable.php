<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classes Model
 *
 * @method \App\Model\Entity\Class newEmptyEntity()
 * @method \App\Model\Entity\Class newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Class> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Class get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Class findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Class patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Class> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Class|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Class saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Class>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Class>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Class>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Class> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Class>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Class>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Class>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Class> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClassesTable extends Table
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

        $this->setTable('classes');
        $this->setDisplayField('nom');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Students', [
            'foreignKey' => 'class_id',
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
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('code')
            ->maxLength('code', 100)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        return $validator;
    }
}
