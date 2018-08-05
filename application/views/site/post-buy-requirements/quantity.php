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
                <h3 style="color: #8fa68f;">Thank You ! Your requirements have been posted successfully. We shall get
                    back to you shortly.</h3>
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
                <div class="rfq col-md-6 col-md-offset-3">
                    Give More Details Get Relevant Quotes Suppliers Are More Responsive Get Fast Reply
                    <div class="well">
                        <form action="<?php echo base_url('PostBuyRequirements/addQuantity'); ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="txtProductQuanity" class="form-control"
                                               placeholder="Quantity">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="units" id="units"
                                                class=""
                                                tabindex="-1" title="">
                                            <option value="">Quantity Unit</option>
                                            <option value="Kilogram">Kilogram</option>
                                            <option value="Nos">Nos</option>
                                            <option value="Pieces">Pieces</option>
                                            <option value="Tons">Tons</option>
                                            <option value="Units">Units</option>
                                            <option value="20' Container">20' Container</option>
                                            <option value="40' Container">40' Container</option>
                                            <option value="Bags">Bags</option>
                                            <option value="Bag">Bag</option>
                                            <option value="Barrel">Barrel</option>
                                            <option value="Barrels">Barrels</option>
                                            <option value="Bottles">Bottles</option>
                                            <option value="Boxes">Boxes</option>
                                            <option value="Bushel">Bushel</option>
                                            <option value="Bushels">Bushels</option>
                                            <option value="Cartons">Cartons</option>
                                            <option value="Dozens">Dozens</option>
                                            <option value="Foot">Foot</option>
                                            <option value="Gallon">Gallon</option>
                                            <option value="Grams">Grams</option>
                                            <option value="Hectare">Hectare</option>
                                            <option value="Kilogram">Kilogram</option>
                                            <option value="Kilometer">Kilometer</option>
                                            <option value="Kilowatt">Kilowatt</option>
                                            <option value="Litre">Litre</option>
                                            <option value="Litres">Litres</option>
                                            <option value="Long Ton">Long Ton</option>
                                            <option value="Meter">Meter</option>
                                            <option value="Metric Ton">Metric Ton</option>
                                            <option value="Metric Tons">Metric Tons</option>
                                            <option value="Ounce">Ounce</option>
                                            <option value="Packets">Packets</option>
                                            <option value="Packs">Packs</option>
                                            <option value="Pair">Pair</option>
                                            <option value="Pairs">Pairs</option>
                                            <option value="Piece">Piece</option>
                                            <option value="Pieces">Pieces</option>
                                            <option value="Pound">Pound</option>
                                            <option value="Reams">Reams</option>
                                            <option value="Rolls">Rolls</option>
                                            <option value="Sets">Sets</option>
                                            <option value="Sheets">Sheets</option>
                                            <option value="Short Ton">Short Ton</option>
                                            <option value="Square Feet">Square Feet</option>
                                            <option value="Square Meters">Square Meters</option>
                                            <option value="Watt">Watt</option>
                                        </select>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""> Approximate Order Value</label>
                                <select name="txtordervalueinr" id="txtordervalueinr" class="form-control"
                                        aria-invalid="false">
                                    <option value="">Select Your Option</option>
                                    <option value="5000|10000">5000 to 10000</option>
                                    <option value="10001|20000">10001 to 20000</option>
                                    <option value="20001|50000">20001 to 50000</option>
                                    <option value="50001|100000">Upto 1 Lakh</option>
                                    <option value="100001|500000">Upto 5 Lakhs</option>
                                    <option value="500001|1000000">Upto 10 Lakhs</option>
                                    <option value="1000001|2000000">Upto 20 Lakhs</option>
                                    <option value="2000001|5000000">Upto 50 Lakhs</option>
                                    <option value="5000001|10000000">Upto 1 Crore</option>
                                    <option value="10000001">More than 1 Crore</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="txtPrefsupplocation">
                                    <option value="">Preferred Suppliers Location</option>
                                    <option value="Local">Local</option>
                                    <option value="Anywhere in India">Anywhere in India</option>
                                </select>
                            </div>

                            <div class="from-group">
                                <?php
                                // print_r($ddlUrgency); die;
                                ?>
                                <select name="txtUrgency">
                                    <option value="">Requirement Urgency</option>
                                    <?php
                                    foreach ($ddlUrgency as $rowFrequency):?>
                                        <option value="<?php echo $rowFrequency->frequency_name; ?>"><?php echo $rowFrequency->frequency_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="from-group">

                                <select name="txtFrequency">
                                        <option value="">---Requirement Frequency---</option>
                                        <option value="One Time">One Time</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Quarterly">Quarterly</option>
                                        <option value="Annually">Annually</option>

                                </select>
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-warning">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div><!--/ .row -->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->


<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
		