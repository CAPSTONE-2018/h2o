# h2o-refactor
Capstone Refactor

To install, run in parent directory of public html (ie /var/www):
```
git clone -b refactor https://github.com/wCapstone-Fall-2017/h2o.git .

```

html/ is the public files folder.  Make sure that Apache or nginx uses the html/ folder for the root web directory.  In my example, this would be the /var/www/html directory.

```
<VirtualHost *:80>
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/html
</VirtualHost>
```
