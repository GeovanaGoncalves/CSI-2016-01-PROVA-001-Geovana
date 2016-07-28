<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Cadastrar exames</h2>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Exame',array('inputDefaults'=>array('label'=>false ), 'type' => 'file'));?>
            <div class="form-group">
                <label for="ExameID">ID</label>
                <?php echo $this->Form->input('id',array('class'=>'form-control','placeholder'=>'ID do exame'));?>
            </div>

            <div class="form-group">
                <label for="ExameNome">Nome</label>
                <?php echo $this->Form->input('nome',array('class'=>'form-control','placeholder'=>'Nome do exame'));?>
            </div>
            <div class="form-group">
                <label for="ExamePreco">Preço</label>
                  <div class="input-group">
                    <?php echo $this->Form->input('preco',array('class'=>'form-control','placeholder'=>'Preço do exame'));?>
                  </div>
            <div class="form-group">
              <p class="text-center">
            <button type="submit" class="btn btn-primary text-center">Cadastrar Exame</button>
            <button class="btn btn-danger text-center" type="reset" onclick="history.go(0)">Limpar</button>
          </p>

            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
