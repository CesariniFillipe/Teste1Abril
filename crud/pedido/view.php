<?php 			require_once('functions.php'); 			view($_GET['id']);		?>		
<?php include(HEADER_TEMPLATE); ?>		
<h2>Pedido <?php echo $pedido['id']; ?></h2>		
<hr>		
<?php if (!empty($_SESSION['message'])) : ?>			
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>		
<?php endif; ?>		
<dl class="dl-horizontal">
	<?php
	$arrayPP = mysqli_fetch_array(showProduto($pedido['id_produto']));
	$arrayPC = mysqli_fetch_array(showCliente($pedido['id_cliente']));
	$produtoPedido = $arrayPP['nome'];
	$produtodescPedido = $arrayPP['descricao'];
	$clientePedido = $arrayPC['nome'];
	?>		
	<dt>Nome do Produto:</dt>			
	<dd><?php echo $produtoPedido; ?></dd>
	<dt>Descrição do Produto:</dt>			
	<dd><?php echo $produtodescPedido; ?></dd>
	<dt>Nome do Cliente:</dt>			
	<dd><?php echo $clientePedido; ?></dd>		
	<dt>Quantidade:</dt>			
	<dd><?php echo $pedido['quantidade']; ?></dd>
	<dt>Data do Pedido:</dt>			
	<dd><?php echo $pedido['data']; ?></dd>
</dl>		
<div id="actions" class="row">			
	<div class="col-md-12">			  		  
		<a href="index.php" class="btn btn-default">Voltar</a>			
	</div>		
</div>		
<?php include(FOOTER_TEMPLATE); ?>