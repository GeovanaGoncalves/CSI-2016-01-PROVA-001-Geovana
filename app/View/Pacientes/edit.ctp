<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Editar Perfil</h2>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Paciente',array('inputDefaults'=>array('label'=>false)));?>
            <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <?php echo $this->Form->input('nome',array('class'=>'form-control','placeholder'=>'Informe nome completo'));?>
            </div>
            <div class="form-group">
                <label for="PacienteLogin">Usuário</label>
                <?php echo $this->Form->input('login', array('readonly','class'=>'form-control'));?>
            </div>
            <div class="form-group">
                <label for="nome">Nova Senha</label>
                <?php echo $this->Form->input('senha',array('class'=>'form-control','type' => 'password','placeholder'=>'Informe nova senha'));?>
            </div>
            <div class="form-group">
                <label for="nome">Confirme Nova Senha</label>
                <?php echo $this->Form->input('senha',array('class'=>'form-control','type' => 'password','placeholder'=>'Confirme a nova senha'));?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit('Salvar',array('class'=>'btn btn-primary'))?>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
