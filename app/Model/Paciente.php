<?php

    class Paciente extends AppModel{

        public $validate = array(
          'login' => array(
                'alphaNumeric' => array(
                    'rule' => 'alphaNumeric',
                    'required' => true,
                    'message' => 'Apenas letras e números'
                ),
                'lengthBetween' => array(
                    'rule' => array('lengthBetween',4,10),
                    'message' => 'Login deve possuir no mínimo 4 caracteres'
                )

            ),
            'senha' => array(
                'lengthBetween' => array(
                    'rule' => array('lengthBetween',8,20),
                    'message' => 'Senha deve possuir no mínimo 8 caracteres'
                )
            ),
            'nome' => array(
                'required' => array(
                    'rule' => '/^[a-zA-Z\s]+$/i',
                    'message' => 'Caracteres inválidos'
                )
            )
        );
    }

?>
