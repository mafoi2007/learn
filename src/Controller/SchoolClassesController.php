<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SchoolClasses Controller
 *
 * @property \App\Model\Table\SchoolClassesTable $SchoolClasses
 */
class SchoolClassesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SchoolClasses->find();
        $schoolClasses = $this->paginate($query);

        $this->set(compact('schoolClasses'));
    }

    /**
     * View method
     *
     * @param string|null $id School Class id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolClass = $this->SchoolClasses->get($id, contain: ['Students']);
        $this->set(compact('schoolClass'));
    }


    /**
     * View method
     *
     * @param string|null $id School Class id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewAll($id = null)
    {
        $schoolClass = $this->SchoolClasses->get($id, contain: ['Students']);
        $this->set(compact('schoolClass'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolClass = $this->SchoolClasses->newEmptyEntity();
        if ($this->request->is('post')) {
            $schoolClass = $this->SchoolClasses->patchEntity($schoolClass, $this->request->getData());
            if ($this->SchoolClasses->save($schoolClass)) {
                $this->Flash->success(__('The school class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school class could not be saved. Please, try again.'));
        }
        $this->set(compact('schoolClass'));
    }

    /**
     * Edit method
     *
     * @param string|null $id School Class id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolClass = $this->SchoolClasses->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolClass = $this->SchoolClasses->patchEntity($schoolClass, $this->request->getData());
            if ($this->SchoolClasses->save($schoolClass)) {
                $this->Flash->success(__('The school class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school class could not be saved. Please, try again.'));
        }
        $this->set(compact('schoolClass'));
    }

    /**
     * Delete method
     *
     * @param string|null $id School Class id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolClass = $this->SchoolClasses->get($id);
        if ($this->SchoolClasses->delete($schoolClass)) {
            $this->Flash->success(__('The school class has been deleted.'));
        } else {
            $this->Flash->error(__('The school class could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    
}
