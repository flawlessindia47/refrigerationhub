<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!--/**
 * Created by $ajaykan47.
 * Company: Flawless India Pvt Ltd
 * Date: 24-05-2018
 * Time: 01:02 PM
 */-->
<section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex mar">
                <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                <div class="row ">                    
                <div class="col-md-12">
                    <h5 class="card-title dis1">Product Detail</h5>
                    <a style="float: right;" href="<?php echo base_url();?>admin/Manage/product"  class="btn btn-success">Back</a>
                    </div>
                </div>
                    </div>
                     <div class="card-header mailhead">
                  <div class="row">
                 <div class="col-md-4">
                      <strong style="background-color: #f1ab58;; padding-bottom: 1%; padding-left: 1%; padding-right: 1%; padding-top: 1%;">Category</strong>
                       <?php if(!empty($row->productImage)) { ?>
                                                           
                                                            <img src="<?php echo base_url(); ?>uploads/seller/productimage/<?php echo $showProd[0]->file_name; ?>" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php } else { ?>
                                                            
                                                            <img src="<?php echo base_url(); ?>uploads/empty/avator.png" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php } ?>
                     <h4><?php if(!empty($showProd)){ echo $showProd[0]->cat_name;}?></h4>
                      </div>
                      <div class="col-md-4">
                          <label style="background-color: #a7b552;; padding-bottom: 1%; padding-left: 1%; padding-right: 1%; padding-top: 1%;">Sub-Category</label>
                      <?php if(!empty($row->productImage)) { ?>
                                                            
                                                            <img src="<?php echo base_url(); ?>uploads/seller/productimage/<?php echo $showProd[0]->subcat_filename; ?>" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php } else { ?>
                                                           
                                                            <img src="<?php echo base_url(); ?>uploads/empty/avator.png" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php } ?>
                           <h4><?php if(!empty($showProd)){ echo $showProd[0]->subcat_name;}?></h4>
                      </div>
                      <div class="col-md-4">
                           <strong style="background-color: #ced5e2;; padding-bottom: 1%; padding-left: 1%; padding-right: 1%; padding-top: 1%;">Product</strong>
                     <?php if(!empty($row->productImage)) { ?>
                                                            
                                                            <img src="<?php echo base_url(); ?>uploads/seller/productimage/<?php echo $showProd[0]->productImage; ?>" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php } else { ?>
                                                           
                                                            <img src="<?php echo base_url(); ?>uploads/empty/avator.png" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php } ?>
                           <h4><?php if(!empty($showProd)){ echo $showProd[0]->product_name;}?></h4>
                      </div>
                  </div>
                        
              </div>
          <div class="card-body">
            <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Code</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->product_code; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Brand</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->product_brand; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Description</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <textarea readonly> <?php if(!empty($showProd)){ echo $showProd[0]->product_description; }?></textarea>  
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Order Quanity</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" <?php if(!empty($showProd)){ echo $showProd[0]->product_description; }?> readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div>
                         
                           <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Unit Measure</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->unit_measure; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Price</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->price; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Min Price</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                    <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->min_price; }?>" readonly> 
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Max Price</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->max_price; }?>" readonly> 
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                         <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Currency</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->price_unit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Type</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->ps_type; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Material</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                    <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->material; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Cooling/heating</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->coolingheating; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                         <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Capacity</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->capacity; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Capacity Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->capacityUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Power Source</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                    <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->powersource; }?>" readonly> 
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Voltage</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->voltage; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                         
                         <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Voltage Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->voltageUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Color</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->color; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Weight</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->weight; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Weight Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->weightUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                         
                          <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Warranty</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->warranty; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Working Temperature</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->working_temperature; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Fan Speed</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->fan_speed; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Noise Level</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->noiseLevel; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                          <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Noise Level Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->noiseLevelUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Energy Rating</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->engRating; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Remote Operated</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->remoteOperated; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Power Consumption</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->powerConsumption; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                          <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Power Consumption Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->powerConsumptionUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Running Current</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->running_current; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Running Current Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->running_currentUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Mounting</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->mounting; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                          <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Mounting Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->MountingUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Refrigerant</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->refrigerant; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Compressor</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->Compressor; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Fop Port</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->fop_port; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                          <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Payment Term</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->payment_term; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Supply Ability</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->supply_ability; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Supply Ability Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->supply_abilityUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Delivery Date</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->deliveryTime; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div><!--row end--->
                          <div class="row">
                         <div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Packaging Details</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                         <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->packagingDetails; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Main Domestic Market</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->mainDomesticMarket; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>
                             <!--<div class="col-md-6">
                             <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Weight</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                     <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->weight; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                                 <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label>Weight Unit</label>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                 <div class="form-group">
                                   <input type="text" class="form-control" value="<?php if(!empty($showProd)){ echo $showProd[0]->weightUnit; }?>" readonly>
                                     </div>
                                 </div>
                             </div>
                             </div>-->
                         </div><!--row end--->
                       
              </div>
            <!-- /.card-body -->
          
              
            </div>
            <!-- ./card -->
          </div>
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
           
            <!-- /.card -->
            
           
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->






