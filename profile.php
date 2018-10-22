<?php
    include_once "db.php";
    $userId = ($_GET['userId']);
    
$query = "SELECT firstName, lastName, middleName, gender, ssn, dob, organization, department, iden, position, salary,health, dental,vision, addressOne, addressTwo, apt, city, _state, zipcode, phone, email FROM employees WHERE id = {$userId}";
$results = mysqli_query($connect, $query);

   while($row = mysqli_fetch_array($results)) {
       $firstName = $row['firstName'];
       $lasttName = $row['lastName'];
       $middletName = $row['middleName'];
       $gender = $row['gender'];
       $ssn = $row['ssn'];
       $dob = $row['dob'];
       $organization = $row['organization'];
       $department = $row['department'];
       $iden = $row['iden'];
       $position = $row['position'];
       $salary= $row['salary'];
       $health = $row['health'];
       $dental = $row['dental'];
       $vision = $row['vision'];
       $addressOne = $row['addressOne'];
       $addressTwo = $row['addressTwo'];
       $apt = $row['apt'];
       $city = $row['city'];
       $state = $row['_state'];
       $zipcode = $row['zipcode'];
       $phone = $row['phone'];
       $email  = $row['email'];
   }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR-Easy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="profile.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <!-- Font Awesome Free CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron" rel="stylesheet">
</head>

<body style="background-color: rgb(25, 45, 66);">

    <div class="container">
        <!-- <img src="https://www.w3schools.com/howto/img_avatar2.png" alt=""> -->


        <div class="jumbotron">
            <div class="container">

                <div class="row">
                    <!-- <div class="col-lg-12"> -->
                    <div id="content">

                        <form class="" action="#" method="POST" target="">

                            <!-- Profile picture and name -->
                            <div id="inf" class="col-lg-4">
                                <!-- <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                            <h2 id="name">Amy Hills</h2> -->
                                <!-- <button class="btn btn-default btn-sm" id="edit"><span id="btnText"></span><i class="glyphicon glyphicon-pencil"></i></button> -->
                                <div style="padding-right: 5px;" class="row">
                                    <!-- Picture -->
                                    <div class="col-xs-12 desc image-upload">
                                        <label for="photo">
                                            <img src="https://www.w3schools.com/howto/img_avatar2.png" />
                                        </label>
                                        <!-- <input id="photo" type="file" accept="image/*" name="photo" class=""> -->
                                    </div>

                                    <!-- Name -->
                                    <div class="col-xs-12 desc">
                                        <input id="name" type="text" value='<?php echo $firstName.' '. $lasttName;?>' name="name" class="" required>
                                    </div>
                                </div>
                            </div>

                            <div id="info" class="col-lg-8">
                                <!-- Form -->
                                <!-- <form class="" action="#" method="POST" target=""> -->
                                <div class="row">

                                    <!-- Department -->
                                    <div class="col-sm-12 desc">
                                        <label for="department"><i class="fas fa-building"></i> Department:</label>
                                        <input id="department" type="text" value="<?php echo $department; ?>" name="department" class=""
                                            required>
                                    </div>

                                    <!-- EmplID -->
                                    <div class="col-sm-12 desc">
                                        <label for="emplid"><i class="fas fa-id-card-alt"></i> Emplid:</label>
                                        <input id="emplid" type="text" value="<?php echo $iden ;?>" name="emplid" class="" required>
                                    </div>

                                    <!-- Position -->
                                    <div class="col-sm-12 desc">
                                        <label for="position"><i class="fas fa-user"></i> Position:</label>
                                        <input id="position" type="text" value="<?php echo $position ;?>" name="position" class=""
                                            required>
                                    </div>

                                    <!-- Pay rate -->
                                    <div class="col-sm-12 desc">
                                        <label for="payRate"><i class="fas fa-coins"></i> Pay Rate:</label>
                                        <input id="payRate" type="text" value="<?php echo $salary; ?>" name="payrate" class="" required>
                                    </div>

                                    <!-- Insurance -->
                                    <div class="col-sm-12 desc">
                                        <label for="insurance"><i class="fas fa-briefcase-medical"></i> Insurance:</label>
                                        <input id="insurance" type="text" value="<?php echo $health;?>" name="insurance" class=""
                                            required>
                                    </div>

                                    <!-- DOB -->
                                    <div class="col-sm-12 desc">
                                        <label for="dob"><i class="fas fa-birthday-cake"></i> DOB:</label>
                                        <input id="dob" type="date" value="<?php echo $dob; ?>" name="dob" class="" required>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-sm-12 desc">
                                        <label for="gender"><i class="fa fa-venus-mars custom"></i> Gender:</label>
                                        <input id="gender" type="text" value="<?php echo $gender?>" name="gender" class="" required>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-sm-12 desc">
                                        <label for="address"><i class="fas fa-location-arrow"></i> Address:</label>
                                        <input id="address" type="text" value="<?php echo $addressOne;?>"
                                            name="address" class="" required>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-sm-12 desc">
                                        <label for="phone1"><i class="fas fa-phone"></i> Phone:</label>
                                        <input id="phone1" type="tel" value="<?php echo $phone; ?>" name="phone1" class=""
                                            required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-sm-12 desc">
                                        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                                        <input id="email" type="email" value="<?php echo $email; ?>" name="email" class=""
                                            required>
                                    </div>

                                    <!-- Submit/Save -->
                                    <div id="button" class="col-sm-12">
                                        <button id="save" type="submit"><i class="far fa-save"></i></button>
                                    </div>

                                </div>
                            </div>
                        </form>

                       
                    </div>

                    <div class="row">
                        <div style="margin-top:-3px; text-align:center;" class="col-lg-4">
                            <div class="dropdown">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fas fa-cog"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu">
                                    <li><button class="" id="edit"><span id="btnText"></span><i class="glyphicon glyphicon-pencil"></i></button></li>
                                    <!-- <li><a href="#">Another action</a></li> -->
                                    <li role="separator" class="divider"></li>
                                    <form action="#" method="GET" target="">
                                        <li><button class="" id="delete"><span>Delete </span><i class="fas fa-trash-alt"></i></button></li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>

        </div>
    </div>
    <script type="text/javascript" src="profile.js"></script>
</body>

</html>