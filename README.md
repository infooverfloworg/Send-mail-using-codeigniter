# send-mail-using-codeigniter
Send email using PHP framework CodeIgniter and shared server email service.

For execution please flow given steps.
1)Open DB file and change the required settings.
	send-mail-using-codeigniter\application\config\database.php
2)Open controller file and change mail server settings.
	send-mail-using-codeigniter\application\controllers\Mail.php

	$to_mail_id = "xxxx@gmail.com";// to mail id
	$subject = "this is sample mail's subject";// mail subject
	$body = "this is sample mail's body";// mail body
	$mail_server = "mail.xxxx.xxxx";// mail server
	$mail_server_port = "587";// mail server port no
	$mail_server_user_name = "xxxx";// mail server username
	$mail_server_password = "xxxx";// mail server password
	
For more learning material please visit our website https://infooverflow.org