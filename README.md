# chat2023
atividade programação web 2023

index.html
	página inicial e pedir o nome do user
	
chat.html
	uma pagina contendo a interface do char
	input para mensagem
	e uma div com altura fixa e scroll (css: overflow)
	
style.css que estiliza o arquivo chat.html e index.html
	
recebe.php
	que recebe o nome do user e a mensagem via get e salva no bd

ler.php
	que busca todas informações do chat no bd a partir de um id recebido via get
	select * from mensagens where id>$id
	fazer um foreach com echo para mostrar as msgs
	
BD: uma tabela que salva id (auto_increment), nome, msg, datahora
