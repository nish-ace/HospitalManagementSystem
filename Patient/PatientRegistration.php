<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<head>
    <title>Patient Registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    
<style media="screen">

        
        body {
            background-color: #080710;
            background-image: url("https://png.pngtree.com/thumb_back/fw800/back_our/20190617/ourmid/pngtree-creative-medical-poster-background-material-image_125786.jpg");
            background-size: cover;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

    .box1 {
        background-color: rgba(255, 255, 255, 0.13);
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 20px rgba(8, 7, 16, 0.6);
        padding: 10px;
        
    }

    .box2 {
        font-family: 'Poppins',sans-serif;
        background-color: rgba(255, 255, 255, 0.13);
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 20px rgba(8, 7, 16, 0.6);
        padding: 10px;
        
    }

    .box3 {
        font-family: 'Poppins',sans-serif;
        background-color: rgba(255, 255, 255, 0.13);
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 20px rgba(8, 7, 16, 0.6);
        padding: 10px;
    }

    .box4 {
        font-family: 'Poppins',sans-serif;
        background-color: rgba(255, 255, 255, 0.13);
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 20px rgba(8, 7, 16, 0.6);
        padding: 10px;
    }

    .box5{
        text-align: center;
        margin: 1%;
    }


    h3 {
        font-family: "Poppins",sans-serif;
        font-size: 20pt;
        font-style: normal;
        font-weight: bold;
        color: black;
        text-align: center;
        text-decoration: underline;
    }

    h4 {
        font-family: "Poppins",sans-serif;
        font-size: 15pt;
        font-style: normal;
        font-weight: bold;
        color: black;
        text-align: left;
        margin: 0.5%;
        text-decoration: underline;
        
    }

    th {
        font-family: "Poppins",sans-serif;
        font-size: 15pt;
        font-style: normal;
        color: rgb(0, 0, 0);
        text-align: left;
        padding: 5px;
        text-decoration: underline;
    }
        ::placeholder {
            color: #828080;
        }

    table {
        font-family: "Poppins",sans-serif;
        color: black;
        font-size: 11pt;
        font-style: normal;
        font-weight: bold;
        background-color: rgba(255, 255, 255, 0.13);
        backdrop-filter: blur(0px);
        border-collapse: collapse;
        border-spacing: 10cm;
        border: 0px solid rgba(255, 255, 255, 0);
        padding: 10px;
    }

    table.inner {
        border: 0px solid rgba(255, 255, 255, 0);
    }

    textarea {
        height: 55px;
    }

    button {
        background-color: #FFFFFF ;
        font-family: "Poppins",sans-serif;
        font-size: 11pt;
        border-radius: 15px;
        color: black;
        padding: 16px 20px;
        border: 10px;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
}

    button:hover {
        opacity: 50;
        background-color: #aff0ff;
}

    .error {
            background: #F2DEDE;
            color: #0c0101;
            padding: 10px;
            width: 30%;
            border-radius: 5px;
            margin: 20px auto;
            text-align: center;
        }
</style>


<html>

<body>

    <h3>PATIENT REGISTRATION FORM</h3>
    <form action="" method="POST">
    <h4>Basic Information</h4>
        <div class="box1">
            <!----- Basic Information -------------------------------------------------------->
            <table>
                <tr>
                    <th style="width: 5cm;"></th>
                    <th style="width: 5cm;"></th>
                    <th style="width: 2cm;"></th>
                    <th style="width: 4cm;"></th>
                    <th style="width: 6cm;"></th>
                </tr>
                <!----- First Name - Last Name ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="fname"> First Name: </label>
                    </td>
                    <td>
                        <input type="text" id="fname" name="fname">
                    </td>
                    <td></td>
                    <td>
                        <label for="lname"> Last Name: </label>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>
                <!----- Date Of Birth - Roll Number -------------------------------------------------------->
                <tr>
                    <td>
                        <label for="dob"> Date of Birth: </label>
                    </td>
                    <td>
                        <input type="date" id="dob" name="dob">
                    </td>
                    <td></td>
                    <td>
                        <label for="roll_number"> Roll Number: </label>
                    </td>
                    <td>
                        <input type="number" id="roll_number" name="roll_number">
                    </td>
                </tr>
                <!----- Age - Gender -------------------------------------------------------->
                <tr>
                    <td>
                        <label for="age"> Age (as on 1st July): </label>
                    </td>
                    <td>
                        <input type="number" id="age" name="age">
                    </td>
                    <td></td>
                    <td>
                        <label for="gender"> Gender: </label><br>
                    </td>
                    <td>
                        <input type="radio" id="gender" name="gender" value="male">
                        <label for="html">Male</label>

                        <input type="radio" id="gender" name="gender" value="female">
                        <label for="html">Female</label>

                        <input type="radio" id="gender" name="gender" value="others">
                        <label for="html">Other</label>
                    </td>
                </tr>
            </table>
        </div>

        <h4>Contact Information</h4>
        <div class="box2">
            <!----- Contact Information -------------------------------------------------------->
            <table style="width:58%">
                <tr>
                    <th style="width: 5cm;"></th>
                    <th style="width: 2cm;"></th>
                    <th style="width: 0cm;"></th>
                    <th style="width: 2cm;"></th>
                    <th style="width: 4cm;"></th>
                    <th style="width: 2cm;"></th>
                </tr>
                <!----- Email ID - Permanent Address Line 1---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="email">Email ID: </label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="name@example.com">
                    </td>
                    <td></td>
                    <td></td>       
                    <td>
                        <label for="address1">Permanent Address: </label>
                    </td>
                    <td>
                        <input type="text" id="address1" name="address1">
                    </td>
                </tr>
                <!----- Mobile Number - City ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="mobile">Contact: </label>
                    </td>
                    <td>
                        <input type="number" id="mobile" name="mobile" placeholder="+91XXXXXXXXX">
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <label for="city">City: </label>
                    </td>
                    <td>
                        <input type="text" id="city" name="city">
                    </td>
                </tr>
                <!----- Mobile Number - Pin Code ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="mobile2">Emergency Contact: </label>
                    </td>
                    <td>
                        <input type="number" id="mobile2" name="mobile2" placeholder="+91XXXXXXXXX">
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <label for="code">Pin Code: </label>
                    </td>
                    <td>
                        <input type="text" id="code" name="code">
                    </td>
                </tr>
                <!----- Hostle - State ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="hostel">Hostel: </label>
                    </td>
                    <td>
                        <select id="hostel" name="hostel" class="form-control">
                            <option value="">--Select Hostel--</option>
                            <option value="Barak">Barak</option>
                            <option value="Brahmaputra">Brahmaputra</option>
                            <option value="Dihing">Dihing</option>
                            <option value="Disang">Disang</option>
                            <option value="Dhansiri">Dhansiri</option>
                            <option value="Kapili">Kapili</option>
                            <option value="Kameng">Kameng</option>
                            <option value="Lohit">Lohit</option>
                            <option value="Manas">Manas</option>
                            <option value="Siang">Siang</option>
                            <option value="Subansiri">Subansiri</option>
                            <option value="Umiam">Umiam</option>
                            <option value="MSH">Married Scholar</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <label for="state">State: </label>
                    </td>
                    <td>
                        <select id="country-state" name="country-state">
                            <option value="">--Select State--</option>
                            <option value="AN">Andaman and Nicobar Islands</option>
                            <option value="AP">Andhra Pradesh</option>
                            <option value="AR">Arunachal Pradesh</option>
                            <option value="AS">Assam</option>
                            <option value="BR">Bihar</option>
                            <option value="CH">Chandigarh</option>
                            <option value="CT">Chhattisgarh</option>
                            <option value="DN">Dadra and Nagar Haveli</option>
                            <option value="DD">Daman and Diu</option>
                            <option value="DL">Delhi</option>
                            <option value="GA">Goa</option>
                            <option value="GJ">Gujarat</option>
                            <option value="HR">Haryana</option>
                            <option value="HP">Himachal Pradesh</option>
                            <option value="JK">Jammu and Kashmir</option>
                            <option value="JH">Jharkhand</option>
                            <option value="KA">Karnataka</option>
                            <option value="KL">Kerala</option>
                            <option value="LA">Ladakh</option>
                            <option value="LD">Lakshadweep</option>
                            <option value="MP">Madhya Pradesh</option>
                            <option value="MH">Maharashtra</option>
                            <option value="MN">Manipur</option>
                            <option value="ML">Meghalaya</option>
                            <option value="MZ">Mizoram</option>
                            <option value="NL">Nagaland</option>
                            <option value="OR">Odisha</option>
                            <option value="PY">Puducherry</option>
                            <option value="PB">Punjab</option>
                            <option value="RJ">Rajasthan</option>
                            <option value="SK">Sikkim</option>
                            <option value="TN">Tamil Nadu</option>
                            <option value="TG">Telangana</option>
                            <option value="TR">Tripura</option>
                            <option value="UP">Uttar Pradesh</option>
                            <option value="UT">Uttarakhand</option>
                            <option value="WB">West Bengal</option>
                        </select>
                    </td>
                </tr>
                <!----- Room Number - Country---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="room">Room: </label>
                    </td>
                    <td>
                        <input type="text" id="room" name="room" placeholder="e.g. A111">
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <label for="country">Country: </label>
                    </td>
                    <td>
                        <select id="country" name="country" class="form-control">
                            <option value="India">India</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia</option>
                            <option value="Moldova, Republic of">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                                Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </td>

                </tr>
            </table>
        </div>

        <!----- Academic Information -------------------------------------------------------->
        <h4>Academic Information</h4>
        <div class="box3">
            <table style="width:44%">
                <tr>
                    <th></th>
                </tr>
                <!----- Department ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="dept"> Department: </label>
                    </td>
                    <td>
                        <select id="dept" name="dept" class="form-control">
                            <option value="">--Select Department--</option>
                            <option value="BSBE">Biosciences and Bioengineering</option>
                            <option value="ChE">Chemical Engineering</option>
                            <option value="CST">Chemical Science and Technology</option>
                            <option value="CiE">Civil Engineering</option>
                            <option value="CSE">Computer Science & Engineering</option>
                            <option value="Design">Design</option>
                            <option value="EEE">Electronics and Electrical Engineering</option>
                            <option value="HSS">Humanities and Social Sciences</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="ME">Mechanical Engineering</option>
                            <option value="Physics">Physics</option>
                        </select>
                    </td>
                </tr>
                <!----- Course ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="course"> Course: </label>
                    </td>
                    <td>
                        <input type="text" id="course" name="course">
                    </td>
                </tr>
            </table>
        </div>

        <!----- Password -------------------------------------------------------->
        <h4>Password</h4>
        <div class="box4">
            <table style="width:27.5%">
                <tr>
                    <th></th>
                </tr>
                <!----- Password ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="pswd"> Password: </label>
                    </td>
                    <td>
                        <input type="password" id="pswd" name="pswd">
                    </td>
                </tr>
                <!----- Confirm Password ---------------------------------------------------------->
                <tr>
                    <td>
                        <label for="cpswd"> Confirm Password: </label>
                    </td>
                    <td>
                        <input type="password" id="cpswd" name="cpswd">
                    </td>
                </tr>
            </table>
        </div>

        <!----- Submit and Reset ------------------------------------------------->
        
        <div class="box5">
        <table style="width: 100%;">
            <tr style="width: 10%;">
                <td>
                    <button type="submit" value="Submit">Submit</button>
                </td>
                <td></td>
                <td>
                    <button type="reset" value="Reset">Reset</button>
                </td>
            </tr>
        </table>
        </div>
    </form>

    <?php 
        $sname = "127.0.0.1:3307";
        $uname = "root";
        $password = "";
        $db_name = "hospital";

        $conn = new PDO("mysql:host=$sname;dbname=$db_name", $uname, $password);

        if (!$conn) {
            echo "Connection failed!";
        }
        // $stmt = $conn->prepare("SELECT * FROM admin");
        // $stmt->execute();
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php
        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['dob']) && isset($_POST['roll_number']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['address1']) && isset($_POST['mobile']) && isset($_POST['city']) && isset($_POST['mobile2']) && isset($_POST['code']) && isset($_POST['hostel']) && isset($_POST['country-state']) && isset($_POST['room']) && isset($_POST['country']) && isset($_POST['dept']) && isset($_POST['course']) && isset($_POST['pswd']) && isset($_POST['cpswd']))
        {
            if($_POST['pswd'] !== $_POST['cpswd']){
                echo '<p class="error">Passwords mismatch!</p>';
                // echo '<meta http-equiv="refresh" content="0;url=PatientRegistraion.php">';
            }
            else
            {
                {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $dob = $_POST['dob'];
                    $roll_no = $_POST['roll_number'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $email = $_POST['email'];
                    $mobile1 = $_POST['mobile'];
                    $mobile2 = $_POST['mobile2'];
                    $address = $_POST['address1'];
                    $city = $_POST['city'];
                    $pin = $_POST['code'];
                    $state = $_POST['country-state'];
                    $country = $_POST['country'];
                    $hostel = $_POST['hostel'];
                    $room = $_POST['room'];
                    $dept = $_POST['dept'];
                    $course = $_POST['course'];
                    $password = $_POST['pswd'];
        
                    $query = "INSERT INTO patient VALUES ('','$fname', '$lname', '$dob', '$roll_no',  '$age', '$gender', '$email', '$mobile1', '$mobile2', '$hostel', '$room', '$address', '$city', '$pin', '$state', '$country', '$dept', '$course', '$password', '', '', '')";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                }
            }
        }
    ?>

</body>
</html>