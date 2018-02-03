<?php 		  require_once('functions.php'); 		  add();		?>		
<?php include(HEADER_TEMPLATE); ?>		
<h2>Novo Cliente</h2>		
<form action="add.php" method="post">		  <!-- area de campos do form -->		  
	<hr />		  
	<div class="row">		    
		<div class="form-group col-md-7">		      
			<label for="id_produto">Nome do produto: </label>		
			<select class="form-control" name="pedido['id_produto']">
				<option selected="selected">- Selecione -</option>
				<?php
				$query=listProdutos();
				while ($tabela = mysqli_fetch_array($query)) {
					$id = $tabela['id'];
					$nome = $tabela['nome'];
					?>
					<option value="<?php echo $id ?>"><?php echo $nome ?></option>
					<?php
				}
				?>
			</select>
		</div>
		<div class="form-group col-md-7">		      
			<label for="id_cliente">Nome do cliente: </label>		
			<select class="form-control" name="pedido['id_cliente']">
				<option selected="selected">- Selecione -</option>
				<?php
				$query=listClientes();
				while ($tabela = mysqli_fetch_array($query)) {
					$id = $tabela['id'];
					$nome = $tabela['nome'];
					?>
					<option value="<?php echo $id ?>"><?php echo $nome ?></option>
					<?php
				}
				?>
			</select>        
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-1">		      
			<label for="campo2">Quantidade</label>		      
			<input type="number" class="form-control" name="pedido['quantidade']">		    
		</div>
	</div> 	
	<div id="actions" class="row">		    
		<div class="col-md-12">		     
			<button type="submit" class="btn btn-primary">Salvar</button>		      
			<a href="index.php" class="btn btn-default">Cancelar</a>		    
		</div>		  
	</div>		
</form>		
<?php include(FOOTER_TEMPLATE); ?>