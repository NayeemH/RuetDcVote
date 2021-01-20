<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        var $dropdown1 = $("select[name='project_manager[]']");
        var $dropdown2 = $("select[name='test_engineer[]']");
        var $dropdown3 = $("select[name='test_doc[]']");
        var $dropdown4 = $("select[name='viewer[]']");


        $dropdown1.change(function() {
            $dropdown2.empty().append($dropdown1.find('option').clone());
            $dropdown3.empty().append($dropdown2.find('option').clone());
            var selectedItem = $(this).val();
            if (selectedItem) {
                $(selectedItem).each(function(v, selectedItem) {
                    $dropdown2.find('option[value="' + selectedItem + '"]').prop('disabled',
                        true);
                    $dropdown3.find('option[value="' + selectedItem + '"]').prop('disabled',
                        true);
                    $dropdown4.find('option[value="' + selectedItem + '"]').prop('disabled',
                        true);
                });
            }
        });

        $dropdown2.change(function() {
            $dropdown3.empty().append($dropdown3.find('option').clone());
            $dropdown4.empty().append($dropdown4.find('option').clone());
            var selectedItem = $(this).val();
            if (selectedItem) {
                $(selectedItem).each(function(v, selectedItem) {
                    $dropdown3.find('option[value="' + selectedItem + '"]').prop('disabled',
                        true);
                    $dropdown4.find('option[value="' + selectedItem + '"]').prop('disabled',
                        true);
                });
            }
        });

        $dropdown3.change(function() {
            $dropdown4.empty().append($dropdown4.find('option').clone());
            var selectedItem = $(this).val();
            if (selectedItem) {
                $(selectedItem).each(function(v, selectedItem) {
                    $dropdown4.find('option[value="' + selectedItem + '"]').prop('disabled',
                        true);
                });
            }
        });
    });
    </script>
</head>

<body>
    <select id="project_manager" name="project_manager[]" multiple="multiple">
        <option></option>
        <option id="option" value="1">Test 1</option>
        <option id="option" value="2">Test 2</option>
        <option id="option" value="3">Test 3</option>
        <option id="option" value="4">Test 4</option>
    </select>

    <select id="test_engineer" name="test_engineer[]" multiple="multiple">
        <option></option>
        <option value="1">Test 1</option>
        <option value="2">Test 2</option>
        <option value="3">Test 3</option>
        <option value="4">Test 4</option>
    </select>

    <select id="test_doc" name="test_doc[]" multiple="multiple">
        <option></option>
        <option value="1">Test 1</option>
        <option value="2">Test 2</option>
        <option value="3">Test 3</option>
        <option value="4">Test 4</option>
    </select>
    <select name="viewer[]" multiple="multiple">
        <option></option>
        <option value="1">Test 1</option>
        <option value="2">Test 2</option>
        <option value="3">Test 3</option>
        <option value="4">Test 4</option>
    </select>
    <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent) {
        window.parent.parent.postMessage(["resultsFrame", {
            height: document.body.getBoundingClientRect().height,
            slug: "vrLr9wyg"
        }], "*")
    }
    </script>
</body>

</html>