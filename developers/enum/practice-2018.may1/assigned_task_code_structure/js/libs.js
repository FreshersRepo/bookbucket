function submitOrder() {
    var book_name, author, quantity, cell_number;

    // DEBUG:
    // alert("inside post");

    book_name = document.getElementById("book_name").value;
    quantity = document.getElementById("quantity").value;
    author = document.forms["order_book"]["author"].value;
    cell_number = document.forms["order_book"]["cell_number"].value;

    if(book_name == "" && author == "" && quantity == "" && cell_number == "") {
      document.getElementById("book_name_required").innerHTML = "Book Name Required!";
      document.getElementById("author_required").innerHTML = "Author Required!";
      document.getElementById("quantity_required").innerHTML = "Quantity Required!";
      document.getElementById("cell_number_required").innerHTML = "Phone No. Required!";

      alert("Attention Needed !!!");
      return false;
    }

    if (book_name == null || book_name == "" || book_name == undefined) {
      document.getElementById("book_name_required").innerHTML = "Book Name Required!";
      return false;
    }
    if (book_name != "") {
      document.getElementById("book_name_required").innerHTML = "";
    }

    if (author == "") {
      document.getElementById("author_required").innerHTML = "Author Required!";
      return false;
    }
    if(author != "") {
      document.getElementById("author_required").innerHTML = "";
    }

    if (quantity == null || quantity == "" || quantity == undefined) {
      document.getElementById("quantity_required").innerHTML = "Quantity Required!";
      return false;
    }
    if (quantity != "") {
      document.getElementById("quantity_required").innerHTML = "";
    }

    if (cell_number == null || cell_number == "" || cell_number == undefined) {
      document.getElementById("cell_number_required").innerHTML = "Phone No. Required!";
      return false;
    }
    if (cell_number != "") {
      document.getElementById("cell_number_required").innerHTML = "";
    }
}

// NO Need js validation for post
// AS, done through HTML
/*
function post() {
  console.log("Watching...");
  console.log("function: post()");
  // DEBUG:
  // alert("Remove alert: works fine!");
  var description = document.getElementById("description").value;
  var sell = document.getElementById("purpose").checked;

  if(description == "") {
    document.getElementById("description_required").innerHTML = "Required!";
    console.log("- description: null");
    return false;
  } else if (!sell) {
    document.getElementById("description_required").innerHTML = "";
    document.getElementById("sell_required").innerHTML = "Required!";
    console.log("- sell: false");
    return false;
  }else {
    // TODO: make default: description textarea
    document.getElementById("description_required").innerHTML = "";
    console.log("- description: " + description);
  }
}
*/
