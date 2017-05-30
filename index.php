<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <h1>Ajax Project</h1>
            <p class="lead">Working with AJAX and different libraries</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form id="mainForm" name="mainForm" class="col-lg-12" action="php/add.php" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="fname">First name</label>
                                    <input type="text" name="fname" class="form-control mb-2 mr-sm-2 mb-sm-0" id="fname" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="lname">Last name</label>
                                    <input type="text" name="lname" class="form-control mb-2 mr-sm-2 mb-sm-0" id="lname" placeholder="Surname">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="age">Age</label>
                                    <input type="text" name="age" class="form-control mb-2 mr-sm-2 mb-sm-0" id="age" placeholder="Age">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="education">Education</label>
                                    <select name="education" class="form-control mb-2 mr-sm-2 mb-sm-0" id="education" placeholder="Education">
                                        <option disabled selected>Education</option>
                                        <option>Basic</option>
                                        <option>High School</option>
                                        <option>Bachelor</option>
                                        <option>Master</option>
                                        <option>PHD</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input id="man-radio" name="gender" value="0" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Man</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input id="woman-radio" name="gender" value="1" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Woman</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="text" name="email" class="form-control input-group mb-2 mr-sm-2 mb-sm-0" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="city">City</label>
                                    <input type="text" name="city" class="form-control mb-2 mr-sm-2 mb-sm-0" id="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="street">Street</label>
                                    <input type="text" name="street" class="form-control mb-2 mr-sm-2 mb-sm-0" id="street" placeholder="Street">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="city-population">City population</label>
                                    <input type="text" name="cityPopulation" class="form-control mb-2 mr-sm-2 mb-sm-0" id="city-population" placeholder="City population">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="working-years">Working years</label>
                                    <input type="text" name="workingYears" class="form-control mb-2 mr-sm-2 mb-sm-0" id="working-years" placeholder="Working years">
                                </div>
                            </div>

                        </div>
                        <button type="button" class="btn btn-primary submit">Submit</button>
                        <button type="reset" class="btn btn-warning reset">Reset form</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table id="example" class="display" cellspacing="0" width="100%" style="color: black">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>First Name</th>
                                <th>Last  Name</th>
                                <th>Age</th>
                                <th>Education</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Street</th>
                                <th>City population</th>
                                <th>Work years</th>
                                <th>Adding date</th>
                                <th>Management</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>First Name</th>
                                <th>Last  Name</th>
                                <th>Age</th>
                                <th>Education</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Street</th>
                                <th>City population</th>
                                <th>Work years</th>
                                <th>Adding date</th>
                                <th>Management</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <form id="editForm" name="editForm" class="col-lg-12" action="php/edit.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input type="hidden" name="id" >
                                        <div class="form-group">
                                            <label class="sr-only" for="fname">First name</label>
                                            <input type="text" name="fname" class="form-control mb-2 mr-sm-2 mb-sm-0" id="fname" placeholder="First name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="lname">Last name</label>
                                            <input type="text" name="lname" class="form-control mb-2 mr-sm-2 mb-sm-0" id="lname" placeholder="Surname">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="age">Age</label>
                                            <input type="text" name="age" class="form-control mb-2 mr-sm-2 mb-sm-0" id="age" placeholder="Age">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="education">Education</label>
                                            <select name="education" class="form-control mb-2 mr-sm-2 mb-sm-0" id="education" placeholder="Education">
                                                <option disabled selected>Education</option>
                                                <option>Basic</option>
                                                <option>High School</option>
                                                <option>Bachelor</option>
                                                <option>Master</option>
                                                <option>PHD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-radio">
                                                <input id="man-radio" name="gender" value="0" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Man</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="woman-radio" name="gender" value="1" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Woman</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon">@</div>
                                                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="city">City</label>
                                            <input type="text" name="city" class="form-control mb-2 mr-sm-2 mb-sm-0" id="city" placeholder="City">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="street">Street</label>
                                            <input type="text" name="street" class="form-control mb-2 mr-sm-2 mb-sm-0" id="street" placeholder="Street">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="city-population">City population</label>
                                            <input type="text" name="cityPopulation" class="form-control mb-2 mr-sm-2 mb-sm-0" id="city-population" placeholder="City population">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="working-years">Working years</label>
                                            <input type="text" name="workingYears" class="form-control mb-2 mr-sm-2 mb-sm-0" id="working-years" placeholder="Working years">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary save">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="js/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="js/other.js"></script>

</html>
