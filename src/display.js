$(document).ready(function () {

  // jQuery methods go here...

  console.log("hello");
  
  $.ajax({

    method: "GET",
    url: "controlr.php",
    data: { action: "getproductfordisplay" },
    dataType: "JSON"
  }).done(function (data) {
    console.log("in respo")
    console.log(data);
    gData = data;

    displayAllProducts(data, '', 1);

  });

});
let gData;


function filter() {

  // console.log("HELL")
  console.log($("#option").val())
  let option = $("#option").val();
  $.ajax({

    method: "GET",
    url: "controlr.php",
    data: { category: option, action: "getproductbyId" },
    dataType: "JSON"
  }).done(function (data) {
    console.log("in respo")
    console.log(data);
    gData = data;
    displayAllProducts(data, option,1);

  });


}
let currpage=1;
$(".pagination").on("click", "li a", function () {
  let cat = $("#option").val();
  let page = $(this).text();
  console.log("page"+page);
  if(page=='Next'){
    currpage=1+parseInt(currpage);
    
    }else if(page=='Previous'){
  
      currpage=parseInt(currpage)-1;
    }else{
      currpage=page;
    }
  console.log(cat);
  displayAllProducts(gData,cat,currpage)

})

$("#products").on("click", "#addToCart", function (e) {
e.preventDefault();
  // let cat = $("#option").val();
  let id = $(this).data('id');
  let name = $(this).data('name');
  let price = $(this).data('price');
  let quantity = $(this).data('quantity');
  console.log(id);
  console.log(name);
  console.log(price);
  $.ajax({

    method: "GET",
    url: "controlr.php",
    data: { id: id,
      name:name,
      price:price,
      quantity:quantity,
       action: "addToCart" },
    dataType: "JSON"
  }).done(function (data) {
    // console.log("in respo")
    // console.log(data);
    // gData = data;
    // displayAllProducts(data, option,1);

  });
})








function displayAllProducts(data, option, pageno) {
  let ps = ((pageno - 1) * 3 + 1) - 1;

  let pe = ps + 2;
  if(data.length<pe){
    pe=data.length-1;
  }
  let str = '';
  for (let i = ps; i <= pe; i++) {
    let obj = data[i]

    if (obj.category == option || option == '') {

      str += '<div class="col col-md-3 col-sm-6 m-4">\
            <div class="card" style="width: 18rem;">\
              <img src="img/'+ obj.img + '" class="img-fluid" alt="...">\
              <div class="each-movie">\
                <p class="card-text"></p>\
                <h4 style="width: 10rem;"><a id="details" href="detail.php?id='+ obj.Id + '"?  data-pid=' + obj.Id + '">' + obj.name + ':P</a></h4>\
                <p>J.R Rain</p>\
                <i class="fa-solid fa-star"></i>\
                <i class="fa-solid fa-star"></i>\
                <i class="fa-solid fa-star"></i>\
                <i class="fa-solid fa-star"></i>\
                <div class="d-flex justify-content-between">\
                  <p><i class="fa-solid fa-star"></i></p>\
                  <ins>$'+ obj.price + '.00</ins> <del>$' + "999" + '.00</del></div>\
                  <a id="addToCart" class=" btn btn-warning add_to_cart_button" \
                     data-quantity="1" data-name='+obj.name+' data-price='+obj.price+'  data-id='+obj.Id+' \
                    rel="nofollow" href="">Add to cart</a>\
                   </div></div></div>'

    }

  }
 
  let len = data.length / 3;
  // console.log(len);
  // console.log(pageno);
  let page = "";
  if (pageno != 1) {
    page += ' <li class="page-item ">\
     <a class="page-link" href="#" tabindex="-1" >Previous</a>\
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




  $("#products").html(str);
  $("#paginaton").html(page);



}
