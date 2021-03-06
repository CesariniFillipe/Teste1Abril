<?php				
require_once('../../config.php');		
require_once(DBAPI);				
$clientes = null;		
$cliente = null;				

/**		 *  Listagem de Clientes		 */		
function index() {			
	global $clientes;			
	$clientes = find_all('cliente');		
}

/**		 *  Cadastro de Clientes		 */		
function add() {				  
	if (!empty($_POST['cliente'])) {				    
		$cliente = $_POST['cliente'];	    		    
		save('cliente', $cliente);		    
		header('location: index.php');		  
	}		
}

/**		 *	Atualizacao/Edicao de Cliente		 */		
function edit() {			  
	if (isset($_GET['id'])) {				    
		$id = $_GET['id'];				    
		if (isset($_POST['cliente'])) {				      
			$cliente = $_POST['cliente'];			      
			update('cliente', $id, $cliente);		      
			header('location: index.php');		    
		} else {				      
			global $cliente;		      
			$cliente = find('cliente', $id);		    
		} 		  
	} else {		    
		header('location: index.php');		  
	}		
}

/**		 *  Visualização de um Cliente		 */		
function view($id = null) {		  
	global $cliente;		  
	$cliente = find('cliente', $id);		
}

/**		 *  Exclusão de um Cliente		 */		
function delete($id = null) {				  
	global $cliente;		  
	$cliente = remove('cliente', $id);				  
	header('location: index.php');		
}