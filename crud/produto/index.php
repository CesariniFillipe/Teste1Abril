<?php
require_once('functions.php');
index();
?>		
<?php include(HEADER_TEMPLATE); ?>		
<header>			
	<div class="row">				
		<div class="col-sm-6">					
			<h2>Produtos</h2>				
		</div>				
		<div class="col-sm-6 text-right h2">			    	
			<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo produto</a>			    	
			<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>			    
		</div>			
	</div>		
</header>		
<?php if (!empty($_SESSION['message'])) : ?>			
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">				
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>				
		<?php echo $_SESSION['message']; ?>			
	</div>			
	<?php clear_messages(); ?>		
<?php endif; ?>		
<hr>		
<table class="table table-hover">		
	<thead>			
		<tr>				
			<th>ID</th>	
			<th>Nome do Fornecedor</th>				
			<th width="20%">Nome</th>
			<th width="30%">Descrição</th>				
			<th width="10%">Preço</th>				
			<th>Quantidade</th>				
			<th width="10%">Validade</th>				
			<th width="40%">Opções</th>			
		</tr>		
	</thead>		
	<tbody>		
		<?php if ($produtos) : ?>		
			<?php foreach ($produtos as $produto) : ?>			
				<tr>				
					<td><?php echo $produto['id']; ?></td>
					<?php
					$arrayPF = mysqli_fetch_array(showFornecedor($produto['id_fornecedor']));
					$fornecedorProduto = $arrayPF['nome'];
					?>				
					<td><?php echo $fornecedorProduto; ?></td>				
					<td><?php echo $produto['nome']; ?></td>				
					<td><?php echo $produto['descricao']; ?></td>		
					<td>R$ <?php echo $produto['preco']; ?></td>
					<td><?php echo $produto['quantidade']; ?></td>	
					<td><?php echo $produto['validade']; ?></td>					
					<td class="actions text-right">					
						<a href="view.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>					<a href="edit.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>					<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $produto['id']; ?>">
							<i class="fa fa-trash"></i> Excluir					
						</a>				
					</td>			
				</tr>		
			<?php endforeach; ?>		
		<?php else : ?>			
			<tr>				
				<td colspan="6">Nenhum registro encontrado.</td>			
			</tr>		
		<?php endif; ?>		
	</tbody>		
</table>		
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>