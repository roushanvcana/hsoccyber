<?php  error_reporting(0); // for hide of error for update value 
$this->load->view('include/header'); 
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Pages </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>Dashboard">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>Page_controller/index">View Page
        </a><br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Manage Contact</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php 
                            if(!empty($getValue['id'])){
                                $fcon = "Page_controller/page_update";
                            }else{
                                $fcon = "Page_controller/page_submit";
                            }
                        ?>
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" action="<?php echo base_url(). $fcon;?>" ?>
                        <input type="hidden" name="hid" value="<?= $getValue['id']; ?>">

                            <div class="row">
                                <div class="form-group col-md-4 col-lg-4 ">
                                    <label for="name">Page Title</label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="Enter Page Title" value="<?= $getValue['title']; ?>">
                                    <?php echo form_error('title'); ?>
                                </div>                              
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label>Parent Page</label>
                                        <select id="parent_page" class="form-control" name="parent_page" >
                                            <option value="0">Parent</option>                                               
                                            <?php 
                                               $query =  $this->db->query("select id,title,post_id from manage_page 
                                                                    where parent_page=0 and post_type='page' and cstatus=1")
                                                                    ->result_array();
                                                foreach( $query as $row_getParentPage){                   
                                            ?>
                                            	<option value="<?php echo $row_getParentPage['post_id'];?>" 
                                                <?php if($getValue['parent_page']==$row_getParentPage['post_id']){echo "selected";}?>>
                                                <?php echo $row_getParentPage['title'];?></option>
                                                <?php 	
                                                //child pages	
                                                $childquery =  $this->db->query("select title,id,post_id from manage_page
                                                where parent_page='".$row_getParentPage['post_id']."' and cstatus='1' order by position")
                                                ->result_array();
                                                foreach($childquery as $row_getChild){
                                                ?>  
                                                <option value="<?php echo $row_getChild['post_id'];?>" <?php if($getValue['parent_page']==$row_getChild['post_id'])
                                                {echo "selected";}?>>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_getChild['title'];?></option>
                                            <?php }} ?>
                                        </select>
                                    </div>
                             
                                <div class="form-group col-md-4 col-lg-4 ">
                                    <label for="name">Page Url</label>
                                    <input type="text" id="page_url" class="form-control" name="page_url" placeholder="Page Url" value="<?= $getValue['page_url']; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Page Description</label>
                                    <textarea id="summernote" name="long_description"><?= $getValue['long_description']; ?></textarea>
                                </div>
                                <div class="form-group col-md-12 col-lg-12 ">
                                    <label for="name">Short Description</label>
                                    <textarea name="short_description" id="short_description" cols="5" rows="5" class="form-control" placeholder="Short Description"><?= $getValue['short_description']; ?></textarea>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 ">
                                    <label for="name">Banner Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="col-md-4 col-lg-4 form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="cstatus" id="cstatus">
                                        <?php foreach(status() as $key => $value){?>
                                        <option <?php if($getValue['cstatus'] == $key){?> selected <?php }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>                                       
                                        <?php }?>
                                    </select>
                                </div>
                                <input type="hidden" name="userID" value="<?php echo $getValue['id'];?>">
                               <div class="form-group col-md-4 col-lg-4">
                                   <?php  if(isset($getValue['cstatus'])){?>
                                    <input type="submit" value="Update" class="btn btn-primary" name="submit" style="margin-top:30px">
                                    <?php  }else{ ?>
                                         <input type="submit" value="Submit" class="btn btn-primary" name="submit" style="margin-top:30px">   
                                    <?php }?>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('include/footer'); ?>
<script>
    $(document).ready(function(){
        $("#title").change(function(){
            var title=$("#title").val();				
            var result = title.toLowerCase().replace(/ +/g,'-').replace(/[0-9]/g,'').replace(/[^a-z0-9-_]/g,'').trim();			
            $("#page_url").val(result);
		});	
    });
</script>