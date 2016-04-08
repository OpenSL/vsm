<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ServicePackages Controller
 *
 * @property \App\Model\Table\ServicePackagesTable $ServicePackages
 */
class ServicePackagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Services']
        ];
        $servicePackages = $this->paginate($this->ServicePackages);

        $this->set(compact('servicePackages'));
        $this->set('_serialize', ['servicePackages']);
    }

    /**
     * View method
     *
     * @param string|null $id Service Package id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servicePackage = $this->ServicePackages->get($id, [
            'contain' => ['Services']
        ]);

        $this->set('servicePackage', $servicePackage);
        $this->set('_serialize', ['servicePackage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servicePackage = $this->ServicePackages->newEntity();
        if ($this->request->is('post')) {
            $servicePackage = $this->ServicePackages->patchEntity($servicePackage, $this->request->data);
            if ($this->ServicePackages->save($servicePackage)) {
                $this->Flash->success(__('The service package has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The service package could not be saved. Please, try again.'));
            }
        }
        $services = $this->ServicePackages->Services->find('list', ['limit' => 200]);
        $this->set(compact('servicePackage', 'services'));
        $this->set('_serialize', ['servicePackage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Service Package id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servicePackage = $this->ServicePackages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicePackage = $this->ServicePackages->patchEntity($servicePackage, $this->request->data);
            if ($this->ServicePackages->save($servicePackage)) {
                $this->Flash->success(__('The service package has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The service package could not be saved. Please, try again.'));
            }
        }
        $services = $this->ServicePackages->Services->find('list', ['limit' => 200]);
        $this->set(compact('servicePackage', 'services'));
        $this->set('_serialize', ['servicePackage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Service Package id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servicePackage = $this->ServicePackages->get($id);
        if ($this->ServicePackages->delete($servicePackage)) {
            $this->Flash->success(__('The service package has been deleted.'));
        } else {
            $this->Flash->error(__('The service package could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
