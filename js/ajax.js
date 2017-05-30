$(document).ready(function () {
    myOutput();

//---------------------------------------------//
// Query data from DB and filling Data Tables
//---------------------------------------------//
        function myOutput() {
            $('#example').DataTable( {
                "order": [[ 11, "desc" ]],
                destroy: true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "../php/get_data.php",
                    "type": "POST"
                    // done : function deleteRow() {
                    //     console.log(this);
                    // }
                },
                "columns": [
                        { "data": "id" },
                        { "data": "fname" },
                        { "data": "lname" },
                        { "data": "age" },
                        { "data": "education" },
                        { "data": "gender" },
                        { "data": "email" },
                        { "data": "city" },
                        { "data": "street" },
                        { "data": "city_population" },
                        { "data": "working_years" },
                        { "data": "created_at" },
                            {
                            "data": null,
                            "defaultContent": "<button class='btn btn-success edit'>Edit</button><button class='btn btn-danger delete'>Delete</button>"
                            }
                ]
            });
        }
//---------------------------------------------//
// Query data from DB and filling Data Tables END
//---------------------------------------------//

//---------------------------------------------//
// Submit/add data to DB
//---------------------------------------------//
        $('#mainForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "../php/add.php",
                data: $(this).serialize(),
                type: "POST",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    myOutput();
                },
                error: function(data) {
                    console.log(data);
                    console.log(data.responseText);
                }
            })
        });
//---------------------------------------------//
// Submit/add data to DB END
//---------------------------------------------//

//---------------------------------------------//
// Submit/edit data to DB
//---------------------------------------------//
        $('#editForm').submit(function(e) {
            e.preventDefault();
            $.post({
                url: "../php/edit.php",
                data: $(this).serialize(),
                type: "POST",
                success: function(data) {
                    $('#editModal').modal('hide');
                    myOutput();
                },
                error: function(data) {
                    console.log(data);
                    console.log(data.responseText);
                }
            })
        });
//---------------------------------------------//
// Submit/edit data to DB END
//---------------------------------------------//
        
//---------------------------------------------//
// Deleting data from DB
//---------------------------------------------//
    $(document).on("click", ".delete", function() {
        let rowID = $(this).parent().siblings();
        $.post({
            url: "../php/delete.php",
            type: "post",
            data: "uid="+rowID[0].textContent,
            success: function() {
                rowID.parent().remove();
            }
        })
    });
//---------------------------------------------//
// Deleting data from DB END
//---------------------------------------------//

//---------------------------------------------//
// Querying row data and displaying 
// in edition form
//---------------------------------------------//
    $(document).on("click", ".edit", function() {
        let rowID = $(this).parent().siblings();
        $('#editModal').modal('show');
        $.post({
            url: "../php/get_row_data.php",
            type: "post",
            data: "uid="+rowID[0].textContent,
            dataType: "json",
            success: function(data) {
            for (var key in data[0]) {
                if (key === 'gender'){
                    $("#editForm input[name=" + key + "][value=" + data[0][key] + "]").prop('checked', true);
                } else if(key === 'city_population') {
                    $("#editForm input[name=cityPopulation]").val(data[0][key]);
                } else if(key === 'working_years') {
                    $("#editForm input[name=workingYears]").val(data[0][key]);
                } else {
                    $('#editForm [name=' + key +']').val(data[0][key]);
                    console.log(key + " -> " + data[0][key]);
                }
            }
            }
        });
    });
//---------------------------------------------//
// Querying row data and displaying 
// in edition form END
//---------------------------------------------//

//---------------------------------------------//
// Editing row and saving it in DB
//---------------------------------------------//
    $(document).on("click", "formEdit button[type]", function() {
        let rowID = $(this).parent().siblings();
        $('#editModal').modal('show');
        $.post({
            url: "../php/get_row_data.php",
            type: "post",
            data: "uid="+rowID[0].textContent,
            dataType: "json",
            success: function(data) {
            for (var key in data[0]) {
                if (key === 'gender'){
                    $("#editForm input[name=" + key + "][value=" + data[0][key] + "]").prop('checked', true);
                } else if(key === 'city_population') {
                    $("#editForm input[name=cityPopulation]").val(data[0][key]);
                } else if(key === 'working_years') {
                    $("#editForm input[name=workingYears]").val(data[0][key]);
                } else {
                    $('#editForm [name=' + key +']').val(data[0][key]);
                    console.log(key + " -> " + data[0][key]);
                }
            }
            }
        });
    });
//---------------------------------------------//
// Editing row and saving it in DB END
//---------------------------------------------//

});
