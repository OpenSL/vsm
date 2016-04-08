<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleSubCategories Controller
 *
 * @property \App\Model\Table\VehicleSubCategoriesTable $VehicleSubCategories
 */
class VehicleSubCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['VehicleCategories']
        ];
        $vehicleSubCategories = $this->paginate($this->VehicleSubCategories);

        $this->set(compact('vehicleSubCategories'));
        $this->set('_serialize', ['vehicleSubCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Sub Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleSubCategory = $this->VehicleSubCategories->get($id, [
            'contain' => ['VehicleCategories', 'Vehicles']
        ]);

        $this->set('vehicleSubCategory', $vehicleSubCategory);
        $this->set('_serialize', ['vehicleSubCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleSubCategory = $this->VehicleSubCategories->newEntity();
        if ($this->request->is('post')) {
            $vehicleSubCategory = $this->VehicleSubCategories->patchEntity($vehicleSubCategory, $this->request->data);
            if ($this->VehicleSubCategories->save($vehicleSubCategory)) {
                $this->Flash->success(__('The vehicle sub category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle sub category could not be saved. Please, try again.'));
            }
        }
        $vehicleCategories = $this->VehicleSubCategories->VehicleCategories->find('list', ['limit' => 200]);
        $this->set(compact('vehicleSubCategory', 'vehicleCategories'));
        $this->set('_serialize', ['vehicleSubCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Sub Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleSubCategory = $this->VehicleSubCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleSubCategory = $this->VehicleSubCategories->patchEntity($vehicleSubCategory, $this->request->data);
            if ($this->VehicleSubCategories->save($vehicleSubCategory)) {
                $this->Flash->success(__('The vehicle sub category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle sub category could not be saved. Please, try again.'));
            }
        }
        $vehicleCategories = $this->VehicleSubCategories->VehicleCategories->find('list', ['limit' => 200]);
        $this->set(compact('vehicleSubCategory', 'vehicleCategories'));
        $this->set('_serialize', ['vehicleSubCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Sub Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleSubCategory = $this->VehicleSubCategories->get($id);
        if ($this->VehicleSubCategories->delete($vehicleSubCategory)) {
            $this->Flash->success(__('The vehicle sub category has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle sub category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
