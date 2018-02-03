<?php require_once 'config.php'; ?>		
<?php require_once DBAPI; ?>		
<?php include(HEADER_TEMPLATE); ?>		
<?php $db = open_database(); ?>		
<h1>Controle de Estoque</h1>		
<hr />		
<?php if ($db) : ?>		
	<div class="row">			
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/produto/add.php" class="btn btn-primary">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-plus fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Novo Produto</p>						
					</div>
				</div>				
			</a>			
		</div>		
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/cliente/add.php" class="btn btn-primary">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-plus fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Novo Cliente</p>						
					</div>
				</div>				
			</a>			
		</div>	
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/fornecedor/add.php" class="btn btn-primary">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-plus fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Novo Fornecedor</p>						
					</div>
				</div>				
			</a>			
		</div>	
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/pedido/add.php" class="btn btn-primary">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-plus fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Novo Pedido</p>						
					</div>
				</div>				
			</a>			
		</div>	
	</div>
	<div class="row">	
		      <p>                  </p>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/produto" class="btn btn-default">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-user fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Produtos</p>						
					</div>					
				</div>				
			</a>			
		</div>		
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/cliente" class="btn btn-default">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-user fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Clientes</p>						
					</div>					
				</div>				
			</a>			
		</div>	
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/fornecedor" class="btn btn-default">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-user fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Fornecedores</p>						
					</div>					
				</div>				
			</a>			
		</div>	
		<div class="col-xs-6 col-sm-3 col-md-2">				
			<a href="crud/pedido" class="btn btn-default">					
				<div class="row">						
					<div class="col-xs-12 text-center">							
						<i class="fa fa-user fa-5x"></i>						
					</div>						
					<div class="col-xs-12 text-center">							
						<p>Pedidos</p>						
					</div>					
				</div>				
			</a>			
		</div>	
	</div>		

<?php else : ?>			
	<div class="alert alert-danger" role="alert">				
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>			
	</div>		
<?php endif; ?>		
<?php include(FOOTER_TEMPLATE); ?>