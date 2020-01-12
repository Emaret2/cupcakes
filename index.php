<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Some Bootstrap too -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My Css -->

    <title>Cupcakes</title>


</head>
<body>

<div class="container">


    <h1>Cupcake Fundraiser</h1>


    <form id ="cupcake-form" action="confirmation.php" method="post">


        <fieldset class="form-group">
            <legend>Contact Info</legend>
            <div class="form-group">
                <label for="firstName">Your Name:</label>
                <input type="text" class="form-control" id="firstName" placeholder="Please input your name" name="name">
            </div>


        </fieldset>

        <fieldset class="form-group">
            <legend>Cupcake Flavors</legend>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="grasshopper" id="grasshopper" name="cupcakes[]">
                <label class="form-check-label" for="grasshopper">
                    The Grasshopper
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="wisky-maple-bacon" id="wisky-maple-bacon" name="cupcakes[]">
                <label class="form-check-label" for="wisky-maple-bacon">
                    Wiskey Maple Bacon
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="carrot-walnut" id="carrot-walnut" name="cupcakes[]">
                <label class="form-check-label" for="carrot-walnut">
                    Carrot Walnut
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="salted-caramel" id="salted-caramel" name="cupcakes[]">
                <label class="form-check-label" for="salted-caramel">
                    Salted Caramel Cupcake
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="woims" id="worms" name="cupcakes[]">
                <label class="form-check-label" for="redvelvet">
                    Red Velvet
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="lemondrop" id="lemondrop" name="cupcakes[]">
                <label class="form-check-label" for="lemondrop">
                    Lemon Drop
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="tiramisu" id="tiramisu" name="cupcakes[]">
                <label class="form-check-label" for="tiramisu">
                    Tiramisu
                </label>
            </div>
        </fieldset>

        <button id="submit" type="submit" class="btn btn-success">
            Order
        </button>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>