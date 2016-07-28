<?php

class PacientesController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array('Flash', 'Session');

    public function index(){
        $this->redirect(array('action' => 'login'));
    }

    public function lista_Pacientes(){
        $this->set('pacientes', $this->Paciente->find('all',array('order' => array ('Paciente.nome ASC'))));
    }

    public function view($id){
        if(!$id){
            $this->Flash->error(__('Paciente nao encontrado'));
        }
        $paciente = $this->Paciente->findById($id);
        $this->set('paciente', $paciente);
    }

    public function add(){
        if($this->request->is('post')){
            $this->Paciente->create();
            if($this->Paciente->save($this->request->data)){
                $this->Flash->success(__('Paciente cadastrado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Cadastro não pôde ser completado'));
        }
    }

    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Paciente inválido'));
        }
        $paciente = $this->Paciente->findById($id);
        if(!$paciente){
            throw new NotFoundException(__('Paciente inválido'));
        }
        if($this->request->is(array('post','put'))){
            $this->Paciente->id = $id;
            if($this->Paciente->save($this->request->data)){
                $this->Flash->success(__('Informações foram atualizadas com sucesso.'));
                $pacienteInfo = $this->request->data;
                $this->Session->write('Paciente',array(
                    'id' => $pacienteInfo['Paciente']['id'],
                    'login' => $pacienteInfo['Paciente']['login'],
                    'nome' => $pacienteInfo['Paciente']['nome']
                ));
                return $this->redirect(array(
                    'action' => 'view',
                    $this->Session->read('Paciente.id')
                ));
            }
            $this->Flash->error(__('Informações não puderam ser atualizadas.'));
         }
         if(!$this->request->data){
             $this->request->data = $paciente;
         }
    }

    public function delete($id){

        $paciente = $this->Paciente->find('all', array('conditions'=> array('Paciente.id' => $id)));

        if($paciente == null || $this->Paciente->delete($id)){
            $this->Flash->success(__('Paciente %s foi excluído com sucesso.', h($id)));
            return $this->redirect(array('action' => 'lista_pacientes'));
        }else{
            $this->Flash->error(__('Paciente %s não pôde ser excluído.', h($id)));
        }
        return $this->redirect(array('action' => 'lista_pacientes'));
    }

    public function validar(){
        $paciente = $this->Paciente->findAllByLoginAndSenha($this->data['Paciente']['login'],
        ($this->data['Paciente']['senha']));
        if(!empty($paciente)){
            return $paciente;
        }else{
            return false;
        }
    }

    public function area_do_paciente(){}
    public function area_administrativa(){}

    public function login(){
        if(!empty($this->data['Paciente']['login'])){
            // Validar
            $paciente = $this->validar();
            if($paciente != false){
                $pacienteInfo = $this->Paciente->findByLogin($this->data['Paciente']['login']);
                $this->Session->delete('Usuario');
                $this->Session->write('Paciente',array(
                    'id' => $pacienteInfo['Paciente']['id'],
                    'login' => $pacienteInfo['Paciente']['login'],
                    'nome' => $pacienteInfo['Paciente']['nome'],
                    'shopping_carrinho' => []
                ));
                $this->redirect(array(
                    'controller' => 'pacientes',
                    'action' => 'area_do_paciente'
                ));
                exit();
            }else{
                $this->Flash->set('Usuário e/ou senha inválidos');
                $this->redirect(array('action' => 'login'));
                exit();

            }
        }
    }

    public function logout(){
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso');
        $this->redirect(array('action' => 'login'));
        exit();
    }
}
?>
