<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RUET DC VOTE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

    <link href="http://hemantnegi.github.io/jquery.sumoselect/stylesheets/sumoselect.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://hemantnegi.github.io/jquery.sumoselect/javascripts/jquery.sumoselect.min.js"></script>



</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">

        <form class="well form-horizontal" action=" " method="post" id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>
                    <center>
                        <h2><b>RUET DC VOTE</b></h2>
                    </center>
                </legend><br>

                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Rahat</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="shift[day_list_1][]" class="form-control selectpicker" id="day_list_1">
                                <option value="">Select your voting number</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                        </div>
                    </div>
                </div>


                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Rahat</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="shift[day_list_2][]" class="form-control selectpicker" id="day_list_2">
                                <option value="">Select your voting number</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" name="submit">SUBMIT</button>

            </fieldset>
        </form>
    </div>
    </div><!-- /.container -->
    <!-- partial -->
    <!-- <script src="./script.js"></script> -->
    <script>
    // when all the elements in the DOM are loaded
    document.addEventListener('DOMContentLoaded', function() {
        // get both lists and their HTMLOptionElement nodes
        var list1 = document.getElementById('day_list_1'),
            list2 = document.getElementById('day_list_2'),
            options1 = list1.querySelectorAll('option'),
            options2 = list2.querySelectorAll('option');

        // add event handlers when the lists are changed to call the update function
        $(list1).change(update).SumoSelect();
        $(list2).change(update).SumoSelect();

        function update(e) {
            // when the lists are changed, loop through their HTMLOptionElement nodes
            var other = (list1 === this) ? list2 : list1;
            for (var i = 0; i < options1.length; i++) {
                // options of list1 should be disabled if selected in list2 and vice-versa
                this[i].selected ? other.sumo.disableItem(i) : other[i].selected ? void 0 : other.sumo
                    .enableItem(i);
            }
        }
    });
    </script>

</body>






</html>