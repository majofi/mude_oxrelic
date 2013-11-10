<?php

class mude_oxrelic_oxshopcontrol extends mude_oxrelic_oxshopcontrol_parent
{
  protected function _process( $sClass, $sFunction, $aParams = null, $aViewsChain = null )
  {
    if (function_exists('newrelic_name_transaction')) { 
      if(isAdmin()){
        $sType = "ADMIN";
      } else {
        $sType = "";
      }
      if(!(isAdmin && oxRegistry::getConfig()->getConfigParam('blMudeOxrelicIgnoreAdmin'))){
        mude_oxrelic::logRequest( $sClass, $sFunction, $sType);
      }
    }
    return parent::_process( $sClass, $sFunction, $aParams, $aViewsChain);
  }
}