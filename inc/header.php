<!DOCTYPE html>		
<html>		
<head>		    
	<meta charset="utf-8">		    
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		    
	<title>Controle de Estoque</title>		    
	<meta name="description" content="">		    
	<meta name="viewport" content="width=device-width, initial-scale=1">		
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/dist/css/bootstrap.min.css">		    
	<style>		        
	body {		            
		padding-top: 50px;		            
		padding-bottom: 20px;		        
	}		    
</style>		    
<link rel="stylesheet" href="<?php echo BASEURL; ?>dist/css/style.css">		    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">		
</head>		
<body>		
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">		      
		<div class="container">		        
			<div class="navbar-header">		          
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">		            <span class="sr-only">Toggle navigation</span>		            
					<span class="icon-bar"></span>		            
					<span class="icon-bar"></span>		            
					<span class="icon-bar"></span>		          
				</button>		          
				<a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">Início</a>	        
			</div>		        
			<div id="navbar" class="navbar-collapse collapse">		          
				<ul class="nav navbar-nav">          		            
					<li class="dropdown">		                
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">		                    Produtos <span class="caret"></span>		                
						</a>		                
						<ul class="dropdown-menu">		                    
							<li><a href="<?php echo BASEURL; ?>crud/produto/index.php">Gerenciar Produtos</a></li>		                    
							<li><a href="<?php echo BASEURL; ?>crud/produto/add.php">Novo Produto</a></li>		                
						</ul>		            
					</li>
					<li class="dropdown">		                
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">		                    Clientes <span class="caret"></span>		                
						</a>		                
						<ul class="dropdown-menu">		                    
							<li><a href="<?php echo BASEURL; ?>crud/cliente/index.php">Gerenciar Clientes</a></li>		                    
							<li><a href="<?php echo BASEURL; ?>crud/cliente/add.php">Novo Cliente</a></li>		                
						</ul>		            
					</li>
					<li class="dropdown">		                
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">		                    Fornecedores <span class="caret"></span>		                
						</a>		                
						<ul class="dropdown-menu">		                    
							<li><a href="<?php echo BASEURL; ?>crud/fornecedor/index.php">Gerenciar Fornecedores</a></li>		                    
							<li><a href="<?php echo BASEURL; ?>crud/fornecedor/add.php">Novo Fornecedor</a></li>		                
						</ul>		            
					</li>
					<li class="dropdown">		                
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">		                    Pedidos <span class="caret"></span>		                
						</a>		                
						<ul class="dropdown-menu">		                    
							<li><a href="<?php echo BASEURL; ?>crud/pedido/index.php">Gerenciar Pedidos</a></li>		                    
							<li><a href="<?php echo BASEURL; ?>crud/pedido/add.php">Novo Pedido</a></li>		                
						</ul>		            
					</li>						          
				</ul>
			</div>      	
		</div>		
	</nav>		
	<main class="container">