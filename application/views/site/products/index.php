            <?php 
            defined('BASEPATH') OR exit('No direct script access allowed');
            ?>
			<div class="secondary_page_wrapper sec">
				<div class="container">
					<ul class="breadcrumbs">
						<li><a href="<?php echo base_url('Home');?>">Home</a></li>
						<li>Products</li>
					</ul>
					<div class="row">
						<aside class="col-md-3 col-sm-4">
							<section class="section_offset animated visible fadeInDown" data-animation="fadeInDown">

                                <div class="tabs type_3 products">
							<ul class="theme_menu clearfix">
								<li><a href="<?php echo base_url('Products');?>">Refrigeration Parts</a></li>
								<li><a href="<?php echo base_url('Products');?>">Industrial Parts</a></li>
								<li><a href="<?php echo base_url('Products');?>">Refreigerator Parts</a></li>
								<li><a href="<?php echo base_url('Products');?>">Air Conditioners</a></li>
								<li><a href="<?php echo base_url('Products');?>">Commercial Air Conditioners</a></li>
								<li><a href="<?php echo base_url('Products');?>">Commercial Products</a></li>
                                    </ul>
                                </div>						
							</section>						
						</aside>
						<main class="col-md-9 col-sm-8">
							<section class="section_offset">
                              
									<div class="row">
                                        <div class="col-md-12">
                                 <div class="well well-sm list">
                        <strong>View Product(s) below</strong>
                        <div class="btn-group pull-right">
                            <a href="#" id="list" class="btn btn-default btn-sm"><i class="icon-th-list ">
                        </i>List View</a> <a href="#" id="grid" class="btn btn-default btn-sm">
                            <i class="icon-th"></i>Grid View</a>
        </div>
                                     </div>
    </div>
    </div>
     <div class="row">   
    <div id="products">
        <div class="list-group">
        <div class="item  col-xs-6 col-lg-4">
            <div class="thumbnail cp1">
                <img class="group list-group-image" src="<?php echo base_url();?>front_assets/images/compresor.png" alt="" />
                <div class="caption ">
                    <h4 class="group inner list-group-item-heading">
                        Product Name</h4>
                    <h3><a href="<?php echo base_url('Seller');?>" target="_blank">Vendor Name</a></h3>
                    <h5><span class="c_info_location"></span> Noida, India &#124; <span class="tooltip_container"><span class="tooltip top">101, Choudhary Market,<br> Mayur Vihar Phase-I</span>More..</span></h5>
                    <a href="" data-toggle="modal" data-target="#myModal">View Contact Detail</a>                    
                    <div class="row">                        
                        <div class="col-xs-12 col-md-12 center">
                            <a class="button_blue middle_btn" href="#" data-toggle="modal" data-target="#myModal1">Send Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Send Enquiry Modal content-->
             <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Supplier Name | Location</h4>
        </div>
        <div class="modal-body">
            <div class="row">
         <div class="col-md-6">
            <figure>
             <img src="<?php echo base_url();?>front_assets/images/capacitor.png" alt="..">
             </figure>
             <h4 class="text-center">Product Name</h4>
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Lets Get Started</h4>
                    </div>
                </div>
                    <form action="">
                        <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                    <textarea class="form-control" placeholder="I am interested in your products. Please contact me back on email/phone." rows="5" cols="5"></textarea>
                    </div>
                        </div>
                         </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Add Attachment
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            </label>
                                </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s1">
							<label for="checkbox_s1">Send this inquiry to other Suppliers of similar products</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
    
    <div class="input-group">
      <div class="input-group-addon">+91</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Mobile Number">
      
    </div>
  </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s2">
							<label for="checkbox_s2">I agree to abide by all the <a href="#" target="_blank">Terms and Conditions</a> of refrigrationhub.com</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Send Inquiry" class="button_blue middle_btn">
                            </div>
                        </div>
                    </form>
               
                </div>
                </div>
        </div>
        
      </div>
      
    </div>
  </div>
            <!--End Modal content-->
        </div>
         <div class="item  col-xs-6 col-lg-4">
            <div class="thumbnail cp1">
                <img class="group list-group-image" src="<?php echo base_url();?>front_assets/images/compresor.png" alt="" />
                <div class="caption ">
                    <h4 class="group inner list-group-item-heading">
                        Product Name</h4>
                    <h3><a href="<?php echo base_url('Seller');?>" target="_blank">Vendor Name</a></h3>
                    <h5><span class="c_info_location"></span> Noida, India &#124; <span class="tooltip_container"><span class="tooltip top">101, Choudhary Market,<br> Mayur Vihar Phase-I</span>More..</span></h5>
                    <a href="" data-toggle="modal" data-target="#myModal">View Contact Detail</a>                    
                    <div class="row">                        
                        <div class="col-xs-12 col-md-12 center">
                            <a class="button_blue middle_btn" href="#" data-toggle="modal" data-target="#myModal2">Send Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Send Enquiry Modal content-->
             <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Supplier Name | Location</h4>
        </div>
        <div class="modal-body">
            <div class="row">
         <div class="col-md-6">
            <figure>
             <img src="<?php echo base_url();?>front_assets/images/capacitor.png" alt="..">
             </figure>
             <h4 class="text-center">Product Name</h4>
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Lets Get Started</h4>
                    </div>
                </div>
                    <form action="">
                        <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                    <textarea class="form-control" placeholder="I am interested in your products. Please contact me back on email/phone." rows="5" cols="5"></textarea>
                    </div>
                        </div>
                         </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Add Attachment
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            </label>
                                </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s1">
							<label for="checkbox_s1">Send this inquiry to other Suppliers of similar products</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
    
    <div class="input-group">
      <div class="input-group-addon">+91</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Mobile Number">
      
    </div>
  </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s2">
							<label for="checkbox_s2">I agree to abide by all the <a href="#" target="_blank">Terms and Conditions</a> of refrigrationhub.com</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Send Inquiry" class="button_blue middle_btn">
                            </div>
                        </div>
                    </form>
               
                </div>
                </div>
        </div>
        
      </div>
      
    </div>
  </div>
            <!--End Modal content-->
        </div>
        <div class="item  col-xs-6 col-lg-4">
            <div class="thumbnail cp1">
                <img class="group list-group-image" src="<?php echo base_url();?>front_assets/images/compresor.png" alt="" />
                <div class="caption ">
                    <h4 class="group inner list-group-item-heading">
                        Product Name</h4>
                    <h3><a href="<?php echo base_url('Seller');?>" target="_blank">Vendor Name</a></h3>
                    <h5><span class="c_info_location"></span> Noida, India &#124; <span class="tooltip_container"><span class="tooltip top">101, Choudhary Market,<br> Mayur Vihar Phase-I</span>More..</span></h5>
                    <a href="" data-toggle="modal" data-target="#myModal">View Contact Detail</a>                    
                    <div class="row">                        
                        <div class="col-xs-12 col-md-12 center">
                            <a class="button_blue middle_btn" href="#" data-toggle="modal" data-target="#myModal3">Send Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Send Enquiry Modal content-->
             <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Supplier Name | Location</h4>
        </div>
        <div class="modal-body">
            <div class="row">
         <div class="col-md-6">
            <figure>
             <img src="<?php echo base_url();?>front_assets/images/capacitor.png" alt="..">
             </figure>
             <h4 class="text-center">Product Name</h4>
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Lets Get Started</h4>
                    </div>
                </div>
                    <form action="">
                        <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                    <textarea class="form-control" placeholder="I am interested in your products. Please contact me back on email/phone." rows="5" cols="5"></textarea>
                    </div>
                        </div>
                         </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Add Attachment
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            </label>
                                </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s1">
							<label for="checkbox_s1">Send this inquiry to other Suppliers of similar products</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
    
    <div class="input-group">
      <div class="input-group-addon">+91</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Mobile Number">
      
    </div>
  </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s2">
							<label for="checkbox_s2">I agree to abide by all the <a href="#" target="_blank">Terms and Conditions</a> of refrigrationhub.com</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Send Inquiry" class="button_blue middle_btn">
                            </div>
                        </div>
                    </form>
               
                </div>
                </div>
        </div>
        
      </div>
      
    </div>
  </div>
            <!--End Modal content-->
        </div>
        <div class="item  col-xs-6 col-lg-4">
            <div class="thumbnail cp1">
                <img class="group list-group-image" src="<?php echo base_url();?>front_assets/images/compresor.png" alt="" />
                <div class="caption ">
                    <h4 class="group inner list-group-item-heading">
                        Product Name</h4>
                    <h3><a href="" target="_blank">Vendor Name</a></h3>
                    <h5><span class="c_info_location"></span> Noida, India &#124; <span class="tooltip_container"><span class="tooltip top">101, Choudhary Market,<br> Mayur Vihar Phase-I</span>More..</span></h5>
                    <a href="" data-toggle="modal" data-target="#myModal">View Contact Detail</a>                    
                    <div class="row">                        
                        <div class="col-xs-12 col-md-12 center">
                            <a class="button_blue middle_btn" href="#" data-toggle="modal" data-target="#myModal4">Send Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Send Enquiry Modal content-->
             <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Supplier Name | Location</h4>
        </div>
        <div class="modal-body">
            <div class="row">
         <div class="col-md-6">
            <figure>
             <img src="<?php echo base_url();?>front_assets/images/capacitor.png" alt="..">
             </figure>
             <h4 class="text-center">Product Name</h4>
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Lets Get Started</h4>
                    </div>
                </div>
                    <form action="">
                        <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                    <textarea class="form-control" placeholder="I am interested in your products. Please contact me back on email/phone." rows="5" cols="5"></textarea>
                    </div>
                        </div>
                         </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Add Attachment
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            </label>
                                </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s1">
							<label for="checkbox_s1">Send this inquiry to other Suppliers of similar products</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
    
    <div class="input-group">
      <div class="input-group-addon">+91</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Mobile Number">
      
    </div>
  </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s2">
							<label for="checkbox_s2">I agree to abide by all the <a href="#" target="_blank">Terms and Conditions</a> of refrigrationhub.com</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Send Inquiry" class="button_blue middle_btn">
                            </div>
                        </div>
                    </form>
               
                </div>
                </div>
        </div>
        
      </div>
      
    </div>
  </div>
            <!--End Modal content-->
        </div>
         <div class="item  col-xs-6 col-lg-4">
            <div class="thumbnail cp1">
                <img class="group list-group-image" src="<?php echo base_url();?>front_assets/images/compresor.png" alt="" />
                <div class="caption ">
                    <h4 class="group inner list-group-item-heading">
                        Product Name</h4>
                    <h3><a href="<?php echo base_url('Seller');?>" target="_blank">Vendor Name</a></h3>
                    <h5><span class="c_info_location"></span> Noida, India &#124; <span class="tooltip_container"><span class="tooltip top">101, Choudhary Market,<br> Mayur Vihar Phase-I</span>More..</span></h5>
                    <a href="" data-toggle="modal" data-target="#myModal">View Contact Detail</a>                    
                    <div class="row">                        
                        <div class="col-xs-12 col-md-12 center">
                            <a class="button_blue middle_btn" href="#" data-toggle="modal" data-target="#myModal5">Send Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Send Enquiry Modal content-->
             <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Supplier Name | Location</h4>
        </div>
        <div class="modal-body">
            <div class="row">
         <div class="col-md-6">
            <figure>
             <img src="<?php echo base_url();?>front_assets/images/capacitor.png" alt="..">
             </figure>
             <h4 class="text-center">Product Name</h4>
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Lets Get Started</h4>
                    </div>
                </div>
                    <form action="">
                        <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                    <textarea class="form-control" placeholder="I am interested in your products. Please contact me back on email/phone." rows="5" cols="5"></textarea>
                    </div>
                        </div>
                         </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Add Attachment
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            </label>
                                </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s1">
							<label for="checkbox_s1">Send this inquiry to other Suppliers of similar products</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
    
    <div class="input-group">
      <div class="input-group-addon">+91</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Mobile Number">
      
    </div>
  </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s2">
							<label for="checkbox_s2">I agree to abide by all the <a href="#" target="_blank">Terms and Conditions</a> of refrigrationhub.com</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Send Inquiry" class="button_blue middle_btn">
                            </div>
                        </div>
                    </form>
               
                </div>
                </div>
        </div>
        
      </div>
      
    </div>
  </div>
            <!--End Modal content-->
        </div>
       <div class="item  col-xs-6 col-lg-4">
           <div class="thumbnail cp1">
                <img class="group list-group-image" src="<?php echo base_url();?>front_assets/images/compresor.png" alt="" />
                <div class="caption ">
                    <h4 class="group inner list-group-item-heading">
                        Product Name</h4>
                    <h3><a href="<?php echo base_url('Seller');?>" target="_blank">Vendor Name</a></h3>
                    <h5><span class="c_info_location"></span> Noida, India &#124; <span class="tooltip_container"><span class="tooltip top">101, Choudhary Market,<br> Mayur Vihar Phase-I</span>More..</span></h5>
                    <a href="" data-toggle="modal" data-target="#myModal">View Contact Detail</a>                    
                    <div class="row">                        
                        <div class="col-xs-12 col-md-12 center">
                            <a class="button_blue middle_btn" href="#" data-toggle="modal" data-target="#myModal6">Send Inquiry</a>
                        </div>
                    </div>
                </div>
            </div>
           <!-- Send Enquiry Modal content-->
             <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Supplier Name | Location</h4>
        </div>
        <div class="modal-body">
            <div class="row">
         <div class="col-md-6">
            <figure>
             <img src="<?php echo base_url();?>front_assets/images/capacitor.png" alt="..">
             </figure>
             <h4 class="text-center">Product Name</h4>
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Lets Get Started</h4>
                    </div>
                </div>
                    <form action="">
                        <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                    <textarea class="form-control" placeholder="I am interested in your products. Please contact me back on email/phone." rows="5" cols="5"></textarea>
                    </div>
                        </div>
                         </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Add Attachment
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            </label>
                                </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s1">
							<label for="checkbox_s1">Send this inquiry to other Suppliers of similar products</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
    
    <div class="input-group">
      <div class="input-group-addon">+91</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Mobile Number">
      
    </div>
  </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
				<input checked="" type="checkbox" name="" id="checkbox_s2">
							<label for="checkbox_s2">I agree to abide by all the <a href="#" target="_blank">Terms and Conditions</a> of refrigrationhub.com</label>
					</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Send Inquiry" class="button_blue middle_btn">
                            </div>
                        </div>
                    </form>
               
                </div>
                </div>
        </div>
        
      </div>
      
    </div>
  </div>
            <!--End Modal content-->
        </div>
    </div>
                                </div>
						</div>		
							</section>
						</main>

					</div><!--/ .row -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			
			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
            <!-- Modal for contact Detail-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">Please login to view Supplier Mobile Number</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="#">
                                    <div class="col-md-9 col-md-offset-3">
                                        <div class="form-group">
                                            <input type="radio" class="form-control" name="" id="radio_1">
                                            <label for="radio_1">I want to Sell</label>
                                            <input type="radio" name="" id="radio_2">
                                            <label for="radio_2">I want to Buy</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Name" class="form-control" id="" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">+91</div>
                                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Email-Id" class="form-control" id="" >
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="form_group">
                                            <input checked="" type="checkbox" name="" id="checkbox_1">
                                            <label for="checkbox_1">I agree to abide by all the Terms and Conditions of refrigrationhub.com</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-md-offset-3">
                                        <div class="form-group">
                                            <input type="submit" value="Verify Now" class="button_blue middle_btn">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- End Modal content-->
		