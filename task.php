<?php include ("./inc/func.php")?>
<?php
if(isset($_POST['submit'])){

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Edfa3ly task</title>
</head>
<body>
<section>
<div class="container">
    <h1 class="text-center" style="color: black;background-color: orange">Edfa3ly Task</h1>
    <h6 class="text-center p-3" style="color: orange;background-color: black">OUR CATALOUG</h6>
    <form class="d-flex my-5" style="flex-wrap: wrap;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group col-sm-3">
            <div class="card mx-auto">
                <img src="./images/T-shirt.jpg" class="card-img-top" style="max-height: 200px">
                <div class="card-body">
                    <h5 class="card-title text-center">T-SHIRT</h5>
                    <p class="card-text text-center">10.99 $</p>
                </div>
            </div>
            <input type="number" class="form-control" placeholder="PLease Choose Number" name="num_shirt">
        </div>
        <div class="form-group col-sm-3">
            <div class="card mx-auto">
                <img src="./images/pants.jpg" class="card-img-top" style="max-height: 200px">
                <div class="card-body">
                    <h5 class="card-title text-center">Pants</h5>
                    <p class="card-text text-center">$14.99 $</p>
                </div>
            </div>
            <input type="number" class="form-control" placeholder="PLease Choose Number" name="num_pants">
        </div>
        <div class="form-group col-sm-3">
            <div class="card mx-auto">
                <img src="./images/Jacket.jpg" class="card-img-top" style="max-height: 200px">
                <div class="card-body">
                    <h5 class="card-title text-center">Jacket</h5>
                    <p class="card-text text-center">19.99 $</p>
                </div>
            </div>
            <input type="number" class="form-control" placeholder="PLease Choose Number" name="num_jacket">
        </div>
        <div class="form-group col-sm-3">
            <div class="card mx-auto">
                <img src="./images/shose.jpg" class="card-img-top" style="max-height: 200px">
                <div class="card-body">
                    <h5 class="card-title text-center">Shoes</h5>
                    <p class="card-text text-center">24.99 $</p>
                </div>
            </div>
            <input type="number" class="form-control" placeholder="PLease Choose Number" name="num_shose">
        </div>
        <h5 class="form-text text-center w-100 mx-auto my-5">There is a 14% tax</h5>
        <button type="submit" class="btn btn-primary text-center col-sm-4 m-auto" name="submit">Calculate your Chooise</button>
    </form>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>