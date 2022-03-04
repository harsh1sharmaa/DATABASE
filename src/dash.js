$(document).ready(function(){

    // jQuery methods go here...
    console.log("hello");
    $.ajax({
       
        method: "GET",
        url: "controlr.php",
        data: { action:"getAllUser" },
         dataType: "JSON"
    }).done(function (data) {
        console.log("in respo")
       console.log(data);

       displayAllUser(data);

    });
  
  });

  function displayAllUser(data){
let str=""
    for(let i=0;i<data.length;i++){

        let obj=data[i];

        str+="<tr><td>"+obj.user_id+"</td>\
        <td>"+obj.username+"</td>\
        <td>"+obj.email+"</td>\
        <td>"+obj.role+"</td>\
        <td>"+obj.permission+"</td>\
        <td>"+ "<a href=" + " # class=btn btn-success deletebtn  data-pid=" +obj.user_id + ">aprove</a><a href=" + " # class=btn btn-success deletebtn  data-pid=" +obj.user_id + ">restricted</a>"+"</td>\
        </tr>"    

    }

    $("#table-body").html(str);


  }
  