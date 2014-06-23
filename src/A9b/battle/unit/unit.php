<?php
namespace A9b\battle\unit;
/**
* none
*
* @version    1.00
* @create     2014/06/09 18:09:41
* @update     2014/06/09 18:09:41
* @author     seki
* @copyright  (C)2014 seki All Rights Reserved
* @since      none
* @package    none
* @link       none
* @see        none
* @deprecated none
 */
class unit extend battle
{

  const TYPE_HUMAN   = 0;
  const TYPE_MONSTER = 1;

  protected $hp;
  protected $power;
  protected $speed;

 /**
   * none
   * @create  2014/06/09 18:34:05
   * @update  2014/06/09 18:34:05
   * @author  seki
   * @access  public
   * @param   string $str string 
   * @return  mixed array() or false(boolean)
  */ 
  public function __construct()
  {
  }//function

}//class
