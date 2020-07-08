<?php 

namespace App\Security;

use App\Entity\Comment;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class CommentVoter extends Voter
{

	protected function supports(string $attribute, Comment $subject)
	{
		// code
	}

	protected function voteOnAttribute(string $attribute, Comment $subject, TokenInterface $token)
	{
		// code
	}


}

?>