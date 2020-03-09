<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('commons/cabecalho');
 ?>

<div class="container">
	<div class="page-header">
		<h1>Lista de Contatos</h1>
	</div>
	<?php if ($this->session->flashdata('error') == TRUE): ?>
		<div class="alert alert-warning"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
	<?php endif; ?>

	<form method="post" action="<?=base_url('salvar')?>" enctype="multipart/form-data">

		<div class="col-md-4">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome" class="form-control" value="<?=set_value('nome')?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Telefone:</label>
				<input type="text" name="telefone" class="form-control" value="<?=set_value('telefone')?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control" value="<?=set_value('email')?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Endereço:</label>
				<input type="test" name="endereco" class="form-control" value="<?=set_value('endereco')?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<label><em>Todos os campos são obrigatórios.</em></label>
			<div class="clearfix"></div>
			<input type="submit" value="Salvar" class="btn btn-success" />
		</div>
	</form>
	<div class="col-md-12">
		<table class="table table-striped table-hover table-bordered">
			<caption>Contatos</caption>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Telefone</th>
					<th>Email</th>
					<th>Endereço</th>
					<th>Editar/Excluir</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($contatos == FALSE): ?>
					<tr><td colspan="2">Nenhum contato encontrado</td></tr>
				<?php else: ?>
					<?php foreach ($contatos as $row): ?>
						<tr>
							<td><?= $row['nome'] ?></td>
							<td><?= $row['telefone'] ?></td>
							<td><?= $row['email'] ?></td>
							<td><?= $row['endereco'] ?></td>
							<td class="text-center"><a href="<?= $row['editar_url'] ?>">[Editar]</a> <a href="<?= $row['excluir_url'] ?>">[Excluir]</a></td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>

</div>

<?php $this->load->view('commons/rodape'); ?>
