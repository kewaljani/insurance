<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function viewdisplay() {
            var data = document.getElementById('member_type').value;
            if (data === 'airline') {

                document.getElementById('airline').style.display = "block";
                document.getElementById('agent').style.display = "none";

            }
            if (data === 'agent') {
                document.getElementById('airline').style.display = "none";
                document.getElementById('agent').style.display = "block";
            }
            if (data === 'direct') {
                document.getElementById('airline').style.display = "none";
                document.getElementById('agent').style.display = "none";
            }
        }

        function change() {
            const d = new Date();
            var pno;

            var fname = document.getElementById('fname').value;
            var lname = document.getElementById('lname').value;
            var ccode = document.getElementById('cnumber').value;
            var contact = document.getElementById('contact').value;
            var peopleno = document.getElementById('peopleno').value;
            d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = "total" + "=" + peopleno + ";" + expires;
            var data = document.getElementById('member_type').value;
            // alert(document.cookie)
            // alert(lname)
            // alert(ccode)
            // alert(contact)
            // alert(peopleno)
            // alert(data)
            var insurance_type = document.getElementById('insurance_type').value;
            if (data === 'airline') {
                var membership = document.getElementById('membership').value;
                var Airline_member = document.getElementById('Airline_member').value;
                var membership_start = document.getElementById('membership_start').value;
                var membership_end = document.getElementById('membership_end').value;
                alert(membership);
                alert(Airline_member);
                alert(membership_start);
                alert(membership_end);
            }
            if (data === 'agent') {

                var agent_name = document.getElementById('agent_name').value;
                var agent_website = document.getElementById('agent_website').value;
                var agent_number = document.getElementById('agent_number').value;
                var countryCode = document.getElementById('countryCode').value;

            }
            if (data === 'direct') {
                var xhttp;
                //alert(first,pswrd,last,email,enrollment,cpswr);
                xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState == 4 && xhttp.status == 200) { // Check the status - if everything goes fine
                        var x = xhttp.response
                        if (x === "inserted") {
                            window.location.href = "passengerdetails.php" // display the content (response) from the serverside page
                        } else {
                            alert("You cannot enter your own mobile number for Emergency contacts");
                            window.location.href = "insurance.php";
                        }
                    }
                }
            }
            xhttp.open("POST", "insurancecheck.php", true); // this is the url
            parameters = "fname= " + fname + "&lname=" + lname + "&ccode=" + ccode + "&contact=" + contact + "&peopleno=" + peopleno + "&data=" + 'd';
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(parameters);
        }
    </script>
    <!-- xhttp.open("POST", "insurancecheck.php", true); // this is the url -->
    <style>
        label {
            color: white
        }

        .error {
            color: red;
        }

        .bgroudcolor {
            background: linear-gradient(to right, #000000, #636c6d);
        }

        .upload-btn {
            background: white;
            font-size: 20px;
            font-weight: 400;
            color: black;
            border-radius: 26px;
            border: 1px solid white;
            margin-top: 20px;
            width: 125px;
        }
    </style>
    <title>Customer Detail</title>
</head>

<body style="background-color:grey;">
    <!-- Header -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: inset 0 0 10px #000000;  z-index: 50;top: 0;position: fixed;width: 100%;height: 60px;">
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">LOGO</a>
                        </div>
                        <div class="col">
                            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarColor02">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="#">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="login.php">LogOut</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- SideBar -->
    <div class="sidebar-container" style="box-shadow: inset 0 0 10px #000000; border-left:none">
        <ul class="sidebar-navigation">
            <li>
                <a href="home.php">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>TimeLine
                </a>
            </li>
            <li>
                <a href="flightDetailForm.php">
                    <i class="fa fa-plane" aria-hidden="true"></i>Flights
                </a>
            </li>
            <li>
                <a href="insurance.php">
                    <i class="fa fa-file-o" aria-hidden="true"></i>Insurance
                    <!-- <i class="fa fa-file-text" aria-hidden="true"></i>Insurance
                    <i class="fa fa-file" aria-hidden="true"></i>Insurance
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Insurance -->
                </a>
            </li>
            <li>
                <a href="invoice.php">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Invoice
                </a>
            </li>
            <li>
                <a href="paymentmethod.php">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>Payment
                </a>
            </li>
        </ul>
    </div>
    <!-- Body -->
    <div class="content-container">
        <div class="row  p-4">
            <div class="col-12">
                <form action="passengerdetails.php" method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row p-4">
                            <div class="col-12 text_white fw-bolder">
                                <h1>Customer Detail (Insurance)</h1>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="flight_id">No of passengers</label>
                                    <input type="text" id="peopleno" name="peopleno" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="airline_name">Select Type of booking</label>
                                    <!-- <input type="text" id="airline_name" name="airline_name" class="form-control" /> -->
                                    <select class="form-control" id="member_type" name="member_type" onchange="viewdisplay();">
                                        <option value="direct" selected>Direct</option>
                                        <option value="airline">Member of Airline</option>
                                        <option value="agent">Agent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12" style="margin-left:0;display:none;padding:0;" id='agent' name='agent'>
                                <div class="row" style="padding:0;margin:0;width:100%">
                                    <div class="col-6" class='agent'>
                                        <label class="form-label text_white" for="flight_id">Agent Name</label>
                                        <select class="form-control" id="agent_name" name="flight_type">
                                            <option value="Kayak">Kayak</option>
                                            <option value="Expedia">Expedia</option>
                                            <option value="Priceline">Priceline</option>
                                            <option value="Orbitz">Orbitz</option>
                                            <option value="Hotwire">Hotwire</option>
                                            <option value="CheapOair">CheapOair</option>
                                            <option value="Travelocity">Travelocity</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label text_white" for="flight_id">Agent website</label>
                                        <input type="text" id="agent_website" name="flight_id" class="form-control" />
                                    </div>
                                </div>
                                <div class="row" style="padding:0;margin:0;width:100%">
                                    <div class="col-6">
                                        <label class="form-label text_white" for="flight_id"> Country code </label>
                                        <select id="countryCode" class="form-control" id="">
                                            <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                            <option data-countryCode="US" value="1">USA (+1)</option>
                                            <optgroup label="Other countries">
                                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                <option data-countryCode="CN" value="86">China (+86)</option>
                                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                <option data-countryCode="FR" value="33">France (+33)</option>
                                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                <option data-countryCode="IN" value="91">India (+91)</option>
                                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                <option data-countryCode="SR" value="597">Suriid (+597)</option>
                                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </optgroup>
                                        </select></label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label text_white" for="flight_id">Agent Number</label>
                                        <input class="form-control" type="text" id="agent_number" placeholder="Mobile no" style="width:100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row " style="padding:0;margin:0;width:100%;display:none" id='airline' name='airline'>
                                <div class='row' style="padding:0;margin:0;width:100%">
                                    <div class="col-6" class='agent'>
                                        <label class="form-label text_white" for="flight_id">Membership type</label>
                                        <select class="form-control" id="membership" name="flight_type">
                                            <option value="TrueBlue">TrueBlue</option>
                                            <option value="Rapid Rewards">Rapid Rewards</option>
                                            <option value="Mileage Plan">Mileage Plan</option>
                                            <option value="SkyMiles">SkyMiles</option>
                                            <option value="AAdvantage">AAdvantage</option>
                                            <option value="MileagePlus">MileagePlus</option>
                                            <option value="Hawaiian Miles">Hawaiian Miles</option>
                                            <option value="British Airways Executive Club">British Airways Executive Club</option>
                                            <option value="AirFrance & KLM Flying Blue">AirFrance & KLM Flying Blue</option>
                                            <option value="Virgin Atlantic Flying Club">Virgin Atlantic Flying Club</option>
                                            <option value="Emirates Skywards Blue">Emirates Skywards Blue</option>
                                            <option value="Emirates Skywards Silver">Emirates Skywards Silver</option>
                                            <option value="Emirates Skywards Gold">Emirates Skywards Gold</option>
                                            <option value="Emirates Skywards Platinum">Emirates Skywards Platinum</option>
                                        </select>
                                    </div>
                                    <div class="col-6" style="widh:100%">
                                        <label class="form-label text_white" for="flight_id">Airline member of</label>
                                        <select class="form-control" id="Airline_member" name="flight_type">
                                            <option value="American Airlines">American Airlines</option>
                                            <option value="JetBlue Airways">JetBlue Airways</option>
                                            <option value="US Airways">US Airways</option>
                                            <option value="Delta Air Lines">Delta Air Lines</option>
                                            <option value="United Airlines">United Airlines</option>
                                            <option value="Emirates">Emirates</option>
                                            <option value="Qatar Airways">Qatar Airways</option>
                                            <option value="Air China">Air China</option>
                                            <option value="Cathay Pacific">Cathay Pacific</option>
                                            <option value="China Airlines">China Airlines</option>
                                            <option value="China Southern Airlines">China Southern Airlines</option>
                                            <option value="British Airways">British Airways</option>
                                            <option value="Lufthansa">Lufthansa</option>
                                            <option value="Swiss">Swiss</option>
                                            <option value="Korean Air">Korean Air</option>
                                            <option value="Air Canada">Air Canada</option>
                                            <option value="Air India">Air India</option>
                                            <option value="Jet Airways">Jet Airways</option>
                                            <option value="Singapore Airlines">Singapore Airlines</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="padding:0;margin:0;width:100%">
                                    <div class="col-6" class='agent'>
                                        <label class="form-label text_white" for="flight_id">Start Date of membership</label>
                                        <input type="date" id="membership_start" name="flight_id" class="form-control" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label text_white" for="flight_id">End Date of membership</label>
                                        <input type="date" id="membership_end" name="flight_id" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="flight_type">Emergency Contact First Name</label>
                                    <!-- <input type="text" id="flight_type" name="flight_type" class="form-control" /> -->
                                    <input type="text" id="fname" name="fname" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="flight_type">Emergency Contact Last Name</label>
                                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                                    <input type="text" id="lname" name="lname" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="from_place">country code (only number do not include
                                        +)</label>
                                    <input type="number" id="cnumber" name="cnumber" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline text_white">
                                    <label class="form-label" for="to_place">Emergency Contact number</label>
                                    <input type="number" id="contact" name="contact" class="form-control" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="d_date">Insurance Type (200$)</label>
                                <select class="form-control" id="insurance_type" name="airline_name" onchange="viewdisplay();">
                                    <option value="Trip Cancellation" selected>Trip Cancellation</option>
                                    <option value="Trip Interruption">Trip Interruption </option>
                                    <option value="Medical Insurance">Medical Insurance</option>
                                    <option value="Baggage Insurance">Baggage Insurance </option>
                                    <option value="Accidental Death Insurance">Accidental Death Insurance</option>
                                    <option value="All-inclusive Insurance">All-inclusive Insurance</option>
                                </select>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <!-- Submit button -->
                                <button type="button" class="btn btn-secondary mt-4 mb-4" onclick='change();'>Next</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div></div>
</body>

</html>