<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>PHP Exercises</title>
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-md-6 my-5 mx-auto border rounded px-3 py-3">
                <h6 class="text-center mb-3">COUNTRY NAMES</h6>

                <!--Since we created oninput so we can catch every input here--->
                <input oninput="suggest(this.value)" type="text" class="form-control" placeholder="Don't leave this empty,please">
                <ul id="suggestions" class="list-group my-2">
                    
                </ul>
            </div>
        </div>
    </div>
    <script>
        function suggest(value){
            
            //get value from the input as ""
            value = value.trim();
            //check if keyword entered got the length less than 1
            if(value.length < 1){
                return;
            }

            $.post('country.php',{keyword: value},(data,status) => {
                if(status === 'success'){
                    if(data.success === true){
                        
                        let list = $('#suggestions');
                        list.empty();

                        let virtualDom = document.createDocumentFragment();
                        data.country.forEach(c => {
                            $(`<li class = "list-group-item">${c}</li>`).appendTo(virtualDom);
                        });

                        list.append(virtualDom);
                    }
                }
            });
        }
    </script>
</body>
</html>