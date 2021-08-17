<?php
	session_start(); // обязательно стартуем сессию, чтобы с ней далее работать
	$_SESSION['authorization'] = NULL;
  $_SESSION['logaut'] = TRUE;
  header("Location: /");
