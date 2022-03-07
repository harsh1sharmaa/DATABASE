$(document).ready(function () {

    // jQuery methods go here...
    console.log("hello");
    $.ajax({

        method: "GET",
        url: "controlr.php",
        data: { action: "getAllProduct" },
        dataType: "JSON"
    }).done(function (data) {
        console.log("in respo")
        console.log(data);

        displayAllProducts(data);

    });

});

$("#add").click(function () {

    let id = $("#product_id").val();
    let name = $("#productname").val();
    let price = $("#price").val();
    let category = $("#category").val();
    let status = $("#status").val();

    $.ajax({
        method: "GET",
        url: "controlr.php",
        data: {
            id: id,
            action: "addproduct",
            name: name,
            price: price,
            category: category,
            status: status

        },
        // dataType: "JSON"
    }).done(function (data) {

        // console.log(data);
        location.replace("./products.php")


    });

});

//   $("#table-body").on("click", ".addtn", function (e) {
//     e.preventDefault();
//     let pid = $(this).data('pid');
//     let status = $(this).data('action');
//     console.log("add click")
//     // console.log(pid);
// //     console.log(action);
//     $.ajax({
//         method: "GET",
//         url: "controlr.php",
//         data: { id: pid, action: "addIntoDisplay",value:status },
//          dataType: "JSON"
//     }).done(function (data) {

// //            console.log(data);
// //         

//     });


// })

// function add() {

//     let id = $("#product_id").val();
//     let name = $("#productname").val();
//     let price = $("#price").val();
//     let category = $("#category").val();
//     let status = $("#status").val();

//     $.ajax({
//         method: "GET",
//         url: "controlr.php",
//         data: {
//             id: id,
//             action: "addproduct",
//             name: name,
//             price: price,
//             category: category,
//             status: status

//         },
//         dataType: "JSON"
//     }).done(function (data) {

//         console.log(data);


//     });

// }

function displayAllProducts(data) {
    let str = ""
    for (let i = 0; i < data.length; i++) {

        let obj = data[i];

        str += "<tr><td>" + obj.product_id + "</td>\
        <td>"+ obj.product_name + "</td>\
        <td>"+ obj.product_price + "</td>\
        <td>"+ obj.category + "</td>\
        <td>"+ obj.status + "</td>\
        <td>"+ "<a href=" + " # class='btn btn-success addbtn' data-action=add  data-pid=" + obj.product_id + ">ADD</a></td>\
        </tr>"

    }

    $("#table-body").html(str);


}

