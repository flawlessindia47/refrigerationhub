    <?php
/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 6/18/2018
 * Time: 1:04 PM
 */ ?>

<div class="secondary_page_wrapper sec">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li>Upload and Promote Products</li>
        </ul>
        <div class="row">
            <h2 class="text-center">Upload and Promote Products at NO COST!</h2>
        </div>

        <div class="row">
            <div class="col-md-4 text-center">
                <div class="infoblock type_1">
                    <span><i class="fa fa-camera spn"></i> </span>
                    <p>Post upto 50 products with photographs for free</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="infoblock type_1">
                    <span><i class="fa fa-edit spn"></i></span>
                    <p>Modify or delete anytime from My Refrigeration-Hub section.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="infoblock type_1">
                    <span><i class="fa fa-tv spn"></i></span>
                    <p>Service free for a year</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center pd"><h4>The Fields Marked (<span class="star-cond">*</span>) are Mandatory. Please
                    do not put html in form fields.</h4></div>
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
        <div class="row">
            <form action="<?php echo base_url(); ?>JoinFree/addProduct" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email <strong style="color:red;">*</strong></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="txtMail" name="txtMail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Choose Main Category <strong
                                style="color:red;">*</strong></label>
                    <div class="col-sm-10">

                        <select name="txtCategoryId" class="form-control" class="selectpicker show-menu-arrow"
                                onchange="getSubcat(this.value)">
                            <option value="Select">--Select Category--?</option>
                            <?php foreach ($ddlCategory as $catVal): ?>
                                <option value="<?php echo $catVal->cat_id; ?>"><?php echo $catVal->cat_name; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Choose Sub-Category<strong
                                style="color:red;">*</strong></label>
                    <div class="col-sm-10">
                        <div class="subCatList">
                            <select name="txtSubcategoryId" class="form-control">
                                <option value="Select">--Select-Sub-Category--?</option>
                                <?php foreach ($ddlSubCategory as $valSubCat): ?>
                                    <option value="<?php echo $valSubCat->cat_id; ?>"><?php echo $valSubCat->cat_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductName" class="col-sm-2 control-label">Product Name <strong
                                style="color:red;">*</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="txtProductName" placeholder="Product Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductCode" class="col-sm-2 control-label">Product Code <strong
                                style="color:red;"></strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="txtProductCode" placeholder="Product Code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Producd Brand" class="col-sm-2 control-label">Product Brand <strong
                                style="color:red;"></strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="txtProductBrand"
                               placeholder="Product Brand">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductDescription" class="col-sm-2 control-label">Product Description <strong
                                style="color:red;">*</strong></label>
                    <div class="col-sm-10">
                        <textarea rows="5" cols="5" onkeyup="textCounter(this,'counter',1500);" class="form-control"
                                  id=""
                                  name="txtProductDescription" placeholder="Product Description"></textarea>

                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductDescription" class="col-sm-2 control-label" style="">Remaining Characters<strong
                                style="color:red;"></strong></label>
                    <div class="col-sm-10">
                        <input disabled maxlength="2" size="2" value="1500" id="counter" style="">

                    </div>
                </div>


                <div class="form-group">
                    <label for="UploadPicture" class="col-sm-2 control-label">Upload Picture <strong
                                style="color:red;">*</strong></label>
                    <div class="col-sm-10">
                        <div style="display: inline;float: left;padding-right: 10px;">
                            <input name="userfile" type='file' onchange="readURL(this);" / >
                        </div>
                        <img id="blah" src="http://placehold.it/180" alt="your image" style="max-width: 180px;"/>
                    </div>
                </div>
                <!-------- Price and Quantity---Start --Here--->

                <div class="form-group">
                    <h2>1. Price and Quantity</h2>
                    <hr>
                </div>
                <div class="form-group">
                    <label for="minimumorder" class="col-sm-2 control-label">Minimum Order Quantity <strong
                                style="color:red;">*</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtMinimumOrderQuantity"
                               placeholder="Minimum Order Quantity">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Measures" class="col-sm-2 control-label">Unit of Measures</label>
                    <div class="col-sm-10">
                        <select class="" id="txtUnitofMeasure" name="txtUnitofMeasure" style="height:auto;">
                            <option value="">-- select --</option>
                           <?php foreach ($ddlUnitMeasure as $unitMeasure):

                               echo "<option value='$unitMeasure->um_id'>$unitMeasure->um_name</option>";

                             endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Price" class="col-sm-2 control-label">Price or Price Range <strong
                                style="color:red;">*</strong> </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Price" name="txtPriceRange">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtPriceRangeMin"
                               placeholder="Or Price Range Min  ">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtPriceRangeMax"
                               placeholder="Or Price Range Max ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select name="txtPriceUnit" class="form-control">
                            <option value="Select">Select Unit</option>
                            <option value="INR">INR</option>
                            <option value="Other">Other</option>
                        </select>

                    </div>
                </div>
                <!--****************Product Information****Start***Here**********-->
                <div class="form-group">
                    <h2>2. Product Specifications</h2>
                    <hr>
                </div>
                <div class="form-group">
                    <label for="FOB Port" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtProductType" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Material</label>
                    <div class="col-sm-10">
                        <select name="txtMaterial" class="form-control">
                            <option value="">--Select---?</option>
                           <?php foreach ($ddlMaterial as $materialval):
                           echo "<option value='$materialval->mst_material_id'>$materialval->m_name</option>";
                           endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Cooling/Heating" class="col-sm-2 control-label">Cooling/Heating</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtCoolingHeating" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Capacity</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtCapacity" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select name="txtCapacityUnit" class="form-control">
                            <option class="pink" value="">-- Select Unit --?</option>
                              <?php foreach ($ddlCapacity as $capval):
                              echo "<option value='$capVal->cu_id'>$capval->cu_name</option>";
                             endforeach;  ?>
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Power Source</label>
                    <div class="col-sm-10">
                        <select class="" id="txtPowersourceUnit" name="txtPowersource" style="height:auto;">
                            <option value="">-- select --</option>
                                <?php foreach($ddlPowerSource as $powerval):
                                echo "<option value='$powerval->psouce_id'>$powerval->ps_name</option>";
                                endforeach; ?>
                        </select>
                    </div>
                </div>
                <!----------As Discussed with Sunil Sir---Remove By----Ajay-------->
               <!-- <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Voltage</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtVoltage" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select name="txtVoltageUnit" id="txtVoltageUnit" width="25">
                            <option class="pink" value="">-- Select Unit --?</option>
                            <option class="pink" value="75">Siemens Volt (S )</option>
                            <option value="34" class="pink">Statampere (sA)</option>
                            <option value="46" class="pink">Teraampere (TA)</option>
                            <option class="pink" value="35">Volt/Ohm (v/ohm)</option>
                            <option value="49" class="pink">Biot ( Bi)</option>
                            <option class="pink" value="32">Ampere (amp)</option>
                            <option class="pink" value="47">Electromagnetic (emu)</option>
                            <option class="pink" value="76">Milliampere (mA)</option>
                            <option class="pink" value="48">Megaampere ( MA)</option>
                            <option class="pink" value="33">Microampere (μA)</option>
                            <option class="pink" value="164">Watt/Volt ( w/v)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Color" class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtColor" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Color" class="col-sm-2 control-label">Weight(Kg)</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtWeight" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select name="txtVoltage" id="txtVoltage" width="25">
                            <option class="pink" value="">-- Select Unit --?</option>
                            <option value="262" class="pink"> Kilograms (kg)</option>
                            <option value="265" class="pink">Milligram (mg)</option>
                            <option class="pink" value="263">Ounce (oz)</option>
                            <option value="264" class="pink">Drams (dr)</option>
                            <option value="266" class="pink">Grams (g)</option>
                        </select>
                    </div>
                </div>-->
               <!-- <div class="form-group">
                    <label for="Color" class="col-sm-2 control-label">Warranty</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtWarrantty" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Color" class="col-sm-2 control-label">Working Temperature</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtWorkingTemperatureUnit" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select name="txtVoltage" id="txtVoltage" width="25">
                            <option value="" class="pink">-- Select Unit --?</option>
                            <option value="25" class="pink">Fahrenheit (oF)</option>
                            <option class="pink" value="24">Celsius (oC)</option>
                            <option class="pink" value="283">Rankine</option>
                            <option class="pink" value="286">Reaumur (oRe)</option>
                            <option class="pink" value="287">Planck temperature (Θ)</option>
                            <option value="284" class="pink">Newton</option>
                            <option value="285" class="pink">Delisle</option>
                            <option class="pink" value="282">Kelvin (K)</option>
                        </select>
                    </div>
                </div>

                <!------Fan Speed ---->
              <!--div class="form-group">
                    <label for="Color" class="col-sm-2 control-label">Fan Speed</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtFanSpeed" class="form-control">
                    </div>
                </div>
                <!------Fan Speed ---->

                <!------Noise level---->
                <!--<div class="form-group">
                    <label for="Color" class="col-sm-2 control-label">Noise Level</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtNoiseLevel" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select name="txtNoiseLevelUnit" id="txtNoiseLevelUnit" width="25">
                            <option class="pink" value="">-- Select Unit --?</option>
                            <option value="336" class="pink">db</option>
                        </select>
                    </div>
                </div>-->

                <!------Noise level---->
                <!------Energy Efficiency Rating---->
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Energy Efficiency Rating</label>
                    <div class="col-sm-10">
                        <select name="txtEfficiencyRatingDDL" id="txtEfficiencyRatingDDL" width="25">
                            <option value="">-- select --</option>
                            <option value="✫"> ✫</option>
                            <option value="✫✫"> ✫✫</option>
                            <option value="✫✫✫"> ✫✫✫</option>
                            <option value="✫✫✫✫"> ✫✫✫✫</option>
                            <option value="✫✫✫✫✫"> ✫✫✫✫✫</option>
                        </select>
                    </div>
                </div>
                <!------Energy Efficiency Rating---->
                <!------Energy Efficiency Rating---->
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Remote Operated</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input class="form-check-input" type="radio" name="txtRemoteOperated" id="exampleRadios1"
                                   value="Yes" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                            <input class="form-check-input" type="radio" name="txtRemoteOperated" id="exampleRadios2"
                                   value="No">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <!------Energy Efficiency Rating---->
                <!------Energy Efficiency Rating---->

                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Power Consumption</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="text" name="txtPowerConsum" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <select name="txtPowerComUnit" id="txtPowerComUnit" width="25">
                                <option class="pink" value="">-- Select Unit --?</option>
                                <?php foreach($ddlPowerUnit as $poweUnit):
                                    echo "<option value='$poweUnit->punit_id'>$poweUnit->punit_name</option>";
                                endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!------Energy Efficiency Rating---->

                <!-----Running Current--->
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Running Current</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="text" name="txtRunningCurrent" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <select name="txtRunningCurrentUnit" id="" >
                                <option class="pink" value="">-- Select Unit --?</option>
                                <?php foreach($ddlPowerUnit as $poweUnit):
                                    echo "<option value='$poweUnit->punit_id'>$poweUnit->punit_name</option>";
                                endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!------Running Current--->
                <!-----Running Current--->
                <!--<div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Outdoor Fan Input</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="text" name="txtOutdoorInput" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <select name="txtOutdoorInputUnit" id="">
                                <option class="pink" value="">-- Select Unit --?</option>
                                <option value="190" class="pink">Kilowatt (kW)</option>
                                <option class="pink" value="192">Decibel-Watt (dBW)</option>
                                <option value="191" class="pink">Decibel-milliwatt (dBm)</option>
                                <option class="pink" value="189">Megawatt (MW)</option>
                                <option value="194" class="pink">Volt (V)</option>
                                <option class="pink" value="195">Ampere</option>
                                <option value="188" class="pink">Watt (W)</option>
                                <option class="pink" value="193">Volt-Ampere (VA)</option>
                                <option value="196" class="pink">Kilovolt-amp (kVA)</option>
                                <option value="197" class="pink">Volt-Ampere-Reactive (var)</option>
                            </select>
                        </div>
                    </div>
                </div>-->
                <!------Running Current--->
                <!------------------Dimension(L*W*H)------------>
               <!-- <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Outdoor Fan Output</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="text" name="txtOutdoorOutput" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <select name="txtOutdoorOutputUnit" id="">
                                <option class="pink" value="">-- Select Unit --?</option>
                                <option value="190" class="pink">Kilowatt (kW)</option>
                                <option class="pink" value="192">Decibel-Watt (dBW)</option>
                                <option value="191" class="pink">Decibel-milliwatt (dBm)</option>
                                <option class="pink" value="189">Megawatt (MW)</option>
                                <option value="194" class="pink">Volt (V)</option>
                                <option class="pink" value="195">Ampere</option>
                                <option value="188" class="pink">Watt (W)</option>
                                <option class="pink" value="193">Volt-Ampere (VA)</option>
                                <option value="196" class="pink">Kilovolt-amp (kVA)</option>
                                <option value="197" class="pink">Volt-Ampere-Reactive (var)</option>
                            </select>
                        </div>
                    </div>
                </div>-->
                <!------Dimension(L*W*H)--->
                <!---------------Mounting------------>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Mounting</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="text" name="txtMounting" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <select name="txtMountingUnit" id="">
                                <option value="">-- select --</option>
                                <option value="Window Mounted"> Window Mounted</option>
                                <option value="Wall Mounted"> Wall Mounted</option>
                                <option value="Floor Standing"> Floor Standing</option>
                                <option value="Ceiling Mount"> Ceiling Mount</option>
                                <option value="fan coil"> fan coil</option>
                                <option value="Other"> Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!------Mounting--->
                <!--------------Refrigerant----------->
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Refrigerant</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <input type="text" name="txtRefrigerant" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <select name="txtRefrigerantUnit" id="">
                                <option value="">-- select --</option>
                                <option value="R-134a"> R-134a</option>
                                <option value="R410A"> R410A</option>
                                <option value="R-22"> R-22</option>
                                <option value="R-407C"> R-407C</option>
                                <option value="other"> other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!------Refrigerant--->
                <!--------------Compressor----------->
                <div class="form-group">
                    <label for="Capacity" class="col-sm-2 control-label">Compressor</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor" class="form-check-input" id="Sanyo" value="Sanyo">
                                        <label class="form-check-label" for="Sanyo">Sanyo</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input"
                                               id="DAIKIN" value="DAIKIN">
                                        <label class="form-check-label" for="DAIKIN"> DAIKIN</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input"
                                               id="Copland" value="Copland">
                                        <label class="form-check-label" for="Copland"> Copland</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input"
                                               id="Danfoss"  value="Danfoss">
                                        <label class="form-check-label" for="Danfoss"> Danfoss</label>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" value="Hitachi" class="form-check-input"
                                               id="Hitachi">
                                        <label class="form-check-label" for="Hitachi"> Hitachi</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" value="GMCC" class="form-check-input" id="GMCC">
                                        <label class="form-check-label" for="GMCC"> GMCC</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input"
                                               id="Samsung" value="Samsung">
                                        <label class="form-check-label" for="Samsung">Samsung</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" value="Highly" class="form-check-input" id="Highly">
                                        <label class="form-check-label" for="Highly"> Highly</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input"
                                               id="Emerson" value="Emerson">
                                        <label class="form-check-label" for="Emerson"> Emerson</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input" id="LG" value="LG">
                                        <label class="form-check-label" for="LG"> LG</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input"
                                               id="Panasonic"  value="Panasonic">
                                        <label class="form-check-label" for="Panasonic">Panasonic</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input" id="Carrier" value="Carrier">
                                        <label class="form-check-label" for="Carrier"> Carrier</label>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input"
                                               id="KTN" value="KTN">
                                        <label class="form-check-label" for="KTN"> KTN</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtCompressor[]" class="form-check-input" id="Tecumshash" value="Tecumshash">
                                        <label class="form-check-label" for="Tecumshash"> Tecumshash</label>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!------Compressor--->
                    <!--------------Type Of Compressor----------->

                    <div class="form-group">
                        <label for="Capacity" class="col-sm-2 control-label">Type Of Compressor</label>
                        <div class="col-sm-10">
                            <div class="col-sm-10">
                                <select name="txtTypeCompresserUnit" id="">
                                    <option value="">-- select --</option>
                                    <option value="Rotary Compressors"> Rotary Compressors</option>
                                    <option value="Miniature Compressors"> Miniature Compressors</option>
                                    <option value="Horizontal Compressors"> Horizontal Compressors</option>
                                    <option value="Reciprocating Compressors"> Reciprocating Compressors</option>
                                    <option value="Hermetic scroll Compressors"> Hermetic scroll Compressors</option>
                                    <option value="Refrigeration Compressor"> Refrigeration Compressor</option>
                                    <option value="Other"> Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!------Type Of Compressor--->

                    <!--Trade Information-->
                    <div class="form-group">
                        <h2>3. Trade Information</h2>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="FOB Port" class="col-sm-2 control-label">FOB Port</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtFobPort" class="form-control" placeholder="FOB Port">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Payment Terms" class="col-sm-2 control-label">Payment Terms</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="checkbox" name="txtPaymentTerms[]" value="Cash Against Delivery (CAD)" class="form-check-input"
                                               id="CAD">
                                        <label class="form-check-label" for="CAD">Cash Against Delivery (CAD)</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" name="txtPaymentTerms[]" class="form-check-input"
                                               id="CID" value="Cash In Advance (CID)" >
                                        <label class="form-check-label" for="CID">Cash In Advance (CID)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtPaymentTerms[]" class="form-check-input"
                                               id="CA" value="Cash Advance">
                                        <label class="form-check-label" for="CA">Cash Advance</label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="checkbox" name="txtPaymentTerms[]" class="form-check-input"
                                               id="Cheque" value="Cheque">
                                        <label class="form-check-label" for="Cheque">Cheque</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtPaymentTerms[]" class="form-check-input"
                                               id="DA" value="Day After Acceptance">
                                        <label class="form-check-label" for="DA">Day After Acceptance</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtPaymentTerms[]" class="form-check-input"
                                               id="WS" value="Western Union">
                                        <label class="form-check-label" for="WS">Western Union</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="txtPaymentTerms[]" class="form-check-input"
                                               id="paypal" value="Paypal">
                                        <label class="form-check-label" for="paypal">Paypal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Supply Ability" class="col-sm-2 control-label">Supply Ability</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtSupplyAbility" class="form-control"
                                   placeholder="Supply Ability">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <select name="txtSupplyAbilityUnit" class="form-control">
                                <option value="">--Select Unit--</option>
                                <option value="1">Year</option>
                                <option value="2">Month</option>
                                <option value="3">Week</option>
                                <option value="4">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Delivery Time" class="col-sm-2 control-label">Delivery Time</label>
                        <div class="col-sm-10">
                            <input type="date" name="txtDeliveryTime" class="form-control" placeholder="Delivery Time">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="Delivery Time" class="col-sm-2 control-label">Sample Available</label>
                        <div class="col-sm-10">
                            <input class="form-check-input" type="radio" name="txtSampleAvailable" id="exampleRadios1"
                                   value="Yes" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                            <input class="form-check-input" type="radio" name="txtSampleAvailable" id="exampleRadios2"
                                   value="No">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>-->
                    <!--<div class="form-group">
                        <label for="Sample policy" class="col-sm-2 control-label">Sample policy</label>
                        <div class="col-sm-10">
                            <select name="txtSamplepolicy" class="form-control">
                                <option value="">-- select policy--</option>
                                <option value="Free samples are available">
                                    Free samples are available
                                </option>
                                <option value="Within a certain price range free samples are available">
                                    Within a certain price range free samples are available
                                </option>
                                <option value="Free samples available with shipping and taxes paid by the buyer">
                                    Free samples available with shipping and taxes paid by the buyer
                                </option>
                                <option value="Sample costs shipping and taxes has to be paid by the buyer">
                                    Sample costs shipping and taxes has to be paid by the buyer
                                </option>
                                <option value="If order is confirmed we will reimburse the sample cost">
                                    If order is confirmed we will reimburse the sample cost
                                </option>
                                <option value="Contact us for information regarding our sample policy">
                                    Contact us for information regarding our sample policy
                                </option>
                            </select>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label for="Packaging Details" class="col-sm-2 control-label">Packaging Details</label>
                        <div class="col-sm-10">
                        <textarea rows="5" cols="5" name="txtPackDetail" class="form-control" id=""
                                  placeholder="Packaging Details"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Main Domestic Market" class="col-sm-2 control-label">Main Domestic Market</label>
                        <div class="col-sm-10">
                            <select multiple class="form-control" name="txtDomesticMarket" id="exampleFormControlSelect2" name="txtMainMarket[]">
                                <option value="Delhi">Delhi</option>
                                <option value="Noida">Noida</option>
                                <option value="Faridabad">Faridabad</option>
                                <option value="Gaziabad">Gaziabad</option>
                                <option value="Agra">Agra</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Certifications" class="col-sm-2 control-label">Certifications</label>
                        <div class="col-sm-10">
                            <textarea rows="5" cols="5" class="form-control" name="txtCertifications" id=""
                                      placeholder="Certifications"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="button_blue middle_btn" value="Upload Product"></input>
                            <button type="submit" class="button_blue middle_btn">Skip</button>
                        </div>
                    </div>
            </form>
        </div>

    </div>
</div>
<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
<script>

    $('.singleSelectGrouped').fastselect();

</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    function textCounter(field, field2, maxlimit) {
        var countfield = document.getElementById(field2);
        if (field.value.length > maxlimit) {
            field.value = field.value.substring(0, maxlimit);
            return false;
        } else {
            countfield.value = maxlimit - field.value.length;
        }
    }
</script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    function getSubcat(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>JoinFree/getSubcategory/" + val,
            data: 'cat_id=' + val,
            success: function (data) {
                $(".subCatList").html(data);

            }
        });
    }
</script>
