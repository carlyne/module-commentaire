<?php

namespace App\Controller\Api;

use App\Entity\Comment;

class CommentCreateController
{
	public function __invoke(Comment $data)
	{
		dd($data);
	}
}

?>