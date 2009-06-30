<?php
// $Header: /cvsroot/phpldapadmin/phpldapadmin/documentation.php,v 1.7 2004/12/17 15:21:15 uugdave Exp $
 

include './common.php';
include './header.php';

echo "<body>";

$view = isset( $_GET['view'] ) ? $_GET['view'] : false;
switch( $view ) {
	case 'credits':
		echo "<h3 class=\"title\">phpLDAPadmin Credits</h3>";
		echo "<pre>";
		echo "<small>";
		include 'doc/CREDITS';
		echo "</small>";
		echo "</pre>";
		echo "</body>";
		echo "</html>";
		exit;
		break;
	case 'changelog':
		echo "<h3 class=\"title\">phpLDAPadmin ChangeLog</h3>";
		echo "<pre>";
		echo "<small>";
		include 'doc/ChangeLog';
		echo "</small>";
		echo "</pre>";
		echo "</body>";
		echo "</html>";
		exit;
		break;
}

?>

<h3 class="title">phpLDAPadmin documentation</h3>
<h3 class="subtitle">Stuff you wish you already knew.</h3>

<h2 class="doc">Extending phpLDAPadmin</h2>

<h3 class="doc">Creation Templates</h3>
<p class="doc">TODO: Write me.</p>

<h3 class="doc">Modification Templates</h3>
<p class="doc">TODO: Write me.</p>


