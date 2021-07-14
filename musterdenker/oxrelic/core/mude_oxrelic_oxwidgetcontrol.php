<?php

use OxidEsales\EshopCommunity\Core\Registry;
use OxidEsales\Facts\Facts;

/**
 *    This file is part of Musterdenker oxrelic Module for OXID eShop.
 *
 *    Musterdenker oxrelic Module for OXID eShop is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    Musterdenker oxrelic Module for OXID eShop is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Musterdenker oxrelic Module for OXID eShop.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link http://www.musterdenker.de
 */
class mude_oxrelic_oxwidgetcontrol extends mude_oxrelic_oxwidgetcontrol_parent
{
  protected function _process( $sClass, $sFunction, $aParams = null, $aViewsChain = null )
  {
    if (function_exists('newrelic_name_transaction')) { 
      if ( Facts::getEdition() === "EE" && Registry::get( 'oxReverseProxyBackend' )->isActive() ) {
        mude_oxrelic::logRequest( $sClass, $sFunction, "WIDGET");
      } else {
        newrelic_add_custom_tracer("Widget::$sClass");
      }
    }
    return parent::_process( $sClass, $sFunction, $aParams, $aViewsChain);
  }
}