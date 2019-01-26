<?php
$place=$_POST['select1'];
$cost=$_POST['select2'];
if($place=="Garia")
{
	 header('location:https://www.google.com/search?q=places+to+visit+in+garia&npsic=0&rflfq=1&rlha=0&rllag=22464290,88383344,1267&tbm=lcl&ved=2ahUKEwjL79SQqIvgAhVBv48KHYqHAFQQjGp6BAgBEEg&tbs=lrf:!2m4!1e17!4m2!17m1!1e2!2m1!1e2!2m1!1e3!2m1!1e16!3sIAE,lf:1,lf_ui:1&rldoc=1#rlfi=hd:;si:;mv:!1m2!1d22.492012967915933!2d88.427615541774!2m2!1d22.45140449534!2d88.34641971047517!4m2!1d22.47171021974877!2d88.38701762612459!5i14');
}
else if($place=="Esplanade")
{
	header('location:https://www.google.com/search?tbm=lcl&ei=L31MXLmuBdaSwgPkiab4Dw&q=places+to+visit+in+esplanade&oq=places+to+visit+in+es&gs_l=psy-ab.3.0.0j0i20i263k1j0l3j0i20i263k1j0l4.108917.111374.0.113152.13.11.0.0.0.0.350.1487.0j1j4j1.6.0....0...1c.1.64.psy-ab..10.3.800...35i39k1j0i67k1.0.Rs05aFWVzWI');
}
else if($place=="Park Street")
{
	header('location:https://www.google.com/search?q=places+to+visit+in+park+street&npsic=0&rflfq=1&rlha=0&rllag=22550520,88350541,1082&tbm=lcl&ved=2ahUKEwi3gpni4YvgAhUBY48KHUBqDLoQjGp6BAgFEEo&tbs=lrf:!2m1!1e2!2m1!1e3!2m1!1e16!3sIAE,lf:1,lf_ui:2&rldoc=1#rlfi=hd:;si:;mv:!1m2!1d22.5708385!2d88.3680097!2m2!1d22.535698699999998!2d88.3393613;tbs:lrf:!2m1!1e2!2m1!1e3!2m1!1e16!3sIAE,lf:1,lf_ui:2');
}
else if($place=="Salt Lake Sector-V")
{
	header('location:https://www.google.com/search?tbm=lcl&ei=oX1MXMqUPIr6vAS4q5SQDQ&q=places+to+visit+in+salt+lake+sector+5&oq=places+to+visit+in+salt+lake+sector&gs_l=psy-ab.3.0.0j0i22i30k1.22192.27360.0.28904.16.12.0.4.4.0.311.2292.2-8j1.9.0....0...1c.1.64.psy-ab..3.13.2309...0i20i263k1j0i10k1.0.tFWF67fagfY#rlfi=hd:;si:;mv:!1m2!1d22.5939481!2d88.4469755!2m2!1d22.5625637!2d88.35029999999999;tbs:lrf:!2m1!1e2!2m1!1e3!2m1!1e16!3sIAE,lf:1,lf_ui:2');
}


?>