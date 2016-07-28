<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Ver procedimentos agendados de Exames</h4>
    </div>
    <table class="table table-responsive table-striped">


<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th class="col-lg-3">Procedimento</th>
					<th class="col-lg-3">Preço</th>
					<th class="col-lg-3">Quantidade</th>
					<th class="col-lg-3">Total</th>
				</tr>
			</thead>
			<tbody>
				<?php $total=0;?>
				<?php foreach ($procedimentos as $procedimento):?>
				<tr>

					<td>$<?php echo $procedimento['Procedimento']['preco'];?>
					</td>
					<td>
						<div class="col-md-6">
							<?php echo $this->Form->hidden('id.',array('value'=>$procedimento['Procedimento']['id']));?>
							<?php echo $this->Form->number('count.',array('label'=>false,'class'=>'form-control input-md', 'value'=>$procedimento['Procedimento']['count']));?>
						</div>
					</td>
					<td>$<?php echo $procedimento['Procedimento']['count']*$procedimento['Procedimento']['preco']; ?>
					</td>
				</tr>
				<!-- <?php $total = $total + ($procedimento['Procedimento']['count']*$procedimento['Procedimento']['preco']);?> -->
				<?php endforeach;?>
				<tr class="success">
					<td colspan=3></td>
					<td>$<?php echo $total;?>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="text-right">
			<?php echo $this->Form->submit('Examer',array('class'=>'btn btn-success','div'=>false));?>
		</p>
	</div>
</div>
<?php echo $this->Form->end();?>
