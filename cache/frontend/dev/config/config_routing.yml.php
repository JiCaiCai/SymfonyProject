<?php
// auto-generated by sfRoutingConfigHandler
// date: 2013/05/14 16:49:59
return array(
'homeGuest' => new sfRoute('/homeGuest/index', array (
  'module' => 'homeGuest',
  'action' => 'index',
), array (
), array (
)),
'action_to_template' => new sfRoute('/homeGuest/actiontotem', array (
  'module' => 'homeGuest',
  'action' => 'actiontotem',
), array (
), array (
)),
'homepage' => new sfRoute('/', array (
  'module' => 'homeGuest',
  'action' => 'index',
), array (
), array (
)),
'default_index' => new sfRoute('/:module', array (
  'action' => 'index',
), array (
), array (
)),
'default' => new sfRoute('/:module/:action/*', array (
), array (
), array (
)),
'parameter_default_index' => new sfRoute('/:module/*', array (
  'action' => 'index',
), array (
), array (
)),
);
