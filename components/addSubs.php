<style>
.add_sub_block {
    position: absolute;
    background-color: rgba(194, 194, 194, .3);
    top: 70px;
    bottom: 0;
    z-index: 2;
    left: 0;
    right: 0;
    display: none;
    justify-content: center;
    align-items: center;
}

.add_sub {
    width: 50%;
    border-radius: 4px;
    background-color: var(--primary);
    border: 1px solid var(--shadow);
}

.add_head {
    margin: 0;
    background-color: var(--tertiary);
    padding: 0 15px;
    border-bottom: 4px solid var(--secondary);
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.add_head>h2 {
    font-size: 1.25em;
    color: var(--primary);
}

.add_head>i {
    color: var(--primary);
    font-size: 1.65em;
    margin-right: 5px;
}

.add_head>i:hover {
    color: red;
}

.hidAdd {
    display: flex;
}

.form_add {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    padding: 40px;
    column-gap: 25px;
    row-gap: 5px;
}

.gr1 {
    grid-column: 1/13;
}

.gr2-1 {
    grid-column: 1/5;
}

.gr2-2 {
    grid-column: 5/9;
}

.gr2-3 {
    grid-column: 9/13;
}

.gr3-1 {
    grid-column: 1/7;
}

.gr3-2 {
    grid-column: 7/13;
}
.gr4-1{
    grid-column: 1/3;}
.gr4-2{
    grid-column: 3/5;}
.gr4-3{
    grid-column: 5/7;}
.gr4-4{
    grid-column: 7/9;}
.gr4-5{
    grid-column: 9/11;}
.gr4-6{
    grid-column: 11/13;}
.gr5-1{
    grid-column: 1/4;}
.gr5-2{
    grid-column: 4/7;}
.gr5-3{
    grid-column: 7/10;}
.gr5-4{
    grid-column: 10/13;}


.header1 {
    font-weight: 600;
    font-size: 1.15em;
    margin-bottom: 15px;
}

.form_add>form-control {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.form_add>form-control>label {
    font-size: 1.2em;
    width: 50%;
}

.form_add>form-control>input,
.form_add>form-control>select {
    width: 100%;
    background-color: var(--fontDark);
    filter: brightness(1.25);
    font-size: 1em;
    border-radius: 5px;
    border: none;
    text-transform: uppercase;
    padding: 12px;
    border: 2px solid var(--primary);
    outline: none;
}

.form_add>form-control>input:not(:placeholder-shown){
  border-color: var(--secondary);
}
.form_add>form-control>select:valid {
  border-color: var(--secondary);
}
.form_add>form-control>select>option {
    font-size: 1.1em;
    color: var(--primary);
    background-color: var(--fontDark);
}

.form_add>form-control>input:hover,
.form_add>form-control>input:focus {
    border: 2px solid var(--secondary);
}

.opt_brgy {
    display: none !important;
}

.bal,
.pil,
.ori {
    display: flex;
}
.form-c-btn{
display: flex;
align-items: center;
justify-content: end;
}
.addFormBtn{
    display:flex;
    align-items: center;
    font-size:1.25em;
    border-radius: 4px;
    font-weight: 600;
    margin-top: 25px;
    padding: 7px;
}
.addFormBtn > i{
    font-size:1.25em;
    margin-right:5px;
}
</style>
<section id="addBlock" class="add_sub_block">
    <div class="add_sub">
        <div class="add_head">
            <h2><i class="fas fa-plus"></i>Add Subscriber</h2>
            <i class="fas fa-times" onclick="hideAdd()"></i>
        </div>
        <form class="form_add" method="POST" id='formAdd' action="../include/addSubs.inc.php">
            <span class="header1 gr1">Personal Details</span>
            <form-control class="gr2-1">
                <!-- <label>Last Name:</label> -->
                <input type="text" placeholder="Last Name" name="lname" required/>
            </form-control>
            <form-control class="gr2-2">
                <!-- <label>First Name:</label> -->
                <input type="text" placeholder="First Name" name="fname" required/>
            </form-control>
            <form-control class="gr2-3">
                <!-- <label>Middle Name:</label> -->
                <input type="text" placeholder="Middle Name" name="mname" />
            </form-control>
            <form-control class="gr2-1">
                <select onchange="selectOpt(this)" name="mun" required>
                    <option value="" hidden>Select Municipality</option>
                    <option value="BALANGA CITY">Balanga City</option>
                    <option value="PILAR">Pilar</option>
                    <option value="ORION">Orion</option>
                </select>
            </form-control>
            <form-control class="gr2-2">
                <!-- <label>First Name:</label> -->
                <select id='brgySel' name="brgy" required>
                    <option value="" hidden>Select Barangay</option>
                    <?php
                    include '../data/address.php';
                    foreach ($brgy as $val) {
                        echo "<option id='" . $val[0] . "' class='opt_brgy' value='" . $val[1] . "'>" . $val[1] . "</option>";
                    }
                    ?>
                </select>
            </form-control>
            <form-control class="gr2-3">
                <!-- <label>Middle Name:</label> -->
                <input type="text" placeholder="Address" name="addr" required />
            </form-control>
            <form-control class="gr2-1">
                <input type="text" placeholder="Mobile Number" pattern="[0-9]{4}[-][0-9]{3}[-][0-9]{4}" name="cnum" required />
            </form-control>

            <span class="header1 gr1">Account Details</span>
            <form-control class="gr2-1">
                <select onchange="selectSubs(this)" name="subs" required>
                    <option value="" hidden>SELECT SUBSCRIBER TYPE</option>
                    <option value="new">NEW INSTALL</option>
                    <option value="cable">EXISTING CABLE ONLY</option>
                    <option value="docsis">EXISTING DOCSIS</option>
                </select>
            </form-control>
            <form-control class="gr2-2" >
                <select id="install_type" onchange="selectInst(this)" name="install" required>
                    <option value="" hidden>SELECT INSTALLATION TYPE</option>
                    <option style="display:none" id='newsub-1' value="catv">CABLE ONLY</option>
                    <option style="display:none" id='newsub-2' value="netonly">INTERNET ONLY</option>
                    <option style="display:none" id='newsub-3' value="catvnet">CABLE AND INTERNET</option>
                    <option style="display:none" id='existc-1' value="fbr_catv">UPGRADE TO FIBER CATV</option>
                    <option style="display:none" id='exist-1' value="fbr_catvnet">UPGRADE TO FIBER </option>
                    <option style="display:none" id='exist-2' value="fbr_netonly">UPGRADE TO FIBER DISCO-CABLE</option>
                </select>
            </form-control>
            <form-control class="gr2-3">
                <select id="plan_type" name="plan" required>
                    <option value="" hidden>SELECT PLAN/BUNDLE</option>
                    <option id='bundle-1' style="display:none" value="1300">PLAN 1 - 15Mbps FIBER + CATV</option>
                    <option id='bundle-2' style="display:none" value="1600">PLAN 2 - 30Mbps FIBER + CATV</option>
                    <option id='bundle-3' style="display:none" value="1750">PLAN 3 - 50Mbps FIBER + CATV</option>
                    <option id='bundle-4' style="display:none" value="1850">PLAN 4 - 100Mbps FIBER + CATV</option>
                    <option id='bundle-5' style="display:none" value="2600">PLAN 5 - 250Mbps FIBER + CATV</option>
                    <option id='bundle-6' style="display:none" value="3100">PLAN 6 - 350Mbps FIBER + CATV</option>
                    <option id='netOnly-1' style="display:none" value="1500">INTERNET ONLY - 100Mbps FIBER
                    </option>
                    <option id='netOnly-2' style="display:none" value="2250">INTERNET ONLY - 250Mbps FIBER
                    </option>
                    <option id='netOnly-3' style="display:none" value="2750">INTERNET ONLY - 350Mbps FIBER
                    </option>
                </select>
            </form-control>
            <form-control class="gr2-1">
                <input type="text" placeholder="LINEMAN" name="lineman" required/>
            </form-control>

            <span class="header1 gr1">Equipment Details</span>
            <form-control class="gr2-1">
                <input type="text" placeholder="IP ADDRESS" name="ip" id="ip" required disabled/>
            </form-control>
            <form-control class="gr2-2">
                <input type="text" placeholder="MAC ADDRESS" name="mac" id="mac" required disabled/>
            </form-control>
            <form-control class="gr2-3">
                <input type="text" placeholder="SERIAL NUMBER" name="serial" id="serial" required disabled/>
            </form-control>
            <form-control class="gr5-1">
                <input type="text" placeholder="BOX NUMBER" name="boxn" id="boxn" required disabled/>
            </form-control>
            <form-control class="gr5-2">
                <input type="text" placeholder="CARD NUMBER" name="cardn" id="cardn" required disabled/>
            </form-control>
            <form-control class="gr4-4">
                <select name="wr_type" required>
                    <option value="" hidden>SELECT WIRE</option>
                    <option value="fbr">FIBER WIRE</option>
                    <option value="coax">COAXIAL WIRE</option>
                </select>
            </form-control>
            <form-control class="gr4-5">
                <input type="number" placeholder="WIRE START" name="wrStr" required/>
            </form-control>
            <form-control class="gr4-6">
                <input type="number" placeholder="WIRE END" name="wrEnd" required/>
            </form-control>
            <form-control class="gr4-1">
                <input type="text" placeholder="NAP #" name="nap" id="nap" required disabled/>
            </form-control>
            <form-control class="gr4-2">
                <input type="number" placeholder="SLOT #" name="slot" id="slot" required disabled/>
            </form-control>
            <form-control class="gr4-3">
                <input type="text" placeholder="LAYER #" name="layer" id="layer" required disabled/>
            </form-control>
            <form-control class="gr4-4">
                <input type="text" placeholder="LCP #" name="lcp" id="lcp" required disabled/>
            </form-control>
            <form-control class="gr4-5">
                <input type="number" placeholder="OLT #" name="olt" id="olt" required disabled/>
            </form-control>
            <form-control class="gr4-6">
                <input type="text" placeholder="GPON #" name="gpon" id="gpon" required disabled/>
            </form-control>
            
            <form-control class="gr2-3 form-c-btn">
                <button type="submit" name="submit" class='_btn addFormBtn'><i class="fas fa-save"></i>Add Subscriber</button>
            </form-control>
        </form>
    </div>
</section>
<script>
function selectInst(el) {
    $('#plan_type').val('').trigger('change');
    if (el.value == 'catv' || el.value == 'fbr_catv') {
        $('#plan_type').prop('disabled', 'disabled');
        $('#boxn').prop('disabled', false);
        $('#cardn').prop('disabled', false);
        $('#ip').prop('disabled', 'disabled');
        $('#mac').prop('disabled', 'disabled');
        $('#serial').prop('disabled', 'disabled');
        $('#nap').prop('disabled', 'disabled');
        $('#slot').prop('disabled', 'disabled');
        $('#layer').prop('disabled', 'disabled');
        $('#lcp').prop('disabled', 'disabled');
        $('#olt').prop('disabled', 'disabled');
        $('#gpon').prop('disabled', 'disabled');
    $('#ip').val('').trigger('change');
    $('#mac').val('').trigger('change');
    $('#serial').val('').trigger('change');
    $('#nap').val('').trigger('change');
    $('#slot').val('').trigger('change');
    $('#layer').val('').trigger('change');
    $('#lcp').val('').trigger('change');
    $('#lcp').val('').trigger('change');
    $('#gpon').val('').trigger('change');

        document.getElementById("bundle-1").style.display = "none";
        document.getElementById("bundle-2").style.display = "none";
        document.getElementById("bundle-3").style.display = "none";
        document.getElementById("bundle-4").style.display = "none";
        document.getElementById("bundle-5").style.display = "none";
        document.getElementById("bundle-6").style.display = "none";
        document.getElementById("netOnly-1").style.display = "none";
        document.getElementById("netOnly-2").style.display = "none";
        document.getElementById("netOnly-3").style.display = "none";

    }
    if (el.value == 'netonly' || el.value == 'fbr_netonly') {
        $('#plan_type').prop('disabled', false);
        document.getElementById("bundle-1").style.display = "none";
        document.getElementById("bundle-2").style.display = "none";
        document.getElementById("bundle-3").style.display = "none";
        document.getElementById("bundle-4").style.display = "none";
        document.getElementById("bundle-5").style.display = "none";
        document.getElementById("bundle-6").style.display = "none";
        document.getElementById("netOnly-1").style.display = "flex";
        document.getElementById("netOnly-2").style.display = "flex";
        document.getElementById("netOnly-3").style.display = "flex";
        $('#boxn').prop('disabled', 'disabled');
        $('#cardn').prop('disabled', 'disabled');
        $('#ip').prop('disabled',  false);
        $('#mac').prop('disabled',  false);
        $('#serial').prop('disabled',  false);
        $('#nap').prop('disabled',  false);
        $('#slot').prop('disabled',  false);
        $('#layer').prop('disabled',  false);
        $('#lcp').prop('disabled',  false);
        $('#olt').prop('disabled',  false);
        $('#gpon').prop('disabled', false);
    $('#boxn').val('').trigger('change');
    $('#cardn').val('').trigger('change');
    }
    if (el.value == 'catvnet' || el.value == 'fbr_catvnet') {
        $('#plan_type').prop('disabled', false);
        document.getElementById("bundle-1").style.display = "flex";
        document.getElementById("bundle-2").style.display = "flex";
        document.getElementById("bundle-3").style.display = "flex";
        document.getElementById("bundle-4").style.display = "flex";
        document.getElementById("bundle-5").style.display = "flex";
        document.getElementById("bundle-6").style.display = "flex";
        document.getElementById("netOnly-1").style.display = "none";
        document.getElementById("netOnly-2").style.display = "none";
        document.getElementById("netOnly-3").style.display = "none";
        $('#boxn').prop('disabled', false);
        $('#cardn').prop('disabled', false);
        $('#ip').prop('disabled',  false);
        $('#mac').prop('disabled',  false);
        $('#serial').prop('disabled',  false);
        $('#nap').prop('disabled',  false);
        $('#slot').prop('disabled',  false);
        $('#layer').prop('disabled',  false);
        $('#lcp').prop('disabled',  false);
        $('#olt').prop('disabled',  false);
        $('#gpon').prop('disabled', false);
    }

}

function selectSubs(el) {
    $('#install_type').val('').trigger('change');

    if (el.value == 'new') {
        document.getElementById("newsub-1").style.display = "flex";
        document.getElementById("newsub-2").style.display = "flex";
        document.getElementById("newsub-3").style.display = "flex";
        document.getElementById("existc-1").style.display = "none";
        document.getElementById("exist-1").style.display = "none";
        document.getElementById("exist-2").style.display = "none";
    }
    if (el.value == 'cable') {
        document.getElementById("newsub-1").style.display = "none";
        document.getElementById("newsub-2").style.display = "none";
        document.getElementById("newsub-3").style.display = "none";
        document.getElementById("existc-1").style.display = "flex";
        document.getElementById("exist-1").style.display = "flex";
        document.getElementById("exist-2").style.display = "flex";
    }
    if (el.value == 'docsis') {
        document.getElementById("newsub-1").style.display = "none";
        document.getElementById("newsub-2").style.display = "none";
        document.getElementById("newsub-3").style.display = "none";
        document.getElementById("existc-1").style.display = "none";
        document.getElementById("exist-1").style.display = "flex";
        document.getElementById("exist-2").style.display = "flex";
    }
        $('#plan_type').prop('disabled', false);
        document.getElementById("bundle-1").style.display = "none";
        document.getElementById("bundle-2").style.display = "none";
        document.getElementById("bundle-3").style.display = "none";
        document.getElementById("bundle-4").style.display = "none";
        document.getElementById("bundle-5").style.display = "none";
        document.getElementById("bundle-6").style.display = "none";
        document.getElementById("netOnly-1").style.display = "none";
        document.getElementById("netOnly-2").style.display = "none";
        document.getElementById("netOnly-3").style.display = "none";
}

function selectOpt(el) {
    $('#brgySel').val('').trigger('change');
    if (el.value == 'BALANGA CITY') {
        for (var a = 1; a <= 25; a++) {
            document.getElementById("bal-" + a).classList.remove("opt_brgy");
        }
        for (var b = 1; b <= 23; b++) {
            document.getElementById("ori-" + b).classList.add("opt_brgy");
        }
        for (var c = 1; c <= 19; c++) {
            document.getElementById("ori-" + c).classList.add("opt_brgy");
        }
    }
    if (el.value == 'PILAR') {
        for (var a = 1; a <= 25; a++) {
            document.getElementById("bal-" + a).classList.add("opt_brgy");
        }
        for (var b = 1; b <= 23; b++) {
            document.getElementById("ori-" + b).classList.add("opt_brgy");
        }
        for (var c = 1; c <= 19; c++) {
            document.getElementById("pil-" + c).classList.remove("opt_brgy");
        }
    }
    if (el.value == 'ORION') {
        for (var a = 1; a <= 25; a++) {
            document.getElementById("bal-" + a).classList.add("opt_brgy");
        }
        for (var b = 1; b <= 23; b++) {
            document.getElementById("ori-" + b).classList.remove("opt_brgy");
        }
        for (var c = 1; c <= 19; c++) {
            document.getElementById("pil-" + c).classList.add("opt_brgy");
        }
    }
}

function hideAdd() {
    document.getElementById("addBlock").classList.remove("hidAdd");
    document.getElementById("formAdd").reset();

}

function showAdd() {
    document.getElementById("addBlock").classList.add("hidAdd");

}
</script>
