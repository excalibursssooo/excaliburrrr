<?php
// 3.2.5 - documentation-of added for languages requiring it
// for English is identical to documentation
// 3.2.6 - txtNoHosts
// 3.2.8 - phpNotExists - txtProjectsLink -	phpExtensions - phpVersionsUse

$langues = array(
	'langue' => 'English',
	'locale' => 'english',
	'titreHtml' => 'WAMPSERVER Homepage',
	'titreConf' => 'Server Configuration',
	'versa' => 'Apache Version:',
	'doca2.2' => 'httpd.apache.org/docs/2.2/en/',
	'doca2.4' => 'httpd.apache.org/docs/2.4/en/',
	'versp' => 'PHP Version:',
	'server' => 'Server Software:',
	'documentation' => 'Documentation',
	'documentation-of' => 'Documentation',
	'docp' => 'www.php.net/manual/en/',
	'versm' => 'MySQL Version:',
	'docm' => 'dev.mysql.com/doc/index.html',
	'versmaria' => 'MariaDB Version: ',
	'docmaria' => 'mariadb.com/kb/en/mariadb/documentation',
	'phpExt' => 'Loaded Extensions : ',
	'titrePage' => 'Tools',
	'txtProjet' => 'Your Projects',
	'txtNoProjet' => 'No projects yet.<br />To create a new one, just create a directory in \'www\'.',
	'txtProjects' => 'These are your folders in %s<br />To use them as an http link, you must declare them as VirtualHost',
	'txtProjectsLink' =>'However, you can use Right-Click, Wamp Settings, Warning: risky..., Allow links on projects...',
	'txtAlias' => 'Your Aliases',
	'txtNoAlias' => 'No Alias yet.<br />To create a new one, use the WAMPSERVER menu.',
	'txtVhost' => 'Your VirtualHost',
	'txtServerName' => 'The ServerName %s has syntax error in file %s',
	'txtDocRoot' => 'The ServerName %s use DocumentRoot %s reserved to localhost',
	'txtTLDdev' => 'The ServerName %s use TLD %s which is monopolized by web browsers. Use another TLD (.test for example)',
	'txtNoHosts' => 'The ServerName %s is not defined into hosts file.',
	'txtServerNameIp' => 'IP %s for Servername %s is not valid in file %s',
	'txtVhostNotClean' => 'The %s file has not been cleaned. There remain VirtualHost examples like: dummy-host.example.com',
	'txtNoVhost' => 'No VirtualHost yet. Add one for each project in the file: wamp/bin/apache/apache%s/conf/extra/httpd-vhosts.conf',
	'txtNoIncVhost' => 'Uncomment or add <i>Include conf/extra/httpd-vhosts.conf</i> in file wamp/bin/apache/apache%s/conf/httpd.conf',
	'txtNoVhostFile' => 'The file: %s does not exists',
	'txtNoPath' => 'The path %s for %s does not exist (File %s)',
	'txtNotWritable' => 'The file: %s is not writable',
	'txtNbNotEqual' => 'The number of %s does not match the number of %s in %s file',
	'txtAddVhost' => 'Add a Virtual Host',
	'txtPortNumber' => 'Port number for %s has not correct value or is not the same in file %s',
	'txtCorrected' => 'Some VirtualHosts errors can be corrected.',
	'forum' => 'Wampserver Forum',
	'forumLink' => 'http://forum.wampserver.com/list.php?2',
	'portUsed' => 'Port defined for Apache: ',
	'mysqlportUsed' => 'Port defined for MySQL: ',
	'mariaportUsed' => 'Port defined for MariaDB: ',
	'defaultDBMS' => 'default DBMS',
	'phpNotExists' => 'PHP version doesn\'t exist',
	'HelpMySQLMariaDB' => 'How to use MySQL and/or MariaDB?<br>What is a default DBMS?<br>How to change the default DBMS?<br>Go to the related help: Right-click Wampmanager icon -> Help -> MariaDB - MySQL',
	'nolocalhost' => 'It\'s a bad idea to add localhost in the url of launching projects. It is best to define VirtualHost in<br />wamp/bin/apache/apache%s/conf/extra/httpd-vhosts.conf<br />file and not add localhost in the url.',
	'phpExtensions' => 'Loaded PHP extensions',
	'phpVersionsUse' => 'Use of PHP versions',
	);
?>