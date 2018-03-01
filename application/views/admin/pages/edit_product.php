<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Forms</a>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
      
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>Super_admin/update_product" enctype="multipart/form-data" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name </label>
                        <div class="controls">
                            <input type="text" name="product_name" value="<?php echo $product_info->product_name ;?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                            <input type="hidden" name="product_id" value="<?php echo $product_info->product_id ;?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                     <div class="control-group hidden-phone">
                        <label class="control-label">Category Name</label>
                        <div class="controls">
                            <select name="category_id">
                                <option>Select Category</option>
                                <?php
                                foreach($published_category as $v_category)
                                {
                                ?>
                                <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                <?php
                                }
                               ?>
                            </select>
                        </div>
                    </div>
                     <div class="control-group hidden-phone">
                        <label class="control-label">Manufacturer Name</label>
                        <div class="controls">
                            <select name="manufacturer_id">
                                <option>Select Manufacturer</option>
                                <?php
                                foreach($published_manufacturer as $v_manufacturer)
                                {
                                ?>
                                <option value="<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_short_description" id="textarea2" rows="2"><?php echo $product_info->product_short_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"><?php echo $product_info->product_short_description ;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price </label>
                        <div class="controls">
                            <input type="text" name="product_price" value="<?php echo $product_info->product_price ;?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">New Product Price </label>
                        <div class="controls">
                            <input type="text" name="new_product_price" value="<?php echo $product_info->new_product_price ;?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Quantity</label>
                        <div class="controls">
                            <input type="text" name="product_quantity" value="<?php echo $product_info->product_quantity ;?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typehead">Is Featured</label>
                        <div class="controls">
                            <input type="checkbox" name="is_featured" value="<?php echo $product_info->is_featured ;?>" class="span6 typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Product Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file" name="product_image" value="<?php echo base_url().$product_info->product_image ;?>" >
                        </div>
                    </div> 
<!--                    <div class="control-group hidden-phone">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>-->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
