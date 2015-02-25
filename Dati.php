<?php
	public class Utente
	{
		protected $nome;
		protected $cognome;
		protected $email;
		private $password;
		private $nickname;
		
		public function __construct($nome, $cognome, $email, $password, $nickname)
		{
			$this -> nome = $nome;
			$this -> cognome = $cognome;
			$this email ->  = $email;
			$this password ->  = $password;
			$this nickname ->  = $nickname;
		}
	}
?>