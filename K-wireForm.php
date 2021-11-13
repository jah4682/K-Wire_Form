<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script>
//expand/collapse code
  function switchMenu(obj, x) 
  {
  	var el = document.getElementById(obj); //open and close header
	var chg = document.getElementById(x);  //change sign from plus to minus
	
  	if ( el.style.display != 'none' ) 
	{
  		el.style.display = 'none';
		chg.innerHTML = '[+]';
  	}
  	else 
	{
  		el.style.display = '';
		chg.innerHTML = '[-]';
  	}
  }

</script>

<style>
/***********************
   CSS FORM DIMENSIONS INFO 
************************/

.intxtbox
{
	font-size: 12px;
	font-family:Verdana, Geneva, sans-serif;
	color: #3D3D3D;
	
}

/*Overall Form Properties*/
.cForm
{
	/* Form width in px or % value */
	width: 50%;
	/* Form background color */
	background-color: #F7F8F7;
	/* Form border color */
	border-color: #CCCCCC;
	/* Form border width */
	border-width: 1px;
	/* Form border style. Examples - dotted, dashed, solid, double */
	border-style: solid;
	padding: 10px;
	/* Form font size */
	font-size: 12px;
	font-family:Verdana, Geneva, sans-serif;
	color: #3D3D3D;
	
}

/*Form Cell Properties*/
.tdLeftForm
{
	/* Form cell padding */
	padding: 5px;
	/* Form left column width */
	width: 15%;
	text-align: left;
	vertical-align: top;
	font-weight:bold;
	

	
}

.tdRightForm
{
	text-align: left;
	vertical-align: top;
	padding: 5px;
	color:#333;
}

.header {
	cursor:pointer;
}

a.header:link{color:#CCC;text-decoration:underline; }     /* unvisited link */
a.header:visited {color:#CCC;text-decoration:underline;}  /* visited link */
a.header:hover {color:#900;text-decoration:underline; } /* mouse over link */

</style>



<!-- FORM -->
<!--action attribute uses php superglobal variable to point to action page-->



<form method="post" action="K-wireFormAction.php" name="quoteForm">
<table class="cForm">
  <tr>
    <td class="tdLeftForm">Name</td>
    <td class="tdRightForm"><span id="validName">
    <input type="text" name="name" id="name" size="30" maxlength="30" value="" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td class="tdLeftForm">Email</td>
    <td class="tdRightForm"><span id="validEmail">
    <input type="text" name="email" id="email" size="30" value="" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr>
    <td class="tdLeftForm">Telephone</td>
    <td class="tdRightForm"><span id="validPhone">
    <input type="text" name="phone" id="phone" size="30" maxlength="14" value="" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr>
    <td class="tdLeftForm" colspan="2">
    <a class="header" onclick="switchMenu('ksmooth','plus1')">Kirschner Wires Smooth (package of 6) <span id="plus1">[+]</span></a> 	
      <div id="ksmooth" style="display:none"> <!--Div for collapse/expand javascript code, initialize to display none at first-->
      <span style="font-weight:normal">
        		<ul style="list-style:none">
                	<li>Double End Trocar</li>
                    	<ul style="list-style:none">
                        	<li>Length 4"</li>
                    			<ul style="list-style:none">
                            		<table class="intxtbox">
                                    <li><tr><td>Diameter</td><td>Quantity</td><td>Model No.</td></tr></li>
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM0"  id="KM71100" /></td><td>KM71-100</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM1" id="KM71101" /></td><td>KM71-101</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM2" id="KM71102" /></td><td>KM71-102</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM3" id="KM71104" /></td><td>KM71-104</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM4" id="KM71103" /></td><td>KM71-103</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 4 length list-->
                        <ul style="list-style:none">
                           	<li>Length 5"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM5" id="KM71105" /> </td><td>KM71-105</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM6" id="KM71106" /> </td><td>KM71-106</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM7" id="KM71107" /> </td><td>KM71-107</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM8" id="KM71108" /> </td><td>KM71-108</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM9" id="KM71109" /> </td><td>KM71-109</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 5 length list-->
                    	<ul style="list-style:none">
                           	<li>Length 6"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox"> 
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM10" id="KM71021" /> </td><td>KM71-021</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM11" id="KM71022" /> </td><td>KM71-022</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM12" id="KM71023" /> </td><td>KM71-023</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM13" id="KM71025" /> </td><td>KM71-025</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 6 length list-->        
                        <ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM14" id="KM71110" /> </td><td>KM71-110</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM15" id="KM71111" /> </td><td>KM71-111</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM16" id="KM71112" /> </td><td>KM71-112</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM17" id="KM71114" /> </td><td>KM71-114</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM18" id="KM71113" /> </td><td>KM71-113</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                        <ul style="list-style:none">
                           	<li>Length 12"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM19" id="KM71121" /> </td><td>KM71-121</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM20" id="KM71122" /> </td><td>KM71-122</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM21" id="KM71123" /> </td><td>KM71-123</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 12 length list-->                        
                     <li>Single Trocar round end</li>
                     	<ul style="list-style:none">
                        	<li>Length 4"</li>
                    			<ul style="list-style:none">
                            		<table class="intxtbox">
                                    <li><tr><td>Diameter</td><td>Quantity</td><td>Model No.</td></tr></li>
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM22" id="KM71130" /> </td><td>KM71-130</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM23" id="KM71131" /> </td><td>KM71-131</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM24" id="KM71132" /> </td><td>KM71-132</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM25" id="KM71133" /> </td><td>KM71-133</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM26" id="KM71134" /> </td><td>KM71-134</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 4 length list-->
                        <ul style="list-style:none">
                           	<li>Length 5"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM27" id="KM71170" /> </td><td>KM71-170</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM28" id="KM71171" /> </td><td>KM71-171</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM29" id="KM71172" /> </td><td>KM71-172</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM30" id="KM71174" /> </td><td>KM71-174</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM31" id="KM71175" /> </td><td>KM71-175</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 5 length list-->
                        <ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM32" id="KM71151" /> </td><td>KM71-151</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM33" id="KM71152" /> </td><td>KM71-152</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM34" id="KM71154" /> </td><td>KM71-154</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM35" id="KM71153" /> </td><td>KM71-153</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                        <ul style="list-style:none">
                           	<li>Length 12"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM36" id="KM71161" /> </td><td>KM71-161</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM37" id="KM71162" /> </td><td>KM71-162</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM38" id="KM71163" /> </td><td>KM71-163</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 12 length list--> 
                     <li>Double End Diamond</li>
                   		<ul style="list-style:none">
                        	<li>Length 4"</li>
                    			<ul style="list-style:none">
                            		<table class="intxtbox">
                                    <li><tr><td>Diameter</td><td>Quantity</td><td>Model No.</td></tr></li>
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM39" id="KM71200" /> </td><td>KM71-200</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM40" id="KM71201" /> </td><td>KM71-201</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM41" id="KM71202" /> </td><td>KM71-202</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM42" id="KM71203" /> </td><td>KM71-203</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM43" id="KM71204" /> </td><td>KM71-204</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 4 length list-->
                        <ul style="list-style:none">
                           	<li>Length 5"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM44" id="KM71206" /> </td><td>KM71-206</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM45" id="KM71207" /> </td><td>KM71-207</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM46" id="KM71209" /> </td><td>KM71-209</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 5 length list-->
                    	<ul style="list-style:none">
                           	<li>Length 6"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.028" (.7mm)</td><td><input type="text" size="3" maxlength="3" name="KM47" id="KM71030" /> </td><td>KM71-030</td></tr></li>
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM48" id="KM71031" /> </td><td>KM71-031</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM49" id="KM71032" /> </td><td>KM71-032</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM50" id="KM71033" /> </td><td>KM71-033</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 6 length list--> 
                        <ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM51" id="KM71211" /> </td><td>KM71-211</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM52" id="KM71212" /> </td><td>KM71-212</td></tr></li>
                                    <li><tr><td>.054" (1.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM53" id="KM71214" /> </td><td>KM71-214</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM54" id="KM71213" /> </td><td>KM71-213</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list--> 
                     <li>Single Diamond round end</li>
                     	<ul style="list-style:none">
                        	<li>Length 4"</li>
                    			<ul style="list-style:none">
                            		<table class="intxtbox">
                                    <li><tr><td>Diameter</td><td>Quantity</td><td>Model No.</td></tr></li>
                                    <li><tr><td>.028" (.7mm)&nbsp;&nbsp;</td><td><input type="text" size="3" maxlength="3" name="KM55" id="KM71230" /> </td><td>KM71-230</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 4 length list-->
                        <ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.035" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM56" id="KM71241" /> </td><td>KM71-241</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM57" id="KM71242" /> </td><td>KM71-242</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM58" id="KM71243" /> </td><td>KM71-243</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list--> 
                        <ul style="list-style:none">
                           	<li>Length 12"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td class="intxtbox">.034" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM59" id="KM71151" /> </td><td>KM71-151</td></tr></li>
                                    <li><tr><td class="intxtbox">.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM60" id="KM71152" /> </td><td>KM71-152</td></tr></li>
                                    <li><tr><td class="intxtbox">.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM61" id="KM71153" /> </td><td>KM71-153</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 12 length list--> 
                     <li>Suture Passer Single Diamond with surture hole round end</li>
                        <ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM62" id="KM71262" /> </td><td>KM71-262</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM63" id="KM71263" /> </td><td>KM71-263</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list--> 
                </ul> <!--end kw smooth-->
      </span>
      </div> 
      
      <br />
      
     <a class="header" onclick="switchMenu('kthread','plus2')">Kirschner Wire Fully Threaded (package of 6) <span id="plus2">[+]</span></a>
      <div id="kthread" style="display:none">
      <span style="font-weight:normal">
      
       	    <ul style="list-style:none">
            	<li>Double End Trocar</li>
                	<ul style="list-style:none">
                           	<li>Length 6"</li>
                                <ul style="list-style:none">
                                	<table class="intxtbox">
                                    <li><tr><td>Diameter</td><td>Quantity</td><td>Model No.</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM64"  id="KM71293" /> </td><td>KM71-293</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 6 length list-->
                    <ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.035" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM65" id="KM71301" /> </td><td>KM71-301</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM66" id="KM71302" /> </td><td>KM71-302</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM67" id="KM71303" /> </td><td>KM71-303</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->         
                <li>Single Trocar round end</li>
               		<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.035" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM68" id="KM71304" /> </td><td>KM71-304</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM69" id="KM71310" /> </td><td>KM71-310</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->  
                <li>Double End Diamond</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM70" id="KM71312" /> </td><td>KM71-312</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM71" id="KM71313" /> </td><td>KM71-313</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list--> 
                <li>Single Diamond round end</li>
               		<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td>.035" (.9mm)</td><td><input type="text" size="3" maxlength="3" name="KM72" id="KM71314" /> </td><td>KM71-314</td></tr></li>
                                    <li><tr><td>.045" (1.1mm)</td><td><input type="text" size="3" maxlength="3" name="KM73" id="KM71315" /> </td><td>KM71-315</td></tr></li>
                                    <li><tr><td>.062" (1.6mm)</td><td><input type="text" size="3" maxlength="3" name="KM74" id="KM71307" /> </td><td>KM71-307</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list--> 
            </ul> <!--end kw threaded-->
      </span>
      </div>
      
      <br />
      
      <a class="header" onclick="switchMenu('pinsmooth','plus3')">Steinmann Pins Smooth (package of 6) <span id="plus3">[+]</span></a>
      <div id="pinsmooth" style="display:none">
      <span id="pinsmooth" style="font-weight:normal">
      			<ul style="list-style:none">
                <li>Double End Trocar</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM75" id="KM71450" /> </td><td>KM71-450</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM76" id="KM71453" /> </td><td>KM71-453</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM77" id="KM71456" /> </td><td>KM71-456</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM78" id="KM71459" /> </td><td>KM71-459</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM79" id="KM71462" /> </td><td>KM71-462</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM80" id="KM71465" /> </td><td>KM71-465</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM81" id="KM71468" /> </td><td>KM71-468</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Single Trocar round end</li>
               	 	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM82" id="KM71510" /> </td><td>KM71-510</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM83" id="KM71513" /> </td><td>KM71-513</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM84" id="KM71516" /> </td><td>KM71-516</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM85" id="KM71519" /> </td><td>KM71-519</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM86" id="KM71522" /> </td><td>KM71-522</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM87" id="KM71525" /> </td><td>KM71-525</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM88" id="KM71528" /> </td><td>KM71-528</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                	<ul style="list-style:none">
                           	<li>Length 12"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)&nbsp;&nbsp;&nbsp;</td><td><input type="text" size="3" maxlength="3" name="KM89" id="KM71680" /> </td><td>KM71-680</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 12 length list-->	
                <li>Double End Diamond</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM90" id="KM71600" /> </td><td>KM71-600</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM91" id="KM71603" /> </td><td>KM71-603</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM92" id="KM71606" /> </td><td>KM71-606</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM793" id="KM71609" /> </td><td>KM71-609</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM94" id="KM71612" /> </td><td>KM71-612</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM95" id="KM71615" /> </td><td>KM71-615</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM96" id="KM71618" /> </td><td>KM71-618</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Single Diamond round end</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM97" id="KM71660" /> </td><td>KM71-660</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM98" id="KM71663" /> </td><td>KM71-663</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM99" id="KM71666" /> </td><td>KM71-666</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM100" id="KM71669" /> </td><td>KM71-669</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM101" id="KM71672" /> </td><td>KM71-672</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM102" id="KM71675" /> </td><td>KM71-675</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM103" id="KM71678" /> </td><td>KM71-678</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Single Diamond with surture passer hole 3 shank end</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM104" id="KM71880" /> </td><td>KM71-880</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM105" id="KM71883" /> </td><td>KM71-883</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM106" id="KM71886" /> </td><td>KM71-886</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM107" id="KM71889" /> </td><td>KM71-889</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM108" id="KM71892" /> </td><td>KM71-892</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM109" id="KM71895" /> </td><td>KM71-895</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM110" id="KM71898" /> </td><td>KM71-898</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Single Trocar 3 shank end</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM111" id="KM71480" /> </td><td>KM71-480</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM112" id="KM71483" /> </td><td>KM71-483</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM113" id="KM71486" /> </td><td>KM71-486</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM114" id="KM71489" /> </td><td>KM71-489</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM115" id="KM71492" /> </td><td>KM71-492</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM116" id="KM71495" /> </td><td>KM71-495</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM117" id="KM71498" /> </td><td>KM71-498</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Single Diamond 3 shank end</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM118" id="KM71630" /> </td><td>KM71-630</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM119" id="KM71633" /> </td><td>KM71-633</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM120" id="KM71636" /> </td><td>KM71-636</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM121" id="KM71639" /> </td><td>KM71-639</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM122" id="KM71642" /> </td><td>KM71-642</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM123" id="KM71645" /> </td><td>KM71-645</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM124" id="KM71648" /> </td><td>KM71-648</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                </ul> <!--end pins smooth-->
      </span>
      </div>
      
      <br />
      
      <a class="header" onclick="switchMenu('pinthread','plus4')">Steinmann Pins Fully Threaded (package of 6) <span id="plus4">[+]</span></a>
      <div id="pinthread" style="display:none">
      <span id="pinthread" style="font-weight:normal">
      			<ul style="list-style:none">
                <li>Double End Trocar</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM125" id="KM71750" /> </td><td>KM71-750</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM126" id="KM71753" /> </td><td>KM71-753</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM127" id="KM71756" /> </td><td>KM71-756</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM128" id="KM71759" /> </td><td>KM71-759</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM129" id="KM71762" /> </td><td>KM71-762</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM130" id="KM71765" /> </td><td>KM71-765</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM131" id="KM71768" /> </td><td>KM71-768</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Single Trocar round end</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM132" id="KM71770" /> </td><td>KM71-770</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM133" id="KM71773" /> </td><td>KM71-773</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM134" id="KM71776" /> </td><td>KM71-776</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM135" id="KM71779" /> </td><td>KM71-779</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM136" id="KM71782" /> </td><td>KM71-782</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM137" id="KM71785" /> </td><td>KM71-785</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM138" id="KM71788" /> </td><td>KM71-788</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Double End Diamond</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM139" id="KM71730" /> </td><td>KM71-730</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM140" id="KM71733" /> </td><td>KM71-733</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM141" id="KM71736" /> </td><td>KM71-736</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM142" id="KM71739" /> </td><td>KM71-739</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM143" id="KM71742" /> </td><td>KM71-742</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM144" id="KM71745" /> </td><td>KM71-745</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM145" id="KM71748" /> </td><td>KM71-748</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                <li>Single Diamond round end</li>
                	<ul style="list-style:none">
                           	<li>Length 9"</li>
                                <ul style="list-style:none">
                                	<li>Diameter</li>
                                    <table class="intxtbox">
                                    <li><tr><td><sup>5</sup>/<sub>64</sub>" (2.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM146" id="KM71700" /> </td><td>KM71-700</td></tr></li>
                                    <li><tr><td><sup>3</sup>/<sub>32</sub>" (2.4mm)</td><td><input type="text" size="3" maxlength="3" name="KM147" id="KM71703" /> </td><td>KM71-703</td></tr></li>
                                    <li><tr><td><sup>7</sup>/<sub>64</sub>" (2.8mm)</td><td><input type="text" size="3" maxlength="3" name="KM148" id="KM71706" /> </td><td>KM71-706</td></tr></li>
                                    <li><tr><td><sup>1</sup>/<sub>8</sub>" (3.2mm)</td><td><input type="text" size="3" maxlength="3" name="KM149" id="KM71709" /> </td><td>KM71-709</td></tr></li>
                                    <li><tr><td><sup>9</sup>/<sub>64</sub>" (3.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM150" id="KM71712" /> </td><td>KM71-712</td></tr></li>
                                    <li><tr><td><sup>5</sup>/<sub>32</sub>" (4.0mm)</td><td><input type="text" size="3" maxlength="3" name="KM151" id="KM71715" /> </td><td>KM71-715</td></tr></li>
                                    <li><tr><td>.177" (4.5mm)</td><td><input type="text" size="3" maxlength="3" name="KM152" id="KM71718" /> </td><td>KM71-718</td></tr></li>
                                    </table>
                            	</ul> <!--end diamenter list-->
                            </ul> <!--end 9 length list-->
                </ul> <!--end pins threaded-->
      </span>
      </div>
      	
    </td>
      
  </tr>
  <!--Captcha-->

  <tr>
   <td colspan="2" class="tdLeftForm" style="vertical-align:middle;">All fields are required.</td>
  </tr>
  <tr>
    <td colspan="2" class="tdLeftForm" style="vertical-align:middle;"><input type="submit" name="send" id="send" value="Submit" style="border:1px solid #999;background:#E4E4E4;margin-top:5px;" /></td>
  </tr>
</table>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("validName", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("validEmail", "email", {hint:"email@email.com", useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("validPhone", "phone_number", {hint:"(000) 000-0000", format:"phone_custom", pattern:"(000) 000-0000", useCharacterMasking:true});

//-->
</script>
