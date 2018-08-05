<div class="join-now-gray-area join-now padding-30-b sec1">
    <!-- content area start -->
    <div class="join-now-bg">
        <h1 class="center">Free Consultation</h1>
        <h2 class="center">Learn how you can accelerate your Business with Refrigeration-hub Services
        </h2>
    </div>
    <!-- content area end -->


    <div class="join-now-container fix-row clearfix">
        <div class="container-small">
            <!-- progress part start -->
            <div class="col-md-6 col-md-offset-3 ">
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
                <form action="<?php echo base_url(); ?>JoinFree/setConsultation" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>set Up free Consultation..</label>

                        </div>
                        <div class="form-group col-md-6">
                            <input type="radio" id="under_13" name="txtConsultation" value="yes" checked> <label for="under_13" class="light">Yes</label>
                            <input type="radio" id="over_13"  name="txtConsultation" value="no"> <label for="over_13" class="light">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="txtpreferreddate">
                    </div>
                    <div class="form-group">
                        <select name="txtconsultationtime" id="">
                            <option value="">---Select Time---?</option>
                            <option value="08:00 am to 12: 00 pm">08:00 am to 12: 00 pm</option>
                            <option value="12:00 pm to 02: 00 pm">12:00 pm to 02: 00 pm</option>
                            <option value="02:00 pm to 04: 00 pm">02:00 pm to 04: 00 pm</option>
                            <option value="04:00 pm to 06: 00 pm">04:00 pm to 06: 00 pm</option>
                            <option value="06:00 pm to 08: 00 pm">06:00 pm to 08: 00 pm</option>
                            <option value="Any Time">Any Time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" name="btnSubmit" class="btn btn-danger middle_btn">
                        <input type="submit" value="Skip" name="btnSubmit" class="btn btn-primary middle_btn">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->


		