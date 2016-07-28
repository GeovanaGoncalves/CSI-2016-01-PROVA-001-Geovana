<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Editar Procedimento</h2>
        <h3></h3>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Procedimento',array('inputDefaults'=>array('label'=>false),'type' => 'file'));?>
            <?php echo $this->Form->input('id', array('type' => 'hidden'));
                ?>
                  <div class="form-group">
                      <label for="ProcedimentoNome">Nome</label>
                      <?php echo $this->Form->input('nome',array('class'=>'form-control','placeholder'=>'Nome do procedimento'));?>
                  </div>

            <div class="form-group">
                <label for="ProcedimentoPreco">Preço</label>
                <div class="input-group">
                    <?php echo $this->Form->input('preco',array('class'=>'form-control','placeholder'=>'Preço do procedimento'));?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->submit('Salvar',array('class'=>'btn btn-primary'))?>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
