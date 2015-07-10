<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Sticker
			</h3>
			<?php echo $this->element('breadcrumb');?>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
</div>
<div class="container-fluid">
  <!-- BEGIN PAGE HEADER-->
  <!-- BEGIN PAGE CONTENT-->
  <div class="row-fluid">
    <div class="span12">
      <!-- BEGIN SAMPLE FORM PORTLET-->
      <div class="portlet box blue tabbable">
        <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($material_id)?'Edit Sticker':'Add New Sticker'); ?></div>
         <div class="tools"><?php echo $this->Html->link('<i class="icon-circle-arrow-left"></i> Back', array('controller'=>'stickers', 'action'=>'create_sticker'), array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;'));?></div>
      </div>
        <div class="portlet-body form">
          <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
              <!-- BEGIN FORM-->		  
              <?php //echo $this->Form->create('ProductMaterial', array('url'=>array('controller'=>'products', 'action'=>'create_material'), array('class'=>'form-horizontal'))); ?> 
			  <?php //echo $this->Form->hidden('ProductMaterial.id');?>
			  <form class="form-horizontal">
                <div style="margin-top: 10px;" class="control-group">
                  <label class="control-label">Name:</label>
                  <div class="controls"> 
					<?php echo $this->Form->input('Sticker.name', array('type'=>'text', 'class'=>'m-wrap small', 'label'=>false, 'required'=>false,'div'=>false)); ?>
				 </div>				  
                    <span class="help-inline"></span> 
			  </div>
			 <div style="margin-top: 10px;" class="control-group">
                  <label class="control-label">Image:</label>
                  <div class="controls"> 
					<?php echo $this->Form->file('Sticker.image', array('type'=>'text', 'class'=>'m-wrap small', 'label'=>false, 'required'=>false,'div'=>false)); ?>
				 </div>				  
                    <span class="help-inline"></span> 
			  </div>
			<div style="margin-top: 10px;" class="control-group">
                  <label class="control-label">Size:</label>
                  <div  class="controls"> 
					<?php echo $this->Form->input('Sticker.width', array('type'=>'text', 'class'=>'m-wrap small',  'required'=>false,'div'=>false)); ?>
				 </div>	
					<div class="controls"> 
					<?php echo $this->Form->input('Sticker.height', array('type'=>'text', 'class'=>'m-wrap small', 'required'=>false,'div'=>false)); ?>
				 </div>					 
                    <span class="help-inline"></span> 
			  </div>
			
                </div>			
              <?php //echo $this->Form->end();?>
			  </form>
              <!-- END FORM-->
            </div>
          </div>
        </div>
      </div>
      <!-- END SAMPLE FORM PORTLET-->
    </div>
  </div>
  <!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
