<html>
<head>
<link rel="stylesheet" type="text/css" href="1-50.css">
<title>แบบทดสอบ</title>

</head>
<body>
<div class="container">
<div class="inner">
<img src =04.jpg width=100% hight=100%>
<div class="header">
<h1>คลังข้อสอบวิชาชีพครู</h1><br>
<h2>บทที่ 2 วิชาการใช้ภาษาอังกฤษเพื่อการสื่อสาร</h2>
</div>
<?php
//คะแนนเรืชิ่มต้น
$score=0;
//แสดงชื่อเมลผู้ทำข้อสอบ
echo "คุณ".$_POST["name"]."<br>";
echo "Email".$_POST["email"]."<br>";

//ประมวณผลข้อ1
echo">>ข้อ1.คุณเลือกคำตอบ<br>";
echo $_POST["book1"]."<br>";
//ตรวจคำตอบ
if($_POST["book1"]=="B. Oh, yes, it’s raining cats and dogs.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ2
echo">>ข้อ2.คุณเลือกคำตอบ<br>";
echo $_POST["book2"]."<br>";
//ตรวจคำตอบ
if($_POST["book2"]=="A. Once")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ3
echo">>ข้อ3.คุณเลือกคำตอบ<br>";
echo $_POST["book3"]."<br>";
//ตรวจคำตอบ
if($_POST["book3"]=="C. Oh, that OK. Clam down. It’s only a cat.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ4
echo">>ข้อ4.คุณเลือกคำตอบ<br>";
echo $_POST["book4"]."<br>";
//ตรวจคำตอบ
if($_POST["book4"]=="D. give")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ5
echo">>ข้อ5.คุณเลือกคำตอบ<br>";
echo $_POST["book5"]."<br>";
//ตรวจคำตอบ
if($_POST["book5"]=="A. dangerous")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ6
echo">>ข้อ6.คุณเลือกคำตอบ<br>";
echo $_POST["book6"]."<br>";
//ตรวจคำตอบ
if($_POST["book6"]=="B. faithful")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ7
echo">>ข้อ7.คุณเลือกคำตอบ<br>";
echo $_POST["book7"]."<br>";
//ตรวจคำตอบ
if($_POST["book7"]=="C. terrible")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ8
echo">>ข้อ8.คุณเลือกคำตอบ<br>";
echo $_POST["book8"]."<br>";
//ตรวจคำตอบ
if($_POST["book8"]=="C. The transport")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ9
echo">>ข้อ9.คุณเลือกคำตอบ<br>";
echo $_POST["book9"]."<br>";
//ตรวจคำตอบ
if($_POST["book9"]=="B. In a building.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวณผลข้อ10
echo">>ข้อ10.คุณเลือกคำตอบ<br>";
echo $_POST["book10"]."<br>";
//ตรวจคำตอบ
if($_POST["book10"]=="A. Two ice creams will cost the same as one.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else 
	{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 11
echo"ข้อ  11 คุณเลือกคำตอบ <br>";
echo $_POST["book11"]."<br>";
//ตรวจคำตอบ
if($_POST["book11"]=="D. He has been working in California since February 1997.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 12
echo"ข้อ 12 คุณเลือกคำตอบ <br>";
echo $_POST["book12"]."<br>";
//ตรวจคำตอบ
if($_POST["book12"]=="D. I've heard some interesting information about our competitors. ")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 13
echo"ข้อ 13 คุณเลือกคำตอบ <br>";
echo $_POST["book13"]."<br>";
//ตรวจคำตอบ
if($_POST["book13"]=="A. She hasn't heard anything recently about them.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 14
echo"ข้อ 14 คุณเลือกคำตอบ <br>";
echo $_POST["book14"]."<br>";
//ตรวจคำตอบ
if($_POST["book14"]=="A. I probably won't take the early train tomorrow. ")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 15
echo"ข้อ 15 คุณเลือกคำตอบ <br>";
echo $_POST["book15"]."<br>";
//ตรวจคำตอบ
if($_POST["book15"]=="B. please fill out your details with this form.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 16
echo"ข้อ 16 คุณเลือกคำตอบ <br>";
echo $_POST["book16"]."<br>";
//ตรวจคำตอบ
if($_POST["book16"]=="D. are their plans for the future.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 17
echo"ข้อ 17 คุณเลือกคำตอบ <br>";
echo $_POST["book17"]."<br>";
//ตรวจคำตอบ
if($_POST["book17"]=="D. Messages")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 18
echo"ข้อ 18 คุณเลือกคำตอบ <br>";
echo $_POST["book18"]."<br>";
//ตรวจคำตอบ
if($_POST["book18"]=="C. produce")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 19
echo"ข้อ 19 คุณเลือกคำตอบ <br>";
echo $_POST["book19"]."<br>";
//ตรวจคำตอบ
if($_POST["book19"]=="C. are giving")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 20
echo"ข้อ 20 คุณเลือกคำตอบ <br>";
echo $_POST["book20"]."<br>";
//ตรวจคำตอบ
if($_POST["book20"]=="C. until")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 21
echo"ข้อ 21 คุณเลือกคำตอบ <br>";
echo $_POST["book21"]."<br>";
//ตรวจคำตอบ
if($_POST["book21"]=="C. Choosing a good restaurant.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 22
echo"ข้อ 22 คุณเลือกคำตอบ <br>";
echo $_POST["book22"]."<br>";
//ตรวจคำตอบ
if($_POST["book22"]=="C. On Friday.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ 23 คุณเลือกคำตอบ <br>";
echo $_POST["book23"]."<br>";
//ตรวจคำตอบ
if($_POST["book23"]=="D. It’s for Devi’s birthday. ")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}


echo"ข้อ 24 คุณเลือกคำตอบ <br>";
echo $_POST["book24"]."<br>";
//ตรวจคำตอบ
if($_POST["book24"]=="D. In a cloth shop. ")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ 25 คุณเลือกคำตอบ <br>";
echo $_POST["book25"]."<br>";
//ตรวจคำตอบ
if($_POST["book25"]=="D. A room in a store in which one can try on clothes before deciding whether to purchase them.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ 26 คุณเลือกคำตอบ <br>";
echo $_POST["book26"]."<br>";
//ตรวจคำตอบ
if($_POST["book26"]=="D. The Professor of her literature class.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ 27 คุณเลือกคำตอบ <br>";
echo $_POST["book27"]."<br>";
//ตรวจคำตอบ
if($_POST["book27"]=="A. To ask permission for school leave.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ 28 คุณเลือกคำตอบ <br>";
echo $_POST["book28"]."<br>";
//ตรวจคำตอบ
if($_POST["book28"]=="B. About a week.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ 29 คุณเลือกคำตอบ <br>";
echo $_POST["book29"]."<br>";
//ตรวจคำตอบ
if($_POST["book29"]=="A. Making an appointment for a haircut")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ30 คุณเลือกคำตอบ <br>";
echo $_POST["book30"]."<br>";
//ตรวจคำตอบ
if($_POST["book30"]=="D. A quarter to eleven on Saturday.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//ประมวลผลข้อ 31 
        echo"ข้อ 31 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book31"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book31"]=="A. globes") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ 32 
        echo"ข้อ 32 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book32"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book32"]=="A. helps students learn the material themselves.") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }
        
//ประมวลผลข้อ 33 
        echo"ข้อ 33 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book33"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book33"]=="D. To offer support and advice when needed") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }
        
//ประมวลผลข้อ 34 
        echo"ข้อ 34 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book34"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book34"]=="C. Learning at all stages of life") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ 35 
        echo"ข้อ 35 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book35"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book35"]=="B. Study skill and self-assessment. ") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ 36 
        echo"ข้อ 36 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book36"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book36"]=="D. in case you may not find one when you are in need of it") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ 37 
        echo"ข้อ 37 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book37"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book37"]=="B. Please don’t forget to fasten your seat belt.") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ 38 
        echo"ข้อ 38 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book38"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book38"]=="D. to read the address in the paper as she couldn’t read the letter clearly.") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ 39 
        echo"ข้อ 39 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book39"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book39"]=="C. I found out that something was wrong.") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ 40 
        echo"ข้อ 40 คุณเลือกคำตอบ <br>"; 
        echo $_POST["book40"]."<br>"; 
 
//ตรวจคำตอบ 
        if($_POST["book40"]=="D. Then you wouldn’t recommend it, would you?") 
        {
            echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;
        } 
        else 
        {
            echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";
        }

//ประมวลผลข้อ41
echo"ข้อ41 คุณเลือกคำตอบ <br>";
echo $_POST["book41"]."<br>";
//ตรวจคำตอบ
if($_POST["book41"]=="B. out")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}


//ประมวลผลข้อ42
echo"ข้อ42 คุณเลือกคำตอบ <br>";
echo $_POST["book42"]."<br>";
//ตรวจคำตอบ
if($_POST["book42"]=="B. down")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}


echo"ข้อ43 คุณเลือกคำตอบ <br>";
echo $_POST["book43"]."<br>";
//ตรวจคำตอบ
if($_POST["book43"]=="B. up it in")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}



echo"ข้อ44 คุณเลือกคำตอบ <br>";
echo $_POST["book44"]."<br>";
//ตรวจคำตอบ
if($_POST["book44"]=="D. in")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}


echo"ข้อ45 คุณเลือกคำตอบ <br>";
echo $_POST["book45"]."<br>";
//ตรวจคำตอบ
if($_POST["book45"]=="C. on")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ46 คุณเลือกคำตอบ <br>";
echo $_POST["book46"]."<br>";
//ตรวจคำตอบ
if($_POST["book46"]=="B. Suda and Manee like to have some cookies.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}


echo"ข้อ47 คุณเลือกคำตอบ <br>";
echo $_POST["book47"]."<br>";
//ตรวจคำตอบ
if($_POST["book47"]=="A. Ok, I will.")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ48 คุณเลือกคำตอบ <br>";
echo $_POST["book48"]."<br>";
//ตรวจคำตอบ
if($_POST["book48"]=="B. Here is your 700 baht change")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

echo"ข้อ49 คุณเลือกคำตอบ <br>";
echo $_POST["book49"]."<br>";
//ตรวจคำตอบ
if($_POST["book49"]=="B. pick up... come along")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}


echo"ข้อ50 คุณเลือกคำตอบ <br>";
echo $_POST["book50"]."<br>";
//ตรวจคำตอบ
if($_POST["book50"]=="C. turn on… clean up")
{echo "<font color='green'>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color='red'>ยังไม่ถูกต้อง</font>"."<br>";}

//แสดงคะแนน
echo "คะแนนที่ได้"."$score";
?>
</div>
</div>
</body>
</html>