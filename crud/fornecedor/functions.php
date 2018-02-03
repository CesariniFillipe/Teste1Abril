<?php				
require_once('../../config.php');		
require_once(DBAPI);				
$fornecedores = null;		
$fornecedor = null;				

/**		 *  Listagem de fornecedores		 */		
function index() {			
	global $fornecedores;			
	$fornecedores = find_all('fornecedor');		
}

/**		 *  Cadastro de fornecedores		 */		
function add() {				  
	if (!empty($_POST['fornecedor'])) {				    
		$fornecedor = $_POST['fornecedor'];	    		    
		save('fornecedor', $fornecedor);		    
		header('location: index.php');		  
	}		
}

/**		 *	Atualizacao/Edicao de fornecedor		 */		
function edit() {			  
	if (isset($_GET['id'])) {				    
		$id = $_GET['id'];				    
		if (isset($_POST['fornecedor'])) {				      
			$fornecedor = $_POST['fornecedor'];			      
			update('fornecedor', $id, $fornecedor);		      
			header('location: index.php');		    
		} else {				      
			global $fornecedor;		      
			$fornecedor = find('fornecedor', $id);		    
		} 		  
	} else {		    
		header('location: index.php');		  
	}		
}

/**		 *  Visualização de um fornecedor		 */		
function view($id = null) {		  
	global $fornecedor;		  
	$fornecedor = find('fornecedor', $id);		
}

/**		 *  Exclusão de um fornecedor		 */		
function delete($id = null) {				  
	global $fornecedor;		  
	$fornecedor = remove('fornecedor', $id);				  
	header('location: index.php');		
}