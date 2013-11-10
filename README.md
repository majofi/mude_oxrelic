mude_newrelic
=============

A OXID eShop module that integrates New Relic Application Monitor.

New Relic (http://www.newrelic.com) is a great tool for application monitoring, especially the detailed web transaction analysis. But wihtout any knowledge of the underlying framework the insights per web transaction tend to only look like:

 * oxseo.php
 * index.php
 * ...

Giving the New Relic PHP Deamon some more data makes the web transaction overview much more useful.

This module makrs each transaction if it's from the shop frontend or an admin (you can also deactivate tracing of all admin actions in module settings) and seperates full page requests from it's widgets (in OXID Enterprise Edition each widget request is even listed separately as a transaction). 

## How to Install

Easy peasy: just copy the "musterdenker" folder into the OXID eShop "modules" directory. Afterwards activate the module in your OXID eShop Admin. Please give your app a name and enter the New Relic licence key in the "settings" tab.

## New Relic setup

Please be aware this module is A) no official New Relic module and B) does not save you from getting a New Relic account and setting up New Relic PHP Deamon (https://docs.newrelic.com/docs/php/new-relic-for-php) in your application. Beside the PHP deamon you should also think of the great New Relic Sysdeamon (https://docs.newrelic.com/docs/server/) and other plugins like MySql, Memcache, Varnish, etc ...

