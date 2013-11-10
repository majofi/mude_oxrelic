<?php

class mude_oxrelic extends oxSuperCfg
{
  public static function logRequest( $sClass, $sFunction, $sType = "")
  {
    $sAppName = oxRegistry::getConfig()->getConfigParam('sMudeOxrelicAppName') . "(" . oxRegistry::getConfig()->getShopId() . ")";
    newrelic_set_appname($sAppName, oxRegistry::getConfig()->getConfigParam('sMudeOxrelicLicence'));
    newrelic_capture_params(true);
    $sTransactionName = "";
    if($sType){
      $sTransactionName = $sType . "/";
    }
    $sTransactionName .= "$sClass/$sFunction";
    newrelic_name_transaction($sTransactionName);   
  }
}