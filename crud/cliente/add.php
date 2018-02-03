<?php 		  require_once('functions.php'); 		  add();		?>		
<?php include(HEADER_TEMPLATE); ?>		
<h2>Novo Cliente</h2>		
<form action="add.php" method="post">		  <!-- area de campos do form -->		  
	<hr />		  
	<div class="row">		    
		<div class="form-group col-md-7">		      
			<label for="nome">Nome</label>		      
			<input type="text" class="form-control" name="cliente['nome']">		    
		</div>
	</div> 
	<div class="row">
		<div class="form-group col-md-3">		      
			<label for="campo1">CPF / CNPJ</label>		      
			<input type="text" class="form-control" name="cliente['cpf_cnpj']">		    
		</div>
		
		<div class="form-group col-md-3">		      
			<label for="campo2">Email</label>		      
			<input type="email" class="form-control" name="cliente['email']">		    
		</div>
	</div>
	<div class="row">	    		    
		<div class="form-group col-md-2">		      
			<label for="campo1">Telefone</label>		      
			<input type="tel" class="form-control" name="cliente['telefone']">		    
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