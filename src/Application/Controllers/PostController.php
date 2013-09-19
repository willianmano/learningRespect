<?php

namespace Application\Controllers;

use Respect\Rest\Routable;

class PostController implements Routable
{
	// protected $twig = null;
	// public function __construct($twig)
	// {
	// 	if (isset($twig)) {
	// 		$this->twig = $twig;
	// 	}
	// }
	public function get($id = 0)
	{
		//return $this->twig->render('template.html', array('a_variable' => 'Respect Id'));
		return 'Id Number: ' . $id;
	}
	public function post($id)
	{

	}
    public function put($id)
    {

    }
    public function delete($id)
    {

    }
}