<?php 		  require_once('functions.php'); 		  add();		?>		
<?php include(HEADER_TEMPLATE); ?>		
<h2>Novo Produto</h2>		
<form action="add.php" method="post">		  <!-- area de campos do form -->		  
	<hr />		  
	<div class="row">		    
		<div class="form-group col-md-7">		      
			<label for="nome">Nome</label>		      
			<input type="text" class="form-control" name="produto['nome']">		    
		</div>
	</div> 
	<div class="row">
		<div class="form-group col-md-7">		      
			<label for="campo1">Descrição</label>		      
			<input type="text" class="form-control" name="produto['descricao']">		    
		</div>
		
	</div>
	<div class="row">	

		<div class="form-group col-md-3">		      
			<label for="campo2">Preço (R$)</label>		      
			<input type="number" class="form-control" name="produto['preco']">		    
		</div>    		    
		<div class="form-group col-md-2">		      
			<label for="campo1">Quantidade</label>		      
			<input type="number" class="form-control" name="produto['quantidade']">		    
		</div>
		<div class="form-group col-md-2">		      
			<label for="campo1">Validade</label>		      
			<input type="date" class="form-control" name="produto['validade']">		    
		</div>
		
	</div>	
	<div class="row">	
		<div class="form-group col-md-7">		      
			<label for="id_cliente">Nome do fornecedor: </label>		
			<select class="form-control" name="produto['id_fornecedor']">
				<option selected="selected">- Selecione -</option>
				<?php
				$query=showFornecedor();
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
	<div id="actions" class="row">		    
		<div class="col-md-12">		     
			<button type="submit" class="btn btn-primary">Salvar</button>		      
			<a href="index.php" class="btn btn-default">Cancelar</a>		    
		</div>		  
	</div>		
</form>		
<?php include(FOOTER_TEMPLATE); ?>