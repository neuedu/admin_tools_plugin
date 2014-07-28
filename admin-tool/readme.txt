put admin-tool document folder under the /wp-content/plugin/


change the host to 'mvp.qa.epals.com'


in linux terminal, under the path '/wp-content/plugin/admin-tool/' type the code below:
curl -sS https://getcomposer.org/installer | php
after step above finish type the codes below:
php composer.phar install


all steps above finished, open the file admin-tool.php under the folder admin-tool.
delete the '//' before the code as below in function es_save_post:


es_add_course($para1, $title, $content);
es_add_assignment($para1, $title, $content);
es_add_activity($para1, $title, $content);


pls make sure that Elastic search server can be use perfectly.
