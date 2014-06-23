<?php
namespace A9b\Battle;
/**
 * none
 *
 * @version    1.00
 * @create     2014/06/09 18:14:27
 * @update     2014/06/09 18:14:36
 * @author     seki
 * @copyright  (C)2014 seki All Rights Reserved
 * @since      none
 * @package    none
 * @link       none
 * @see        none
 * @deprecated none
 */
try
{
define("DIR_ENTRY" ,dirname(__FILE__));
define("DS" ,DIRECTORY_SEPARATOR);

include(DIR_ENTRY . DS . 'autoloadManager.php'); 
$autoloadManager = new \AutoloadManager();

$autoloadManager->setSaveFile(DIR_ENTRY . DS . 'autoload.php');
$autoloadManager->addFolder(DIR_ENTRY. "hgoe");
$autoloadManager->register();

//include(dirname(__FILE__) . "./SplClassLoader.php");
//$classLoader = new SplClassLoader('A9b\Battle', dirname(dirname(dirname(__FILE__))));
//$classLoader->register();

$skill = new field();
echo "<pre>";
var_dump($skill);
exit;
}
catch (\Exception $e)
{
  var_dump($e);
}//try
