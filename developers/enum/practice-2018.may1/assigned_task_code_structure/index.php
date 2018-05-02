

<!DOCTYPE html>
<html>
  <head>
    <title>bookbucket</title>
    <link rel="stylesheet" type="text/css" href="css\index.css">
    <script src="js\libs.js"></script>
  </head>

  <body>
		<h1 align = "center">Welcome To <span style="color:#2fb3e0">Bookbucket</span> !!!</h1>
		<h2 align = "center">A platform where one can <span style="color:#4194ad">BUY</span>, <span style="color:#4194ad">SELL</span> and <span style="color:#4194ad">RENT</span> books.</h2>

		<br><br><br>
    <div style="text-align:center;">
      <div style="border: 2px solid #a1a1a1; border-radius: 20px; display: inline-block;border: 1px solid #989fa5; text-align:center;background:#e8eef4;">
        <h3 style="text-align:center;color:#465360">Ordering Book Details</h3>
				<form action="controllers/Order.php" method="post" name="order_book">
					<table>
	          <tr>
	            <td style="color:#465360"><b>Book</b></td>
	            <td><input id="book_name" name="book_name" type="text" autofocus><br><span id="book_name_required" style="color:red;"></span></td>
	          </tr>
	          <tr>
	            <td style="color:#465360"><b>Author</b></td>
	            <td><input id="author" name="author" type="text"><br><span id="author_required" style="color:red;"></span></td>
	          </tr>
	          <tr>
	            <td style="color:#465360"><b>Quantity</b></td>
	            <td><input id="quantity" name="quantity" type="number"><br><span id="quantity_required" style="color:red;"></span></td>
	          </tr>
	          <tr>
	            <td style="color:#465360"><b>Cell Number</b></td>
	            <td><input id="cell_number" name="cell_number" type="text"><br><span id="cell_number_required" style="color:red;"></span></td>
	          </tr>
	          <tr>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td style="text-align: right;"><button onclick="return submitOrder()" type="submit" name="Submit" style="border: 2px solid #a1a1a1; border-radius: 20px;background: #dddddd;"><b>Submit Order</b></button></td>
	          </tr>
	        </table>
				</form>
				</div>
				<br><br><br>

        <form method= "post">
          	<input type = "submit" name = "register" value = "Register" style="border: 2px solid #a1a1a1; border-radius: 20px;">
          	<input type = "submit" name = "login" value = "Login" style="border: 2px solid #a1a1a1; border-radius: 20px;">
        </form>
    </div>
  <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/free-website-sign-up?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div></body>
</html>
