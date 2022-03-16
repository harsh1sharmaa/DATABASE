$(document).ready(function(){

    // jQuery methods go here...
    let id=$("#id").val()
    console.log("hello");
    $.ajax({
       
        method: "POST",
        url: "controlr.php",
        data: { id:id ,
            action:"getDetailsbyId" },
         dataType: "JSON"
    }).done(function (data) {
        console.log("in ")
       console.log(data);

       displaydetails(data);

    });
  
  });

// //   $("#table-body").on("click", ".deletebtn", function (e) {
// //     e.preventDefault();
// //     let pid = $(this).data('pid');
// //     let action = $(this).data('action');
// //     console.log("add click")
// //     console.log(pid);
// //     console.log(action);
// //     $.ajax({
// //         method: "GET",
// //         url: "controlr.php",
// //         data: { id: pid, action: "actionForpermission",value:action },
// //         //  dataType: "JSON"
// //     }).done(function (data) {

// //            console.log(data);
       

// //     });


// // })
function displaydetails(data){
    let obj=data[0];

let str=' <div class=" row  mt-5">\
<div class="col col-sm-12 col-md-6">\
    <img src="./ustora/img/'+obj.img+'" alt="..." class="img-thumbnail">\
</div> <div class=" col col-sm-12 col-md-6 p-5 ">\
<h1 class="float-left">category => '+obj.category+'</h1>\
<h1 class="float-left">Name => '+obj.name+'</h1>\
<div class="d-flex justify-content-between">\
    <div class="d-flex">\
        <h4 class="m-2 "><del>$199</del></h4>\
        <h2 class="font-weight-bold">$'+obj.price+'</h2>\
    </div>\
    <div>\
        <i class="fa-solid fa-star"></i>\
        <i class="fa-solid fa-star"></i>\
        <i class="fa-solid fa-star"></i>\
        <i class="fa-solid fa-star"></i>\
        <i class="fa-solid fa-star"></i>\
        ('+obj.rating+' star)\
    </div>\
</div>\
<div class="mt-3">\
   '+obj.descr+'\
</div>\
<div class="d-flex justify-content-between mt-3">\
    <div class="d-flex input">\
        <h1> <i class="fa-solid fa-circle-arrow-up m-4"></i></h1>\
        <h3 class="m-4">1</h3>\
        <h1><i class="fa-solid fa-circle-down m-4"></i></h1>\
    </div>\
    <div>\
        <button type=button class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i>add To\
            Cart</button>\
    </div>\
</div>\
<div>\
    <p>SKU :<a class="gray">12</a></p>\
    <p>category : <a href="#">phone</a></p>\
    <p>tag : <a class="gray">screen</a></p>\
    <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-share-nodes p-2 ">\
        </i>share</button>\
</div>\
<div>\
</div>\
<div>\
    <div class="links d-flex">\
        <a href="#" class="ext-sm-center nav-link   m-3 float-left ">description</a>\
        <a href="#" class="ext-sm-center nav-link disabled  m-3 ">review</a>\
    </div>\
</div>\
</div>'
    $("#dynamic").html(str);


  }
  