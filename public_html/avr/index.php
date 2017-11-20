<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/index.css"/>
<link rel="stylesheet" type="text/css" href="../css/childFrame.css"/>
<script src="../js/childFrame.js"></script>
<title>AVR Series</title>
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
<div class="Container1">
  <div class="Container1-Header">  <p><a style="text-decoration: none; color: #fff;"href="../">Home</a></p>  </div>
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
  <div class="Container2-Header"> <p>ATmega8 - Introduction</p>  </div>
   <div class="Container2-text">
    		<p class="C1p1">In 1996, AVR Microcontroller was produced by the “Atmel Corporation”. The Microcontroller includes the Harvard architecture that works rapidly with the RISC. The features of this Microcontroller include different features compared with other like :
    		<br/><br/> <i>Sleep modes-6</i>
    		<br/> <i> Inbuilt ADC (analog to digital converter)</i>
    		<br/> <i> Internal oscillator and serial data communication</i>
    		<br/> <i> Performs the instructions in a single execution cycle. </i>
    		<br/><br/>
    		These Microcontroller were very fast and they utilize low power to work in different power saving modes. There are different configurations of AVR microcontrollers are available to perform various operations like <b>8-bit, 16-bit, and 32-bit</b>. <br/><br/>Please refer the below link for; Types of AVR Microcontroller
    		<br/><br/>AVR microcontrollers are available in three different categories such as TinyAVR, MegaAVR, and XmegaAVR

<br/><br/><i>The Tiny AVR microcontroller is very small in size and used in many simple applications</i>
<br/><i>Mega AVR microcontroller is very famous due to a large number of integrated components, good memory, and used in modern to multiple applications</i>
<br/><i>The Xmega AVR microcontroller is applied in difficult applications, which require high speed and huge program memory.</i>
    		<br/><br/><img style="margin:20px 0px 0px 40%; " src="../images/Atmega8-Microcontroller.jpg"/>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad2 -->
<ins class="adsbygoogle"
    style="display:inline-block;width:728px;height:90px"
    data-ad-client="ca-pub-8795837294797076"
    data-ad-slot="9256197016"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    		<br/><br/><b>General Features</b>
<br/>
<br/><i> Advanced RISC Architecture</i>
<br/><i> 130 Powerful Instructions – Most Single-clock Cycle Execution.</i>
<br/><i> 32 × 8 General Purpose Working Registers</i>
<br/><i> Fully Static Operation</i>
<br/><i> Up to 16MIPS Throughput at 16MHz</i>
<br/><i> On-chip 2-cycle Multiplier</i>
<br/><i> High Endurance Non-volatile M</i>
<br/><i> 8Kbytes of In-System Self-programmable Flash program memory</i>
<br/><i> 512Bytes EEPROM</i>
<br/><i> 1Kbyte Internal SRAM</i>
<br/><i> Write/Erase Cycles: 10,000 Flash/100,000 EEPROM</i>
<br/><i> Data retention: 20 years at 85°C/100 years at 25°C(1)</i>
<br/><i> Optional Boot Code Section with Independent Lock Bits</i>
<br/><i> In-System Programming by On-chip Boot Program</i>
<br/><i> True Read-While-Write Operation</i>
				<br/><i> Programming Lock for Software Security</i>
   		 <br/><br/>
    		</p>
   </div>
</div>
<div id="Basic" class="Container2">
  <div class="Container2-Header"> <p>ATmega8 - Basics</p>  </div>
   <div class="Container2-text">
    		<p class="C1p1">
        <strong> Atmega8  Architecture</strong> <br/>
        <p>
          <p align="Left">This section discusses the Atmel®AVR®
 core architecture in general. The main function of the
CPU core is to ensure correct program execution. The CPU must therefore be able to access
memories, perform calculations, control peripherals, and handle interrupts.</p>
          <img  src="../images/atmega8-arch0.png" align="right"/>

        </p>
        <strong> Atmega8  Block Diagram</strong> <br/>
        <p> The Atmel®AVR®
            ATmega8 is a low-power CMOS 8-bit microcontroller based on the AVR RISC
            architecture.
            By executing powerful instructions in a single clock cycle, the ATmega8 achieves
            throughputs approaching 1MIPS per MHz, allowing the system designer to optimize power con-
            sumption versus processing speed. </p>

         </p>
       <br/><br/>
       <p style="font-size:20px;">
  The ATmega8 provides the following features: 8 Kbytes of In-System Programmable Flash with
  Read-While-Write capabilities, 512 bytes of EEPROM, 1 Kbyte of SRAM, 23 general purpose
  I/O lines, 32 general purpose working registers,
  three flexible Timer/Counters with compare
  modes, internal and external interrupts, a seri
  al programmable USART, a byte oriented Two-
  wire Serial Interface, a 6-channel ADC (eight channels in TQFP and QFN/MLF packages) with
  10-bit accuracy, a programmable
  Watchdog Timer with Internal Os
  cillator, an SPI serial port,
  and five software selectable power saving modes. The Idle mode stops the CPU while allowing
  the SRAM, Timer/Counters, SPI port, and interr
  upt system to continue functioning.
       <img style="margin:20px 0px 0px 40%; " src="../images/atmega8-arch.png"  align="right" HSPACE="20" VSPACE="20"/>
        The Power-
down mode saves the register contents but freezes
the Oscillator, disabling all other chip func-
tions until the next Interrupt or Hardware Reset. In Power-save mode, the asynchronous timer
continues to run, allowing the user to maintain a timer base while the rest of the device is sleep-
ing. The ADC Noise Reduction mode stops the
CPU and all I/O modules except asynchronous
timer and ADC, to minimize switching noise
 during ADC conversions. In Standby mode, the
crystal/resonator Oscillator is running while the re
st of the device is sleeping. This allows very
fast start-up combined with low-power consumption.
       </p>
	</div>
	</div>

</body>
</html>
