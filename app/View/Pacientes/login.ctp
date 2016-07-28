<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Entrar no sistema como Paciente</h2>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Paciente',array('inputDefaults'=>array('label'=>false)));?>
            <div class="form-group">
                <label for="PacienteLogin">Usuário</label>
                <?php echo $this->Form->input('login',array('class'=>'form-control','placeholder'=>'Nome do usuário'));?>
            </div>
            <div class="form-group">
                <label for="PacienteSenha">Senha</label>
                <?php echo $this->Form->password('senha',array('class'=>'form-control','placeholder'=>'Senha'));?>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block center-block"
                type="submit">Entrar</button>
                <button class="btn btn-danger btn-block center-block"
                type="reset" onclick="history.go(0)">Limpar</button>
            </div>
            <div class="form-group">
                <?php echo $this->Form->Html->link('Cadastrar',array('controller' => 'pacientes', 'action' => 'add'));?>
            </div>
        </div>
    </div>
</div>
