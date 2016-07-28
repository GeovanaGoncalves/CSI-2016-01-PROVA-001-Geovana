<?php
App::uses('AppController', 'Controller');

class CarrinhosController extends AppController {

	public $uses = array('Procedimento','Carrinho');
	public $components = array('Flash');

	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Carrinho->addProduct($this->request->data['Carrinho']['id']);
		}
		$this->Flash->success(__('Procedimento adicionado ao carrinho'));
		$this->redirect(array(
			'controller' => 'procedimentos',
			'action' => 'lista_procedimentos'
		));
	}

	public function view() {
		$carrinhos = $this->Carrinho->readProduct();
		$products = array();
		if (null!=$carrinhos) {
			foreach ($carrinhos as $productId => $count) {
				$procedimento = $this->Procedimento->findById($productId);
				$procedimento['Procedimento']['count'] = $count;
				$products[]=$procedimento;
			}
		}
		$this->set('procedimentos', $products);
	}

	public function carrinho_completo() {
		$carrinhos = $this->Carrinho->readProduct();
		$products = array();
		if (null!=$carrinhos) {
			foreach ($carrinhos as $productId => $count) {
				$procedimento = $this->Procedimento->findById($productId);
				$prcedimento['Procedimento']['count'] = $count;
				$products[]=$procedimento;
			}
		}
		$this->set('procedimentos', $products);
	}

	public function Examer() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$carrinho = array();
				$data = $this->request->data['Carrinho'];
				foreach ($data['count'] as $index => $c) {
					if ($c>0) {
						$carrinho[$data['id'][$index]] = $c;
					}
				}
				$this->Carrinho->saveProduct($carrinho);
				$this->redirect(array('controller' => 'exames', 'action'=>'examer'));
			}
		}
	}


}
