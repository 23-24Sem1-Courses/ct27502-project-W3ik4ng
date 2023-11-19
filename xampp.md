

<VirtualHost *:80>	
	DocumentRoot "C:/xampp/htdocs" 
	ServerName localhost
</VirtualHost>

<VirtualHost *:80>	
	DocumentRoot "D:/1. MON HOC/CONG NGHE WEB/phong/thuchanh/code/ct27502-project/public"
	ServerName ct275-project.localhost
	
	# Set access permission 
	<Directory "D:/1. MON HOC/CONG NGHE WEB/phong/thuchanh/code/ct27502-project/public"> 
		Options Indexes FollowSymLinks Includes ExecCGI
		AllowOverride All
		Require all granted

		RewriteEngine On
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule . index.php [L]
	</Directory>
</VirtualHost>