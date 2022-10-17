<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
<HTML>
<HEAD>
<TITLE>User Registration</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="login.php">Login</a>
			</div>
			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading">Registration</div>
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
				<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="signup-password" id="signup-password">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="confirm-password" id="confirm-password">
						</div>
					</div>
					<div class="row">
	
				<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Sign up">

							
                           
  </a> 
							
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function signupValidation() {
	var valid = true;

	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#username-info").html("").hide();
	$("#email-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>




<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
  <span>
    
  </span>
  <br>
  <span>
    
  </span>
</div>

<style>
    html {
  height: 100%;
  background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
  overflow: hidden;
}

#stars {
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 1922px 1702px #FFF , 1809px 1571px #FFF , 1245px 795px #FFF , 1763px 1696px #FFF , 1797px 658px #FFF , 1496px 1577px #FFF , 459px 1664px #FFF , 250px 772px #FFF , 628px 1083px #FFF , 1680px 1443px #FFF , 1817px 1517px #FFF , 105px 372px #FFF , 66px 1188px #FFF , 663px 1292px #FFF , 1880px 308px #FFF , 84px 1965px #FFF , 108px 874px #FFF , 706px 1004px #FFF , 900px 177px #FFF , 1213px 1525px #FFF , 553px 1548px #FFF , 1127px 1608px #FFF , 636px 846px #FFF , 1873px 526px #FFF , 1815px 1810px #FFF , 1935px 777px #FFF , 1451px 1221px #FFF , 1801px 1836px #FFF , 1568px 1893px #FFF , 1178px 578px #FFF , 1930px 375px #FFF , 582px 48px #FFF , 744px 1047px #FFF , 1291px 1045px #FFF , 1530px 1113px #FFF , 206px 1379px #FFF , 1955px 1427px #FFF , 685px 923px #FFF , 685px 1505px #FFF , 352px 1025px #FFF , 1768px 1740px #FFF , 1068px 1568px #FFF , 1386px 1237px #FFF , 1196px 69px #FFF , 1396px 511px #FFF , 1131px 1597px #FFF , 792px 473px #FFF , 291px 1573px #FFF , 1013px 1247px #FFF , 709px 1402px #FFF , 823px 1032px #FFF , 1693px 851px #FFF , 705px 517px #FFF , 1839px 594px #FFF , 104px 1967px #FFF , 1213px 347px #FFF , 797px 845px #FFF , 2px 1730px #FFF , 1475px 1384px #FFF , 1280px 690px #FFF , 1348px 1969px #FFF , 1013px 304px #FFF , 1525px 1079px #FFF , 738px 636px #FFF , 1609px 1686px #FFF , 1447px 26px #FFF , 893px 726px #FFF , 887px 180px #FFF , 802px 255px #FFF , 285px 894px #FFF , 352px 1976px #FFF , 1469px 1813px #FFF , 1958px 1324px #FFF , 1149px 838px #FFF , 625px 949px #FFF , 278px 1720px #FFF , 154px 342px #FFF , 1907px 1404px #FFF , 1887px 986px #FFF , 1953px 283px #FFF , 577px 1771px #FFF , 639px 1302px #FFF , 707px 1823px #FFF , 1366px 179px #FFF , 30px 1912px #FFF , 926px 1114px #FFF , 568px 1140px #FFF , 1834px 630px #FFF , 627px 193px #FFF , 1633px 1458px #FFF , 854px 675px #FFF , 1185px 801px #FFF , 1546px 142px #FFF , 1425px 921px #FFF , 1948px 905px #FFF , 1596px 436px #FFF , 244px 690px #FFF , 1198px 452px #FFF , 521px 1872px #FFF , 577px 992px #FFF , 964px 1289px #FFF , 323px 1440px #FFF , 99px 1860px #FFF , 1791px 285px #FFF , 318px 568px #FFF , 131px 1496px #FFF , 1770px 1586px #FFF , 263px 303px #FFF , 1964px 971px #FFF , 610px 848px #FFF , 703px 1983px #FFF , 1645px 1513px #FFF , 1828px 62px #FFF , 1246px 990px #FFF , 1936px 1214px #FFF , 934px 1710px #FFF , 1387px 659px #FFF , 1938px 1806px #FFF , 1777px 1412px #FFF , 1479px 822px #FFF , 1556px 1576px #FFF , 231px 18px #FFF , 1806px 1581px #FFF , 872px 1669px #FFF , 64px 1578px #FFF , 683px 414px #FFF , 1340px 1804px #FFF , 1382px 1328px #FFF , 177px 1650px #FFF , 1360px 850px #FFF , 1098px 1455px #FFF , 353px 1795px #FFF , 812px 1689px #FFF , 614px 1114px #FFF , 1068px 531px #FFF , 1210px 568px #FFF , 1316px 1506px #FFF , 835px 1854px #FFF , 247px 37px #FFF , 1757px 1077px #FFF , 1203px 1996px #FFF , 1857px 445px #FFF , 1031px 187px #FFF , 1037px 725px #FFF , 1369px 1792px #FFF , 1894px 737px #FFF , 644px 1586px #FFF , 214px 931px #FFF , 1466px 664px #FFF , 1332px 652px #FFF , 1718px 1172px #FFF , 644px 282px #FFF , 265px 968px #FFF , 1887px 921px #FFF , 471px 389px #FFF , 312px 1082px #FFF , 1849px 1935px #FFF , 1932px 243px #FFF , 1967px 1565px #FFF , 1664px 1854px #FFF , 1524px 1522px #FFF , 1582px 883px #FFF , 1394px 1646px #FFF , 701px 942px #FFF , 1570px 981px #FFF , 1156px 647px #FFF , 150px 919px #FFF , 977px 602px #FFF , 411px 429px #FFF , 547px 383px #FFF , 1986px 663px #FFF , 799px 1509px #FFF , 522px 1036px #FFF , 1482px 848px #FFF , 699px 122px #FFF , 1751px 1086px #FFF , 940px 1469px #FFF , 1837px 631px #FFF , 982px 196px #FFF , 1348px 999px #FFF , 1396px 434px #FFF , 414px 426px #FFF , 15px 1541px #FFF , 1898px 13px #FFF , 619px 1723px #FFF , 389px 1501px #FFF , 1591px 488px #FFF , 1360px 631px #FFF , 977px 476px #FFF , 119px 1306px #FFF , 1671px 1196px #FFF , 981px 608px #FFF , 829px 925px #FFF , 1097px 554px #FFF , 692px 1420px #FFF , 312px 551px #FFF , 850px 1090px #FFF , 1416px 1183px #FFF , 1457px 979px #FFF , 739px 270px #FFF , 409px 1810px #FFF , 1389px 483px #FFF , 1289px 1058px #FFF , 1903px 1349px #FFF , 98px 496px #FFF , 1343px 1571px #FFF , 185px 131px #FFF , 303px 1680px #FFF , 966px 1753px #FFF , 894px 1995px #FFF , 1178px 498px #FFF , 493px 38px #FFF , 957px 171px #FFF , 1373px 966px #FFF , 800px 1441px #FFF , 975px 560px #FFF , 1910px 1691px #FFF , 141px 693px #FFF , 981px 1435px #FFF , 947px 1112px #FFF , 837px 775px #FFF , 700px 425px #FFF , 1689px 468px #FFF , 1262px 1061px #FFF , 981px 686px #FFF , 943px 343px #FFF , 282px 1400px #FFF , 790px 1726px #FFF , 172px 1704px #FFF , 546px 672px #FFF , 1292px 1131px #FFF , 721px 518px #FFF , 904px 255px #FFF , 177px 1480px #FFF , 1288px 1974px #FFF , 1770px 768px #FFF , 674px 420px #FFF , 1151px 711px #FFF , 852px 1227px #FFF , 982px 1436px #FFF , 1580px 340px #FFF , 760px 461px #FFF , 1755px 1513px #FFF , 1897px 1037px #FFF , 1182px 1846px #FFF , 1441px 856px #FFF , 867px 485px #FFF , 1710px 1360px #FFF , 1634px 1508px #FFF , 782px 1861px #FFF , 116px 784px #FFF , 454px 1610px #FFF , 1633px 712px #FFF , 1113px 1316px #FFF , 1881px 512px #FFF , 251px 1017px #FFF , 1828px 266px #FFF , 359px 1209px #FFF , 24px 357px #FFF , 703px 897px #FFF , 908px 1794px #FFF , 198px 1888px #FFF , 464px 1874px #FFF , 8px 1155px #FFF , 1022px 710px #FFF , 529px 1540px #FFF , 1619px 225px #FFF , 29px 310px #FFF , 28px 589px #FFF , 1342px 99px #FFF , 253px 938px #FFF , 9px 1661px #FFF , 855px 994px #FFF , 652px 1541px #FFF , 491px 1850px #FFF , 452px 1436px #FFF , 1730px 336px #FFF , 172px 530px #FFF , 584px 818px #FFF , 672px 1874px #FFF , 1494px 1412px #FFF , 645px 1621px #FFF , 177px 233px #FFF , 1955px 977px #FFF , 1019px 867px #FFF , 705px 1995px #FFF , 1301px 1502px #FFF , 176px 1869px #FFF , 1299px 690px #FFF , 316px 198px #FFF , 101px 702px #FFF , 236px 1558px #FFF , 73px 1044px #FFF , 1553px 938px #FFF , 193px 438px #FFF , 1756px 224px #FFF , 15px 1223px #FFF , 26px 879px #FFF , 1779px 1943px #FFF , 14px 497px #FFF , 891px 961px #FFF , 1593px 1261px #FFF , 1585px 653px #FFF , 132px 955px #FFF , 1393px 230px #FFF , 1767px 1848px #FFF , 1649px 597px #FFF , 410px 178px #FFF , 428px 1718px #FFF , 816px 90px #FFF , 1466px 1848px #FFF , 1125px 952px #FFF , 1855px 1736px #FFF , 730px 1301px #FFF , 882px 1670px #FFF , 1110px 555px #FFF , 744px 830px #FFF , 1515px 1286px #FFF , 433px 1714px #FFF , 1124px 1703px #FFF , 1732px 1447px #FFF , 402px 337px #FFF , 694px 42px #FFF , 1004px 553px #FFF , 501px 1768px #FFF , 1850px 150px #FFF , 1470px 607px #FFF , 1389px 718px #FFF , 66px 1574px #FFF , 415px 588px #FFF , 130px 833px #FFF , 1509px 988px #FFF , 1483px 390px #FFF , 89px 545px #FFF , 1177px 160px #FFF , 18px 28px #FFF , 311px 810px #FFF , 415px 446px #FFF , 1835px 1285px #FFF , 649px 1305px #FFF , 1664px 24px #FFF , 1964px 655px #FFF , 130px 1483px #FFF , 1643px 499px #FFF , 1177px 1556px #FFF , 881px 859px #FFF , 1039px 615px #FFF , 993px 244px #FFF , 1829px 479px #FFF , 1890px 369px #FFF , 281px 1565px #FFF , 819px 550px #FFF , 1045px 1992px #FFF , 228px 1181px #FFF , 1700px 960px #FFF , 1298px 1507px #FFF , 212px 1329px #FFF , 654px 1556px #FFF , 1211px 1899px #FFF , 1546px 963px #FFF , 410px 1892px #FFF , 180px 218px #FFF , 1042px 1690px #FFF , 1199px 858px #FFF , 1374px 1768px #FFF , 543px 572px #FFF , 1352px 1975px #FFF , 185px 1789px #FFF , 1173px 1328px #FFF , 473px 1705px #FFF , 460px 1885px #FFF , 1718px 775px #FFF , 657px 1805px #FFF , 1009px 482px #FFF , 606px 604px #FFF , 377px 1590px #FFF , 568px 1260px #FFF , 876px 792px #FFF , 734px 1347px #FFF , 1943px 447px #FFF , 138px 1676px #FFF , 495px 95px #FFF , 399px 1479px #FFF , 1991px 3px #FFF , 1753px 1059px #FFF , 890px 1717px #FFF , 980px 1090px #FFF , 240px 1796px #FFF , 1177px 1546px #FFF , 64px 618px #FFF , 1034px 1275px #FFF , 1786px 600px #FFF , 585px 895px #FFF , 1513px 851px #FFF , 13px 383px #FFF , 1230px 1308px #FFF , 591px 393px #FFF , 1455px 75px #FFF , 366px 1368px #FFF , 1988px 632px #FFF , 1924px 155px #FFF , 1059px 42px #FFF , 678px 293px #FFF , 1863px 1280px #FFF , 1352px 1456px #FFF , 1161px 1864px #FFF , 80px 1371px #FFF , 1558px 89px #FFF , 31px 1828px #FFF , 173px 412px #FFF , 494px 12px #FFF , 1488px 403px #FFF , 14px 557px #FFF , 860px 599px #FFF , 1520px 905px #FFF , 1867px 1765px #FFF , 1180px 239px #FFF , 1069px 639px #FFF , 389px 1992px #FFF , 1182px 570px #FFF , 1118px 1170px #FFF , 684px 144px #FFF , 574px 1235px #FFF , 802px 1231px #FFF , 674px 1597px #FFF , 1137px 1399px #FFF , 1968px 1457px #FFF , 1759px 154px #FFF , 289px 1631px #FFF , 129px 703px #FFF , 712px 748px #FFF , 1425px 1953px #FFF , 208px 108px #FFF , 466px 392px #FFF , 1749px 136px #FFF , 1955px 1319px #FFF , 1379px 1831px #FFF , 1758px 1495px #FFF , 92px 841px #FFF , 941px 1279px #FFF , 1863px 1462px #FFF , 1944px 1314px #FFF , 1191px 1699px #FFF , 1325px 1782px #FFF , 590px 1098px #FFF , 1950px 677px #FFF , 901px 1944px #FFF , 959px 1622px #FFF , 206px 1969px #FFF , 1172px 1225px #FFF , 1361px 781px #FFF , 1747px 835px #FFF , 1936px 593px #FFF , 1666px 205px #FFF , 420px 1305px #FFF , 1752px 548px #FFF , 157px 1454px #FFF , 1956px 1098px #FFF , 884px 1343px #FFF , 1529px 1673px #FFF , 496px 754px #FFF , 534px 1887px #FFF , 1778px 186px #FFF , 389px 1016px #FFF , 161px 796px #FFF , 524px 532px #FFF , 685px 1901px #FFF , 218px 353px #FFF , 1405px 1661px #FFF , 665px 1908px #FFF , 521px 104px #FFF , 1382px 1653px #FFF , 908px 363px #FFF , 844px 789px #FFF , 333px 1792px #FFF , 1652px 1738px #FFF , 1285px 1150px #FFF , 244px 701px #FFF , 1678px 197px #FFF , 1236px 1026px #FFF , 1666px 238px #FFF , 1144px 467px #FFF , 611px 1861px #FFF , 90px 330px #FFF , 605px 199px #FFF , 938px 773px #FFF , 1748px 1278px #FFF , 586px 709px #FFF , 364px 1146px #FFF , 857px 1202px #FFF , 1046px 110px #FFF , 334px 1859px #FFF , 232px 910px #FFF , 1112px 279px #FFF , 631px 12px #FFF , 1501px 5px #FFF , 640px 683px #FFF , 1546px 746px #FFF , 1262px 1136px #FFF , 1591px 1765px #FFF , 1074px 1685px #FFF , 392px 958px #FFF , 546px 591px #FFF , 1680px 1915px #FFF , 650px 1269px #FFF , 841px 1354px #FFF , 1420px 1404px #FFF , 1272px 520px #FFF , 1590px 1543px #FFF , 1065px 1577px #FFF , 141px 1980px #FFF , 329px 445px #FFF , 1419px 405px #FFF , 1512px 407px #FFF , 908px 462px #FFF , 1339px 54px #FFF , 959px 1240px #FFF , 1699px 318px #FFF , 564px 1402px #FFF , 210px 9px #FFF , 150px 1737px #FFF , 61px 49px #FFF , 1863px 715px #FFF , 81px 365px #FFF , 1394px 1635px #FFF , 570px 397px #FFF , 739px 259px #FFF , 788px 1848px #FFF , 1022px 605px #FFF , 1410px 330px #FFF , 11px 625px #FFF , 242px 490px #FFF , 626px 638px #FFF , 298px 1342px #FFF , 441px 278px #FFF , 156px 1201px #FFF , 1810px 29px #FFF , 1383px 277px #FFF , 1444px 661px #FFF , 1470px 1077px #FFF , 932px 1792px #FFF , 184px 522px #FFF , 1569px 1127px #FFF , 169px 1307px #FFF , 1764px 1372px #FFF , 9px 415px #FFF , 1468px 1521px #FFF , 1676px 1453px #FFF , 1312px 1919px #FFF , 391px 1512px #FFF , 708px 2px #FFF , 913px 1866px #FFF , 1541px 10px #FFF , 1692px 1502px #FFF , 260px 1263px #FFF , 1835px 1740px #FFF , 360px 1834px #FFF , 198px 780px #FFF , 667px 1402px #FFF , 25px 271px #FFF , 233px 1735px #FFF , 1639px 1703px #FFF , 507px 1553px #FFF , 730px 773px #FFF , 1941px 196px #FFF , 1337px 1019px #FFF , 702px 978px #FFF , 5px 1402px #FFF , 1586px 15px #FFF , 1527px 1232px #FFF , 59px 389px #FFF , 1651px 1859px #FFF , 43px 476px #FFF , 197px 722px #FFF , 147px 415px #FFF , 89px 408px #FFF , 1929px 8px #FFF , 904px 1853px #FFF , 1375px 257px #FFF , 259px 819px #FFF , 605px 1382px #FFF , 481px 1807px #FFF , 1039px 1218px #FFF , 681px 1296px #FFF , 241px 480px #FFF , 1346px 1754px #FFF , 357px 1692px #FFF , 671px 1624px #FFF , 810px 1781px #FFF , 1104px 1284px #FFF , 36px 944px #FFF , 19px 1189px #FFF , 458px 145px #FFF , 1623px 1982px #FFF , 1090px 218px #FFF , 700px 892px #FFF , 1279px 1747px #FFF , 1476px 813px #FFF , 1515px 289px #FFF , 659px 297px #FFF , 550px 1082px #FFF , 1187px 745px #FFF , 424px 150px #FFF , 343px 1212px #FFF , 1413px 1491px #FFF , 1698px 212px #FFF , 1942px 1876px #FFF , 1026px 532px #FFF , 1770px 107px #FFF , 1282px 61px #FFF , 484px 616px #FFF , 457px 1692px #FFF , 1190px 1960px #FFF , 902px 1293px #FFF , 887px 161px #FFF , 1983px 696px #FFF , 1739px 1553px #FFF , 152px 1685px #FFF , 497px 481px #FFF , 1936px 1523px #FFF , 1719px 1790px #FFF , 1860px 301px #FFF , 1205px 409px #FFF , 395px 411px #FFF , 1161px 1900px #FFF , 1860px 246px #FFF , 1665px 1196px #FFF , 829px 536px #FFF , 733px 1320px #FFF , 573px 1506px #FFF , 1827px 910px #FFF , 532px 1808px #FFF , 155px 1728px #FFF , 1847px 144px #FFF , 1024px 1950px #FFF , 380px 514px #FFF , 956px 1244px #FFF , 1116px 1246px #FFF , 1693px 1285px #FFF , 776px 1385px #FFF , 473px 784px #FFF , 71px 499px #FFF , 1003px 302px #FFF , 1027px 1181px #FFF , 556px 97px #FFF , 945px 401px #FFF , 170px 1px #FFF , 1053px 980px #FFF , 747px 1329px #FFF , 671px 1324px #FFF , 1320px 1887px #FFF , 219px 1492px #FFF , 481px 1764px #FFF , 990px 342px #FFF , 293px 1815px #FFF , 1874px 1220px #FFF , 1991px 400px #FFF , 1817px 1739px #FFF , 1536px 868px #FFF , 1300px 1007px #FFF , 860px 1325px #FFF , 1467px 1706px #FFF , 1593px 55px #FFF , 724px 374px #FFF , 1189px 1054px #FFF , 1363px 1170px #FFF , 880px 1681px #FFF , 347px 405px #FFF , 1801px 1311px #FFF , 1203px 789px #FFF , 1490px 1893px #FFF , 1004px 1953px #FFF , 1132px 1064px #FFF , 442px 1192px #FFF , 713px 802px #FFF , 142px 512px #FFF , 1918px 1726px #FFF , 1107px 1310px #FFF , 1680px 1033px #FFF , 282px 893px #FFF , 821px 1841px #FFF , 1262px 1786px #FFF , 1354px 1188px #FFF , 1141px 126px #FFF , 160px 574px #FFF , 716px 570px #FFF , 554px 1102px #FFF , 775px 1965px #FFF , 1905px 940px #FFF , 733px 857px #FFF , 1229px 918px #FFF , 1107px 1928px #FFF , 535px 1241px #FFF , 1890px 577px #FFF , 797px 63px #FFF , 1560px 1810px #FFF , 1755px 1762px #FFF , 1796px 1854px #FFF , 1160px 996px #FFF , 1116px 1294px #FFF;
  animation: animStar 50s linear infinite;
}
#stars:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 1922px 1702px #FFF , 1809px 1571px #FFF , 1245px 795px #FFF , 1763px 1696px #FFF , 1797px 658px #FFF , 1496px 1577px #FFF , 459px 1664px #FFF , 250px 772px #FFF , 628px 1083px #FFF , 1680px 1443px #FFF , 1817px 1517px #FFF , 105px 372px #FFF , 66px 1188px #FFF , 663px 1292px #FFF , 1880px 308px #FFF , 84px 1965px #FFF , 108px 874px #FFF , 706px 1004px #FFF , 900px 177px #FFF , 1213px 1525px #FFF , 553px 1548px #FFF , 1127px 1608px #FFF , 636px 846px #FFF , 1873px 526px #FFF , 1815px 1810px #FFF , 1935px 777px #FFF , 1451px 1221px #FFF , 1801px 1836px #FFF , 1568px 1893px #FFF , 1178px 578px #FFF , 1930px 375px #FFF , 582px 48px #FFF , 744px 1047px #FFF , 1291px 1045px #FFF , 1530px 1113px #FFF , 206px 1379px #FFF , 1955px 1427px #FFF , 685px 923px #FFF , 685px 1505px #FFF , 352px 1025px #FFF , 1768px 1740px #FFF , 1068px 1568px #FFF , 1386px 1237px #FFF , 1196px 69px #FFF , 1396px 511px #FFF , 1131px 1597px #FFF , 792px 473px #FFF , 291px 1573px #FFF , 1013px 1247px #FFF , 709px 1402px #FFF , 823px 1032px #FFF , 1693px 851px #FFF , 705px 517px #FFF , 1839px 594px #FFF , 104px 1967px #FFF , 1213px 347px #FFF , 797px 845px #FFF , 2px 1730px #FFF , 1475px 1384px #FFF , 1280px 690px #FFF , 1348px 1969px #FFF , 1013px 304px #FFF , 1525px 1079px #FFF , 738px 636px #FFF , 1609px 1686px #FFF , 1447px 26px #FFF , 893px 726px #FFF , 887px 180px #FFF , 802px 255px #FFF , 285px 894px #FFF , 352px 1976px #FFF , 1469px 1813px #FFF , 1958px 1324px #FFF , 1149px 838px #FFF , 625px 949px #FFF , 278px 1720px #FFF , 154px 342px #FFF , 1907px 1404px #FFF , 1887px 986px #FFF , 1953px 283px #FFF , 577px 1771px #FFF , 639px 1302px #FFF , 707px 1823px #FFF , 1366px 179px #FFF , 30px 1912px #FFF , 926px 1114px #FFF , 568px 1140px #FFF , 1834px 630px #FFF , 627px 193px #FFF , 1633px 1458px #FFF , 854px 675px #FFF , 1185px 801px #FFF , 1546px 142px #FFF , 1425px 921px #FFF , 1948px 905px #FFF , 1596px 436px #FFF , 244px 690px #FFF , 1198px 452px #FFF , 521px 1872px #FFF , 577px 992px #FFF , 964px 1289px #FFF , 323px 1440px #FFF , 99px 1860px #FFF , 1791px 285px #FFF , 318px 568px #FFF , 131px 1496px #FFF , 1770px 1586px #FFF , 263px 303px #FFF , 1964px 971px #FFF , 610px 848px #FFF , 703px 1983px #FFF , 1645px 1513px #FFF , 1828px 62px #FFF , 1246px 990px #FFF , 1936px 1214px #FFF , 934px 1710px #FFF , 1387px 659px #FFF , 1938px 1806px #FFF , 1777px 1412px #FFF , 1479px 822px #FFF , 1556px 1576px #FFF , 231px 18px #FFF , 1806px 1581px #FFF , 872px 1669px #FFF , 64px 1578px #FFF , 683px 414px #FFF , 1340px 1804px #FFF , 1382px 1328px #FFF , 177px 1650px #FFF , 1360px 850px #FFF , 1098px 1455px #FFF , 353px 1795px #FFF , 812px 1689px #FFF , 614px 1114px #FFF , 1068px 531px #FFF , 1210px 568px #FFF , 1316px 1506px #FFF , 835px 1854px #FFF , 247px 37px #FFF , 1757px 1077px #FFF , 1203px 1996px #FFF , 1857px 445px #FFF , 1031px 187px #FFF , 1037px 725px #FFF , 1369px 1792px #FFF , 1894px 737px #FFF , 644px 1586px #FFF , 214px 931px #FFF , 1466px 664px #FFF , 1332px 652px #FFF , 1718px 1172px #FFF , 644px 282px #FFF , 265px 968px #FFF , 1887px 921px #FFF , 471px 389px #FFF , 312px 1082px #FFF , 1849px 1935px #FFF , 1932px 243px #FFF , 1967px 1565px #FFF , 1664px 1854px #FFF , 1524px 1522px #FFF , 1582px 883px #FFF , 1394px 1646px #FFF , 701px 942px #FFF , 1570px 981px #FFF , 1156px 647px #FFF , 150px 919px #FFF , 977px 602px #FFF , 411px 429px #FFF , 547px 383px #FFF , 1986px 663px #FFF , 799px 1509px #FFF , 522px 1036px #FFF , 1482px 848px #FFF , 699px 122px #FFF , 1751px 1086px #FFF , 940px 1469px #FFF , 1837px 631px #FFF , 982px 196px #FFF , 1348px 999px #FFF , 1396px 434px #FFF , 414px 426px #FFF , 15px 1541px #FFF , 1898px 13px #FFF , 619px 1723px #FFF , 389px 1501px #FFF , 1591px 488px #FFF , 1360px 631px #FFF , 977px 476px #FFF , 119px 1306px #FFF , 1671px 1196px #FFF , 981px 608px #FFF , 829px 925px #FFF , 1097px 554px #FFF , 692px 1420px #FFF , 312px 551px #FFF , 850px 1090px #FFF , 1416px 1183px #FFF , 1457px 979px #FFF , 739px 270px #FFF , 409px 1810px #FFF , 1389px 483px #FFF , 1289px 1058px #FFF , 1903px 1349px #FFF , 98px 496px #FFF , 1343px 1571px #FFF , 185px 131px #FFF , 303px 1680px #FFF , 966px 1753px #FFF , 894px 1995px #FFF , 1178px 498px #FFF , 493px 38px #FFF , 957px 171px #FFF , 1373px 966px #FFF , 800px 1441px #FFF , 975px 560px #FFF , 1910px 1691px #FFF , 141px 693px #FFF , 981px 1435px #FFF , 947px 1112px #FFF , 837px 775px #FFF , 700px 425px #FFF , 1689px 468px #FFF , 1262px 1061px #FFF , 981px 686px #FFF , 943px 343px #FFF , 282px 1400px #FFF , 790px 1726px #FFF , 172px 1704px #FFF , 546px 672px #FFF , 1292px 1131px #FFF , 721px 518px #FFF , 904px 255px #FFF , 177px 1480px #FFF , 1288px 1974px #FFF , 1770px 768px #FFF , 674px 420px #FFF , 1151px 711px #FFF , 852px 1227px #FFF , 982px 1436px #FFF , 1580px 340px #FFF , 760px 461px #FFF , 1755px 1513px #FFF , 1897px 1037px #FFF , 1182px 1846px #FFF , 1441px 856px #FFF , 867px 485px #FFF , 1710px 1360px #FFF , 1634px 1508px #FFF , 782px 1861px #FFF , 116px 784px #FFF , 454px 1610px #FFF , 1633px 712px #FFF , 1113px 1316px #FFF , 1881px 512px #FFF , 251px 1017px #FFF , 1828px 266px #FFF , 359px 1209px #FFF , 24px 357px #FFF , 703px 897px #FFF , 908px 1794px #FFF , 198px 1888px #FFF , 464px 1874px #FFF , 8px 1155px #FFF , 1022px 710px #FFF , 529px 1540px #FFF , 1619px 225px #FFF , 29px 310px #FFF , 28px 589px #FFF , 1342px 99px #FFF , 253px 938px #FFF , 9px 1661px #FFF , 855px 994px #FFF , 652px 1541px #FFF , 491px 1850px #FFF , 452px 1436px #FFF , 1730px 336px #FFF , 172px 530px #FFF , 584px 818px #FFF , 672px 1874px #FFF , 1494px 1412px #FFF , 645px 1621px #FFF , 177px 233px #FFF , 1955px 977px #FFF , 1019px 867px #FFF , 705px 1995px #FFF , 1301px 1502px #FFF , 176px 1869px #FFF , 1299px 690px #FFF , 316px 198px #FFF , 101px 702px #FFF , 236px 1558px #FFF , 73px 1044px #FFF , 1553px 938px #FFF , 193px 438px #FFF , 1756px 224px #FFF , 15px 1223px #FFF , 26px 879px #FFF , 1779px 1943px #FFF , 14px 497px #FFF , 891px 961px #FFF , 1593px 1261px #FFF , 1585px 653px #FFF , 132px 955px #FFF , 1393px 230px #FFF , 1767px 1848px #FFF , 1649px 597px #FFF , 410px 178px #FFF , 428px 1718px #FFF , 816px 90px #FFF , 1466px 1848px #FFF , 1125px 952px #FFF , 1855px 1736px #FFF , 730px 1301px #FFF , 882px 1670px #FFF , 1110px 555px #FFF , 744px 830px #FFF , 1515px 1286px #FFF , 433px 1714px #FFF , 1124px 1703px #FFF , 1732px 1447px #FFF , 402px 337px #FFF , 694px 42px #FFF , 1004px 553px #FFF , 501px 1768px #FFF , 1850px 150px #FFF , 1470px 607px #FFF , 1389px 718px #FFF , 66px 1574px #FFF , 415px 588px #FFF , 130px 833px #FFF , 1509px 988px #FFF , 1483px 390px #FFF , 89px 545px #FFF , 1177px 160px #FFF , 18px 28px #FFF , 311px 810px #FFF , 415px 446px #FFF , 1835px 1285px #FFF , 649px 1305px #FFF , 1664px 24px #FFF , 1964px 655px #FFF , 130px 1483px #FFF , 1643px 499px #FFF , 1177px 1556px #FFF , 881px 859px #FFF , 1039px 615px #FFF , 993px 244px #FFF , 1829px 479px #FFF , 1890px 369px #FFF , 281px 1565px #FFF , 819px 550px #FFF , 1045px 1992px #FFF , 228px 1181px #FFF , 1700px 960px #FFF , 1298px 1507px #FFF , 212px 1329px #FFF , 654px 1556px #FFF , 1211px 1899px #FFF , 1546px 963px #FFF , 410px 1892px #FFF , 180px 218px #FFF , 1042px 1690px #FFF , 1199px 858px #FFF , 1374px 1768px #FFF , 543px 572px #FFF , 1352px 1975px #FFF , 185px 1789px #FFF , 1173px 1328px #FFF , 473px 1705px #FFF , 460px 1885px #FFF , 1718px 775px #FFF , 657px 1805px #FFF , 1009px 482px #FFF , 606px 604px #FFF , 377px 1590px #FFF , 568px 1260px #FFF , 876px 792px #FFF , 734px 1347px #FFF , 1943px 447px #FFF , 138px 1676px #FFF , 495px 95px #FFF , 399px 1479px #FFF , 1991px 3px #FFF , 1753px 1059px #FFF , 890px 1717px #FFF , 980px 1090px #FFF , 240px 1796px #FFF , 1177px 1546px #FFF , 64px 618px #FFF , 1034px 1275px #FFF , 1786px 600px #FFF , 585px 895px #FFF , 1513px 851px #FFF , 13px 383px #FFF , 1230px 1308px #FFF , 591px 393px #FFF , 1455px 75px #FFF , 366px 1368px #FFF , 1988px 632px #FFF , 1924px 155px #FFF , 1059px 42px #FFF , 678px 293px #FFF , 1863px 1280px #FFF , 1352px 1456px #FFF , 1161px 1864px #FFF , 80px 1371px #FFF , 1558px 89px #FFF , 31px 1828px #FFF , 173px 412px #FFF , 494px 12px #FFF , 1488px 403px #FFF , 14px 557px #FFF , 860px 599px #FFF , 1520px 905px #FFF , 1867px 1765px #FFF , 1180px 239px #FFF , 1069px 639px #FFF , 389px 1992px #FFF , 1182px 570px #FFF , 1118px 1170px #FFF , 684px 144px #FFF , 574px 1235px #FFF , 802px 1231px #FFF , 674px 1597px #FFF , 1137px 1399px #FFF , 1968px 1457px #FFF , 1759px 154px #FFF , 289px 1631px #FFF , 129px 703px #FFF , 712px 748px #FFF , 1425px 1953px #FFF , 208px 108px #FFF , 466px 392px #FFF , 1749px 136px #FFF , 1955px 1319px #FFF , 1379px 1831px #FFF , 1758px 1495px #FFF , 92px 841px #FFF , 941px 1279px #FFF , 1863px 1462px #FFF , 1944px 1314px #FFF , 1191px 1699px #FFF , 1325px 1782px #FFF , 590px 1098px #FFF , 1950px 677px #FFF , 901px 1944px #FFF , 959px 1622px #FFF , 206px 1969px #FFF , 1172px 1225px #FFF , 1361px 781px #FFF , 1747px 835px #FFF , 1936px 593px #FFF , 1666px 205px #FFF , 420px 1305px #FFF , 1752px 548px #FFF , 157px 1454px #FFF , 1956px 1098px #FFF , 884px 1343px #FFF , 1529px 1673px #FFF , 496px 754px #FFF , 534px 1887px #FFF , 1778px 186px #FFF , 389px 1016px #FFF , 161px 796px #FFF , 524px 532px #FFF , 685px 1901px #FFF , 218px 353px #FFF , 1405px 1661px #FFF , 665px 1908px #FFF , 521px 104px #FFF , 1382px 1653px #FFF , 908px 363px #FFF , 844px 789px #FFF , 333px 1792px #FFF , 1652px 1738px #FFF , 1285px 1150px #FFF , 244px 701px #FFF , 1678px 197px #FFF , 1236px 1026px #FFF , 1666px 238px #FFF , 1144px 467px #FFF , 611px 1861px #FFF , 90px 330px #FFF , 605px 199px #FFF , 938px 773px #FFF , 1748px 1278px #FFF , 586px 709px #FFF , 364px 1146px #FFF , 857px 1202px #FFF , 1046px 110px #FFF , 334px 1859px #FFF , 232px 910px #FFF , 1112px 279px #FFF , 631px 12px #FFF , 1501px 5px #FFF , 640px 683px #FFF , 1546px 746px #FFF , 1262px 1136px #FFF , 1591px 1765px #FFF , 1074px 1685px #FFF , 392px 958px #FFF , 546px 591px #FFF , 1680px 1915px #FFF , 650px 1269px #FFF , 841px 1354px #FFF , 1420px 1404px #FFF , 1272px 520px #FFF , 1590px 1543px #FFF , 1065px 1577px #FFF , 141px 1980px #FFF , 329px 445px #FFF , 1419px 405px #FFF , 1512px 407px #FFF , 908px 462px #FFF , 1339px 54px #FFF , 959px 1240px #FFF , 1699px 318px #FFF , 564px 1402px #FFF , 210px 9px #FFF , 150px 1737px #FFF , 61px 49px #FFF , 1863px 715px #FFF , 81px 365px #FFF , 1394px 1635px #FFF , 570px 397px #FFF , 739px 259px #FFF , 788px 1848px #FFF , 1022px 605px #FFF , 1410px 330px #FFF , 11px 625px #FFF , 242px 490px #FFF , 626px 638px #FFF , 298px 1342px #FFF , 441px 278px #FFF , 156px 1201px #FFF , 1810px 29px #FFF , 1383px 277px #FFF , 1444px 661px #FFF , 1470px 1077px #FFF , 932px 1792px #FFF , 184px 522px #FFF , 1569px 1127px #FFF , 169px 1307px #FFF , 1764px 1372px #FFF , 9px 415px #FFF , 1468px 1521px #FFF , 1676px 1453px #FFF , 1312px 1919px #FFF , 391px 1512px #FFF , 708px 2px #FFF , 913px 1866px #FFF , 1541px 10px #FFF , 1692px 1502px #FFF , 260px 1263px #FFF , 1835px 1740px #FFF , 360px 1834px #FFF , 198px 780px #FFF , 667px 1402px #FFF , 25px 271px #FFF , 233px 1735px #FFF , 1639px 1703px #FFF , 507px 1553px #FFF , 730px 773px #FFF , 1941px 196px #FFF , 1337px 1019px #FFF , 702px 978px #FFF , 5px 1402px #FFF , 1586px 15px #FFF , 1527px 1232px #FFF , 59px 389px #FFF , 1651px 1859px #FFF , 43px 476px #FFF , 197px 722px #FFF , 147px 415px #FFF , 89px 408px #FFF , 1929px 8px #FFF , 904px 1853px #FFF , 1375px 257px #FFF , 259px 819px #FFF , 605px 1382px #FFF , 481px 1807px #FFF , 1039px 1218px #FFF , 681px 1296px #FFF , 241px 480px #FFF , 1346px 1754px #FFF , 357px 1692px #FFF , 671px 1624px #FFF , 810px 1781px #FFF , 1104px 1284px #FFF , 36px 944px #FFF , 19px 1189px #FFF , 458px 145px #FFF , 1623px 1982px #FFF , 1090px 218px #FFF , 700px 892px #FFF , 1279px 1747px #FFF , 1476px 813px #FFF , 1515px 289px #FFF , 659px 297px #FFF , 550px 1082px #FFF , 1187px 745px #FFF , 424px 150px #FFF , 343px 1212px #FFF , 1413px 1491px #FFF , 1698px 212px #FFF , 1942px 1876px #FFF , 1026px 532px #FFF , 1770px 107px #FFF , 1282px 61px #FFF , 484px 616px #FFF , 457px 1692px #FFF , 1190px 1960px #FFF , 902px 1293px #FFF , 887px 161px #FFF , 1983px 696px #FFF , 1739px 1553px #FFF , 152px 1685px #FFF , 497px 481px #FFF , 1936px 1523px #FFF , 1719px 1790px #FFF , 1860px 301px #FFF , 1205px 409px #FFF , 395px 411px #FFF , 1161px 1900px #FFF , 1860px 246px #FFF , 1665px 1196px #FFF , 829px 536px #FFF , 733px 1320px #FFF , 573px 1506px #FFF , 1827px 910px #FFF , 532px 1808px #FFF , 155px 1728px #FFF , 1847px 144px #FFF , 1024px 1950px #FFF , 380px 514px #FFF , 956px 1244px #FFF , 1116px 1246px #FFF , 1693px 1285px #FFF , 776px 1385px #FFF , 473px 784px #FFF , 71px 499px #FFF , 1003px 302px #FFF , 1027px 1181px #FFF , 556px 97px #FFF , 945px 401px #FFF , 170px 1px #FFF , 1053px 980px #FFF , 747px 1329px #FFF , 671px 1324px #FFF , 1320px 1887px #FFF , 219px 1492px #FFF , 481px 1764px #FFF , 990px 342px #FFF , 293px 1815px #FFF , 1874px 1220px #FFF , 1991px 400px #FFF , 1817px 1739px #FFF , 1536px 868px #FFF , 1300px 1007px #FFF , 860px 1325px #FFF , 1467px 1706px #FFF , 1593px 55px #FFF , 724px 374px #FFF , 1189px 1054px #FFF , 1363px 1170px #FFF , 880px 1681px #FFF , 347px 405px #FFF , 1801px 1311px #FFF , 1203px 789px #FFF , 1490px 1893px #FFF , 1004px 1953px #FFF , 1132px 1064px #FFF , 442px 1192px #FFF , 713px 802px #FFF , 142px 512px #FFF , 1918px 1726px #FFF , 1107px 1310px #FFF , 1680px 1033px #FFF , 282px 893px #FFF , 821px 1841px #FFF , 1262px 1786px #FFF , 1354px 1188px #FFF , 1141px 126px #FFF , 160px 574px #FFF , 716px 570px #FFF , 554px 1102px #FFF , 775px 1965px #FFF , 1905px 940px #FFF , 733px 857px #FFF , 1229px 918px #FFF , 1107px 1928px #FFF , 535px 1241px #FFF , 1890px 577px #FFF , 797px 63px #FFF , 1560px 1810px #FFF , 1755px 1762px #FFF , 1796px 1854px #FFF , 1160px 996px #FFF , 1116px 1294px #FFF;
}

#stars2 {
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 759px 300px #FFF , 1154px 879px #FFF , 1570px 364px #FFF , 611px 661px #FFF , 1282px 1192px #FFF , 1092px 808px #FFF , 1051px 1598px #FFF , 1524px 1921px #FFF , 1285px 481px #FFF , 670px 1094px #FFF , 244px 561px #FFF , 1519px 704px #FFF , 1785px 191px #FFF , 119px 1260px #FFF , 586px 387px #FFF , 223px 690px #FFF , 268px 880px #FFF , 1862px 108px #FFF , 1985px 1812px #FFF , 1699px 330px #FFF , 1302px 1796px #FFF , 1677px 756px #FFF , 1783px 1021px #FFF , 464px 879px #FFF , 1472px 374px #FFF , 1778px 1485px #FFF , 770px 246px #FFF , 1160px 1009px #FFF , 321px 662px #FFF , 543px 1266px #FFF , 1672px 1732px #FFF , 251px 1541px #FFF , 1588px 1191px #FFF , 1012px 688px #FFF , 553px 1983px #FFF , 597px 29px #FFF , 1182px 979px #FFF , 196px 108px #FFF , 1293px 1192px #FFF , 1196px 1133px #FFF , 163px 659px #FFF , 1325px 1380px #FFF , 545px 1873px #FFF , 1697px 1008px #FFF , 1350px 94px #FFF , 1715px 1084px #FFF , 1464px 1694px #FFF , 1180px 280px #FFF , 1025px 1357px #FFF , 1639px 1953px #FFF , 1139px 621px #FFF , 91px 267px #FFF , 1152px 597px #FFF , 1156px 449px #FFF , 1480px 512px #FFF , 1232px 1076px #FFF , 949px 996px #FFF , 1581px 1824px #FFF , 449px 1696px #FFF , 1156px 786px #FFF , 17px 1247px #FFF , 1578px 1826px #FFF , 745px 10px #FFF , 1182px 1883px #FFF , 1259px 1711px #FFF , 230px 1376px #FFF , 1013px 797px #FFF , 1758px 251px #FFF , 380px 736px #FFF , 1528px 1705px #FFF , 1087px 1091px #FFF , 637px 352px #FFF , 1335px 1332px #FFF , 1865px 295px #FFF , 363px 707px #FFF , 387px 648px #FFF , 376px 477px #FFF , 380px 619px #FFF , 1247px 153px #FFF , 1876px 64px #FFF , 1936px 1101px #FFF , 1749px 718px #FFF , 464px 1866px #FFF , 1212px 684px #FFF , 1987px 183px #FFF , 1643px 1019px #FFF , 1865px 1688px #FFF , 12px 1651px #FFF , 360px 664px #FFF , 93px 1027px #FFF , 1434px 223px #FFF , 95px 1455px #FFF , 1728px 1401px #FFF , 1349px 231px #FFF , 696px 1117px #FFF , 1558px 504px #FFF , 765px 1624px #FFF , 113px 1397px #FFF , 1607px 1255px #FFF , 414px 1532px #FFF , 738px 1814px #FFF , 985px 720px #FFF , 1898px 208px #FFF , 1318px 737px #FFF , 1709px 1123px #FFF , 883px 103px #FFF , 619px 506px #FFF , 1269px 433px #FFF , 301px 1276px #FFF , 1932px 1888px #FFF , 522px 319px #FFF , 793px 945px #FFF , 1163px 1072px #FFF , 1866px 101px #FFF , 1552px 716px #FFF , 993px 1752px #FFF , 1413px 939px #FFF , 1859px 501px #FFF , 1733px 502px #FFF , 1706px 1920px #FFF , 1777px 1800px #FFF , 1480px 414px #FFF , 1872px 1108px #FFF , 358px 1177px #FFF , 771px 36px #FFF , 924px 711px #FFF , 498px 1824px #FFF , 798px 1341px #FFF , 1409px 398px #FFF , 1872px 157px #FFF , 155px 567px #FFF , 282px 850px #FFF , 1221px 1933px #FFF , 71px 531px #FFF , 813px 1151px #FFF , 3px 722px #FFF , 1252px 1320px #FFF , 1258px 660px #FFF , 1346px 655px #FFF , 1873px 903px #FFF , 1374px 892px #FFF , 1090px 682px #FFF , 1075px 784px #FFF , 1250px 938px #FFF , 242px 65px #FFF , 1618px 170px #FFF , 149px 1939px #FFF , 124px 1583px #FFF , 686px 110px #FFF , 1222px 1400px #FFF , 420px 75px #FFF , 420px 273px #FFF , 134px 411px #FFF , 549px 1822px #FFF , 776px 537px #FFF , 1726px 471px #FFF , 687px 559px #FFF , 1215px 1699px #FFF , 502px 876px #FFF , 1090px 23px #FFF , 1554px 1803px #FFF , 1041px 302px #FFF , 927px 604px #FFF , 792px 882px #FFF , 736px 355px #FFF , 470px 1682px #FFF , 1302px 939px #FFF , 296px 864px #FFF , 1413px 1689px #FFF , 1868px 1825px #FFF , 1325px 1224px #FFF , 738px 993px #FFF , 822px 1244px #FFF , 1048px 816px #FFF , 802px 452px #FFF , 1730px 422px #FFF , 834px 1589px #FFF , 268px 510px #FFF , 443px 1167px #FFF , 1161px 1935px #FFF , 1741px 365px #FFF , 73px 428px #FFF , 202px 1006px #FFF , 707px 215px #FFF , 1862px 1562px #FFF , 1218px 179px #FFF , 1935px 842px #FFF , 1979px 132px #FFF , 380px 1757px #FFF , 318px 71px #FFF , 1172px 1873px #FFF , 86px 1953px #FFF , 1037px 1795px #FFF , 1083px 1982px #FFF , 1950px 287px #FFF , 670px 655px #FFF , 1559px 1004px #FFF , 935px 1058px #FFF , 1770px 539px #FFF , 591px 1594px #FFF;
  animation: animStar 100s linear infinite;
}
#stars2:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 759px 300px #FFF , 1154px 879px #FFF , 1570px 364px #FFF , 611px 661px #FFF , 1282px 1192px #FFF , 1092px 808px #FFF , 1051px 1598px #FFF , 1524px 1921px #FFF , 1285px 481px #FFF , 670px 1094px #FFF , 244px 561px #FFF , 1519px 704px #FFF , 1785px 191px #FFF , 119px 1260px #FFF , 586px 387px #FFF , 223px 690px #FFF , 268px 880px #FFF , 1862px 108px #FFF , 1985px 1812px #FFF , 1699px 330px #FFF , 1302px 1796px #FFF , 1677px 756px #FFF , 1783px 1021px #FFF , 464px 879px #FFF , 1472px 374px #FFF , 1778px 1485px #FFF , 770px 246px #FFF , 1160px 1009px #FFF , 321px 662px #FFF , 543px 1266px #FFF , 1672px 1732px #FFF , 251px 1541px #FFF , 1588px 1191px #FFF , 1012px 688px #FFF , 553px 1983px #FFF , 597px 29px #FFF , 1182px 979px #FFF , 196px 108px #FFF , 1293px 1192px #FFF , 1196px 1133px #FFF , 163px 659px #FFF , 1325px 1380px #FFF , 545px 1873px #FFF , 1697px 1008px #FFF , 1350px 94px #FFF , 1715px 1084px #FFF , 1464px 1694px #FFF , 1180px 280px #FFF , 1025px 1357px #FFF , 1639px 1953px #FFF , 1139px 621px #FFF , 91px 267px #FFF , 1152px 597px #FFF , 1156px 449px #FFF , 1480px 512px #FFF , 1232px 1076px #FFF , 949px 996px #FFF , 1581px 1824px #FFF , 449px 1696px #FFF , 1156px 786px #FFF , 17px 1247px #FFF , 1578px 1826px #FFF , 745px 10px #FFF , 1182px 1883px #FFF , 1259px 1711px #FFF , 230px 1376px #FFF , 1013px 797px #FFF , 1758px 251px #FFF , 380px 736px #FFF , 1528px 1705px #FFF , 1087px 1091px #FFF , 637px 352px #FFF , 1335px 1332px #FFF , 1865px 295px #FFF , 363px 707px #FFF , 387px 648px #FFF , 376px 477px #FFF , 380px 619px #FFF , 1247px 153px #FFF , 1876px 64px #FFF , 1936px 1101px #FFF , 1749px 718px #FFF , 464px 1866px #FFF , 1212px 684px #FFF , 1987px 183px #FFF , 1643px 1019px #FFF , 1865px 1688px #FFF , 12px 1651px #FFF , 360px 664px #FFF , 93px 1027px #FFF , 1434px 223px #FFF , 95px 1455px #FFF , 1728px 1401px #FFF , 1349px 231px #FFF , 696px 1117px #FFF , 1558px 504px #FFF , 765px 1624px #FFF , 113px 1397px #FFF , 1607px 1255px #FFF , 414px 1532px #FFF , 738px 1814px #FFF , 985px 720px #FFF , 1898px 208px #FFF , 1318px 737px #FFF , 1709px 1123px #FFF , 883px 103px #FFF , 619px 506px #FFF , 1269px 433px #FFF , 301px 1276px #FFF , 1932px 1888px #FFF , 522px 319px #FFF , 793px 945px #FFF , 1163px 1072px #FFF , 1866px 101px #FFF , 1552px 716px #FFF , 993px 1752px #FFF , 1413px 939px #FFF , 1859px 501px #FFF , 1733px 502px #FFF , 1706px 1920px #FFF , 1777px 1800px #FFF , 1480px 414px #FFF , 1872px 1108px #FFF , 358px 1177px #FFF , 771px 36px #FFF , 924px 711px #FFF , 498px 1824px #FFF , 798px 1341px #FFF , 1409px 398px #FFF , 1872px 157px #FFF , 155px 567px #FFF , 282px 850px #FFF , 1221px 1933px #FFF , 71px 531px #FFF , 813px 1151px #FFF , 3px 722px #FFF , 1252px 1320px #FFF , 1258px 660px #FFF , 1346px 655px #FFF , 1873px 903px #FFF , 1374px 892px #FFF , 1090px 682px #FFF , 1075px 784px #FFF , 1250px 938px #FFF , 242px 65px #FFF , 1618px 170px #FFF , 149px 1939px #FFF , 124px 1583px #FFF , 686px 110px #FFF , 1222px 1400px #FFF , 420px 75px #FFF , 420px 273px #FFF , 134px 411px #FFF , 549px 1822px #FFF , 776px 537px #FFF , 1726px 471px #FFF , 687px 559px #FFF , 1215px 1699px #FFF , 502px 876px #FFF , 1090px 23px #FFF , 1554px 1803px #FFF , 1041px 302px #FFF , 927px 604px #FFF , 792px 882px #FFF , 736px 355px #FFF , 470px 1682px #FFF , 1302px 939px #FFF , 296px 864px #FFF , 1413px 1689px #FFF , 1868px 1825px #FFF , 1325px 1224px #FFF , 738px 993px #FFF , 822px 1244px #FFF , 1048px 816px #FFF , 802px 452px #FFF , 1730px 422px #FFF , 834px 1589px #FFF , 268px 510px #FFF , 443px 1167px #FFF , 1161px 1935px #FFF , 1741px 365px #FFF , 73px 428px #FFF , 202px 1006px #FFF , 707px 215px #FFF , 1862px 1562px #FFF , 1218px 179px #FFF , 1935px 842px #FFF , 1979px 132px #FFF , 380px 1757px #FFF , 318px 71px #FFF , 1172px 1873px #FFF , 86px 1953px #FFF , 1037px 1795px #FFF , 1083px 1982px #FFF , 1950px 287px #FFF , 670px 655px #FFF , 1559px 1004px #FFF , 935px 1058px #FFF , 1770px 539px #FFF , 591px 1594px #FFF;
}

#stars3 {
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 619px 1333px #FFF , 126px 1391px #FFF , 1342px 1628px #FFF , 117px 87px #FFF , 740px 499px #FFF , 1235px 112px #FFF , 1156px 1127px #FFF , 349px 165px #FFF , 1664px 245px #FFF , 1070px 1863px #FFF , 1734px 308px #FFF , 1827px 1768px #FFF , 1268px 447px #FFF , 1417px 1799px #FFF , 1087px 434px #FFF , 176px 1788px #FFF , 1846px 1968px #FFF , 1785px 1566px #FFF , 1693px 1694px #FFF , 1021px 1256px #FFF , 105px 1559px #FFF , 14px 884px #FFF , 1150px 1276px #FFF , 115px 423px #FFF , 1362px 726px #FFF , 1154px 65px #FFF , 1719px 1881px #FFF , 1350px 3px #FFF , 1110px 1137px #FFF , 1053px 1941px #FFF , 181px 935px #FFF , 1086px 897px #FFF , 1707px 1941px #FFF , 1233px 328px #FFF , 757px 1619px #FFF , 1647px 1754px #FFF , 124px 1586px #FFF , 471px 1648px #FFF , 1676px 1565px #FFF , 1072px 919px #FFF , 1766px 962px #FFF , 24px 1283px #FFF , 88px 280px #FFF , 1806px 195px #FFF , 245px 832px #FFF , 1375px 679px #FFF , 1834px 914px #FFF , 839px 23px #FFF , 1459px 928px #FFF , 1148px 441px #FFF , 84px 300px #FFF , 1350px 1527px #FFF , 470px 250px #FFF , 676px 875px #FFF , 98px 1347px #FFF , 1881px 1382px #FFF , 1041px 1200px #FFF , 1325px 1254px #FFF , 1200px 634px #FFF , 405px 1702px #FFF , 1094px 523px #FFF , 1989px 1031px #FFF , 5px 975px #FFF , 578px 1454px #FFF , 972px 1944px #FFF , 1507px 1421px #FFF , 1501px 597px #FFF , 1245px 838px #FFF , 868px 1039px #FFF , 65px 680px #FFF , 1725px 1832px #FFF , 983px 1839px #FFF , 1408px 1419px #FFF , 1868px 1094px #FFF , 1919px 1795px #FFF , 917px 269px #FFF , 1816px 1256px #FFF , 1865px 963px #FFF , 19px 388px #FFF , 626px 105px #FFF , 112px 1851px #FFF , 1797px 1355px #FFF , 1345px 424px #FFF , 490px 451px #FFF , 1204px 1816px #FFF , 960px 1820px #FFF , 1311px 1080px #FFF , 935px 80px #FFF , 1987px 1784px #FFF , 87px 1671px #FFF , 438px 691px #FFF , 520px 485px #FFF , 157px 728px #FFF , 739px 1677px #FFF , 1953px 1750px #FFF , 1774px 1157px #FFF , 570px 285px #FFF , 1879px 1851px #FFF , 378px 1124px #FFF , 607px 1657px #FFF;
  animation: animStar 150s linear infinite;
}
#stars3:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 619px 1333px #FFF , 126px 1391px #FFF , 1342px 1628px #FFF , 117px 87px #FFF , 740px 499px #FFF , 1235px 112px #FFF , 1156px 1127px #FFF , 349px 165px #FFF , 1664px 245px #FFF , 1070px 1863px #FFF , 1734px 308px #FFF , 1827px 1768px #FFF , 1268px 447px #FFF , 1417px 1799px #FFF , 1087px 434px #FFF , 176px 1788px #FFF , 1846px 1968px #FFF , 1785px 1566px #FFF , 1693px 1694px #FFF , 1021px 1256px #FFF , 105px 1559px #FFF , 14px 884px #FFF , 1150px 1276px #FFF , 115px 423px #FFF , 1362px 726px #FFF , 1154px 65px #FFF , 1719px 1881px #FFF , 1350px 3px #FFF , 1110px 1137px #FFF , 1053px 1941px #FFF , 181px 935px #FFF , 1086px 897px #FFF , 1707px 1941px #FFF , 1233px 328px #FFF , 757px 1619px #FFF , 1647px 1754px #FFF , 124px 1586px #FFF , 471px 1648px #FFF , 1676px 1565px #FFF , 1072px 919px #FFF , 1766px 962px #FFF , 24px 1283px #FFF , 88px 280px #FFF , 1806px 195px #FFF , 245px 832px #FFF , 1375px 679px #FFF , 1834px 914px #FFF , 839px 23px #FFF , 1459px 928px #FFF , 1148px 441px #FFF , 84px 300px #FFF , 1350px 1527px #FFF , 470px 250px #FFF , 676px 875px #FFF , 98px 1347px #FFF , 1881px 1382px #FFF , 1041px 1200px #FFF , 1325px 1254px #FFF , 1200px 634px #FFF , 405px 1702px #FFF , 1094px 523px #FFF , 1989px 1031px #FFF , 5px 975px #FFF , 578px 1454px #FFF , 972px 1944px #FFF , 1507px 1421px #FFF , 1501px 597px #FFF , 1245px 838px #FFF , 868px 1039px #FFF , 65px 680px #FFF , 1725px 1832px #FFF , 983px 1839px #FFF , 1408px 1419px #FFF , 1868px 1094px #FFF , 1919px 1795px #FFF , 917px 269px #FFF , 1816px 1256px #FFF , 1865px 963px #FFF , 19px 388px #FFF , 626px 105px #FFF , 112px 1851px #FFF , 1797px 1355px #FFF , 1345px 424px #FFF , 490px 451px #FFF , 1204px 1816px #FFF , 960px 1820px #FFF , 1311px 1080px #FFF , 935px 80px #FFF , 1987px 1784px #FFF , 87px 1671px #FFF , 438px 691px #FFF , 520px 485px #FFF , 157px 728px #FFF , 739px 1677px #FFF , 1953px 1750px #FFF , 1774px 1157px #FFF , 570px 285px #FFF , 1879px 1851px #FFF , 378px 1124px #FFF , 607px 1657px #FFF;
}

#title {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  color: #FFF;
  text-align: center;
  font-family: "lato", sans-serif;
  font-weight: 300;
  font-size: 50px;
  letter-spacing: 10px;
  margin-top: -60px;
  padding-left: 10px;
}
#title span {
  background: -webkit-linear-gradient(white, #38495a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@keyframes animStar {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-2000px);
  }
}

</style>
///