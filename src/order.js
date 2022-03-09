$(document).ready(function () {
  // jQuery methods go here...
  console.log("hello");
  $.ajax({
    method: "GET",
    url: "controlr.php",
    data: { action: "getOrders" },
    dataType: "JSON",
  }).done(function (data) {
    console.log("in respo");
    console.log(data);
    gData = data;

    displayAllUser(data, 1);
  });
});

let gData;

let currpage = 1;

$(".pagination").on("click", "li a", function () {
  // let cat = $("#option").val();
  let page = $(this).text();
  console.log("page" + page);
  if (page == "Next") {
    currpage = 1 + parseInt(currpage);
  } else if (page == "Previous") {
    currpage = parseInt(currpage) - 1;
  } else {
    currpage = page;
  }

  console.log(currpage);
  displayAllUser(gData, currpage);
});

function displayAllUser(data, pageno) {
  let ps = (pageno - 1) * 4 + 1 - 1;

  let pe = ps + 3;
  if (data.length < pe) {
    pe = data.length - 1;
  }
  let str = "";
  for (let i = ps; i <= pe; i++) {
    let obj = data[i];

    str +=
      "<tr><td>" +
      obj.order_id +
      "</td>\
        <td>" +
      obj.product_id +
      "</td>\
        <td>" +
      obj.product_name +
      "</td>\
        <td>" +
      obj.product_price +
      "</td>\
        <td>" +
      obj.quantity +
      "</td>\
      <td>" +
      obj.status +
      "</td>\
        </tr>";
  }

  let len = Math.ceil(data.length / 4);
  console.log(len);
  // console.log(pageno);
  let page = "";
  if (pageno != 1) {
    page +=
      ' <li class="page-item ">\
     <a class="page-link" href="#" tabindex="-1" ">Previous</a>\
 </li>';
  }

  for (let i = 1; i <= len; i++) {
    if (i == parseInt(pageno)) {
      page +=
        '<li class="page-item"><a class="page-link active" href="#">' +
        i +
        "</a></li>";
    } else {
      page +=
        '<li class="page-item"><a class="page-link  " href="#">' +
        i +
        "</a></li>";
    }
  }

  if (pageno != len) {
    page +=
      '<li class="page-item">\
      <a class="page-link" href="#">Next</a>\
  </li> ';
  }
  $("#table-body").html(str);
  $("#paginaton").html(page);
}
