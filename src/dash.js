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
       gData=data;

       displayAllUser(data,1);
       

    });
  
  });

  let gData;

  $("#table-body").on("click", ".deletebtn", function (e) {
    e.preventDefault();
    let pid = $(this).data('pid');
    let action = $(this).data('action');
    console.log("add click")
    console.log(pid);
    console.log(action);
    $.ajax({
        method: "GET",
        url: "controlr.php",
        data: { id: pid, action: "actionForpermission",value:action },
        //  dataType: "JSON"
    }).done(function (data) {

           console.log(data);
         

    });


})

let currpage=1;

$(".pagination").on("click", "li a", function () {
  // let cat = $("#option").val();
  let page = $(this).text();
  console.log("page"+page);
  if(page=='Next'){
  currpage=1+parseInt(currpage);
  
  }else if(page=='Previous'){

    currpage=parseInt(currpage)-1;
  }else{
    currpage=page;
  }

  console.log(currpage);
  displayAllUser(gData,currpage)

})

  function displayAllUser(data,pageno){
    let ps = ((pageno - 1) * 4 + 1) - 1;

    let pe = ps + 3;
    if(data.length<pe){
      pe=data.length-1;
    }
let str=""
    for(let i=ps;i<=pe;i++){

        let obj=data[i];

        str+="<tr><td>"+obj.user_id+"</td>\
        <td>"+obj.username+"</td>\
        <td>"+obj.email+"</td>\
        <td>"+obj.role+"</td>\
        <td>"+obj.permission+"</td>\
        <td>"+ "<a href=" + " # class='btn btn-success deletebtn' data-action=true  data-pid=" +obj.user_id + ">aprove</a><a href=" + " # class='btn btn-danger deletebtn' data-action=false data-pid=" +obj.user_id + ">restricted</a>"+"</td>\
        </tr>"    

    }


    let len =Math.ceil( data.length / 4);
  console.log(len);
  // console.log(pageno);
  let page = "";
  if (pageno != 1) {
    page += ' <li class="page-item ">\
     <a class="page-link" href="#" tabindex="-1" ">Previous</a>\
 </li>'

  }

  for (let i = 1; i <= len; i++) {

    if (i == parseInt(pageno)) {
      page += '<li class="page-item"><a class="page-link active" href="#">' + i + '</a></li>'
    } else {
      page += '<li class="page-item"><a class="page-link  " href="#">' + i + '</a></li>'
    }


  }

  if (pageno != len) {
    page += '<li class="page-item">\
      <a class="page-link" href="#">Next</a>\
  </li> '

  }
    $("#table-body").html(str);
    $("#paginaton").html(page);


  }
  