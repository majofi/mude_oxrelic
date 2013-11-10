<?php

class mude_oxrelic_oxwidgetcontrol extends mude_oxrelic_oxwidgetcontrol_parent
{
  protected function _process( $sClass, $sFunction, $aParams = null, $aViewsChain = null )
  {
    if (function_exists('newrelic_name_transaction')) { 
      if ( oxRegistry::getConfig()->getEdition() == "EE" && oxRegistry::get( 'oxReverseProxyBackend' )->isActive() ) {
        mude_oxrelic::logRequest( $sClass, $sFunction, "WIDGET");
      } else {
        newrelic_add_custom_tracer("Widget::$sClass");
      }
    }
    return parent::_process( $sClass, $sFunction, $aParams, $aViewsChain);
  }
}