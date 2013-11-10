<?php
/**
 *    This file is part of Musterdenker oxrelic Module for OXID eShop.
 *
 *    Musterdenker Prepayment Module for OXID eShop is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    Musterdenker Prepayment Module for OXID eShop is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Musterdenker Prepayment Module for OXID eShop.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link http://www.musterdenker.de
 */

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