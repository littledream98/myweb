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
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
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
    <h1>สมัคร Run</h1>
    <form action="/action_page.php">
  ชื่อ:<br>
  <input name="ชื่อ" type="text">
  <br> 
  นามสกุล:<br>
  <input name="นามสกุล" type="text">
  <br>
  รหัสนักศึกษา:<br>
  <input name="รหัสนักศึกษา" type="text">
  <br>  
  อายุ:<br>
  <input name="อายุ" type="text">
  <br> 
  เพศ:<br>
  <form>
  <input type="เพศ" name="ชาย" value="ชาย"> ชาย<br>
  <input type="เพศ" name="หญิง" value="หญิง"> หญิง<br>
  </form>
  <br>
  ชั้นปี:<br>
  <form>
  <input type="radio" name="ชั้นปี" value="ปี1" > ปี1<br>
  <input type="radio" name="ชั้นปี" value="ปี2"> ปี2<br>
  <input type="radio" name="ชั้นปี" value="ปี3"> ปี3<br>
  <input type="radio" name="ชั้นปี" value="ปี4"> ปี4<br>
  <input type="radio" name="ชั้นปี" value="อื่นๆ">อื่นๆ <input name="อื่นๆ" type="text"> <br>
  </form>
  <br>
  เบอร์โทร:
  <input name="เบอร์โทร" type="text">
  <br> 
  E-mail:
  <input name="E-mail" type="text">
  <br><br> 
  ขนาดเสื้อ:
  <form>
  <input type="ขนาดเสื้อ" name="S" value="ขนาดเสื้อ" > S<br>
  <input type="ขนาดเสื้อ" name="M" value="ขนาดเสื้อ"> M<br>
  <input type="ขนาดเสื้อ" name="L" value="ขนาดเสื้อ"> L<br>
  <input type="ขนาดเสื้อ" name="XL" value="ขนาดเสื้อ"> XL<br>
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
  <input type="submit" value="ส่ง">
  </form> 

  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>