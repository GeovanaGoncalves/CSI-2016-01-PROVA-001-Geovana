<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Solicitar Exame</h2>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Exame',array('inputDefaults'=>array('label'=>false ), 'type' => 'file'));?>
            <div class="form-group">
                <label for="ExameNome">Data</label>
                <?php echo $this->Form->input('data',array('class'=>'form-control','placeholder'=>'Data do exame'));?>
            </div>

           <p class="text-center">
            <button type="submit" class="btn btn-primary text-center">Solicitar Exame</button>
            <button class="btn btn-danger text-center" type="reset" onclick="history.go(0)">Limpar</button>
          </p>

            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
