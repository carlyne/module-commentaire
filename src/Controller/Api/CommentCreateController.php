<?php

namespace App\Controller\Api;

use App\Entity\Comment;
use Symfony\Component\Security\Core\Security;

class CommentCreateController
{
	private $security;

	public function __construct(Security $security)
	{
		$this->security = $security;
	}

	/**
	 * Récupérer l'utilisateur
	 *
	 * @param Comment $data
	 * @return Comment
	 */
	public function __invoke(Comment $data)
	{
		$user = $this->security->getUser();
		$data->setAuthor($user);
		
		return $data;
	}
}

?>