<?php 		  require_once('functions.php'); 		  edit();		?>		
<?php include(HEADER_TEMPLATE); ?>		
<h2>Atualizar Cliente</h2>		
<form action="edit.php?id=<?php echo $cliente['id']; ?>" method="post">		  
    <hr />		  
    <div class="row">		    
        <div class="form-group col-md-7">		      
            <label for="name">Nome</label>		      
            <input type="text" class="form-control" name="cliente['nome']" value="<?php echo $cliente['nome']; ?>">		    
        </div>		
        <div class="form-group col-md-3">		      
            <label for="campo2">CNPJ / CPF</label>		      
            <input type="text" class="form-control" name="cliente['cpf_cnpj']" value="<?php echo $cliente['cpf_cnpj']; ?>">		    
        </div>	  
    </div>	  
    <div class="row">
        <div class="form-group col-md-3">		      
            <label for="campo2">Email</label>		      
            <input type="email" class="form-control" name="cliente['email']" value="<?php echo $cliente['email']; ?>">		    
        </div>		
        <div class="form-group col-md-2">		      
            <label for="campo3">Telefone</label>		      
            <input type="tel" class="form-control" name="cliente['telefone']" value="<?php echo $cliente['telefone']; ?>">		    
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