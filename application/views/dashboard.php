<?php $this->load->view('includes/header'); ?>
<?php
  if ($main_content) {

      $this->load->view($main_content);
  }
?>
<?php $this->load->view('includes/footer'); ?>
