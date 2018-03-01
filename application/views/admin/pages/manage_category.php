<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Manage Category</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h3 style="color: blue;">
                <?php
                    $message=$this->session->userdata('message');
                    if($message){
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                ?>
        </h3>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
<!--                        <th>Role</th>-->
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                        foreach ($all_category as $v_category)
                        {
                    ?>
                    <tr>
                        <td><?php echo $v_category->category_id; ?></td>
                        <td class="center"><?php echo $v_category->category_name; ?></td>
<!--                        <td class="center">Member</td>-->
                        <td class="center">
                            <?php 
                                if($v_category->publication_status == 1)
                                {
                            ?>
                            <span class="label label-success">Active</span>
                            <?php
                                }
                                else
                                {
                            ?>
                            <span class="label label-important">Inactive</span>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="center">
                            <?php 
                                if($v_category->publication_status==1)
                                {
                            ?>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Super_admin/unpublished_category/<?php echo $v_category->category_id;?>">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            <?php 
                                }
                                else{
                            ?>
                            <a class="btn btn-success" href="<?php echo base_url();?>Super_admin/published_category/<?php echo $v_category->category_id;?>">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                            <?php 
                                }
                            ?>
                            <a class="btn btn-info" href="<?php echo base_url();?>Super_admin/edit_category/<?php echo $v_category->category_id;?>">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Super_admin/delete_category/<?php echo $v_category->category_id; ?>">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
<!--                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>-->
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->