<?php  $this->load->view('include/header');  ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Manage Navigation</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?php echo base_url()?>navigation/setNav" method="post">
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Navigation</label>
                                        <select name="navi" id="navi" class="form-control">
                                            <option value="">Select Navigation</option>
                                            <option <?php if($this->input->post('navi')=="1"){ echo "selected"; } ?> value="1">Top Menu</option>
                                            <option <?php if($this->input->post('navi')=="2"){ echo "selected"; } ?> value="2">Bottom Menu</option>                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box-footer">
                                        <button type="submit" name="select" id="submit"
                                            class="btn btn-primary">Select</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if(isset($_REQUEST['select'])){?>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-hover" id="tSortable">
                            <thead style="background-color:#212529; color:#ffff">
                                <tr>
                                    <th>Select Page</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 foreach($table_data as $rows_selectPage){
                                    $array_count=count($navigation_array_top);
                                    if(in_array($rows_selectPage['post_id'], $navigation_array_top)){

                                     $row_get_navigation =  $this->db->get_where('manage_page_navigation',
                                                    array('page_id' => $rows_selectPage['post_id'], 
                                                    'navigation' => $this->input->post('navi')))->row_array();
                                     
                                ?>
                                <tr>
                                    <td><input type="checkbox" <?php if (in_array($rows_selectPage['post_id'], $navigation_array_top)){?> checked <?php } ?>  id="check" name="check" value="<?php echo $rows_selectPage['post_id'];?> "> <?php echo $rows_selectPage['title'];?> [#<?php echo $rows_selectPage['post_id'];?>]
                                        <input type="number" class="form-control" name="position" id="position" value="<?php echo $row_get_navigation['position'];?>">
                                    </td>
                                </tr>
                                <?php } else{
                                        $title_array[]=$rows_selectPage['title'];
                                        $id_array[]=$rows_selectPage['post_id'];
                                    } ?>
                                <?php }?>
                                <?php foreach($id_array as $index=> $code){?>
                                <tr>
                                    <td><input type="checkbox" id="check" name="check" value="<?php echo $code;?>" > <?php echo $title_array[$index];?> [#<?php echo $code;?>]
                                    <input type="number" class="form-control" name="position" id="position"></td>
                                </tr>
								<?php } ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-success" id="apply" style="margin-left: 1%;margin-bottom: 2%;">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
</div>
<script>
$('document').ready(function(){   
    $("#apply").click(function(){
        var navi="<?php echo $this->input->post('navi');?>";
        var uri =  '<?php echo base_url("Navigation/updatePostion"); ?>';
        var searchIDs = [];
        $('input[name="check"]:checked').each(function(){
        searchIDs.push($(this).val());
        });

        var position = [];
        $('input[name="position"]').each(function(){
                position.push($(this).val());
        });

        $.get(uri+"?page_id="+searchIDs+"&position="+position+"&navigation="+navi,function(data){					
            if(data==1){
                alert("Navigation menu successfully updated..");
               
            }
        });
    });
});
</script>
<?php $this->load->view('include/footer'); ?>
