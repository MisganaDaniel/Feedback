<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Feedback</title>
  </head>
  <body>
    <div class="card" style="width: 1000px;margin-left:150px;margin-top:100px;">
        <div class="card-body">
            <h2 class="card-title" style="margin-bottom:70px;">Leave your feedback below.</h2>
            <form class="row g-3">
                <div class="col-md-5">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname">
                </div>
                <div class="col-md-5">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Lastname">
                </div>
                <div class="col-5">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email">
                </div>
                <div class="col-5">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" id="inputAddress2" >
                </div>
                <div class="col-10">
                    <label class="form-label">Feedback</label>
                    <textarea class="form-control" name="w3review" rows="4" cols="50"> 
                    </textarea>
                    <!-- <input type="date"  id="inputAddress2" placeholder="Apartment, studio, or floor"> -->
                </div>
                <div class="col-5">

                </div>
                <div class="col-5">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>