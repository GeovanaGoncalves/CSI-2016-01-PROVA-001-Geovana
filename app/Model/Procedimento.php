<?php
class Procedimento extends AppModel{

      public $validate = array('nome' => array('alphaNumeric' => array('rule' => 'notBlank','required' => true,'message' => 'Insira o nome do procedimento')),
          'preco' => array(
              'required' => array(

                  'rule' => 'numeric',
                  'message' => 'Informe um valor válido'
              )
          )
      );
  }

?>
