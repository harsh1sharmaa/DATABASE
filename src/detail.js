$(document).ready(function(){

    // jQuery methods go here...
    console.log("hello");
    $.ajax({
       
        method: "GET",
        url: "controlr.php",
        data: { action:"getproductfordisplay" },
         dataType: "JSON"
    }).done(function (data) {
        console.log("in respo")
       console.log(data);

       displayAllUser(data);

    });
  
  });

//   $("#table-body").on("click", ".deletebtn", function (e) {
//     e.preventDefault();
//     let pid = $(this).data('pid');
//     let action = $(this).data('action');
//     console.log("add click")
//     console.log(pid);
//     console.log(action);
//     $.ajax({
//         method: "GET",
//         url: "controlr.php",
//         data: { id: pid, action: "actionForpermission",value:action },
//         //  dataType: "JSON"
//     }).done(function (data) {

//            console.log(data);
       

//     });


// })

  function displayAllUser(data){
let str='';
    for(let i=0;i<data.length;i++){
        let obj=data[i]

        
            //   str+='<div class="col-md-3 col-sm-6">\
            //   <div class="single-shop-product">\
            //       <div class="product-upper"><img class="img-thumbnail" src="img/'+obj.img+'" alt="">\
            // </div>\
            // <h4 style="width: 10rem;"><a href="">'+obj.name+':P</a></h4>\
            // <div class="product-carousel-price">\
            //     <ins>$'+obj.price+'.00</ins> <del>$'+"999"+'.00</del>\
            // </div>\
            // <div class="product-option-shop">\
            //     <a class=" btn btn-warning add_to_cart_button" \
            //     data-quantity="1" data-product_sku="" data-product_id="70" \
            //     rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>\
            // </div></div></div>'

           str+= '<div class="col col-md-3 col-sm-6 m-4">\
            <div class="card" style="width: 18rem;">\
              <img src="img/'+obj.img+'" class="img-fluid" alt="...">\
              <div class="each-movie">\
                <p class="card-text"></p>\
                <h4 style="width: 10rem;"><a href="">'+obj.name+':P</a></h4>\
                <p>J.R Rain</p>\
                <i class="fa-solid fa-star"></i>\
                <i class="fa-solid fa-star"></i>\
                <i class="fa-solid fa-star"></i>\
                <i class="fa-solid fa-star"></i>\
                <div class="d-flex justify-content-between">\
                  <p><i class="fa-solid fa-star"></i></p>\
                  <ins>$'+obj.price+'.00</ins> <del>$'+"999"+'.00</del></div>\
                  <a class=" btn btn-warning add_to_cart_button" \
                     data-quantity="1" data-product_sku="" data-product_id="70" \
                    rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>\
                   </div></div></div>'



    }

    $("#products").html(str);


  }
  