<?php 

class HomeController{
	  public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
    
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        session_start();

        $visits = new CounterModel();
    
        $visits->updateVisits();
        $visiteurs = $visits->getVisits();
    	
           
            $http->redirectTo("/home");
      
    	
    	
    }
}



?>
