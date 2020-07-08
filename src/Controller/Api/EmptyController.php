<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Response;

class EmptyController
{	
	/**
	 * Empêcher l'utilisation de l'uri api/posts/id
	 *
	 * @return Response
	 */
	public function __invoke()
	{
		return new Response();
	}
}

?>