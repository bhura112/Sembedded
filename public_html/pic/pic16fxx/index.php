<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/index.css"/>
<link rel="stylesheet" type="text/css" href="../../css/childFrame.css"/>
<script src="../../js/childFrame.js"></script>
<title>PIC Series</title>
</head>

<body>

<header class="header">
<div class="hpart1">
 <a href="http://sembedded.net">SEmbedded Web</a>
</div>

<!-- **********************************************************   -->
<div class="dropdown">
  <button class="dropbtn">8051 Series</button>
  <div class="dropdown-content">
    <a href="../../8051/at89c51">AT89C51</a>
    <a href="../../8051/at89s51/">AT89S51</a>
    <a href="../../8051/sst89rdxx/">SST89RDxxx</a>

  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">AVR Series</button>
  <div class="dropdown-content">
    <a href="../../avr/atmega8/">ATmega8</a>
    <a href="../../avr/atmega16/">ATmega16</a>
    <a href="../../avr/atmega32/">ATmega32</a>
    <a href="../../avr/atmega128/">ATmega128</a>
    <a href="../../avr/atmega328p/">ATmega328p</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">PIC Series</button>
  <div class="dropdown-content">
    <a href="../pic/pic12fxx/">PIC12Fxx</a>
    <a href="../pic/pic16fxx/">PIC16Fxx</a>
    <a href="../pic/pic18fxx/">PIC18Fxx</a>
    <a href="../pic/pic24fjxx/">PIC24fjxxx</a>
    <a href="../pic/pic32Mxxx/">PIC32MXxxx</a>
    <a href="../pic/pic32_ds/">PIC_ds32</a>
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
<!-- ************************************************************* -->

<div class="hr1"></div>
<div class="Container1">
  <div class="Container1-Header"> <p>Home</p>  </div>
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
  <div class="Container2-Header"> <p>PIC16f877a - Introduction</p>  </div>
   <div class="Container2-text">
    		<p class="C1p1">PIC 16F877 is one of the most advanced microcontroller from Microchip. This controller is widely used for experimental and modern applications because of its low price, wide range of applications, high quality, and ease of availability. It is ideal for applications such as machine control applications, measurement devices, study purpose, and so on.  The PIC 16F877 features all the components which modern microcontrollers normally have. The figure of a PIC16F877 chip is shown below.
    		<br/>
    		<img style="margin:20px 0px 0px 40%; " src="../../images/PIC-16F877.gif"/>
    		<br/><br/><b>General Features</b>
<br/><br/><i>High performance RISC CPU.</i>
<br/><i>ONLY 35 simple word instructions.</i>
<br/><i>All single cycle instructions except for program branches which are two cycles.</i>
<br/><i>Operating speed: clock input (200MHz), instruction cycle (200nS).</i>
<br/><i>Up to 368×8bit of RAM (data memory), 256×8 of EEPROM (data memory), 8k×14 of flash memory.</i>
<br/> <i>Pin out compatible to PIC 16C74B, PIC 16C76, PIC 16C77.</i>
<br/><i>Eight level deep hardware stack.</i>
<br/><i>Interrupt capability (up to 14 sources).</i>
<br/> <i>Different types of addressing modes (direct, Indirect, relative addressing modes).</i>
<br/><i>Power on Reset (POR).</i>
<br/><i>Power-Up Timer (PWRT) and oscillator start-up timer.</i>
<br/><i>Low power- high speed CMOS flash/EEPROM.</i>
<br/><i>Fully static design.</i>
<br/><i>Wide operating voltage range (2.0 – 5.56)volts.</i>
<br/><i>High sink/source current (25mA).</i>
<br/><i>Commercial, industrial and extended temperature ranges.</i>
<br/><i> Low power consumption (<0.6mA typical @3v-4MHz, 20µA typical @3v-32MHz and <1 A typical standby).</i>
  <br/><br/>
    </p>
   </div>
</div>
<div id="Basic" class="Container2">
      <div class="Container2-Header"> <p>PIC16f877a - Basic</p>  </div>
           <p>Basic</p>
</div>

<div id="Soft" class="Container2">
     <div class="Container2-Header"> <p>PIC16f877a - Software</p>  </div>
           <p>Software</p>
</div>

<div id="Doc" class="Container2">
  <div class="Container2-Header"> <p>PIC16f877a - Documents</p>  </div>
              <p> DOC</p>
</div>

<div id="Code" class="Container2">
<div class="Container2-Header"> <p>PIC16f877a - Documents</p>  </div>
<p>Code</p>
</div>
<script>document.getElementById("defaultOpen").click();</script>
</body>
</html>
