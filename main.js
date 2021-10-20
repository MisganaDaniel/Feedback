function feedback(){
    var requestBody = "{\"first_name\":\"Misgana\",\"last_name\":\"Daniel\",\"email\":\"danielmisgun@gmail.com\",\"date\":\"\",\"feedback\":\"Perfect\"}"; 

    /* var firstName = document.getElementById("firstName");
    var lastName = document.getElementById("lastName");
    var email = document.getElementById("email");
    var date = document.getElementById("Date");
    var feedback = document.getElementById("feedback"); */

    //var requestBody = "{\"first_name\":\"" + firstName + "\",\"last_name\":\"" + lastName + "\",\"email\":\"" + email + "\",\"date\":\"" + date + "\",\"feedback\":\"" + feedback + "\"}";
    
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
    alert("New feedback");
}
