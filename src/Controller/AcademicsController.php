<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Academics Controller
 *
 * @property \App\Model\Table\AcademicsTable $Academics
 *
 * @method \App\Model\Entity\Academic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcademicsController extends AppController
{

    // *************************************************
    // inicia bloque de ifentificación de usuario
    // *************************************************
    public function isAuthorized($user) {
        // Obteniendo los roles del usuario
        $id_usuario=$user['id'];
        $user_roles = $this->Academics->Users->Roles
                            ->find()
                            ->where(['user_id'=>$id_usuario])
                            ->toArray();

        foreach($user_roles as $user_rol) {
            debug($user_rol->name);
        }
        
        // Se crea un if por cada cadena de usuarios que se les permite el acceso a las diferentes vistas
        $validado=false;
     
        $roles_permitidos=array('supervisor');
        foreach($user_roles as $user_rol) {    
            //echo "<br>verificando a ".$user_rol->name;
            if(in_array($user_rol->name,$roles_permitidos) and in_array($this->request->getParam('action'),['index','add','edit','logout'])
            ) {
                //echo '<br>acceso permitido a:'.$user_rol->name;
                $validado=true;
                return true;
            }

        }

    /*    if(!$validado) {
            $roles_permitidos=array('');
            foreach($user_roles as $user_rol) {    
                //echo "<br>verificando a ".$user_rol->name;
                if(in_array($user_rol->name,$roles_permitidos) and in_array($this->request->getParam('action'),['index','logout'])
                ) {
                    //echo '<br>acceso permitido a:'.$user_rol->name;
                    $validado=true;
                    return true;
                }
            }
        }
       

        return parent::isAuthorized($user);*/
    }
    // *************************************************
    //   Termina bloque de identificación de usuario
    // *************************************************    

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Departments']
        ];
        $academics = $this->paginate($this->Academics);

        $this->set(compact('academics'));
    }

    /**
     * View method
     *
     * @param string|null $id Academic id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academic = $this->Academics->get($id, [
            'contain' => ['Users', 'Departments']
        ]);

        $this->set('academic', $academic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academic = $this->Academics->newEntity();
        if ($this->request->is('post')) {
            $academic = $this->Academics->patchEntity($academic, $this->request->getData());
            if ($this->Academics->save($academic)) {
                $this->Flash->success(__('The academic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic could not be saved. Please, try again.'));
        }
        $users = $this->Academics->Users->find('list')->order(['fullname']);
        $departments = $this->Academics->Departments->find('list')->order(['name']);
        $this->set(compact('academic', 'users', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academic = $this->Academics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academic = $this->Academics->patchEntity($academic, $this->request->getData());
            if ($this->Academics->save($academic)) {
                $this->Flash->success(__('The academic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic could not be saved. Please, try again.'));
        }
        $users = $this->Academics->Users->find('list')->order(['fullname']);
        $departments = $this->Academics->Departments->find('list')->order(['name']);
        $this->set(compact('academic', 'users', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academic = $this->Academics->get($id);
        if ($this->Academics->delete($academic)) {
            $this->Flash->success(__('The academic has been deleted.'));
        } else {
            $this->Flash->error(__('The academic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
