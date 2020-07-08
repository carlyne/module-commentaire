<?php 

namespace App\Security;

use App\Entity\Comment;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class CommentVoter extends Voter
{

	const EDIT = 'EDIT_COMMENT';

	/**
	 * Vérifie que l'authentification est bien celle demandée, si c'est faux, on ne vote pas
	 *
	 * @param string $attribute
	 * @param mixed $subject
	 * @return boolean
	 */
	protected function supports(string $attribute, $subject)
	{
		return
			$attribute === self::EDIT &&
			$subject instanceof Comment;

	}

	/**
	 * Donne la permission d'édition si le support a permi de voter
	 *
	 * @param string $attribute
	 * @param mixed $subject
	 * @param TokenInterface $token
	 * @return boolean
	 */
	protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token)
	{
		$user = $token->getUser();

		if(!$user instanceof User || !$subject instanceof Comment) {
			return false;
		}

		// si les identifiants matchent, l'utilisateur a la permission
		return $subject->getAuthor()->getId() === $user->getId();
	}


}

?>