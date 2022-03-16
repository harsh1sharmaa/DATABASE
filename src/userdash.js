$(document).ready(function () {

    // jQuery methods go here...
  
    console.log("hello");
    let email=$("#loginuser").val();
    console.log(email);
    
    $.ajax({
  
      method: "GET",
      url: "controlr.php",
      data: { 
          email:email,
          action: "getuserData" },
      dataType: "JSON"
    }).done(function (data) {
      console.log("in respo")
      console.log(data);
      gData = data;
  
    //   displayAllProducts(data, '', 1);
  
    });
  
  });
  let gData;
  