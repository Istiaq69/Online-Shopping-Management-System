<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Add Coupon</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Coupon</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h3 style="color: blue;">
            <?php
            $message = $this->session->userdata('message');
            if ($message) {
                echo $message;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="<?php echo base_url();?>Super_admin/save_coupon" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Coupon Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="textarea2" type="text" name='coupon_code' >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Coupon Type</label>
                        <div class="controls">
                            <select id="selectError3" name="coupon_type">
                                <option>Select Coupon Type</option>
                                <option value="1">Percentage</option>
                                <option value="2">Fixed</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Discount Amount</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="textarea2" type="text" name="discount_amount" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Minimum Order Label</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="textarea2" type="number" name="minimum_order_label" size="3">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save Coupon</button>
                            <button class="btn">Cancel</button>
                        </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->

