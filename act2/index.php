<?php
 /**
 * Example Application

 * @package Example-application
 */

require('../libs/Smarty.class.php');

$smarty = new Smarty;

$smarty -> left_delimiter = "{{";
$smarty -> right_delimiter = "}}";

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("title", "¿ªÐÄÍø  È¼ÉÕ°ÉÉ§Äê!");

if($_GET['type']==1){
	$smarty->assign("thisIndex", "1");
	$smarty->display('actioninfo.tpl');
}else if($_GET['type']==2){
	$smarty->assign("thisIndex", "2");
	$smarty->display('passion.tpl');
}else if($_GET['type']==3){
	$smarty->assign("thisIndex", "3");
	$smarty->display('judges.tpl');
}else if($_GET['type']==4){
	$smarty->assign("thisIndex", "4");
	$smarty->display('registration.tpl');
}else if($_GET['type']==5){
	$smarty->assign("thisIndex", "5");
	$smarty->display('submit.tpl');
}else if($_GET['type']==6){
	$smarty->assign("thisIndex", "2");
	$smarty->display('persona.tpl');
}else if($_GET['type']==0){
	$smarty->assign("thisIndex", "0");
	$smarty->display('index.tpl');
}else{
	header("Location:./index.php?type=0");
}
?>
