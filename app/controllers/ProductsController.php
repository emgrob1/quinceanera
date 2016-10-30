<?php
session_start();
class ProductsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

		$this->persistent->searchParams = null;
		$this->view->form = ProductsForm;
		
    }
	
	
    /**
     * Execute the "search" based on the criteria sent from the "index"
     * Returning a paginator for the results
     */
    public function searchAction()
    {
    	 if ($this->request->isPost()) {
    	 	echo 'searching ...';
        // Create the query conditions
    } else {
        // Paginate using the existing conditions
    }
		
		

    // ...
    }

    /**
     * Shows the view to create a "new" product
     */
    public function newAction()
    {
        // ...
    }

    /**
     * Shows the view to "edit" an existing product
     */
    public function editAction()
    {
        // ...
    }

    /**
     * Creates a product based on the data entered in the "new" action
     */
    public function createAction()
    {
    	  if (!$this->request->isPost()) {
        return $this->forward("products/index");
    }

    $form    = new ProductsForm;
    $product = new Products();

    $product->id               = $this->request->getPost("id", "int");
    $product->product_types_id = $this->request->getPost("product_types_id", "int");
    $product->name             = $this->request->getPost("name", "striptags");
    $product->price            = $this->request->getPost("price", "double");
    $product->active           = $this->request->getPost("active");
        // ...
    }

    /**
     * Updates a product based on the data entered in the "edit" action
     */
    public function saveAction()
    {
        // ...
    }

    /**
     * Deletes an existing product
     */
    public function deleteAction($id)
    {
        // ...
    }

}

