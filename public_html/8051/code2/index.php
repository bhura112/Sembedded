<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../../css/index.css"/>
<link rel="stylesheet" type="text/css" href="../../css/codeFrame.css"/>
<script src="code1_js/main.js"></script>
<title>8051 Series</title>
</head>

<body>
<header class="header">

<div class="hpart1">
 <a href="http://sembedded.net">SEmbedded Web</a>
</div>

<div class="hpart2">
      <a href="../8051">    8051 Series  </a>
      <a href="../avr">     Avr Series   </a>
      <a href="../pic/">     Pic Series   </a>
      <a href="../arm/">     Arm Series   </a>
      <a href="uc.php">   Rtos         </a>
      <a href="uc.php">   Linux        </a>
      <a href="uc.php"> Contact Us   </a>
</div>
</header>
<div class="hr1"></div>

<div class="MainContainer">
    <div class="TheoryArea">
    <br/><br/>
    <strong>Led Blinking</strong>
    <p>
    	8051 Microcontroller is a programmable device which is used for controlling purpose.
Basically 8051 controller is Mask programmable means it will programmed at the time of manufacturing and will not programmed again, there is a derivative of 8051 microcontroller, 89c51 micro controller which is re-programmable.

AT89C51
AT89C51

89c51 is 8-bit device means it is capable of doing 8-bit operations.  It have 4 ports which are used as input or output according to your need.
   
 <br/>
   
   In this tutorial, we’ll Blink LED with 8051 Microcontroller. We have provided all circuit diagrams and code. You can also download entire project files and jump start with programming of 8051 Microcontroller. Blinking of an led could be a simple task.

We believe this tutorial is good starting point to understand how input and output works. This could be your first project. Our goal is to make you feel comfortable with 8051.If you are not clear with any mentioned text then don’t worry. In later part of this tutorial we have provided all details you need to know along with code explanation.
    </p>
    
    
  </div><br/>
    <div class="AnimationArea"><br/>
    <strong>OUPTUT</strong>
    <br/><br/> <img style="width: 400px; height: 400px;" src="code1_img/led.gif"/> <br/>
  <br/>
  </div>
 
   
    <div class="DesignArea">
    <strong>Circuit Design</strong>
    <p>Connection Diagram: Blink LED with 8051 Microcontroller

The microcontroller used here is P89V51RD2. You can use same circuit connections for any other derivative of 8051 MCU (MCS-51 family). Resistance R1 and capacitor C3 is used for resetting controller when we give power to circuit (at startup). You can call it as power on reset. And you can always use RESET SWITCH to reset microcontroller manually at any time. When we press RESET SWITCH voltage at reset pin [Pin No: 9] goes high which resets controller. Crystal X1 and two capacitors C1 and C2 operating in parallel resonance to provide approximately 11.0592 MHz Frequency. Make connections as provided in circuit diagram after burning program into your 8051 IC. As current sinking capability of TTL logic family ICs are more than current sourcing capabilities. We have connected LED in active low mode to P1.0 Pin.<br/><br/>
    <img src="code1_img/Circuit-Blink-LED-with-8051-Microcontroller-600x339.png"/>
	<br/></p>
    <br/>
    </div>
    <div class="YouTubeArea">
    <strong>Tutorials on Youtube</strong>
    <p>
    	<iframe height="200px" width="300px" src="http://www.youtube.com/embed/GQU7dIFCbU0"></iframe>
    	</p><br/>
    </div><br/>
	<div class="CodeArea">
	<strong> Blink LED using 8051 microcontrollerC </strong><br/>
	<p><code class="language-c" style="text-align: left;">
        #include &lt;reg51.h&gt; <br/><br/><br/>
        sbit LED=P1^0; <br/>	
		void Delay(int itime)<br/>
		{<br/>
		    int i=0,j=0;<br/>
			for(i=0; i &lt; itime;i++)<br/>
				for(j=0; j &lt; 1000;j++);<br/>
		}<br/>

void main()<br/>
{<br/>
	while(1) //never ending loop<br/>	
	{<br/>
		LED=1; //for making LED pin HIGH<br/>
		Delay();//called Delay function<br/>
		LED=0; //for making LED pin LOW<br/>
		Delay();//called Delay function<br/>
	}<br/>
}<br/></code>
	</p>
	<h3>Download Project With Proteus</h3>
	</div><br/>
	<div class="CommentArea">
	<br/><strong>Comment :</strong><br/>
	<br/>
		<input type="text" name="comment"/><br/><br/>
		<input type="submit" name="submit"/>
	<br/></div><br/>
</div>
</body>
</html>