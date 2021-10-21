<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="main.js"></script>
    
    <title>Feedback</title>
  </head>
  <body>
    <div class="card shadow-lg" style="width: 1000px;margin-left:150px;margin-top:100px;border-radius:12px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="logo.png" alt="">
                </div>
                <div class="col-md-7">
                    <h2 class="card-title" style="margin-bottom:70px;margin-top:20px;text-align:center;">Leave Your Feedback Below.</h2>
                </div>
            </div>
            <form class="row g-3" style="margin-left:60px;">
                <div class="col-md-5">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Firstname" required>
                </div>
                <div class="col-md-5">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Lastname" required>
                </div>
                <div class="col-5">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="col-5">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" id="Date" required>
                </div>
                <div class="col-10">
                    <label class="form-label">Feedback</label>
                    <textarea class="form-control" id="feedback" rows="4" cols="50" required> 
                    </textarea>
                    <!-- <input type="date"  id="inputAddress2" placeholder="Apartment, studio, or floor"> -->
                </div>
                <div class="col-5">

                </div>
                <div class="col-5">
                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    <!-- <input type="button" value="Submit" onclick="feedback()"> -->
                    <!-- <input type="submit" value="Submit" onclick="feedback()"> -->
                </div>
            </form>
        </div>
    </div>
    <script>
        function feedback(){
            var requestBody = "{\"first_name\":\"Misgana\",\"last_name\":\"Daniel\",\"email\":\"danielmisgun@gmail.com\",\"date\":\"\",\"feedback\":\"Perfect\"}"; 

            // var firstName = document.getElementById("firstName");
            // var lastName = document.getElementById("lastName");
            // var email = document.getElementById("email");
            // var date = document.getElementById("Date");
            // var feedback = document.getElementById("feedback");

            // var requestBody = "{\"first_name\":\"" + firstName + "\",\"last_name\":\"" + lastName + "\",\"email\":\"" + email + "\",\"date\":\"" + date + "\",\"feedback\":\"" + feedback + "\"}";
            
            var client=new XMLHttpRequest();
            client.open("post","https://dev105946.service-now.com/api/now/table/x_677549_dengene_0_feedback");

            client.setRequestHeader('Accept','application/json');
            client.setRequestHeader('Content-Type','application/json');

            //Eg. UserName="admin", Password="admin" for this code sample.
            client.setRequestHeader('Authorization', 'Basic '+btoa('admin'+':'+'Al4i2lCSAziO'));

            client.onreadystatechange = function() { 
                if(this.readyState == this.DONE) {
                    document.getElementById("response").innerHTML=this.status + this.response;
                }
            }; 
            client.send(requestBody);
        }
    </script>
   <script>
        var buttonSubmit = document.getElementById("submit");
        buttonSubmit.addEventListener("click",feedback());
   </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>