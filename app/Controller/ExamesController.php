<?php

class ExamesController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');


  var $procedimentos;

  public function add($codigo){
    $id=$this->Session->read('Paciente');
// Debugger::dump($id);
    if(!$this->request->data){
    }else {


    $this->request->data['Exame']['paciente_id'] = $id['id'];
    $this->request->data['Exame']['procedimento_id'] = $codigo;
          if($this->Exame->save($this->request->data)){
              $this->Flash->success(__('Exame cadastrado'));
              return $this->redirect(array('action' => 'lista_exames'));
          }
          $this->Flash->error(__('Procedimento não pôde ser cadastrado'));
      }
  }

  public function adicionar(){
      if($this->request->is('post')){
          $this->Exame->create();
          if($this->Exame->save($this->request->data)){
              $this->Flash->success(__('Exame cadastrado com sucesso'));
              return $this->redirect(array('action' => 'lista_exames'));
          }
          $this->Flash->error(__('Cadastro não pôde ser completado'));
      }
  }

  public function edit($codigo){
    $id=$this->Session->read('Paciente');
// Debugger::dump($id);
    if(!$this->request->data){
        $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'), array('recursive' => 2))));
    }else {


    $this->request->data['Exame']['paciente_id'] = $id['id'];
    $this->request->data['Exame']['procedimento_id'] = $codigo;
          if($this->Exame->save($this->request->data)){
              $this->Flash->success(__('Exame cadastrado'));
              return $this->redirect(array('action' => 'lista_exames'));
          }
          $this->Flash->error(__('Procedimento não pôde ser cadastrado'));
      }
  }

  public function delete($id){

      $exame = $this->Exame->find('all', array('conditions'=> array('Exame.id' => $id)));

      if($procedimento == null || $this->Procedimento->delete($id)){
          $this->Flash->success(__('Procedimento %s foi excluído com sucesso.', h($id)));
          return $this->redirect(array('action' => 'lista_exames'));
      }else{
          $this->Flash->error(__('Procedimento %s não pôde ser excluído.', h($id)));
      }
      return $this->redirect(array('action' => 'lista_procedimentos'));
  }

  public function lista_procedimentos(){
    $this->set('procedimentos', $this->Exame->Procedimento->find('all', array('order' => array('Procedimento.nome ASC'))));
  }

  public function lista_paciente() {
    $id = $this->Session->read('Paciente');

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Paciente.id' => $id[0]['Paciente']['id']), 'order' => array('Exame.data DESC','Procedimento.nome ASC' ))));
  }

  public function lista_exames(){
    $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'), array('recursive' => 2))));
  // Debugger::dump($exames);
  }


  public function lista_exame_geral(){
    $this->set('exames', $this->Exame->find('all', array('recursive' => 2), array('order' => array('Paciente.nome ASC', 'Procedimento.nome ASC'))));
  }

  public function lista_procedimento_geral($id){

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Procedimento.id' => $id), 'order' => array('Exame.data DESC','Procedimento.nome ASC' ))));

  }

  public function lista_paciente_geral($id){

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Paciente.id' => $id), 'order' => array('Exame.data DESC','Procedimento.nome ASC' ))));

  }

  // public function lista_exame_geral(){
  //     $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'))));
  // }

}
?>
