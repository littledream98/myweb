<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #eda590;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 700px; /* only for demonstration, should be removed */
    background: #f3e6ba;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #afcadc;
    height: 700px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #907665;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h3>Run for ตุ๊ตตู่ กันเถอะ</h3>
</header>
<section>
  <nav>
    <ul>
      <li><a href= "http://localhost/myweb/register_4.php">สมัคร Run</a></li>
      <li><a href="http://localhost/myweb/result4.php">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
<article>
<h1>ฉันจะ Run For ตุ๊ดตู่</h1>
<p>
<form method="post" action="result5.php">  
  Name: <input type="text" name="name">
  <br><br>
  Brith Date YYYY-MM-DD: <input type="text" name="brith">
  <br><br>
  Age: <input type="text" name="age">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
  Phone: <input type="text" name="phone">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  
  
  Preferred Shirt Size  :
  <input type="radio" name="size" value="SX">XS 36" 
  <input type="radio" name="size" value="L">S 38"
  <input type="radio" name="size" value="M">M 40"
  <input type="radio" name="size" value="L">L 42"
  <input type="radio" name="size" value="XL">XL 44"
  <input type="radio" name="size" value="XXL">XXL 46"
  <br><br>
  เคยวิ่งมาก่อนไหม?
  <input type="radio" name="com" value="Yes">เคย
  <input type="radio" name="com" value="No">ไม่เคย
  <br><br>
  ทำไมถึงอยากเข้าร่วมกิจกรรม?<br>
  <textarea name="why" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
<p>
</article>
</section>

<footer>
  <p>Footer</p>
</footer>
</body>
</html>