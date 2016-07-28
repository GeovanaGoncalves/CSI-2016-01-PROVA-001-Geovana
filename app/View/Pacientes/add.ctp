<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Cadastrar Paciente</h2>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Paciente',array('inputDefaults'=>array('label'=>false)));?>
            <div class="form-group">
                <label for="PacienteNome">Nome</label>
                <?php echo $this->Form->input('nome',array('class'=>'form-control','placeholder'=>'Informe nome completo'));?>
            </div>
            <div class="form-group">
                <label for="PacienteLogin">Usuário</label>
                <?php echo $this->Form->input('login',array('class'=>'form-control','placeholder'=>'Nome do usuário'));?>
            </div>
            <div class="form-group">
                <label for="PacienteSenha">Senha</label>
                <?php echo $this->Form->password('senha',array('class'=>'form-control','placeholder'=>'Senha 8 caracteres'));?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <?php echo $this->Form->submit('Cadastrar',array('class'=>'btn btn-primary'))?>
                </div>
            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
