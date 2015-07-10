<!-- BEGIN SIDEBAR -->
<?php 
$dashboad = "";
$setting = "";
$product = "";
$material = "";
$sticker = "";
if($this->params['controller'] == 'dashboard'){
	$dashboad = 'active';
}elseif($this->params['controller'] == 'setting'){
	$setting = 'active';
}elseif($this->params['controller'] == 'material'){
	$material = 'active';
}elseif($this->params['controller'] == 'index'){
	$sticker = 'active';
}

?>
<div class="page-sidebar nav-collapse collapse">
  <!-- BEGIN SIDEBAR MENU -->
  <ul class="page-sidebar-menu">
    <li>
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
      <div class="sidebar-toggler hidden-phone"></div>
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li>
      <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
     &nbsp;
      <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class=" <?php echo $dashboad;?>"> <?php echo $this->Html->link('<i class="icon-home"></i> <span class="title">Dashboard</span> <span class="selected"></span>', array('controller'=>'dashboard', 'action'=>'index'), array('id'=>'DashBoard', 'escape'=>false));?></li>
    <li  class="<?php echo $setting;?>"> <?php echo $this->Html->link('<i class="icon-cog"></i> <span class="title">Site Setting</span>', array('controller'=>'setting', 'action'=>'index'), array('id'=>'Setting', 'escape'=>false));?> </li>
	<li  class="<?php echo $material;?>"> <?php echo $this->Html->link('<i class="icon-gift"></i> <span class="title">Product Material</span>', array('controller'=>'products', 'action'=>'material'), array('id'=>'Material', 'escape'=>false));?> </li>	
	<li  class="<?php echo $sticker;?>"> <?php echo $this->Html->link('<i class="icon-gift"></i> <span class="title">Sticker</span>', array('controller'=>'stickers', 'action'=>'index'), array('id'=>'Sticker', 'escape'=>false));?> </li>	
	<li  class="<?php //echo $material;?>"> <?php echo $this->Html->link('<i class="icon-gift"></i> <span class="title">Skins</span>', array('controller'=>'#', 'action'=>'#'), array('id'=>'Skins', 'escape'=>false));?> </li>	
	
</ul>
  <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
