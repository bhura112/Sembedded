<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../../css/index.css"/>
<link rel="stylesheet" type="text/css" href="../../css/childFrame.css"/>
<script src="../../js/childFrame.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8795837294797076",
    enable_page_level_ads: true
  });
</script>
<title>8051 Series</title>
</head>
<body>
<header class="header">

<div class="hpart1">
 <a href="http://sembedded.net">SEmbedded Web</a>
</div>

<div class="dropdown">
  <button class="dropbtn">8051 Series</button>
  <div class="dropdown-content">
    <a href="../at89c51/">AT89C51</a>
    <a href="../at89s51/">AT89S51</a>
    <a href="../sst89rdxxx/">SST89RDxxx</a>

  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AVR Series</button>
  <div class="dropdown-content">
    <a href="../../avr/atmega8/">ATmega8</a>
    <a href="../../avr/atmega16/">ATmega16</a>
    <a href="../../avr/atmega32/">ATmega32</a>
    <a href="../../avr/atmega32/">ATmega128</a>
    <a href="../../avr/atmega328p/">ATmega328p</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">PIC Series</button>
  <div class="dropdown-content">
    <a href="../../pic/pic12fxx/">PIC12Fxx</a>
    <a href="../../pic/pic16fxx/">PIC16Fxx</a>
    <a href="../../pic/pic18fxx/">PIC18Fxx</a>
    <a href="../../pic/pic24fxx/">PIC24fjxxx</a>
    <a href="../../pic/pic32fxx/">PIC32MXxxx</a>
    <a href="../../pic/pic32_ds/">PIC_ds32</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">ARM Series</button>
  <div class="dropdown-content">
    <a href="../../arm/lpc2124/">LPC2124</a>
    <a href="../../arm/lpc2129/">LPC2129</a>
    <a href="../../arm/lpc2138/">LPC2138</a>
    <a href="../../arm/lpc2148/">LPC2148</a>
    <a href="../../arm/arm-cortexM0/">ARM-Cortex M0</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">FreeRTOS</button>
  <div class="dropdown-content">
    <a href="http://sembedded.net">LPC2124</a>
    <a href="#">LPC2148</a>
    <a href="#">PIC32</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Linux</button>
  <div class="dropdown-content">
    <a href="http://sembedded.net">Shell Scripting</a>
    <a href="#">Process</a>
    <a href="#">MultiThreading</a>
    <a href="#">MUTEX</a>
    <a href="#">GUI with QT</a>
    <a href="#">Socket</a>
    <a href="#">Device Drivers</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Contact</button>
  <div class="dropdown-content">
    <a href="http://sembedded.net">Mail-Me</a>
    <a href="#">About Us</a>
  </div>
</div>

</header>
<div class="hr1"></div>

<div class="Container1">
  <div class="Container1-Header"> <p><a style="text-decoration: none; color: #fff;"href="../">Home</a></p>  </div>
   <div class="Container1-List">
		<ul class="list1">
	<li><a  id="defaultOpen" class="tablinks" href="#" onClick="openCity(event,'Intro',this)">Introduction</a></li><br/>
		<li><a id="tab2" class="tablinks" href="#" onClick="openCity(event,'Basic',this)">Basics</a></li><br/>
		<li><a id="tab3" class="tablinks" href="#" onClick="openCity(event,'Soft',this)">Software</a></li><br/>
		<li><a id="tab4" class="tablinks" href="#" onClick="openCity(event,'Doc',this)">Documents</a></li><br/>
		<li><a id="tab5" class="tablinks"href="#" onClick="openCity(event,'Code',this)">Codes</a></li><br/>
		</ul>
   </div>
</div>
<div id="Intro" class="Container2">
  <div class="Container2-Header"> <p>8051 - Introduction</p>  </div>
   <div class="Container2-text">
    		<p class="C1p1">The Intel 8051 is an 8-bit microcontroller which means that most available operations are limited to 8 bits. There are 3 basic "sizes" of the 8051: Short, Standard, and Extended. The Short and Standard chips are often available in DIP (dual in-line package) form, but the Extended 8051 models often have a different form factor, and are not "drop-in compatible". All these things are called 8051 because they can all be programmed using 8051 assembly language, and they all share certain features (although the different models all have their own special features).
  <br /><br />
  <img style="margin: 0px 0px 0px 40%; " src="../../images/at89s52.jpg" />
<br /><br /><strong>General Features</strong>
<br />
<br /><em> 4 KB on chip program memory.</em>
<br /><em>128 bytes on chip data memory(RAM)</em>
<br /><em>32 bytes devoted to register banks</em>
<br /><em>bytes of bit-addressable memory</em>
<br /><em>80 bytes of general-purpose memory</em>
<br /><em>4 reg banks.</em>
<br /><em>128 user defined software flags.</em>
<br /><em>8-bit data bus</em>
<br /><em>16-bit address bus</em>
 <br /><em>16 bit timers (usually 2, but may have more, or less).</em>
 <br /><em>3 internal and 2 external interrupts.</em>
 <br /><em>Bit as well as byte addressable RAM area of 16 bytes.</em>
 <br /><em>Four 8-bit ports, (short models have two 8-bit ports).</em>
 <br /><em>16-bit program counter and data pointer.</em>
 <br /><em>1 Microsecond instruction cycle with 12&nbsp;MHz Crystal.</em>
  <br />
  <br />Variants of the 8051 may also have a number of special, model-specific features, such as UART, ADC, Op_Amps, etc.,<br /> making it an even more powerful microcontroller.
  <br /><br />
  <strong>8051 Microcontroller Pin Diagram</strong>
  <br />
  <img src="../../images/8051_pin_diagram.jpg" />
  <br/>
  </p>
    		<p>For explaining the pin diagram and pin configuration of microcontroller 8051, we are taking into deliberation a 40 pin Dual inline package (DIP). Now let&rsquo;s study through pin configuration in brief:-</p>
    		<div></div>
    		<p><strong>Pins 1 – 8:-</strong> recognized as Port 1. Different from other ports, this port doesn&rsquo;t provide any other purpose. Port 1 is a domestically pulled up, quasi bi directional Input/output port.</p>
    		<p><strong>Pin 9:-</strong> As made clear previously RESET pin is utilized to set the micro-controller 8051 to its primary values, whereas the micro-controller is functioning or at the early beginning of application. The RESET pin has to be set elevated for two machine rotations.</p>
    		<p><strong>Pins 10 – 17:-</strong> recognized as Port 3. This port also supplies a number of other functions such as timer input, interrupts, serial communication indicators TxD &amp; RxD, control indicators for outside memory interfacing WR &amp; RD, etc. This is a domestic pull up port with quasi bi directional port within.</p>
    		<p><strong>Pins 18 and 19:- </strong>These are employed for interfacing an outer crystal to give system clock.</p>
    		<p><strong>Pin 20:-</strong> Titled as Vss – it symbolizes ground (0 V) association.</p>
    		<p><strong>Pins- 21-28:-</strong> recognized as Port 2 (P 2.0 – P 2.7) – other than serving as Input/output port, senior order address bus indicators are multiplexed with this quasi bi directional port.</p>
    		<p><strong>Pin- 29:-</strong> Program Store Enable or PSEN is employed to interpret sign from outer program memory.</p>
    		<p><strong>Pin-30:-</strong> External Access or EA input is employed to permit or prohibit outer memory interfacing. If there is no outer memory need, this pin is dragged high by linking it to Vcc.</p>
    		<p><strong>Pin-31:-</strong> Aka Address Latch Enable or ALE is brought into play to de-multiplex the address data indication of port 0 (for outer memory interfacing). Two ALE throbs are obtainable for every machine rotation.</p>
    		<p><strong>Pins 32-39:</strong> recognized as Port 0 (P0.0 to P0.7) – other than serving as Input/output port, low order data &amp; address bus signals are multiplexed with this port (to provide the use of outer memory interfacing). This pin is a bi directional Input/output port (the single one in microcontroller 8051) and outer pull up resistors are necessary to utilize this port as Input/output.</p>
    		<p><strong>Pin-40:</strong> termed as Vcc is the chief power supply. By and large it is +5V DC.</p>
   </div>
</div>

<div id="Basic" class="Container2">
  <div class="Container2-Header"> <p>8051 - Basics</p>  </div>
   <div class="Container2-text">

  	     <p class="C1p1"> <b>Basic 8051 Architecture</b><br/><br/>

8051 employs Harvard architecture. It has some peripherals such as 32 bit digital I/O, Timers and Serial I/O. The basic architecture of 8051 is :
<img src="../../images/8051arct.gif"/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad2 -->
<ins class="adsbygoogle"
 style="display:inline-block;width:728px;height:90px"
 data-ad-client="ca-pub-8795837294797076"
 data-ad-slot="9256197016"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br/><br/>
<b>8051 Clock and Instruction Cycle</b><br/><br/>

In 8051, one instruction cycle consists of twelve (12) clock cycles. Instruction cycle is sometimes called as Machine cycle by some authors.<br/><br/>
<img src="../../images/8051machineCyscle.gif"/><br/><br/>
In 8051, each instruction cycle has six states (S 1 - S 6 ). Each state has two pulses (P1 and P2)<br/><br/>
<b>128 bytes of Internal RAM Structure (lower address space)</b><br/><br/>
<img src="../../images/8051mem.gif"/><br/><br/>
The lower 32 bytes are divided into 4 separate banks. Each register bank has 8 registers of one byte each. A register bank is selected depending upon two bank select bits in the PSW register. Next 16bytes are bit addressable. In total, 128bits (16X8) are available in bitaddressable area. Each bit can be accessed and modified by suitable instructions. The bit addresses are from 00H (LSB of the first byte in 20H) to 7FH (MSB of the last byte in 2FH). Remaining 80bytes of RAM are available for general purpose.
<br/><br/>
<b>Internal Data Memory and Special Function Register (SFR) Map</b>
<img src="../../images/8051sfr.gif"/><br/><br/>
The special function registers (SFRs) are mapped in the upper 128 bytes of internal data memory address. Hence there is an address overlap between the upper 128 bytes of data RAM and SFRs. Please note that the upper 128 bytes of data RAM are present only in the 8052 family. The lower128 bytes of RAM (00H - 7FH) can be accessed both by direct or indirect addressing while the upper 128 bytes of RAM (80H - FFH) are accessed by indirect addressing.The SFRs (80H - FFH) are accessed by direct addressing only.

<br/><br/>
  <b>SFR Map</b>
<br/><br/>
The set of Special Function Registers (SFRs) contains important registers such as Accumulator, Register B, I/O Port latch registers, Stack pointer, Data Pointer, Processor Status Word (PSW) and various control registers. Some of these registers are bit addressable (they are marked with a * in the diagram below). The detailed map of various registers is shown in the following figure.
<br/><br/>
<img src="../../images/sfr_table.png"/>
<br/><br/>
It should be noted hat all registers appearing in the first column are bit addressable. The bit address of a bit in the register is calculated as follows.
Bit address of 'b' bit of register 'R' is
                       Address of register 'R' + b
                       where  0   ≤  b ≤ 7
Processor Status Word (PSW)     Address=D0H

<br/><br/>
<img src="../../images/pWord.gif"/>
<br/>
PSW register stores the important status conditions of the microcontroller. It also stores the bank select bits (RS1 & RS0) for register bank selection.
</p>
	</div>
	</div>
 <div id="Soft" class="Container2">
           <div class="Container2-Header"> <p>8051 - Softwares</p>  </div>
              <div class="Container2-text">
                  <p class="C1p1">

     <a href="http://sdcc.sourceforge.net/index.php#Download">
         <p style="background-color:gray; color:white;">  <b>Download SDCC (Open Source Compiler)</b> </p>
         <img  style="margin: 0px 0px 0px 50%; width: 40%;height: 200px;;"src="../../images/sdcc.jpg"/>
     </a>
     <br/><br/>
     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <ins class="adsbygoogle"
      style="display:inline-block;width:728px;height:90px"
      data-ad-client="ca-pub-8795837294797076"
      data-ad-slot="9256197016"></ins>
     <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
     </script>

     <a href="https://www.keil.com/demo/eval/c51.htm">
          <p style="background-color:gray; color:white; display:center;">  <b> Download Keil</b> </p>
          <img  style="margin: 0px 0px 0px 50%; width: 40%;height: 100px;;"src="../../images/Keil.png"/>
     </a>
    <br/>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
        style="display:inline-block;width:728px;height:90px"
        data-ad-client="ca-pub-8795837294797076"
        data-ad-slot="9256197016"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
   <br/>
   <a href="https://www.labcenter.com/simulation/">
       <p style="background-color:gray; color:white;">  <b>Download Proteus</b> </p>
       <img  style="margin: 0px 0px 0px 50%; width: 20%;height: 200px;;"src="../../images/proteus.jpg"/>
   </a>
   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   <ins class="adsbygoogle"
    style="display:inline-block;width:728px;height:90px"
    data-ad-client="ca-pub-8795837294797076"
    data-ad-slot="9256197016"></ins>
   <script>
   (adsbygoogle = window.adsbygoogle || []).push({});
   </script>
   <br/><br/>
   <!--
   <a href="https://www.autodesk.com/products/eagle/free-download">
     <p style="background-color:gray; color:white;">  <b>Download Eagle Cad(PCB Design)</b> </p>
     <img  style="margin: 0px 0px 0px 50%; width: 30%;height: 200px;" src="../../images/eagle_cad.png"/>
  </a>-->
                          </p>
	                   </div>
	              </div>

	<div id="Doc" class="Container2">
  <div class="Container2-Header"> <p>8051 - Docs</p>  </div>
   <div class="Container2-text">
   <p class="C1p1">
   <strong>Cx51 Compiler Optimizing C Compiler and Library Reference<br/>
            for Classic and Extended 8051 Microcontrollers</strong>
	   <br/><br/>
     <a href="http://www.keil.com/support/man/docs/c51/">  <p style="background-color:gray; color:white;"> Download Compiler Doc's 	 </p></a>
	   <br/><br/>
	   <a href="https://www.000webhost.com/962409.html" target="_blank"><img src="https://www.000webhost.com/images/banners/728x90/1.jpg" alt="Web hosting" width="728" height="90" border="0" /></a>

	   <br/><br/>
	   <strong>MicroController DataSheet</strong>
	   <br/>
	  <a href="https://www.keil.com/dd/docs/datashts/atmel/at89s51_ds.pdf">
      <p style="background-color:gray; color:white; font-varient:small-caps; ">DownLoad DataSheet</p></a>
	  <br/>
	  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8795837294797076"
     data-ad-slot="9256197016"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  <br/>
   </p>
	</div>

	</div>

	<div id="Code" class="Container2">
  <div class="Container2-Header"> <p>8051 - Codes</p>  </div>
   <div class="Container2-text">
   <p class="C1p1">
   <br/>

  	 <br/><Strong>GPIO (Genral Purpose Input/Output)</Strong><br/><br/>

  	 <!--- Link-1 --->
  	 <iframe width="560" height="315" src="https://www.youtube.com/embed/BqzGiazYhYY" frameborder="0" allowfullscreen></iframe>
  	 <br/>
   	 <i> LED Blinking: <a href="https://github.com/bhura112/8051-ALL-Codes/raw/master/LED-Blink.rar" target="_blank"> Download </a></i>
   	 <br/><br/><br/>
   	  <!---End Link-1 --->

   	  <!--- Link-2 --->
   	 <iframe width="560" height="315" src="https://www.youtube.com/embed/X-XVUFk5vMQ" frameborder="0" allowfullscreen></iframe> <br/>
     <i>LED Pattern1: <a href="https://github.com/bhura112/8051-ALL-Codes/raw/master/LED-Pattren1.rar" target="_blank"> Download </a></i>
   	 <br/><br/><br/>
   	 <!---End Link-2 --->

   	 <!--- Link-3 --->
   	 <iframe width="560" height="315" src="https://www.youtube.com/embed/k_2GpkxVGb8" frameborder="0" allowfullscreen></iframe>
   	 <br/>
   	 <i>LED Pattern2: <a href="https://github.com/bhura112/8051-ALL-Codes/raw/master/LED-Pattren2.rar" target="_blank"> Download </a></i>
   	 <br/><br/><br/>
   	 <!---End Link-3 --->

   	 <!--- Link-3 --->
   	 <i> <a href="not-available/index.php" target="_blank">Led Pattern3</a></i><br/>
   	 <!---End Link-3 --->
   	 <i> <a href="not-available/index.php" target="_blank">Led Pattern4</a></i><br/>

   	 <br/><Strong>Button</Strong><br/><br/>

   	 <i> <a href="not-available/index.php" target="_blank">Led with Button</a></i><br/>

   	 <i> <a href="not-available/index.php" target="_blank">2 Led with 2 Buttons</a></i><br/><br/>
   	 <br/>

   	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8795837294797076"
     data-ad-slot="9256197016"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
   	 <br/>
   	 <Strong>Seven Segment Display</Strong><br/><br/>
   	 <i> <a href="not-available/index.php" target="_blank">1 Digit Seven Segment</a></i><br/>
   	 <i> <a href="not-available/index.php" target="_blank">2 Digit Seven Segment</a></i><br/>
   	 <i> <a href="not-available/index.php" target="_blank">4 Digit Seven Segment(MUX)</a></i><br/>
   	 <i> <a href="not-available/index.php" target="_blank">8 Digit Seven Segment(MUX)</a></i><br/>

   	 <br/><Strong>LCD (Liquid Crystal Display)</Strong><br/><br/>
   	 <i> <a href="not-available/index.php">LCD </a></i><br/>
   	 <i> <a href="not-available/index.php">LCD 8Bit Mode</a></i><br/>
   	 <i> <a href="not-available/index.php">LCD 4bit Mode</a></i><br/>
   	 <i> <a href="not-available/index.php">LCD Custom Char</a></i><br/>
   	 <i> <a href="not-available/index.php">LCD Animation</a></i><br/>
   	 <br/>

   	 <br/><Strong>KeyPad</Strong><br/><br/>
   	 <i> <a href="not-available/index.php">KeyPad </a></i><br/>
   	 <i> <a href="not-available/index.php">LCD And KeyPad</a></i><br/>
   	 <i> <a href="not-available/index.php">Calculator</a></i><br/>
   	 <br/>

   	 <a href="https://www.000webhost.com/962409.html" target="_blank"><img src="https://www.000webhost.com/images/banners/728x90/1.jpg" alt="Web hosting" width="728" height="90" border="0" /></a>
   	 <br/>
   	 <br/><strong>DC Motor</strong><br/><br/>
   	 <i> <a href="DC Motor with Button">DC Motor </a></i><br/>
   	 <i>DC Motor with Button: <a href="https://github.com/bhura112/8051-ALL-Codes/raw/master/DC_MOTOR_With_Buttons.rar">Download</a></i><br/>
   	 <i> <a href="not-available/index.php">DC Motor,Button And Lcd</a></i><br/>

   	 <br/><strong>Stepper Motor</strong><br/><br/>
   	 <i> <a href="not-available/index.php">BiPolar Stepper Motor</a></i><br/>
	 <i> <a href="not-available/index.php">UniPolar Stepper Motor </a></i><br/>
   	 <br/><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8795837294797076"
     data-ad-slot="9256197016"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br/>
   	 <br/> <strong>Timers & Counters</strong><br/><br/>
	 <i> <a href="not-available/index.php">Timer And Counter Introduction</a></i><br/>
   	 <i> <a href="not-available/index.php">Timer 0 & Timer 1(Mode 0) </a></i><br/>
   	 <i> <a href="not-available/index.php">Timer 0 & Timer 1(Mode 1)</a></i><br/>
   	 <i> <a href="not-available/index.php">Timer 0 & Timer 1(Mode 2)</a></i><br/>
   	 <i> <a href="not-available/index.php">Timer 0 & Timer 1(Mode 3)</a></i><br/>
   	 <i> <a href="not-available/index.php">Counter 0 &amp; Counter 1</a></i><br/>
   	 <br/>
	  <strong> USART(Universal Syn. Asyn. Receiver Transmitter)</strong><br/><br/>
   	 <i> <a href="not-available/index.php">UART </a></i><br/>
   	 <i> <a href="not-available/index.php">UART Half Duplex</a></i><br/>
   	 <i> <a href="not-available/index.php">UART Full Duplex</a></i><br/><br/>
   	 <br/>
   	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8795837294797076"
     data-ad-slot="9256197016"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
   	 <br/><br/>
   	 <strong>Internal Interrupts</strong><br/><br/>
   	 <i> <a href="not-available/index.php">Internal Interrupt</a></i><br/>
   	 <i> <a href="not-available/index.php">UART Interrupt</a></i><br/>
   	 <i> <a href="not-available/index.php">Timer Interrupt</a></i><br/><br/>

   	 <strong>External Interrupts</strong><br/><br/>
   	 <i> <a href="not-available/index.php">External Interrupt</a></i><br/>
   	 <i> <a href="not-available/index.php1">EINT 0</a></i><br/>
   	 <i> <a href="not-available/index.php">EINT 1</a></i><br/>
   	 <br/>
   	 <strong>Modules Interfacing</strong><br/><br/>
   	 <i> <a href="not-available/index.php">Dot Matrix(74HC595)</a></i><br/>
   	 <i> <a href="not-available/index.php">Software I2C</a></i><br/>
   	 <i>PWM(Pluse With Modulation): <a href="https://github.com/bhura112/8051-ALL-Codes/raw/master/8051_PWM.zip">Download</a></i><br/>
   	 <i>GSM Sim900(Send and Receive SMS): <a href="https://github.com/bhura112/8051-ALL-Codes/raw/master/8051_Sim900_MSG_SEND_REC.zip">Download</a></i><br/>
   	 <i> <a href="not-available/index.php">GPS Receiver</a></i><br/>
   	<br/>
   	   	<a href="https://www.000webhost.com/962409.html" target="_blank"><img src="https://www.000webhost.com/images/banners/728x90/1.jpg" alt="Web hosting" width="728" height="90" border="0" /></a>
   	 <br/>
   </p>
	</div>
	</div>
	<script>document.getElementById("defaultOpen").click();</script>
	<div style="width: 300px; height: 800px; margin:-2000px 0px 0px 5px;">
		<p>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sembedded1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-8795837294797076"
     data-ad-slot="2735629502"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		</p>
	</div>
</body>
</html>
