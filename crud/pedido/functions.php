<?php				
require_once('../../config.php');		
require_once(DBAPI);				
$pedidos = null;		
$pedido = null;				

/**		 *  Listagem de pedidos		 */		
function index() {			
	global $pedidos;			
	$pedidos = find_all('pedido');		
}

/**		 *  Cadastro de pedidos		 */		
function add() {				  
	if (!empty($_POST['pedido'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));				    
		$pedido = $_POST['pedido'];
		$pedido['data'] = $today->format("Y-m-d H:i:s");	    		    
		save('pedido', $pedido);		    
		header('location: index.php');		  
	}		
}

/**		 *	Atualizacao/Edicao de pedido		 */		
function edit() {			  
	if (isset($_GET['id'])) {				    
		$id = $_GET['id'];				    
		if (isset($_POST['pedido'])) {				      
			$pedido = $_POST['pedido'];			      
			update('pedido', $id, $pedido);		      
			header('location: index.php');		    
		} else {				      
			global $pedido;		      
			$pedido = find('pedido', $id);		    
		} 		  
	} else {		    
		header('location: index.php');		  
	}		
}

/**		 *  Visualização de um pedido		 */		
function view($id = null) {		  
	global $pedido;		  
	$pedido = find('pedido', $id);		
}

/**		 *  Exclusão de um pedido		 */		
function delete($id = null) {				  
	global $pedido;		  
	$pedido = remove('pedido', $id);				  
	header('location: index.php');		
}