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
    height: 1000px; /* only for demonstration, should be removed */
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
    height: 1000px; /* only for demonstration, should be removed */
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
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
<article>
<h1>ฉันจะ Run For ตุ๊ดตู่</h1>
<p>
<form method="post" action="result3.php">  
  Name:<br>
  <input type="text" name="name">
  <br> 
  ID:<br>
  <input name="id" type="text">
  <br>  
  Age:<br>
  <input name="age" type="text">
  <br> 
  Gender:<br>
  <form>
  <input type="radio" name="gender" value="Male"> Male<br>
  <input type="radio" name="gender" value="Female"> Female<br>
  </form>
  <br>
  <br>
  Mobile:
  <input name="mobile" type="text">
  <br> 
  Email:
  <input name="email" type="text">
  <br><br> 
  Size:
  <form>
  <input type="radio" name="size" value="S" > S<br>
  <input type="radio" name="size" value="M"> M<br>
  <input type="radio" name="size" value="L"> L<br>
  <input type="radio" name="size" value="XL"> XL<br>
  </form>
  <br>
  เคยวิ่งมาก่อนไหม?
  <form>
  <input type="radio" > เคย <br>
  <input type="radio" > ไม่เคย <br>
  <br>
  </form>
  ทำไมถึงอยากเข้าร่วม?<br>
  <form action="/action_page.php">
  <textarea name="message" style="width:300px; height:100px;"></textarea>
  <br>
</form>
<br>
<img src="img/EsteemedRingedDuckbillcat-small.gif" width="200" height="100"> 
<br>
<br>
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