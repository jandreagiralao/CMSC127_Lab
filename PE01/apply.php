<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>The Academe - Application</title>
        <link rel="shortcut icon" type="image/x-icon" href="./images/fist.png">
        <link rel="stylesheet" href="./appli.css">
        <link rel="stylesheet" href="./nav.css">
    </head>
    <body>
        <div id="nav">
            <a href="./main.php">< HOME</a>
            <p>You are in the Application Page</p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div id="header">
                <h1>PERSONAL DATA SHEET</h1><br>
                <p>
                    WARNING: Any misrepresentation made in the Personal Data Sheet
                    and the Work Experience Sheet shall cause the filing of administrative/
                    criminal case/s against the person concerned.
                </p>
                <p>
                    READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS)
                    BEFORE ACCOMPLISHING THE PDS FORM.
                </p>
                <p>
                    Print legibly. Tick appropriate boxes (&#9633) and use separate sheet
                    if necessary. Indicate N/A if not applicable. DO NOT ABBREVIATE.
                </p>
            </div>
            <div id="personal">
                <div class="title">
                    <p>I. PERSONAL INFORMATION</p>
                </div>
                <section>
                    <section>
                        <label class="reg" for="sName">SURNAME</label>
                        <input class="reg" type="text" name="sName" value="">
                    </section>
                    <section>
                        <label class="reg" for="fName">FIRST NAME</label>
                        <input class="ext" type="text" name="fName" value="">
                        <input class="ext2" type="text" name="fNameExt" placeholder="NAME EXTENSION (JR, SR)" value="">
                    </section>
                    <section>
                        <label class="reg" for="mName">MIDDLE NAME</label>
                        <input class="reg" type="text" name="mName" value="">
                    </section>
                </section>
                <div class="grid2">
                    <section>
                        <section>
                            <label class="grid2" for="birthday">DATE OF BIRTH (mm/dd/yyyy)</label>
                            <input class="grid2" type="text" name="birthday" value="">
                        </section>
                        <section>
                            <label class="grid2" for="birthplace">PLACE OF BIRTH</label>
                            <input class="grid2" type="text" name="birthplace" value="">
                        </section>
                        <div class="grid2">
                            <label class="grid4" for="sex">SEX</label>
                            <div class="grid2">
                                <section><input class="radio" type="radio" name="sex" value="Male" id="radio" value=""> Male</section>
                                <section><input class="radio" type="radio" name="sex" value="Female" id="radio" value=""> Female</section>
                            </div>
                        </div>
                        <div class="grid2">
                            <section>
                                <label class="grid4" id="row3" for="cStatus">Civil Status</label>
                            </section>
                            <section>
                                <div class="grid2">
                                    <section><input class="radio" type="radio" name="cStatus" value="Single" id="radio"> Single</section>
                                    <section><input class="radio" type="radio" name="cStatus" value="Married" id="radio"> Married</section>
                                </div>
                                <div class="grid2">
                                    <section><input class="radio" type="radio" name="cStatus" value="Widowed" id="radio"> Widowed</section>
                                    <section><input class="radio" type="radio" name="cStatus" value="Separated" id="radio"> Separated</section>
                                </div>
                                <div class="grid21">
                                    <section><input class="radio" type="radio"> Other/s:</section>
                                    <input class="other" type="text" name="cStatus" value="">
                                </div>
                            </section>
                        </div>
                        <section>
                            <label class="grid2" for="height">HEIGHT(m)</label>
                            <input class="grid2" type="text" name="height" value="">
                        </section>
                        <section>
                            <label class="grid2" for="weight">WEIGHT(kg)</label>
                            <input class="grid2" type="text" name="weight" value="">
                        </section>
                        <section>
                            <label class="grid2" for="bType">BLOOD TYPE</label>
                            <input class="grid2" type="text" name="bType" value="">
                        </section>
                        <section>
                            <label class="grid2" for="gsis">GSIS ID NO.</label>
                            <input class="grid2" type="text" name="gsis" value="">
                        </section>
                        <section>
                            <label class="grid2" for="pagibig">PAG-IBIG ID NO.</label>
                            <input class="grid2" type="text" name="pagibig" value="">
                        </section>
                        <section>
                            <label class="grid2" for="philhealth">PHILHEALTH NO.</label>
                            <input class="grid2" type="text" name="philhealth" value="">
                        </section>
                        <section>
                            <label class="grid2" for="sss">SSS NO.</label>
                            <input class="grid2" type="text" name="sss" value="">
                        </section>
                        <section>
                            <label class="grid2" for="tin">TIN NO.</label>
                            <input class="grid2" type="text" name="tin" value="">
                        </section>
                        <section>
                            <label class="grid2" for="agency">AGENCY EMPLOYEE NO.</label>
                            <input class="grid2" type="text" name="agency" value="">
                        </section>
                    </section>
                    <section>
                        <section>
                            <div class="grid2">
                                <label class="names22" for="citizenship">CITIZENSHIP
                                    <br> If holder of dual citizenship, please indicate the details.
                                </label>
                                <div class="grid2">
                                    <section>
                                        <input class="radio" type="radio" value="Filipino" name="citizenship"> Filipino <br>
                                        <input class="radio" type="radio" value="by birth" name="citType"> by birth <br>
                                        <br> Pls. indicate country:
                                        <select class="names" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </section>
                                    <section>
                                        <input class="radio" type="radio" value="Dual Citizenship" name="citizenship"> Dual Citizenship <br>
                                        <input class="radio" type="radio" value="by naturalization" name="citType"> by naturalization
                                    </section>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="grid21">
                                <section>
                                    <label class="names21" for="resAdd">RESIDENTIAL ADDRESS</label>
                                    <label class="names" for="zip">ZIP CODE</label>
                                </section>
                                <section>
                                    <div class="grid2">
                                        <section>
                                            <input class="names" type="text" name="house" placeholder="House/Block/Lot No." value="">
                                            <input class="names" type="text" name="subdivision" placeholder="Subdivision/Village" value="">
                                            <input class="names" type="text" name="city" placeholder="City/Municipality" value="">
                                        </section>
                                        <section>
                                            <input class="names" type="text" name="street" placeholder="Street" value="">
                                            <input class="names" type="text" name="barangay" placeholder="Barangay" value="">
                                            <input class="names" type="text" name="province" placeholder="Province" value="">
                                        </section>
                                    </div>
                                    <input class="names" type="text" name="zip" value="">
                                </section>
                            </div>
                        </section>
                        <section>
                            <div class="grid21">
                                <section>
                                    <label class="names21" for="permAdd">PERMANENT ADDRESS</label>
                                    <label class="names" for="pzip">ZIP CODE</label>
                                </section>
                                <section>
                                    <div class="grid2">
                                        <section>
                                            <input class="names" type="text" name="phouse" placeholder="House/Block/Lot No." value="">
                                            <input class="names" type="text" name="psubdivision" placeholder="Subdivision/Village" value="">
                                            <input class="names" type="text" name="pcity" placeholder="City/Municipality" value="">
                                        </section>
                                        <section>
                                            <input class="names" type="text" name="pstreet" placeholder="Street" value="">
                                            <input class="names" type="text" name="pbarangay" placeholder="Barangay" value="">
                                            <input class="names" type="text" name="pprovince" placeholder="Province" value="">
                                        </section>
                                    </div>
                                    <input class="names" type="text" name="pzip" value="">
                                </section>
                            </div>
                        </section>
                        <section class="grid21">
                            <label class="names" for="telephone">TELEPHONE NO.</label>
                            <input class="names" type="text" name="telephone" value="">
                        </section>
                        <section class="grid21">
                            <label class="names" for="mobile">MOBILE NO.</label>
                            <input class="names" type="text" name="mobile" value="">
                        </section>
                        <section class="grid21">
                            <label class="names" for="email">E-MAIL ADDRESS (if any)</label>
                            <input class="names" type="text" name="email" value="">
                        </section>
                    </section>
                </div>

            </div>
            <div id="family">
                <div class="title">
                    <p>II. FAMILY BACKGROUND</p>
                </div>
                <div class="grid2">
                    <section>
                        <section>
                            <label class="grid2" for="ssName">SPOUSE'S SURNAME</label>
                            <input class="grid2" type="text" name="ssName" value="">
                        </section>
                        <section>
                            <label class="grid2" for="sfName">FIRST NAME</label>
                            <input class="ext3" type="text" name="sfName" value="">
                            <input class="ext4" type="text" name="sfNameExt" placeholder="NAME EXTENSION (JR, SR)" value="">
                        </section>
                        <section>
                            <label class="grid2" for="smName">MIDDLE NAME</label>
                            <input class="grid2" type="text" name="smName" value="">
                        </section>
                        <section>
                            <label class="grid2" for="occupation">OCCUPATION</label>
                            <input class="grid2" type="text" name="occupation" value="">
                        </section>
                        <section>
                            <label class="grid2" for="employer">EMPLOYER/BUSINESS NAME</label>
                            <input class="grid2" type="text" name="employer" value="">
                        </section>
                        <section>
                            <label class="grid2" for="busAdd">BUSINESS ADDRESS</label>
                            <input class="grid2" type="text" name="busAdd" value="">
                        </section>
                        <section>
                            <label class="grid2" for="sTel">TELEPHONE NO.</label>
                            <input class="grid2" type="text" name="sTel" value="">
                        </section>
                        <section>
                            <label class="grid2" for="fsName">FATHER'S SURNAME</label>
                            <input class="grid2" type="text" name="fsName" value="">
                        </section>
                        <section>
                            <label class="grid2" for="ffName">FIRST NAME</label>
                            <input class="ext3" type="text" name="ffName" value="">
                            <input class="ext4" type="text" name="ffNameExt" placeholder="NAME EXTENSION (JR, SR)" value="">
                        </section>
                        <section>
                            <label class="grid2" for="fmName">MIDDLE NAME</label>
                            <input class="grid2" type="text" name="fmName" value="">
                        </section>
                        <section>
                            <label class="grid2" for="msName">MOTHER'S SURNAME</label>
                            <input class="grid2" type="text" name="msName" value="">
                        </section>
                        <section>
                            <label class="grid2" for="mfName">FIRST NAME</label>
                            <input class="grid2" type="text" name="mfName" value="">
                        </section>
                        <section>
                            <label class="grid2" for="mmName">MIDDLE NAME</label>
                            <input class="grid2" type="text" name="mmName" value="">
                        </section>
                    </section>
                    <section>
                        <div class="grid2">
                            <section>
                                <label class="names" for="children">NAME of CHILDREN (Write full name and list all)</label>
                                <input class="names" type="text" name="child1" value="">
                                <input class="names" type="text" name="child2" value="">
                                <input class="names" type="text" name="child3" value="">
                                <input class="names" type="text" name="child4" value="">
                                <input class="names" type="text" name="child5" value="">
                                <input class="names" type="text" name="child6" value="">
                                <input class="names" type="text" name="child7" value="">
                                <input class="names" type="text" name="child8" value="">
                                <input class="names" type="text" name="child9" value="">
                                <input class="names" type="text" name="child10" value="">
                                <input class="names" type="text" name="child11" value="">
                                <input class="names" type="text" name="child12" value="">
                            </section>
                            <section>
                                <label class="names" for="bithdays">DATE OF BIRTH (mm/dd/yyyy)</label>
                                <input class="names" type="text" name="birth1" value="">
                                <input class="names" type="text" name="birth2" value="">
                                <input class="names" type="text" name="birth3" value="">
                                <input class="names" type="text" name="birth4" value="">
                                <input class="names" type="text" name="birth5" value="">
                                <input class="names" type="text" name="birth6" value="">
                                <input class="names" type="text" name="birth7" value="">
                                <input class="names" type="text" name="birth8" value="">
                                <input class="names" type="text" name="birth9" value="">
                                <input class="names" type="text" name="birth10" value="">
                                <input class="names" type="text" name="birth11" value="">
                                <input class="names" type="text" name="birth12" value="">
                            </section>
                        </div>
                        <p>(Continue on separate sheet if necessary)</p>
                    </section>
                </div>
            </div>
            <div id="educational">
                <div class="title">
                    <p>III. EDUCATIONAL BACKGROUND</p>
                </div>
                <div class="grid7">
                    <section>
                        <label class="names2" for="level">LEVEL</label><br>
                        <label class="names" for="elem">ELEMENTARY</label><br>
                        <label class="names" for="sec">SECONDARY</label><br>
                        <label class="names" for="voc">VOCATIONAL/TRADE COURSE</label><br>
                        <label class="names" for="col">COLLEGE</label><br>
                        <label class="names" for="grad">GRADUATE STUDIES</label><br>
                    </section>
                    <section>
                        <label class="names2" for="school">NAME OF SCHOOL<br>(Write in full)</label><br>
                        <input class="names" type="text" name="elem" value=""><br>
                        <input class="names" type="text" name="sec" value=""><br>
                        <input class="names" type="text" name="voc" value=""><br>
                        <input class="names" type="text" name="col" value=""><br>
                        <input class="names" type="text" name="grad" value=""><br>
                    </section>
                    <section>
                        <label class="names2" for="school">BASIC EDUCATION/DEGREE/COURSE<br>(Write in full)</label><br>
                        <input class="names" type="text" name="elemC" value=""><br>
                        <input class="names" type="text" name="secC" value=""><br>
                        <input class="names" type="text" name="vocC" value=""><br>
                        <input class="names" type="text" name="colC" value=""><br>
                        <input class="names" type="text" name="gradC" value=""><br>
                    </section>
                    <section>
                        <label class="names3" for="attendance">PERIOD OF ATTENDANCE</label>
                        <div class="grid2 names4">
                            <section>
                                <label class="names" for="from">From</label><br>
                                <input class="names" type="text" name="elemAF" value=""><br>
                                <input class="names" type="text" name="secAF" value=""><br>
                                <input class="names" type="text" name="vocAF" value=""><br>
                                <input class="names" type="text" name="colAF" value=""><br>
                                <input class="names" type="text" name="gradAF" value=""><br>
                            </section>
                            <section>
                                <label class="names" for="to">To</label><br>
                                <input class="names" type="text" name="elemAT" value=""><br>
                                <input class="names" type="text" name="secAT" value=""><br>
                                <input class="names" type="text" name="vocAT" value=""><br>
                                <input class="names" type="text" name="colAT" value=""><br>
                                <input class="names" type="text" name="gradAT" value=""><br>
                            </section>
                        </div>
                    </section>
                    <section>
                        <label class="names2" or="hlevel">HIGHEST LEVEL/UNITS EARNED<br>(if not graduated)</label><br>
                        <input class="names" type="text" name="elemHL" value=""><br>
                        <input class="names" type="text" name="secHL" value=""><br>
                        <input class="names" type="text" name="vocHL" value=""><br>
                        <input class="names" type="text" name="colHL" value=""><br>
                        <input class="names" type="text" name="gradHL" value=""><br>
                    </section>
                    <section>
                        <label class="names2" for="yg">YEAR GRADUATED</label><br>
                        <input class="names" type="text" name="elemYG" value=""><br>
                        <input class="names" type="text" name="secYG" value=""><br>
                        <input class="names" type="text" name="vocYG" value=""><br>
                        <input class="names" type="text" name="colYG" value=""><br>
                        <input class="names" type="text" name="gradYG" value=""><br>
                    </section>
                    <section>
                        <label class="names2" for="honors">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label><br>
                        <input class="names" type="text" name="elemAH" value=""><br>
                        <input class="names" type="text" name="secAH" value=""><br>
                        <input class="names" type="text" name="vocAH" value=""><br>
                        <input class="names" type="text" name="colAH" value=""><br>
                        <input class="names" type="text" name="gradAH" value=""><br>
                    </section>
                </div>
                <p>(Continue on separate sheet if necessary)</p><br>
                <div class="grid2">
                    <section>
                        <label class="grid2" for="signature"><b><em>SIGNATURE</em></b></label>
                        <input class="grid2" type="text" name="signature" value="">
                    </section>
                    <section>
                        <label class="grid2" for="dateToday"><b><em>DATE</em></b></label>
                        <input class="grid2" type="text" name="dateToday" value="">
                    </section>
                </div>
            </div><br>
            <input id="submit" type="submit" name="submit" value="Submit">

             <br><br><p>CS Form 212 (Revised 2017), Page 1 of 4</p>
        </form>


        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "applicants";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } else
                    echo "Connected successfully";

                //student name
                $sName = $_REQUEST["sName"];
                $fName = $_REQUEST["fName"];
                $fNameExt = $_REQUEST["fNameExt"];
                $mName = $_REQUEST["mName"];
                //birthday
                $birthday = $_REQUEST["birthday"];
                $birthplace = $_REQUEST["birthplace"];
                //gender
                $sex = $_REQUEST["sex"];
                $cStatus = $_REQUEST["cStatus"];
                //height and weight
                $height = $_REQUEST["height"];
                $weight = $_REQUEST["weight"];
                $bType = $_REQUEST["bType"];
                //numbers
                $gsis = $_REQUEST["gsis"];
                $pagibig = $_REQUEST["pagibig"];
                $philhealth = $_REQUEST["philhealth"];
                $sss = $_REQUEST["sss"];
                $tin = $_REQUEST["tin"];
                $agency = $_REQUEST["agency"];
                //citizenship
                $citizenship = $_REQUEST["citizenship"];
                $citType = $_REQUEST["citType"];
                //address
                $house = $_REQUEST["house"];
                $street = $_REQUEST["street"];
                $subdivision = $_REQUEST["subdivision"];
                $barangay = $_REQUEST["barangay"];
                $city = $_REQUEST["city"];
                $province = $_REQUEST["province"];
                //permaddress
                $phouse = $_REQUEST["phouse"];
                $pstreet = $_REQUEST["pstreet"];
                $psubdivision = $_REQUEST["psubdivision"];
                $pbarangay = $_REQUEST["pbarangay"];
                $pcity = $_REQUEST["pcity"];
                $pprovince = $_REQUEST["pprovince"];
                //contact
                $zip = $_REQUEST["zip"];
                $pzip = $_REQUEST["pzip"];
                $telephone = $_REQUEST["telephone"];
                $mobile = $_REQUEST["mobile"];
                $email = $_REQUEST["email"];
                //spouse
                $ssName = $_REQUEST["ssName"];
                $sfName = $_REQUEST["sfName"];
                $sfNameExt = $_REQUEST["sfNameExt"];
                $smName = $_REQUEST["smName"];
                $occupation = $_REQUEST["occupation"];
                $employer = $_REQUEST["employer"];
                $busAdd = $_REQUEST["busAdd"];
                $sTel = $_REQUEST["sTel"];
                //father
                $fsName = $_REQUEST["fsName"];
                $ffName = $_REQUEST["ffName"];
                $ffNameExt = $_REQUEST["ffNameExt"];
                $fmName = $_REQUEST["fmName"];
                //mother
                $msName = $_REQUEST["msName"];
                $mfName = $_REQUEST["mfName"];
                $mmName = $_REQUEST["mmName"];
                //children
                $child1 = $_REQUEST["child1"];
                $child2 = $_REQUEST["child2"];
                $child3 = $_REQUEST["child3"];
                $child4 = $_REQUEST["child4"];
                $child5 = $_REQUEST["child5"];
                $child6 = $_REQUEST["child6"];
                $child7 = $_REQUEST["child7"];
                $child8 = $_REQUEST["child8"];
                $child9 = $_REQUEST["child9"];
                $child10 = $_REQUEST["child10"];
                $child11 = $_REQUEST["child11"];
                $child12 = $_REQUEST["child12"];
                //birthdays of the children
                $birth1 = $_REQUEST["birth1"];
                $birth2 = $_REQUEST["birth2"];
                $birth3 = $_REQUEST["birth3"];
                $birth4 = $_REQUEST["birth4"];
                $birth5 = $_REQUEST["birth5"];
                $birth6 = $_REQUEST["birth6"];
                $birth7 = $_REQUEST["birth7"];
                $birth8 = $_REQUEST["birth8"];
                $birth9 = $_REQUEST["birth9"];
                $birth10 = $_REQUEST["birth10"];
                $birth11 = $_REQUEST["birth11"];
                $birth12 = $_REQUEST["birth12"];
                //education
                $elem = $_REQUEST["elem"];
                $sec = $_REQUEST["sec"];
                $voc = $_REQUEST["voc"];
                $col = $_REQUEST["col"];
                $grad = $_REQUEST["grad"];

                $elemC = $_REQUEST["elemC"];
                $secC = $_REQUEST["secC"];
                $vocC = $_REQUEST["vocC"];
                $colC = $_REQUEST["colC"];
                $gradC = $_REQUEST["gradC"];

                $elemAF = $_REQUEST["elemAF"];
                $secAF = $_REQUEST["secAF"];
                $vocAF = $_REQUEST["vocAF"];
                $colAF = $_REQUEST["colAF"];
                $gradAF = $_REQUEST["gradAF"];

                $elemAT = $_REQUEST["elemAT"];
                $secAT = $_REQUEST["secAT"];
                $vocAT = $_REQUEST["vocAT"];
                $colAT = $_REQUEST["colAT"];
                $gradAT = $_REQUEST["gradAT"];

                $elemHL = $_REQUEST["elemHL"];
                $secHL = $_REQUEST["secHL"];
                $vocHL = $_REQUEST["vocHL"];
                $colHL = $_REQUEST["colHL"];
                $gradHL = $_REQUEST["gradHL"];

                $elemYG = $_REQUEST["elemYG"];
                $secYG = $_REQUEST["secYG"];
                $vocYG = $_REQUEST["vocYG"];
                $colYG = $_REQUEST["colYG"];
                $gradYG = $_REQUEST["gradYG"];

                $elemAH = $_REQUEST["elemAH"];
                $secAH = $_REQUEST["secAH"];
                $vocAH = $_REQUEST["vocAH"];
                $colAH = $_REQUEST["colAH"];
                $gradAH = $_REQUEST["gradAH"];

                $signature = $_REQUEST["signature"];
                $dateToday = $_REQUEST["dateToday"];

                // sql to create table
                $sql = "INSERT INTO info VALUES ('$sName', '$fName', '$fNameExt', '$mName', '$birthday', '$birthplace', '$sex',
                '$cStatus', '$height', '$weight', '$bType', '$gsis', '$pagibig', '$philhealth', '$sss', '$tin', '$agency', '$citizenship',
                '$citType', '$house', '$street', '$subdivision', '$barangay', '$city', '$province', '$zip', '$phouse', '$pstreet',
                '$psubdivision', '$pbarangay', '$pcity', '$pprovince', '$pzip', '$telephone', '$mobile', '$email',
                '$ssName', '$sfName', '$sfNameExt', '$smName', '$occupation', '$employer', '$busAdd', '$sTel',
                '$fsName', '$ffName', '$ffNameExt', '$fmName', '$msName', '$mfName', '$mmName', '$child1', '$child2', '$child3', '$child4',
                '$child5', '$child6', '$child7', '$child8', '$child9', '$child10', '$child11', '$child12', '$birth1', '$birth2', '$birth3',
                '$birth4', '$birth5', '$birth6', '$birth7', '$birth8', '$birth9', '$birth10', '$birth11', '$birth12',
                '$elem', '$sec', '$voc', '$col', '$grad', '$elemC', '$secC', '$vocC', '$colC', '$gradC', '$elemAF', '$secAF', '$vocAF', '$colAF', '$gradAF',
                '$elemAT', '$secAT', '$vocAT', '$colAT', '$gradAT', '$elemHL', '$secHL', '$vocHL', '$colHL', '$gradHL', '$elemYG', '$secYG', '$vocYG', '$colYG', '$gradYG',
                '$elemAH', '$secAH', '$vocAH', '$colAH', '$gradAH', '$signature', '$dateToday')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Data inserted successfully');</script>";
                } else {
                    echo "Error creating table: " . $conn->error;
                }

                $conn->close();
            }
        ?>
    </body>
</html>
