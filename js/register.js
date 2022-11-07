const myaction = {
  collect_data: function (e,data_type) {
    e.preventDefault();
    e.stopPropagation();
    var inputs = document.querySelectorAll("form input ,form select");

    let myform = new FormData();
    myform.append('data_type',data_type);
    for (let i = 0; i < inputs.length; i++) {
      myform.append(inputs[i].name, inputs[i].value);
    }
    myaction.send_data(myform);
  },
  send_data: function (form) {
    var ajax = new XMLHttpRequest();
    document.querySelector(".progress").classList.remove("d-none");
    // reset progress bar
    document.querySelector(".progress-bar").style.width = "0%";
      document.querySelector(".progress-bar").innerHTML =
        "Working..0%";
    ajax.addEventListener("readystatechange", function () {
      if (ajax.readyState == 4) {
        if (ajax.status == 200) {
          //all are fine
          myaction.handle_result(ajax.responseText);
        } else {
          console.log(ajax);
          alert("There is an error !!!");
        }
      }
    });
    ajax.upload.addEventListener("progress", function (e) {
      let percent = Math.round((e.loaded / e.total) * 100);
      document.querySelector(".progress-bar").style.width = percent + "%";
      document.querySelector(".progress-bar").innerHTML =
        "Working" + percent + "%";
    });
    ajax.open("post", "./php/register.php", true);//**********
    ajax.send(form);
  },
  handle_result:function(result){
    console.log(result);
    var obj= JSON.parse(result);
    if(obj.success)
    {
        alert("Profile Created Successfully !!");
        window.location.href= 'http://localhost:8080/LoginPage/login.html';//********
    }else{
        let error_inputs=document.querySelectorAll(".js-errors");
        for (let i = 0; i < error_inputs.length; i++) {
            error_inputs[i].innerHTML="";   
        }
        for(key in obj.errors)
        {
            document.querySelector(".js-error-"+key).innerHTML=obj.errors[key];
        }
    }
  }
};
