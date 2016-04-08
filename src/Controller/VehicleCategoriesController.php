<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleCategories Controller
 *
 * @property \App\Model\Table\VehicleCategoriesTable $VehicleCategories
 */
class VehicleCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vehicleCategories = $this->paginate($this->VehicleCategories);

        $this->set(compact('vehicleCategories'));
        $this->set('_serialize', ['vehicleCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleCategory = $this->VehicleCategories->get($id, [
            'contain' => ['VehicleSubCategories', 'Vehicles']
        ]);

        $this->set('vehicleCategory', $vehicleCategory);
        $this->set('_serialize', ['vehicleCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleCategory = $this->VehicleCategories->newEntity();
        if ($this->request->is('post')) {
            $vehicleCategory = $this->VehicleCategories->patchEntity($vehicleCategory, $this->request->data);
            if ($this->VehicleCategories->save($vehicleCategory)) {
                $this->Flash->success(__('The vehicle category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehicleCategory'));
        $this->set('_serialize', ['vehicleCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleCategory = $this->VehicleCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleCategory = $this->VehicleCategories->patchEntity($vehicleCategory, $this->request->data);
            if ($this->VehicleCategories->save($vehicleCategory)) {
                $this->Flash->success(__('The vehicle category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehicleCategory'));
        $this->set('_serialize', ['vehicleCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleCategory = $this->VehicleCategories->get($id);
        if ($this->VehicleCategories->delete($vehicleCategory)) {
            $this->Flash->success(__('The vehicle category has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
