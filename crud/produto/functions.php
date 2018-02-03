<?php				
require_once('../config.php');		
require_once(DBAPI);				
$produtos = null;		
$produto = null;				

/**		 *  Listagem de produtos		 */		
function index() {			
	global $produtos;			
	$produtos = find_all('produto');		
}

/**		 *  Cadastro de produtos		 */		
function add() {				  
	if (!empty($_POST['produto'])) {				    
		$produto = $_POST['produto'];	    		    
		save('produto', $produto);		    
		header('location: index.php');		  
	}		
}

/**		 *	Atualizacao/Edicao de produto		 */		
function edit() {			  
	if (isset($_GET['id'])) {				    
		$id = $_GET['id'];				    
		if (isset($_POST['produto'])) {				      
			$produto = $_POST['produto'];			      
			update('produto', $id, $produto);		      
			header('location: index.php');		    
		} else {				      
			global $produto;		      
			$produto = find('produto', $id);		    
		} 		  
	} else {		    
		header('location: index.php');		  
	}		
}

/**		 *  Visualização de um produto		 */		
function view($id = null) {		  
	global $produto;		  
	$produto = find('produto', $id);		
}

/**		 *  Exclusão de um produto		 */		
function delete($id = null) {				  
	global $produto;		  
	$produto = remove('produto', $id);				  
	header('location: index.php');		
}