<?php 		  require_once('functions.php'); 		  add();		?>		
<?php include(HEADER_TEMPLATE); ?>		
<h2>Novo Fornecedor</h2>		
<form action="add.php" method="post">		  <!-- area de campos do form -->		  
	<hr />		  
	<div class="row">		    
		<div class="form-group col-md-7">		      
			<label for="nome">Nome</label>		      
			<input type="text" class="form-control" name="fornecedor['nome']">		    
		</div>
	</div> 
	<div class="row">
		<div class="form-group col-md-3">		      
			<label for="campo1">CPF / CNPJ</label>		      
			<input type="text" class="form-control" name="fornecedor['cpf_cnpj']">		    
		</div>
		
		<div class="form-group col-md-3">		      
			<label for="campo2">Email</label>		      
			<input type="text" class="form-control" name="fornecedor['email']">		    
		</div>
	</div>
	<div class="row">	    		    
		<div class="form-group col-md-2">		      
			<label for="campo1">Telefone</label>		      
			<input type="text" class="form-control" name="fornecedor['telefone']">		    
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