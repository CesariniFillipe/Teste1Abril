<?php
require_once('functions.php');
index();
?>		
<?php include(HEADER_TEMPLATE); ?>		
<header>			
	<div class="row">				
		<div class="col-sm-6">					
			<h2>Pedidos</h2>				
		</div>				
		<div class="col-sm-6 text-right h2">			    	
			<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Pedido</a>			    	
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
			<th width="20%">Nome do Produto</th>
			<th width="20%">Nome do Cliente</th>
			<th>Quantidade</th>
			<th>Data do Pedido</th>				
			<th>Opções</th>				
		</tr>		
	</thead>		
	<tbody>		
		<?php if ($pedidos) : ?>		
			<?php foreach ($pedidos as $pedido) : ?>			
				<tr>				
					<td><?php echo $pedido['id']; ?></td>				
					<?php
					$arrayPP = mysqli_fetch_array(showProduto($pedido['id_produto']));
					$arrayPC = mysqli_fetch_array(showCliente($pedido['id_cliente']));
					$produtoPedido = $arrayPP['nome'];
					$clientePedido = $arrayPC['nome'];
					?>
					<td><?php echo $produtoPedido; ?></td>
					<td><?php echo $clientePedido; ?></td>
					<td><?php echo $pedido['quantidade']; ?></td>
					<td><?php echo $pedido['data']; ?></td>						
					<td class="actions text-right">					
						<a href="view.php?id=<?php echo $pedido['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>					<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $pedido['id']; ?>">
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