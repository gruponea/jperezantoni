<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
if ($this->error->getcode() == '404') {
  $app->redirect($this->baseurl.'/paginanoencontrada');
}
?>