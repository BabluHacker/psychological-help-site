function check_password( pass){
    if(pass.length <5 ) {
        //document.getElementById("err_msg").innerHTML = "Password should contain atleast 5 character";
        return 1;
    }
    return 0;

}
function loadvalue() {


    if ($('#myform')[0].checkValidity()) {
        var req = "register"
        var info = [];
        info[0] = document.getElementById("password").value;
        if (check_password(info["0"]) == 1)
            return "";
        info[1] = document.getElementById("fname").value;
        info[2] = document.getElementById("lname").value;
        info[3] = document.getElementById("email").value;


        //if( ($("#male").is("checked")) || ($("#female").is("checked")))
        //  return "";
        var v = 0;
        if ($("#male").is(":checked")) {
            info[4] = 0;
            v = 1
        }

        if ($("#female").is(":checked")) {
            info[4] = 1;
            v = 1;
        }

        if (v == 0) return "";
        var data = JSON.stringify(info);
       // alert(data);
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            //console.log(this.readyState + " " + this.status + " " + xhttp.responseText);
            if (this.readyState == 4 && this.status == 200) {

                alert(xhttp.responseText);
               // window.location = "index.html";


            }
        };
        xhttp.open("GET", "http://localhost/psycho_help/profile/access/usersinput.php?data=" + data + "&dbname=user_info"+"&var="+req, true);
        xhttp.send();





    }
}
function validate() {
    var req = "login"
    var response = [
        [], [] ,[],[]
    ];

    if ($('#loginform')[0].checkValidity()) {
        var email =document.getElementById("lemail").value;
        var password= document.getElementById("lpassword").value;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            console.log(this.readyState + " " + this.status + " " + xhttp.responseText);
            if (this.readyState == 4 && this.status == 200) {
               // alert(xhttp.responseText);
                response = xhttp.responseText
                var res = JSON.parse(response);
                var flag = res['flag'];
                if(flag==0)
                {
                    alert(res['msg']);

                }
                else {
                   var fname = res['fname'];
                   var lname = res['lname'];
                    var admin = res['admin'];



                    localStorage.setItem("email",email);
                    localStorage.setItem("lname",lname);
                    localStorage.setItem("fname",fname);
                    $.ajax({
                        url: "http://localhost/psycho_help/profile/access/setsession.php",
                        type: "GET",
                        data: {"fname": fname,"lname": "lname","email":email,"admin":admin}

                    });
                    if(admin == 1)
                        window.location = "../access/user_profile_admin.php";
                    else
                        window.location = "../access/user_profile.php";
                    //alert(xhttp.responseText);


                }
            }
        };
        xhttp.open("GET", "../access/usersinput.php?email=" + email + "&pass="+password+"&var="+req, true);
        xhttp.send();

    }

}
