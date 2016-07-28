<?php

class ProcedimentosController extends AppController{

    var $uses = array('Exame','Procedimento');
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index(){
        $this->redirect(array(
            'action' => 'lista_procedimentos'
        ));
    }

    public function lista_procedimentos(){
        $this->set('procedimentos', $this->Procedimento->find('all',array('order' => array('Procedimento.nome ASC'))));
    }

    public function lista_procedimentos_paciente(){
        if($this->Session->check('Paciente')){
            $this->set('procedimentos', $this->Procedimento->find('all',array('order' => array('Procedimento.nome ASC'))));
        }else{
            $this->redirect(array(
                'controller' => 'pacientes',
                'action' => 'login'
            ));
        }
    }

    public function lista_procedimentos_admin($tipo){
        if($this->Session->check('Usuario')){
            if($tipo == 1){
                $this->redirect(array(
                    'action' => 'lista_procedimentos_administrador'
                ));
            }else if($tipo == 2){
                $this->redirect(array(
                    'action' => 'lista_procedimentos_operador'
                ));
            }
        }else{
            $this->redirect(array(
                'controller' => 'usuarios',
                'action' => 'login'
            ));
        }
    }

    public function lista_procedimentos_administrador(){
        $this->set('procedimentos', $this->Procedimento->find('all'));
    }
    public function lista_procedimentos_operador(){
        $this->set('procedimentos', $this->Procedimento->find('all'));
    }

    public function view($id){
        if(!$id){
            $this->Flash->error(__('Procedimento was not found!'));
        }
        $procedimento = $this->Procedimento->findById($id);
        $this->set('procedimento', $procedimento);
    }

    public function add(){
        if($this->request->is('post')){
            $this->Procedimento->create();
            if (!empty($this->request->data['Procedimento']['file']['name'])){
                $file = $this->request->data['Procedimento']['file'];

                move_uploaded_file(
                    $file['tmp_name'],
                    WWW_ROOT . DS . 'img' . DS . $file['name']
                );
                $this->request->data['Procedimento']['imagem'] =  $file['name'];
            }
            if($this->Procedimento->save($this->request->data)){
                $this->Flash->success(__('Procedimento cadastrado'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Procedimento não pôde ser cadastrado'));
        }
    }

    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Procedimento inválido'));
        }
        $procedimento = $this->Procedimento->findById($id);
        if(!$procedimento){
            throw new NotFoundException(__('Procedimento inválido'));
        }
        if($this->request->is(array('post','put'))){
            $this->Procedimento->id = $id;
            $file = $this->request->data['Procedimento']['file'];
            move_uploaded_file(
                $file['tmp_name'],
                WWW_ROOT . DS . 'img' . DS . $file['name']
            );
            $this->request->data['Procedimento']['imagem'] =  $file['name'];
            if($this->Procedimento->save($this->request->data)){
                $this->Flash->success(__('Informações do procedimento foram atualizadas'));
                return $this->redirect(array(
                    'controller' => 'usuarios',
                    'action' => 'area_administrativa'
                ));
            }
            $this->Flash->error(__('Procedimento não pôde ser atualizado'));
         }
         if(!$this->request->data){
             $this->request->data = $procedimento;
         }
    }

    public function delete($id){

        $procedimento = $this->Procedimento->find('all', array('conditions'=> array('Procedimento.id' => $id)));

        if($procedimento == null || $this->Procedimento->delete($id)){
            $this->Flash->success(__('Procedimento %s foi excluído com sucesso.', h($id)));
            return $this->redirect(array('action' => 'index'));
        }else{
            $this->Flash->error(__('Procedimento %s não pôde ser excluído.', h($id)));
        }
        return $this->redirect(array('action' => 'lista_procedimentos'));
    }
}
?>
