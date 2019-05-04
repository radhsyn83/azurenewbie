<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container p-5">
        <div class="container register-form">
            <div class="form">

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
							<form id="form">
								<div class="form-group">
									<label for="first_name">First Name</label>
									<input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp" placeholder="Enter first name">
								</div>
								<div class="form-group">
									<label for="last_name">Last Name</label>
									<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-hover">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>First Name</th> 
                                        <th>Last Name</th> 
                                        <th>Date Add</th> 
                                    </tr> 
                                </thead> 
                                <tbody id="loadDataFromServer">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        loadData()

        function loadData() {
            $.ajax({
                url: "<?php echo base_url('index.php/welcome/get_data'); ?>",
                method: "POST",
                dataType: "JSON",
                success: function(data){
                    var a = "";
                    var res = data.result;
                    var no = 1;
                    for (i = 0; i < res.length; i++) { 
                        console.log(res[i].first_name);  
                        a += "<tr><td>"+no+"</td><td>"+res[i].first_name+"</td><td>"+res[i].last_name+"</td><td>"+res[i].date_add+"</td></tr>";
                        no++;
                    };
                    $("#loadDataFromServer").html(a);
                }
            });
        }

        $("#form").on("submit", function(e) {
            e.preventDefault();
            if ($("#first_name").val() != "" || $("#last_name").val() != "") {
                $.ajax({
                    data: $("#form").serialize(),
                    url: "<?php echo base_url('index.php/welcome/add_data'); ?>",
                    method: "POST",
                    dataType: "JSON",
                    success: function(data){
                        if (data.status == "1") {
                            loadData();
                        } else {
                            alert("Terjadi masalah");
                        }
                    }
                });
            } else {
                alert("Field tidak boleh kosong");
            }
        })
    </script>
  
  </body>
</html>