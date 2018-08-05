<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="secondary_page_wrapper sec">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
            <li>RFQ Request For Quotation</li>
        </ul>
        <div class="row">
            <div class="col-md-12 text-center">
              

                <div class="col-md-8 col-md-offset-2">
                    
                    <div class="well">

                        <?php if ($this->session->flashdata('done')) { ?>
                            <div align="center" class="disMes alert alert-success">
                                <?php echo $this->session->flashdata('done') ?>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('error')) { ?>
                            <div align="center" class="disMes alert alert-danger">
                                <?php echo $this->session->flashdata('error') ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div><!--/ .row -->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->


<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
		