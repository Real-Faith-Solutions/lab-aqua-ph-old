var rootURL = 'http://13.215.13.194/lims/public/api/v1/';
// var rootURL = 'http://127.0.0.1:8000/api/v1/';

// jQuery.ajaxSetup({
//     async: false
// });

// const cors = require('cors');
// const corsOptions ={
//     origin:'*',
//     credentials:true,            //access-control-allow-credentials:true
//     optionSuccessStatus:200
// }
// app.use(cors(corsOptions));


// hide and show others
function marketsegment(val) {

    if (val === "others")
        document.getElementById('market_segment_others').style.display = 'block';

    else
        document.getElementById('market_segment_others').style.display = 'none';
}

// lab acceptance remarks hide and show
function labacceptanceremarks(val) {

    if (val === "Rejected") {
        document.getElementById('lab_acceptance_final_remarks').style.display = "block";
    }

    else {
        document.getElementById('lab_acceptance_final_remarks').style.display = "none";
    }
}

var ALERT_TITLE = "Error!";
var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
	window.alert = function(txt) {
		createCustomAlert(txt);
	}
}

function createCustomAlert(txt) {
	d = document;

	if(d.getElementById("modalContainer")) return;

	mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
	mObj.id = "modalContainer";
	mObj.style.height = d.documentElement.scrollHeight + "px";
	
	alertObj = mObj.appendChild(d.createElement("div"));
	alertObj.id = "alertBox";
	if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
	alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
	alertObj.style.visiblity="visible";

	h1 = alertObj.appendChild(d.createElement("h1"));
	h1.appendChild(d.createTextNode(ALERT_TITLE));

	msg = alertObj.appendChild(d.createElement("p"));
	//msg.appendChild(d.createTextNode(txt));
	msg.innerHTML = txt;

	btn = alertObj.appendChild(d.createElement("a"));
	btn.id = "closeBtn";
	btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
	btn.href = "#";
	btn.focus();
	btn.onclick = function() { removeCustomAlert();return false; }

	alertObj.style.display = "block";
	
}

function removeCustomAlert() {
	document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}

// COLLECTION POINT
function checkingBox() {
if ($("input[id='Faucet']").is(':checked') & $("input[id='Pump']").is(':checked') || $("input[id='CPOthers']").is(':checked')) {
    alert("Please Choose Only One Collection Point");
  }}

function checkingBox1() {
    if ($("input[id='ACP']").is(':checked') & $("input[id='addressCPOthers1']").is(':checked')) {
        alert("Please Choose Only One Address Collection Point");
    }}

function collectionPointOthers(checkBoxID, componentID) {
    if ($(checkBoxID).is(":checked")) 
        $('#collection_point_others').show();
        // $('#collection_point_others').val();
    else 
        $('#collection_point_others').hide();
}

function addressCollectionPointOthers(checkBoxID, componentID) {
    if ($(checkBoxID).is(":checked")) 
        $('#addressCPOthers').show();
        // $('#collection_point_others').val();
    else 
        $('#addressCPOthers').hide();
}

// Water Purpose
function WaterPurpose(val) {
    if (val === "Others")
        document.getElementById('Water_Purpose_Others').style.display = 'block';
    else
        document.getElementById('Water_Purpose_Others').style.display = 'none';
}
// SourceWaterSample
function SourceWaterSample(val) {
    if (val === "Others")
        document.getElementById('Source_Water_Sample_Others').style.display = 'block';
    else
        document.getElementById('Source_Water_Sample_Others').style.display = 'none';
}

// PREFFEREC CONTACTS
function pContacts(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");

    if (isBoxChecked == true) {
        $('#phoneInput').css("display", "block");
        $('#phoneInput').val('');

    } else {
        $('#phoneInput').css("display", "none");
    }
}
function pMobile(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");

    if (isBoxChecked == true) {
        $('#mobileInput').css("display", "block");
        $('#mobileInput').val('');


    } else {
        $('#mobileInput').css("display", "none");


    }
}
function pEmail(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");

    if (isBoxChecked == true) {
        $('#EmailInput').css("display", "block");
        $('#EmailInput').val('');


    } else {
        $('#EmailInput').css("display", "none");

    }
}



function myForm(forms, id) {
    let text = forms;
    const myArray = text.split(",");

    myArray.forEach(function (item, index, arr) {
        if (item == 'micr_form_5') {
            $('#micr_form_1').show();
            $('#micr_form_2').show();
            $('#micr_form_3').show();
            // $('#micr_form_4').show();
        } else {
            $(item).show();
        }
        $('#workOrderID').val(id);
    });
}


function showHideFunction(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");

    if (isBoxChecked == true) {
        $(componentID).show();
    } else {
        $(componentID).hide();
    }
}

function showHideMicro5(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");

    if (isBoxChecked == true) {
        $('#micr_form_1').show();
        $('#micr_form_2').show();
        $('#micr_form_3').show();
        // $('#micr_form_4').show();
    } else {
        $('#micr_form_1').hide();
        $('#micr_form_2').hide();
        $('#micr_form_3').hide();
        // $('#micr_form_4').hide();
    }
}

$(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function () {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'

                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 600
        });
    });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function () {
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    $(".submit").click(function () {
        return false;
    })

});


///// LAB RESULTS FORMULAS /////
function micro1Computation() {

    if ($('[name="mcr1_hpc_a"]').val().length > 0 && $('[name="mcr1_hpc_b"]').val().length > 0) {
        /// COMPUTE Average
        $('[name="mcr1_hpc_ave"]').val(Math.ceil(
            (parseFloat($('[name="mcr1_hpc_a"]').val()) + parseFloat($('[name="mcr1_hpc_b"]').val())) / 2
        ));

        /// COMPUTE Difference
        $('[name="mcr1_hpc_diff"]').val(Math.ceil(


            parseFloat(
                ((parseFloat($('[name="mcr1_hpc_a"]').val()) - parseFloat($('[name="mcr1_hpc_b"]').val())) /
                    ((parseFloat($('[name="mcr1_hpc_a"]').val()) + parseFloat($('[name="mcr1_hpc_b"]').val())) / 2) * 100).toFixed(2)

            ))

            // parseFloat((
            //     (parseFloat($('[name="mcr1_hpc_a"]').val()) - parseFloat($('[name="mcr1_hpc_b"]').val())) /
            //     (parseFloat($('[name="mcr1_hpc_a"]').val()) + parseFloat($('[name="mcr1_hpc_b"]').val()))
            // ) / 2).toFixed(2)
        );
    } else {
        $('[name="mcr1_hpc_ave"]').val('0');
    }


    if ($('[name="mcr1_hpc_ave"]').val() >= 499) {
        $('[name="mcr1_hpc_remarks"]').val('FAIL');
        $('[name="mcr1_hpc_value"]').val('≥ 500 est');
    }
    else {
        $('[name="mcr1_hpc_remarks"]').val('PASSED');
    }


    if ($('[name="mcr1_hpc_ave"]').val() == 0) {
        $('[name="mcr1_hpc_value"]').val('< 1,0');
    }

    else if ($('[name="mcr1_hpc_ave"]').val() <= 499) {

        $('[name="mcr1_hpc_value"]').val('≤ 500 est');
        // $('[name="mcr1_hpc_value"]').val($('[name="mcr1_hpc_ave"]').val());


    }

}
// MICRO 2 COMPUTATION
function micro2Computation() {

    if ($('[name="mcr2_bg_48h"]').val().length > 0) {

        if ($('[name="mcr2_bg_48h"]').val() == 0) {
            $('[name="mcr2_tc_remarks"]').val('PASSED');
        }
        else {
            $('[name="mcr2_tc_remarks"]').val('FAILED');
        }
    }
}

function micro2ComputationA() {

    if ($('[name="micr2_fc_24h"]').val().length > 0) {

        if ($('[name="micr2_fc_24h"]').val() == 0) {
            $('[name="micr2_fc_total"]').val('< 1.1');
        }
        else if ($('[name="micr2_fc_24h"]').val() == 1) {
            $('[name="micr2_fc_total"]').val('1.1');
        }
        else if ($('[name="micr2_fc_24h"]').val() == 2) {
            $('[name="micr2_fc_total"]').val('2.6');
        }
        else if ($('[name="micr2_fc_24h"]').val() == 3) {
            $('[name="micr2_fc_total"]').val('4.6');
        }
        else if ($('[name="micr2_fc_24h"]').val() == 4) {
            $('[name="micr2_fc_total"]').val('8.0');
        }
        else if ($('[name="micr2_fc_24h"]').val() >= 5) {
            $('[name="micr2_fc_total"]').val('> 8.0');
        }

        if ($('[name="micr2_fc_total"]').val() == '< 1.1') {
            $('[name="mcr2_tc_remarks"]').val('PASSED');
        }
        else {
            $('[name="mcr2_tc_remarks"]').val('FAILED');
        }



    }
    else {
        $('[name="micr2_fc_total"]').val('');
        $('[name="mcr2_tc_remarks"]').val('');
    }



}
// MICRO 3 COMPUTATION
function micro3Computation() {

    if ($('[name="mcr3_tc_48h"]').val().length > 0) {

        if ($('[name="mcr3_tc_48h"]').val() == 0) {
            $('[name="mcr3_tc_total"]').val('< 1.1');
            $('[name="mcr3_tc_remarks"]').val('PASSED');
        }
        else if ($('[name="mcr3_tc_48h"]').val() == 1) {
            $('[name="mcr3_tc_total"]').val('1.1');
            $('[name="mcr3_tc_remarks"]').val('FAILED');
        }
        else if ($('[name="mcr3_tc_48h"]').val() == 2) {
            $('[name="mcr3_tc_total"]').val('2.6');
            $('[name="mcr3_tc_remarks"]').val('FAILED');
        }
        else if ($('[name="mcr3_tc_48h"]').val() == 3) {
            $('[name="mcr3_tc_total"]').val('4.6');
            $('[name="mcr3_tc_remarks"]').val('FAILED');
        }
        else if ($('[name="mcr3_tc_48h"]').val() == 4) {
            $('[name="mcr3_tc_total"]').val('8.0');
            $('[name="mcr3_tc_remarks"]').val('FAILED');
        }
        else if ($('[name="mcr3_tc_48h"]').val() >= 5) {
            $('[name="mcr3_tc_total"]').val('>8.0');
            $('[name="mcr3_tc_remarks"]').val('FAILED');
        }
    }
    else {
        $('[name="mcr3_tc_total"]').val('');
        $('[name="mcr3_tc_remarks"]').val('');
    }
}

// MICRO 4 COMPUTATION
function micro4Computation() {
    if ($('[name="micr4_results"]').val() == 'Absent') {
        $('[name="mcr4_remarks"]').val('PASS');
    }
    else {
        $('[name="mcr4_remarks"]').val('FAIL');
    }
}

// CHEM1 COMPUTATION
function chem1() {
    if ($('[name="chem1_final"]').val().length > 0) {
        if ($('[name="chem1_final"]').val() <= '6.5') {
            $('[name="chem1_remarks"]').val('PASS');
        }
        else if ($('[name="chem1_final"]').val() >= '8.5') {
            $('[name="chem1_remarks"]').val('PASS');
        }
        else {
            $('[name="chem1_remarks"]').val('FAIL');
        }
    }
    else {
        $('[name="chem1_remarks"]').val('');
    }
}

// CHEM2 COMPUTATION
function chem2() {
    if ($('[name="chem2_result"]').val().length > 0) {
        if ($('[name="chem2_result"]').val() <= 50) {
            $('[name="chem2_remarks"]').val('PASS');
        }
        else {
            $('[name="chem2_remarks"]').val('FAIL');
        }
    }
    else {
        $('[name="chem2_remarks"]').val('');
    }
}
// CHEM3 COMPUTATION
function chem3() {
    if ($('[name="chem3_result"]').val().length > 0) {
        if ($('[name="chem3_result"]').val() <= 600) {
            $('[name="chem3_remarks"]').val('PASS');
        }
        else {
            $('[name="chem3_remarks"]').val('FAIL');
        }
    }
    else {
        $('[name="chem3_remarks"]').val('');
    }
}
// CHEM4 COMPUTATION
function chem4() {
    if ($('[name="chem4_result"]').val().length > 0) {
        if ($('[name="chem4_result"]').val() > 1.5) {
            $('[name="chem4_remarks"]').val('FAIL');
        }
        else if ($('[name="chem4_result"]').val() < 0.3) {
            $('[name="chem4_remarks"]').val('FAIL');
        }
        else {
            $('[name="chem4_remarks"]').val('PASS');
        }
    }
    else {
        $('[name="chem3_remarks"]').val('');
    }
}
// CHEM5 COMPUTATION
function chem5() {
    if ($('[name="chem5_result"]').val().length > 0) {
        if ($('[name="chem5_result"]').val() <= 0.01) {
            $('[name="chem5_remarks"]').val('PASS');
        }
        else {
            $('[name="chem5_remarks"]').val('FAIL');
        }
    }
    else {
        $('[name="chem5_remarks"]').val('');
    }
}
// CHEM6 COMPUTATION
function chem6() {
    if ($('[name="chem6_result"]').val().length > 0) {
        if ($('[name="chem6_result"]').val() <= 0.003) {
            $('[name="chem6_remarks"]').val('PASS');
        }
        else {
            $('[name="chem6_remarks"]').val('FAIL');
        }
    }
    else {
        $('[name="chem6_remarks"]').val('');
    }
}
// CHEM7 COMPUTATION
function chem7() {
    if ($('[name="chem7_result"]').val().length > 0) {
        if ($('[name="chem7_result"]').val() <= 0.01) {
            $('[name="chem7_remarks"]').val('PASS');
        }
        else {
            $('[name="chem7_remarks"]').val('FAIL');
        }
    }
    else {
        $('[name="chem7_remarks"]').val('');
    }
}
// PHYS1 COMPUTATION
function phys1(val) {
    if (val === "Clear without objectionable color") {
        $('[name="phys1_remarks"]').val('PASS');
    }
    else {
        $('[name="phys1_remarks"]').val('FAIL');
    }
}
$(document).ready(function () {

    // LAB ACCEPTANCE
    $('.viewLab').click(function () {
        const id = $(this).data('id');
        $('#test_no').val(id);
    }
    );

    // LAB WORK ORDER
    $('.workOrder').click(function () {
        const id = $(this).data('id');
        $('#workOrderTest_no').val(id);
    }
    );

    // LAB ANALYSIS
    $('.viewAnalysis').click(function () {
        const id = $(this).data('id');
        $('#analysisReuqestTableID').val(id);
    }
    );


    ///// LAB RESULTS FORMULAS /////
    $('[name="mcr1_hpc_a"],[name="mcr1_hpc_b"]').on("change keyup paste", function () {
        micro1Computation();
    });

    $('[name="mcr2_bg_48h').on("change keyup paste", function () {
        micro2Computation();
    });

    $('[name="micr2_fc_24h').on("change keyup paste", function () {
        micro2ComputationA();
    });

    $('[name="mcr3_tc_48h"]').on("change keyup paste", function () {
        micro3Computation();
    });
    $('[name="chem1_final"]').on("change keyup paste", function () {
        chem1();
    });
    $('[name="chem2_result"]').on("change keyup paste", function () {
        chem2();
    });
    $('[name="chem3_result"]').on("change keyup paste", function () {
        chem3();
    });
    $('[name="chem4_result"]').on("change keyup paste", function () {
        chem4();
    });
    $('[name="chem5_result"]').on("change keyup paste", function () {
        chem5();
    });
    $('[name="chem6_result"]').on("change keyup paste", function () {
        chem6();
    });
    $('[name="chem7_result"]').on("change keyup paste", function () {
        chem7();
    });

    $('#account_name').on("change keyup paste", function () {
        $.ajax({
            url: rootURL + 'client/get/' + $('#account_name').val(),
            // url: rootURL + 'client/get/' + $('[name="account_name"]').val(),
            contentType: "application/json",

            dataType: 'json',
            success: function (result) {
                var resultItem = result[0];
                // console.log(resultItem);
                // console.log(result);
                $('[name="client_id"]').val(resultItem?.id ?? '');
                $('[name="unit_no_floor_bldg_name"]').val(resultItem?.unit_no_floor_bldg_name ?? '');
                $('[name="zip_code"]').val(resultItem?.zip_code ?? '');
                $('[name="barangay_name"]').val(resultItem?.barangay_name ?? '');
                $('[name="municipality_or_city"]').val(resultItem?.municipality_or_city ?? '');
                $('[name="province"]').val(resultItem?.province ?? '');
                $('[name="street_name_or_subdivision"]').val(resultItem?.street_name_or_subdivision ?? '');
                $('[name="phone"]').val(resultItem?.phone ?? '');
                $('[name="mobile"]').val(resultItem?.mobile ?? '');
                $('[name="email"]').val(resultItem?.email ?? '');
            },
            error: function (error) {
                console.log("Error:");
                console.log(error);
                $('[name="account_id"]').val('')
                $('[name="unit_no_floor_bldg_name"]').val('');
                $('[name="zip_code"]').val('');
                $('[name="barangay_name"]').val('');
                $('[name="municipality_or_city"]').val('');
                $('[name="province"]').val('');
                $('[name="street_name_or_subdivision"]').val('');
            }
        })
    });
});

// Personal Details Automated Dropdowns Location
var my_handlers = {

    fill_provinces: function () {

        var region_code = $(this).val();
        $('#province').on('change', function () {
            $('input[name="province"]').val($('#province option:selected').text())
        });
        $('#province').ph_locations('fetch_list', [{ "region_code": region_code }]);

    },

    fill_cities: function () {

        var province_code = $(this).val();
        $('#municipality_or_city').on('change', function () {
            $('input[name="municipality_or_city"]').val($('#municipality_or_city option:selected').text())
        });
        $('#municipality_or_city').ph_locations('fetch_list', [{ "province_code": province_code }]);
    },


    fill_barangays: function () {

        var city_code = $(this).val();
        $('#barangay').on('change', function () {
            $('input[name="barangay_name"]').val($('#barangay option:selected').text())
        });
        $('#barangay').ph_locations('fetch_list', [{ "city_code": city_code }]);
    }
};

$(function () {
    // $(my_handlers.fill_provinces);
    $('#province').on('change', my_handlers.fill_cities);
    $('#municipality_or_city').on('change', my_handlers.fill_barangays);

    // $('#region').ph_locations({ 'location_type': 'regions' });
    $('#province').ph_locations({ 'location_type': 'provinces' });
    $('#municipality_or_city').ph_locations({ 'location_type': 'cities' });
    $('#barangay').ph_locations({ 'location_type': 'barangays' });
    $('#province').ph_locations('fetch_list');
});

// ADD ROLES
function rService(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");
    const dis1 = document.getElementById('r_add_client');
    const dis2 = document.getElementById('r_add_analysis');
    if (isBoxChecked == false) {
        dis1.disabled = true;
        dis2.disabled = true;
    } else {
        dis1.disabled = false;
        dis2.disabled = false;
    }
}
function rLaboratory(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");
    const dis1 = document.getElementById('r_lab_acceptance');
    const dis2 = document.getElementById('r_lab_work_order');
    if (isBoxChecked == false) {
        dis1.disabled = true;
        dis2.disabled = true;
    } else {
        dis1.disabled = false;
        dis2.disabled = false;
    }
}
function rRecordsAndReports(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");
    const dis1 = document.getElementById('r_records_lab_acceptance');
    const dis2 = document.getElementById('r_lab_result');
    const dis3 = document.getElementById('r_record_analysis_request');
    const dis4 = document.getElementById('r_facility');
    const dis5 = document.getElementById('r_client_list');

    if (isBoxChecked == false) {
        dis1.disabled = true;
        dis2.disabled = true;
        dis3.disabled = true;
        dis4.disabled = true;
        dis5.disabled = true;

    } else {
        dis1.disabled = false;
        dis2.disabled = false;
        dis3.disabled = false;
        dis4.disabled = false;
        dis5.disabled = false;
    }
}

function rUsermanagement(checkBoxID, componentID) {
    var isBoxChecked = $(checkBoxID).is(":checked");
    const dis1 = document.getElementById('r_user_list');
    const dis2 = document.getElementById('r_roles');
    if (isBoxChecked == false) {
        dis1.disabled = true;
        dis2.disabled = true;
    } else {
        dis1.disabled = false;
        dis2.disabled = false;
    }
}



