<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New College</title>
    
    <!-- =======================  CSS Files ==================== -->
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/canvas_style.scss">
    <link rel="stylesheet" href="css/event-organizer.css">
</head>
<body>
    <div class="ui container">
        <div class="ui segment very padded basic">
            <div class="ui segment inverted orange very padded">
            <h4 class="ui header center aligned"><a href="index.php">Event <i class="circular black eye icon" ></i>Watch</a></h4>
                <h1 class="ui header center aligned" style="margin-top:0px;">
                    <div class="ui content">
                        ADD NEW COLLEGE/UNIVERSITY
                        <!-- <div class="sub header">
                            Create your Event-Watch account
                        </div> -->
                    </div>
                </h1>
                <div class="ui horizontal divider"><i class="university circular icon"></i></div>

                <form class="ui form" action="addcollegedb.php" method="POST" enctype="multipart/form-data"> 
                    <div class="field">
                        <div class="two fields">
                            <div class="required field">
                                <!-- <label>Enrolment Number</label> -->
                                <div class="ui left icon huge input">
                                    <input name="college-name" type="text" placeholder="College/University Name*" required autofocus>
                                    <i class="university icon"></i>
                                </div>
                                <div class="ui pointing red basic label" id="college-err" style="display: none;">
                                    This enrolment number is already registered!
                                </div>
                            </div>
                            <div class="required field">
                                <!-- <label>Email</label> -->
                                <div class="ui left icon huge input">
                                    <input name="college-email" type="email" placeholder="Email*" required >
                                    <i class="icon envelope"></i>
                                </div>
                                <div class="ui pointing red basic label" id="email-err" style="display: none;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="two fields">
                            <div class="required field">
                                <!-- <label>Phone Number</label> -->
                                <div class="ui left icon huge input">
                                    <input name="college-phnumber" type="number" placeholder="Contact Number*" required maxlength=10 onblur="error(this.value)">
                                    <i class="icon phone"></i>
                                </div>
                                <div class="ui pointing red basic label" id="phnumber-err" style="display: none;">
                                    This phone nuumber is already registered!
                                </div>
                            </div>
                            <div class="required field">
                                <!-- <label>Password</label> -->
                                <!-- <div class="ui left icon huge input">
                                    <input name="signup-password" type="password" placeholder="Password" required>
                                    <i class="icon lock"></i>
                                </div> -->
                                <div class="ui search huge selection dropdown country-item">
                                    <input name="country" type="hidden">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Select country*</div>
                                    <div class="menu">
                                    <a class="item active">India</a>
                                    <!-- <a class="item"></a>
                                    <a class="item"></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="two fields">
                            <div class="required field">
                                <!-- <label>Phone Number</label> -->
                                <!-- <div class="ui left icon huge input">
                                    <input name="signup-phnumber" type="number" placeholder="Phone Number" required maxlength="10" onblur="error(this.value)" minlength="10">
                                    <i class="icon phone"></i>
                                </div>
                                <div class="ui pointing red basic label" id="phnumber-err" style="display: none;">
                                    This phone nuumber is already registered!
                                </div> -->
                                <div class="ui search huge selection dropdown state-item">
                                    <input name="state" type="hidden">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Select State*</div>
                                    <div class="menu">
                                    <a class="item active">Uttar Pardesh</a>
                                    <a class="item">Delhi</a>
                                    <!-- <a class="item"></a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="required field">
                                <!-- <label>Password</label> -->
                                <!-- <div class="ui left icon huge input">
                                    <input name="signup-password" type="password" placeholder="Password" required>
                                    <i class="icon lock"></i>
                                </div> -->
                                <div class="ui search huge selection dropdown city-item">
                                    <input name="city" type="hidden">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Select City*</div>
                                    <div class="menu">
                                    <a class="item active">Delhi</a>
                                    <a class="item">Greater Noida</a>
                                    <a class="item">Noida</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="two fields">
                            <div class="required field">
                                <!-- <label>Phone Number</label> -->
                                <div class="ui left icon huge input">
                                    <input name="college-pin-number" type="number" placeholder="Pin Number*" required maxlength="6" minlength="10">
                                    <i class="thumbtack icon"></i>
                                </div>
                                <div class="ui pointing red basic label" id="pin-err" style="display: none;">
                                    This phone nuumber is already registered!
                                </div>
                            </div>
                            <div class="required field">
                                <!-- <label>Password</label> -->
                                <div class="ui left icon huge input">
                                    <input name="college-address" type="text" placeholder="Address*" required>
                                    <i class="address card icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="required field">
                        <label>Upload College/University Image</label>
                        <div class="ui left icon huge input">
                            <input name="college-pic" type="file" required>
                            <i class="file image icon"></i>
                        </div>
                    </div>
                    <div class="required field">
                            <label>About College/University</label>
                            <textarea name="details" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 62px;" maxlength="1000"></textarea>
                    </div>
                    <div class="required field">
                        <div class="ui checkbox signup-check">
                        <input tabindex="0" name="college-tearms" class="hidden" type="checkbox" required>
                        <label>I agree to the <a href="tearms.php">Terms</a> and <a href="tearms.php">Conditions</a></label>
                        </div>
                    </div>
                    <div class="ui header right aligned" style="margin:0;">
                        <button class="ui button inverted black btn-add-college" type="submit">Add college</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>


    <!-- ======================  JS Files ===================== -->
    <script src="js/jQuery.js"></script>
     <script src="js/semantic.min.js"></script>
     <script src="js/main.js"></script>
     <script src="js/canvas_main2.js"></script>
</body>
</html>