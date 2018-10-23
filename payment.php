<!DOCTYPE html>
<html>
<style>
input[type=text], select{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {

    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>


<center><div>
  <form action="/action_page.php">
    <label for="fname"></label>
    <input type="text" id="fname" name="firstname" placeholder="Your Name..">

    <label for="lname"></label>
    <input type="text" id="lname" name="lastname" placeholder="Your last Name..">
	
	<label for="Email-id"></label>
    <input type="text" id="Email-id" name="email-id" placeholder=" Your Email-Id..">

	<label for="Contact"></label>
    <input type="text" id="contact no" name="Contact no" placeholder="Your Contact No..">


    <label for="Pyment By"></label>
    <select id="Payment By" name="Payment By">
      <option value="Payment By">Payment By</option>
      <option value="Credit Card">Credit Card</option>
	   <option value="Debit card">Debit Card</option>
    </select>
	
	
	<label for="Contact"></label>
    <input type="text" id="contact no" name="Contact no" placeholder="Your Contact No..">
	
	
	<label for="card"></label>
    <input type="text" id="card" name="Card no" placeholder="Card No.">
	
	
	<label for="Date"></label>
    <input type="text" id="Date" name="Date" placeholder="MM/DD/YY">
  
    <input type="Submit" value="Pay">
  </form>
</div></center>

</body>
</html>
