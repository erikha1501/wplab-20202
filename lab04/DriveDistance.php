<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="./style.css">
        <div class="row main-title">
        <title>Distance from Chicago!</title>
        </div>
        
    </head>
    <body>
    <div class="container-fluid mw-40" >
    <div class="row">
        <div class="col-12">
            <div id = "shadow-box" class="jumbotron min-vh-100 text-center m-0 bg-info d-flex flex-column justify-content-center ">
            <div class="row">
        <font size="4" color="blue"> Welcome to the Distance Calculator!"</font>
        <br> The page that calculates the distances from Chicago.
    </div>
    <div class="row sub-title"> <br> Select a destination:</div>  
        <form action="CheckDistance.php"  method="post">
            <select name="destination[]" class="form-select" size="5" multiple>
                <option>Beijing</option>
                <option>Boston</option>
                <option>Dallas</option>
                <option>Miami</option>
                <option>Nashville</option>
                <option>Las Vegas</option>
                <option>Pittsburgh</option>
                <option>San Francisco</option>
                <option>Toronto</option>
                <option>Washington, DC</option>
            </select>
            <br>
            <div class="row mt-20">
            <input type="submit" value="Submit" class="btn btn-submit mt-20">
            <input type="reset" value="Reset" class="btn btn-reset mt-20">
            </div>
            
        </form>
        </div> 
            </div>
        </div>
    </div>
</div>
    <!-- <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 bounding-box">
    <div class="row">
        <font size="4" color="blue"> Welcome to the Distance Calculator!"</font>
        <br> The page that calculates the distances from Chicago.
    </div>
    <div class="row sub-title"> <br> Select a destination:</div>
       
        <form action="CheckDistance.php"  method="post">
            <select name="destination[]" class="form-select" size="5" multiple>
                <option>Beijing</option>
                <option>Boston</option>
                <option>Dallas</option>
                <option>Miami</option>
                <option>Nashville</option>
                <option>Las Vegas</option>
                <option>Pittsburgh</option>
                <option>San Francisco</option>
                <option>Toronto</option>
                <option>Washington, DC</option>
            </select>
            <br>
            <div class="row mt-20">
            <input type="submit" value="Submit" class="btn btn-submit mt-20">
            <input type="reset" value="Reset" class="btn btn-reset mt-20">
            </div>
            
        </form>
        </div> -->
    
    <!-- </div> -->
    </body>
</html>