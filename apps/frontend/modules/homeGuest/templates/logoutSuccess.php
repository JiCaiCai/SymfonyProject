<? use_helper('tncPartial', 'FrontendIframeLogin'); ?>
<? include_locked_component('home', 'text', array('logged_in'=>2)); ?>
<?= include_partial('logout_page'); ?>
<?= createLogoutIframe(); ?>
