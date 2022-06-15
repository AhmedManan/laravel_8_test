<!DOCTYPE html>
<html>
<head>
<title>Insert Ajax</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<h1>Ajax</h1>
<div class='container'>


<h1>Student data</h1>
<div id="success_message"></div>
<ul id="saveform_errList"></ul>
    <div class='mb-3'>
    <label><b>Name</b></label>
    <input type="text" id="name" name="name" class="name form-control">
    </div>
    <div class='mb-3'>
    <label><b>Email:</b></label>
    <input type="text" id="email" name="email" class="email form-control">
    </div>
    <div class='mb-3'>
    <label><b>Course:</b></label>
    <input type="text" id="course" name="course" class="course form-control">
    </div>
    <button type="button" name="add_student" value="add_student" class="btn btn-primary add_student">Add Student</button>

    <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <td>Course</td>
        </tr>

      </table>

</div>

<script>

    function onClick(id){
        console.log(id);
    }
    $(document).ready(function () {

        fetchStudent();
        function fetchStudent(){
            
            $.ajax({
                type: "GET",
                url: "/fetch-students",
                // data: data,
                datatype: "json",
                success: function(response){
                    console.log('hhh');
                    $.each(response.ajax, function(key, item){
                        $('tbody').append(
                            '<tr>\
                            <td>'+item.id+'</td>\
                            <td>'+item.name+'</td>\
                            <td>'+item.email+'</td>\
                            <td>'+item.course+'</td>\
                            <td><button type="button" onclick="onClick('+item.id+')" value="'+item.id+'" class="edit_student btn btn-danger btn-sm">Delete</button></td>\
                            <td><button type="button" value="'+item.id+'" class="delete_student btn btn-primary btn-sm">Update</button></td>\
                            </tr>'
                        );
                    });
                }
            });
        }

        // $(document).on('click', function (e){
        //     e.preventDefault();
        //     var stud_id = $(this).val();
        //     console.log(stud_id);

        // });

            

        $(document).on('click', '.add_student', function(e){
            e.preventDefault();
            var data={
                'name':$('.name').val(),
                'email':$('.email').val(),
                'course':$('.course').val(),
            }
            console.log(data);

            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
                type: "POST",
                url: "/ajax",
                data: data,
                datatype: "datatype",
                success: function(response){
                    // console.log(response);
                    if(response.status==400){
                        $('#saveform_errList').html("");
                        $('#saveform_errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values){
                            $('#saveform_errList').append('<li>'+err_values+'</li>');
                        });
                    }
                    else{
                        $('#saveform_errList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message)
                    }
                }
            })

        });
        
    });
</script>
</body>
</html>
