<?php 
include_once('include/topbar.php');

?>

<div class="content-wrapper">

  <section class="content">

    <?php echo form_open_multipart($form_action); ?>
    <div class="panel panel-success">
      <div class="panel panel-heading">
        <i class="fa fa-users"></i> <?php echo $page_title; ?>
        <span class="pull-right"><a href="<?php echo base_url('admin/all_milestone_category/') ?>" class="btn btn-xs btn-munchkin"><i class="fa fa-reply" aria-hidden="true"></i>
        Back</a></span>
      
     </div>
     <?php if ($success = $this->session->flashdata('success')): ?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong><?php echo $success; ?></strong> </a>
      </div>
    <?php endif ?>

    <?php if ($error = $this->session->flashdata('error')): ?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong><?php echo $error; ?></strong> </a>
      </div>
    <?php endif ?>
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group"> 
            <label for=""> Name </label>
            <?php echo form_input(array('class' => "form-control",'name' =>"name","placeholder"=>"Name","value" =>set_value('name',@$name))); ?>
          </div>
          <span><?php echo form_error('name'); ?></span>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
           <label for="">Sort Order </label>
           <?php echo form_input(array('type'=>"number",'class' => "form-control",'name' =>"sort_order","min"=>1,"placeholder"=>"Sort Order","value" =>set_value('sort_order',@$sort_order))); ?>
         </div>
         <span><?php echo form_error('sort_order'); ?></span>
       </div>
       <div class="col-sm-6">
								<div class="form-group">
									<label for=""> Image  </label>
                                    <?php if (@$img): ?>
                                        <img src="<?php echo base_url($img); ?>" height=80 width=250 >
                                        <br>
                                        <?php endif ?>
							            <input class="form-control " name="img" type="file" >   
                                </div>
							</div>
     </div>
   </div>
   <div class="panel-footer">
    <input type="submit" value="Submit" name="form_submit" class="btn btn-munchkin" />
  </div>
</div>
</form>
</section>
<!-- /.content -->
</div>

<?php 
	//include footer page
include_once('include/footer.php');
?>