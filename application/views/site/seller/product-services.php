<style>
    .ma-10 {
        margin: 10px 0;
    }

    .main_navigation {
        padding-left: 300px;
    }

    .main_navigation li {
        margin: 0 10px;
    }

    .secabt {
        padding: 20px 0;
    }

    .secabt p {
        text-align: justify;
    }

    .bxcontact {
        background-image: linear-gradient(127deg, #ff4557 0%, #e66b77 91%);
        color: #fff;
        box-shadow: 0px 4px 10px 0px rgba(230, 230, 230, 1);
        padding: 10px 17px;
        border: 1px solid #f2f2f2;
        border-radius: 40px;
        border-bottom-right-radius: 4px;
    }

    .bxcontact h4, h5 {
        color: #fff
    }

    .bxcontact i {
        vertical-align: baseline;
        padding: 5px;
        color: #fff;
    }

    .fa-star {
        vertical-align: baseline;
        padding: 5px;
        color: #ff4557;
    }

    .bxp {
        width: 30%;
        float: left
    }

    .bxp1 {
        width: 70%;
        float: left
    }

    .contact-bottom .wrap.style-2 {
        width: 100%;
        position: initial;
        padding: 0;
        text-align: left;
        min-height: initial;
    }

    .contact-bottom .wrap.style-2 .info {
        margin-bottom: 40px;
        padding: 10px 0;
        display: inline-block;
        vertical-align: top;
        width: 45%;
        padding-left: 60px;
        position: relative;
    }

    .contact-bottom .wrap.style-2 .info > .icon-wrap {
        position: absolute;
        left: 0;
    }

    .contact-bottom .wrap.style-2 span.icon {
        border: 0;
    }

    .contact-bottom .wrap.style-2 .info + .info {
        margin-top: 0;
    }

    .contact-bottom .left {
    }

    .row.contact-bottom {
        display: flex;
        align-items: center;
    }

    .contact-bottom .wrap {
        padding: 30px;
        min-height: 450px;
    }

    .contact-bottom .wrap span.icon {
        width: 50px;
        height: 50px;
        border: 1px solid #fff;
        text-align: center;
        font-size: 28px;
        line-height: 1.8;
        padding: 7px;
        display: block;
        box-shadow: 0 20px 77px 0 rgba(0, 0, 0, .22), 0 5px 14px 0 rgba(0, 0, 0, .2);
    }

    .contact-bottom .wrap .info {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .contact-bottom .wrap .info .icon-wrap {
        padding-right: 15px;
    }

    .contact-bottom .wrap p {
        margin: 0;
    }

    .contact-bottom h5 {
        line-height: 1;
        color: #fff;
        margin-bottom: 5px;
    }

    .contact-bottom .wrap .info + .info {
        margin-top: 30px;
    }

    .contact-office hr {
        border-top: 1px solid #cecece;
        margin: 15px 0;
    }

    .radius-circle {
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
    }

    .pri-bg {
        background-color: #ff4557
    }

    .text-white {
        color: #fff;
    }

    .aside {
        border: 1px solid #e9e9e9;
        padding: 10px
    }

    .aside ul li {
        border-bottom: solid 1px #e9e9e9;
        padding: 8px 0;
    }

    .aside ul li:last-child {
        border-bottom: none;
    }
</style>
<div class="sec">
    <section class="secabt">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Refrigeration Hub</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Seller">Seller</a></li>
                    <li class="breadcrumb-item active">Product-service</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="aside">
                        <h3>Products &amp; Services</h3>
                        <ul>
                            <li><a href="product-service.html">COMPRESSORS</a></li>
                            <li><a href="product-service.html">REFRIGERATION GASES</a></li>
                            <li><a href="product-service.html">COPPER PIPE</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3 class="widget_title">Our Products</h3>
                    <div class="row">
                        <div class="item  col-xs-6 col-lg-4">
                            <div class="thumbnail cp1">
                                <img class="group list-group-image" src="<?php echo base_url(); ?>front_assets/images/compresor.png" alt=""/>
                                <div class="caption ">
                                    <h4 class="group inner list-group-item-heading">
                                        <a href="product-detail.html">Product Name</a>
                                    </h4>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 center">
                                            <a class="button_blue middle_btn" href="#" data-toggle="modal"
                                               data-target="#myModal1">Send Inquiry</a>
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
                                                        <img src="<?php echo base_url(); ?>front_assets/images/capacitor.png" alt="..">
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
                                                                    <textarea class="form-control"
                                                                              placeholder="I am interested in your products. Please contact me back on email/phone."
                                                                              rows="5" cols="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Add Attachment
                                                                        <input type="file" class="form-control-file"
                                                                               id="exampleInputFile"
                                                                               aria-describedby="fileHelp">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s1">
                                                                    <label for="checkbox_s1">Send this inquiry to other
                                                                        Suppliers of similar products</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Your E-mail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">+91</div>
                                                                        <input type="text" class="form-control"
                                                                               id="exampleInputAmount"
                                                                               placeholder="Mobile Number">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s2">
                                                                    <label for="checkbox_s2">I agree to abide by all the
                                                                        <a href="#" target="_blank">Terms and
                                                                            Conditions</a> of
                                                                        refrigrationhub.com</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" value="Send Inquiry"
                                                                       class="button_blue middle_btn">
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
                                <img class="group list-group-image" src="<?php echo base_url(); ?>front_assets/images/compresor.png" alt=""/>
                                <div class="caption ">
                                    <h4 class="group inner list-group-item-heading">
                                        <a href="product-detail.html">Product Name</a>
                                    </h4>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 center">
                                            <a class="button_blue middle_btn" href="#" data-toggle="modal"
                                               data-target="#myModal1">Send Inquiry</a>
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
                                                        <img src="<?php echo base_url(); ?>front_assets/images/capacitor.png" alt="..">
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
                                                                    <textarea class="form-control"
                                                                              placeholder="I am interested in your products. Please contact me back on email/phone."
                                                                              rows="5" cols="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Add Attachment
                                                                        <input type="file" class="form-control-file"
                                                                               id="exampleInputFile"
                                                                               aria-describedby="fileHelp">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s1">
                                                                    <label for="checkbox_s1">Send this inquiry to other
                                                                        Suppliers of similar products</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Your E-mail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">+91</div>
                                                                        <input type="text" class="form-control"
                                                                               id="exampleInputAmount"
                                                                               placeholder="Mobile Number">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s2">
                                                                    <label for="checkbox_s2">I agree to abide by all the
                                                                        <a href="#" target="_blank">Terms and
                                                                            Conditions</a> of
                                                                        refrigrationhub.com</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" value="Send Inquiry"
                                                                       class="button_blue middle_btn">
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
                                <img class="group list-group-image" src="<?php echo base_url(); ?>front_assets/images/compresor.png" alt=""/>
                                <div class="caption ">
                                    <h4 class="group inner list-group-item-heading">
                                        <a href="product-detail.html">Product Name</a>
                                    </h4>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 center">
                                            <a class="button_blue middle_btn" href="#" data-toggle="modal"
                                               data-target="#myModal1">Send Inquiry</a>
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
                                                        <img src="<?php echo base_url(); ?>front_assets/images/capacitor.png" alt="..">
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
                                                                    <textarea class="form-control"
                                                                              placeholder="I am interested in your products. Please contact me back on email/phone."
                                                                              rows="5" cols="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Add Attachment
                                                                        <input type="file" class="form-control-file"
                                                                               id="exampleInputFile"
                                                                               aria-describedby="fileHelp">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s1">
                                                                    <label for="checkbox_s1">Send this inquiry to other
                                                                        Suppliers of similar products</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Your E-mail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">+91</div>
                                                                        <input type="text" class="form-control"
                                                                               id="exampleInputAmount"
                                                                               placeholder="Mobile Number">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s2">
                                                                    <label for="checkbox_s2">I agree to abide by all the
                                                                        <a href="#" target="_blank">Terms and
                                                                            Conditions</a> of
                                                                        refrigrationhub.com</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" value="Send Inquiry"
                                                                       class="button_blue middle_btn">
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
                                <img class="group list-group-image" src="<?php echo base_url(); ?>front_assets/images/compresor.png" alt=""/>
                                <div class="caption ">
                                    <h4 class="group inner list-group-item-heading">
                                        <a href="product-detail.html">Product Name</a>
                                    </h4>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 center">
                                            <a class="button_blue middle_btn" href="#" data-toggle="modal"
                                               data-target="#myModal1">Send Inquiry</a>
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
                                                        <img src="<?php echo base_url(); ?>front_assets/images/capacitor.png" alt="..">
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
                                                                    <textarea class="form-control"
                                                                              placeholder="I am interested in your products. Please contact me back on email/phone."
                                                                              rows="5" cols="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Add Attachment
                                                                        <input type="file" class="form-control-file"
                                                                               id="exampleInputFile"
                                                                               aria-describedby="fileHelp">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s1">
                                                                    <label for="checkbox_s1">Send this inquiry to other
                                                                        Suppliers of similar products</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Your E-mail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">+91</div>
                                                                        <input type="text" class="form-control"
                                                                               id="exampleInputAmount"
                                                                               placeholder="Mobile Number">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input checked="" type="checkbox" name=""
                                                                           id="checkbox_s2">
                                                                    <label for="checkbox_s2">I agree to abide by all the
                                                                        <a href="#" target="_blank">Terms and
                                                                            Conditions</a> of
                                                                        refrigeration.com</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" value="Send Inquiry"
                                                                       class="button_blue middle_btn">
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
        </div>
    </section>

</div><!--/ .page_wrapper-->


<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

</div>

<!-- Modal for Receiver's Company -->
<div class="modal fade" id="myreceivercompany" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Inquiry Form</h4>
            </div>
            <div class="modal-body">
                <h3>Receiver's Company Name: <strong>BHAWANI ENTERPRISES</strong></h3>
                <p><i class="fa fa-star"></i>Tips on getting accurate quotes. Please include product name, order
                    quantity, usage, special requests if any in your inquiry.</p>
                <form action="" method="" name="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="5" cols="5" class="form-control"
                                          placeholder="Describe Your Requirements In Detail"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Add Attachment
                                    <input type="file" multiple class="form-control">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" placeholder="Enter your email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" placeholder="Enter your Mobile No." class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form_group">
                                <input checked="" type="checkbox" name="" id="checkbox_1">
                                <label for="checkbox_1">I agree to abide by all the Terms and Conditions of
                                    refrigrationhub.com</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="button" class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>
<!-- End Modal content-->
