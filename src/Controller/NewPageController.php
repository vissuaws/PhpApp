<?php

//Explanation: Name of class so it can be referenced easily without collisions.
namespace App\Controller;

//Explanation: Import code elements from namespaces into the current namespace for easier access later.
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//Explanation: Name of class `NewPageController` which inherits the `AbstractController` class
class NewPageController extends AbstractController
{
    //Explanation: Creates a new `/new_page` webpage URL endpoint
    #[Route('/new_page', name: 'new_page')]
    //Explanation: New PHP function that returns a response
    public function index(): Response
    {
        //Explanation: Returns HTML code to the new URL endpoint /new_page
        return new Response(
		'<html><body>
		Hello, welcome to new page<br>
		Vetsa Vissu<br>
		'.$this->personalMessage().'

		</body></html>'
		
        );
    }

    public function personalMessage(): string
	{
       return "PHP is cool";
  	 }
 }
