<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://hemantnegi.github.io/jquery.sumoselect/stylesheets/sumoselect.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://hemantnegi.github.io/jquery.sumoselect/javascripts/jquery.sumoselect.min.js"></script>

    <style>
    .form-control {
        width: 130px;
        height: 130px;
    }
    </style>

</head>

<body>


    <!-- Dropdown input -->
    <div class="form-group">
        <label class="col-md-4 control-label">Rahat</label>
        <div class="col-md-4 selectContainer">
            <div class="input-group">

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

    <!-- Dropdown input -->
    <div class="form-group">
        <label class="col-md-4 control-label">Rahat</label>
        <div class="col-md-4 selectContainer">
            <div class="input-group">
                <select name="shift[day_list_3][]" class="form-control selectpicker" id="day_list_3">
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

    <script>
    // when all the elements in the DOM are loaded
    document.addEventListener('DOMContentLoaded', function() {
        // get both lists and their HTMLOptionElement nodes
        var list1 = document.getElementById('day_list_1'),
            list2 = document.getElementById('day_list_2'),
            list3 = document.getElementById('day_list_3')
        options1 = list1.querySelectorAll('option'),
            options2 = list2.querySelectorAll('option'),
            options3 = list3.querySelectorAll('option');

        // add event handlers when the lists are changed to call the update function
        $(list1).change(update).SumoSelect();
        $(list2).change(update).SumoSelect();
        $(list3).change(update).SumoSelect();

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