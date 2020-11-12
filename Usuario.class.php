<?php 

	require 'Database.class.php';

	/**
	 * Recebendo dados e adicionando ao DB
	 */
	class User extends Connection
	{
		private $name;
		private $email;
		private $topic;
		private $message;

		// recebendo dados do formulario
		public function receive__data()
		{
			$this->name    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			$this->email   = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
			$this->topic   = filter_var($_POST['topic'], FILTER_SANITIZE_STRING);
			$this->message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		}


		// enviando dados para o DB
		public function save__data()
		{
			$this->receive__data();

			$sql = $this->connect->prepare("INSERT INTO contact (name, email, topic, message) VALUES (?, ?, ?, ?)");
            $sql->bindValue(1, $this->name);
            $sql->bindValue(2, $this->email);
            $sql->bindValue(3, $this->topic);
            $sql->bindValue(4, $this->message);
            $sql->execute();
		}

	}

	print(new User)->save__data();