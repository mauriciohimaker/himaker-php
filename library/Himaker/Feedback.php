<?php

/**
 * Classe para lidar com erro do usuario
 * Salva em sessão a mensagem e se auto destroi ao exibir
 *  
 * @author Recigio Poffo
 * @package Himaker
 * 
 */
abstract class Himaker_Feedback {
	
	/**
	 * Função que seta mensagem
	 * O tipo pode ser: 'error', 'warning' and 'success'
	 * 
	 */
	public static function setFeedback($message, $messageType) {
		$sessionFeedback = new Zend_Session_Namespace("SESSION_FEEDBACK");
		
		$sessionFeedback->display = true;
		$sessionFeedback->message = $message;
		
		switch ($messageType) {
			case "warning":
				$sessionFeedback->class = "warning";
				break;
				
			case "error":
				$sessionFeedback->class = "error";
				break;
				
			case "success":
				$sessionFeedback->class = "success";
				break;
				
			default:
				throw new InvalidArgumentException('Unknown message type');
		}
	}
	
	/**
	 * Limpa conteudo 'SESSION_FEEDBACK'
	 */
	public static function unsetFeedback() {
		$sessionFeedback = new Zend_Session_Namespace("SESSION_FEEDBACK");
		$sessionFeedback->unsetAll();
	}
}
