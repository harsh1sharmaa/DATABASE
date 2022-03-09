$(document).ready(function () {

    // jQuery methods go here...

    console.log("hello i cart");
    // $.ajax({

    //     method: "GET",
    //     url: "controlr.php",
    //     data: { action: "getCart" },
    //     //   dataType: "JSON"
    // }).done(function (data) {
    //     //   console.log("in respo")
    //     let ndata = JSON.parse(data);
    //     console.log(ndata);
    //     console.log(Object.values(ndata));
    //     ndata=Object.values(ndata)
    //     //   console.log(JSON.parse(ndata));
    //     //   gData = data;
    //     displayTable(ndata);


    // });

});

$("#submit").click(function (e) {
    // e.preventDefault();
    // console.log("hellowqwer")
    let firstName = $("#firstName").val();
    let lastName = $("#lastName").val();
    let username = $("#username").val();
    let email = $("#email").val();
 console.log(email);
    $.ajax({

        method: "GET",
        url: "controlr.php",
        data: {
            action: "placeOrder",
            firstName: firstName,
            lastName: lastName,
            username: username,
            email: email
        },
        //   dataType: "JSON"
    }).done(function (data) {

        // location.replace("./orderPlaced.php")
        //   console.log("in respo")
        // let ndata = JSON.parse(data);
        // console.log(ndata);
        // console.log(Object.values(ndata));
        // ndata = Object.values(ndata)
        // //   console.log(JSON.parse(ndata));
        // //   gData = data;
        // displayTable(ndata);


    });
})
