<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Weather Scraper</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<style>
html,body{
    height:100%;
}

.container{
    background-image: url("images/mountains2.jpg");
    width: 100%;
    height:100%;
    background-size: cover;
    background-position: center;
    padding-top:150px;
}

.center{
    text-align: center;
}

p{
    padding-top:15px;
    padding-bottom:15px;
}

button{
    margin-top:20px;
    
}
#success{
    margin-top: 20px;
    display:none;
}

#fail{
    margin-top:20px;
    display:none;
}

.fontborder{
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}



</style>
</head>


<body>
<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3 center">

            <h1 class = "center fontborder"> Weather Report </h1>
            <p class="lead center fontborder ">Enter your city below for a forecast of the weather </p>
                
            <form>

            <div class="form-group">
                <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Toronto..."/>
            </div>

            <button id = "findWeather" class="btn btn-success btn-lg">Find My Weather </button>

            </form>

            <div class="alert alert-success" id = "success">Success!
            </div>
            <div class="alert alert-danger" id = "fail">Could not find city entered. Please check spelling.
            </div>

        </div>


    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src ="js/jquery.backstretch.min.js"></script>

<script>
$("#findWeather").click(function(event){
    $(".alert").hide();
    
    //default just submits the form. This will stop the form from submitting and runs code instead
    event.preventDefault();
    
    
    $.get("scraper.php?city="+$("#city").val(), function(data){
        if (data == ""){
            $("#fail").fadeIn();
            
        } else {
            $("#success").html(data).fadeIn();
            
        }
    });
    
});

$(".container").backstretch([
            "images/smokewater.jpg"
          , "images/family.jpg"
          , "images/mountains.jpg", "images/mountains2.jpg"
        ], {duration: 3000, fade: 750});



</script>
</body>
</html>