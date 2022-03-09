$(document).ready(function () {

    // jQuery methods go here...

    console.log("hello i cart");
    $.ajax({

        method: "GET",
        url: "controlr.php",
        data: { action: "getCart" },
        //   dataType: "JSON"
    }).done(function (data) {
        //   console.log("in respo")
        let ndata = JSON.parse(data);
        console.log(ndata);
        console.log(Object.values(ndata));
        ndata=Object.values(ndata)
        //   console.log(JSON.parse(ndata));
        //   gData = data;
        displayTable(ndata);


    });

});
 


$("#table").on("click", ".btn-secondary", function (e) {

    // let cat = $("#option").val();
    let val = $(this).siblings(".w-20").val();
    let id = $(this).data("id");

    console.log(id);
    console.log(val);
      $.ajax({

            method: "GET",
            url: "controlr.php",
            data: { 
                id:id ,
                qnty:val,
                action: "updateQuantity" },
            // dataType: "JSON"
          }).done(function (data) {
    //   console.log("in respo")
      let ndata= JSON.parse(data);
        console.log(ndata);
        // console.log(JSON.parse(data));
    //   //   gData = data;
      displayTable(ndata);

    });
});
$("#table").on("click", ".delete", function (e) {

    // let cat = $("#option").val();
    // let val = $(this).siblings(".w-20").val();
    let id = $(this).data('id');

    console.log(id);
    // console.log(val);
      $.ajax({

            method: "GET",
            url: "controlr.php",
            data: { 
                id:id ,
                action: "removeFromCart" },
          //   dataType: "JSON"
          }).done(function (data) {
    //   console.log("in respo")
    let ndata= JSON.parse(data);
    console.log(ndata);
    // console.log(JSON.parse(data));
//   //   gData = data;
  displayTable(ndata);


    });
});

function onclick(id){
    console.log(id);
}









function displayTable(data) {
    let tprice = 0;


    let str = '<table class="table"><tr><th>Product</th><th>Price</th><th>Qty</th><th>Total</th>'
    for (let i = 0; i < data.length; i++) {
        let obj = data[i];
        console.log(obj);
        tprice += parseInt(obj['quantity']) * parseInt(obj['price']);
        str += '</tr><td>' + obj['name'] + '</td>\
     <td>$'+ obj['price'] + '</td>\
     <td>\
         <input type="text" id=newQuantity value="'+ obj.quantity +'"class="w-20">\
         <a href="#" type="button" data-id='+ obj.id + ' class="btn btn-secondary ms-1 w-20" >update </a>\
         <a href="#" data-id="'+obj.id+'"class="delete link-danger btn btn-warning">Remove</a>\
     </td>\
     <td>$'+ parseInt(obj['quantity']) * parseInt(obj['price']) + '</td></tr>'


    }
    str += '<tfoot>\
    <tr>\
        <td colspan="4" class="text-end">$'+ tprice + '</td>\
    </tr>\
</tfoot> </table>'

    $("#table").html(str);
}

