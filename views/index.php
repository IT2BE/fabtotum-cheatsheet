<div class="row">
	<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><i class="fa fa-tint fab-fw"></i> <span>G-codes Cheat Sheet</span></h1>
	</div>
	<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8 text-align-right">
		<a href="http://reprap.org/wiki/Mendel_User_Manual:_RepRapGCodes" target="_blank">RepRap G-codes</a>
		<br>
		<a href="https://en.wikipedia.org/wiki/G-code" target="_blank">WikipediA G-codes</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 cheat-title">Implemented Codes</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G0</div>
	<div class="col-xs-10 col-sm-11 description">-> G1</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G1</div>
	<div class="col-xs-10 col-sm-11 description">coordinated Movement X Y Z E</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G2</div>
	<div class="col-xs-10 col-sm-11 description">CW ARC</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G3</div>
	<div class="col-xs-10 col-sm-11 description">CCW ARC</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G4</div>
	<div class="col-xs-10 col-sm-11 description">dwell S<seconds> or P<milliseconds></div>
	<div class="col-xs-2 col-sm-1 cheat-code">G10</div>
	<div class="col-xs-10 col-sm-11 description">retract filament according to settings of M207</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G11</div>
	<div class="col-xs-10 col-sm-11 description">retract recover filament according to settings of M208</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G28</div>
	<div class="col-xs-10 col-sm-11 description">home all Axis</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G29</div>
	<div class="col-xs-10 col-sm-11 description">detailed Z-Probe, probes the bed at 3 or more points.  Will fail if you haven't homed yet.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G30</div>
	<div class="col-xs-10 col-sm-11 description">single Z Probe, probes bed at current XY location S<mm> searching Z length</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G90</div>
	<div class="col-xs-10 col-sm-11 description">use Absolute Coordinates</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G91</div>
	<div class="col-xs-10 col-sm-11 description">use Relative Coordinates</div>
	<div class="col-xs-2 col-sm-1 cheat-code">G92</div>
	<div class="col-xs-10 col-sm-11 description">set current position to coordinates given</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title">M Codes</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M0</div>
	<div class="col-xs-10 col-sm-11 description">unconditional stop - Wait for user to press a button on the LCD (Only if ULTRA_LCD is enabled)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M1</div>
	<div class="col-xs-10 col-sm-11 description">same as M0</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M17</div>
	<div class="col-xs-10 col-sm-11 description">enable/Power all stepper motors</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M18</div>
	<div class="col-xs-10 col-sm-11 description">disable all stepper motors; same as M84</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M20</div>
	<div class="col-xs-10 col-sm-11 description">list SD card</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M21</div>
	<div class="col-xs-10 col-sm-11 description">init SD card</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M22</div>
	<div class="col-xs-10 col-sm-11 description">release SD card</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M23</div>
	<div class="col-xs-10 col-sm-11 description">select SD file (M23 filename.g)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M24</div>
	<div class="col-xs-10 col-sm-11 description">start/resume SD print</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M25</div>
	<div class="col-xs-10 col-sm-11 description">pause SD print</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M26</div>
	<div class="col-xs-10 col-sm-11 description">set SD position in bytes (M26 S12345)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M27</div>
	<div class="col-xs-10 col-sm-11 description">report SD print status</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M28</div>
	<div class="col-xs-10 col-sm-11 description">start SD write (M28 filename.g)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M29</div>
	<div class="col-xs-10 col-sm-11 description">stop SD write</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M30</div>
	<div class="col-xs-10 col-sm-11 description">delete file from SD (M30 filename.g)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M31</div>
	<div class="col-xs-10 col-sm-11 description">output time since last M109 or SD card start to serial</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M32</div>
	<div class="col-xs-10 col-sm-11 description">select file and start SD print (Can be used _while_ printing from SD card files):</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">syntax "M32 /path/filename#", or "M32 S<startpos bytes> !filename#"</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">Call gcode file: M32 P !filename#" and return to caller file after finishing (similar to #include).</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">The '#' is necessary when calling from within sd files, as it stops buffer prereading</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M42</div>
	<div class="col-xs-10 col-sm-11 description">change pin status via gcode Use M42 Px Sy to set pin x to value y, when omitting Px the onboard led will be used.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M80</div>
	<div class="col-xs-10 col-sm-11 description">turn on Power Supply</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M81</div>
	<div class="col-xs-10 col-sm-11 description">turn off Power Supply</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M82</div>
	<div class="col-xs-10 col-sm-11 description">set E codes absolute (default)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M83</div>
	<div class="col-xs-10 col-sm-11 description">set E codes relative while in Absolute Coordinates (G90) mode</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M84</div>
	<div class="col-xs-10 col-sm-11 description">disable steppers until next move,</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">or use S<seconds> to specify an inactivity timeout, after which the steppers will be disabled.</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">S0 to disable the timeout.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M85</div>
	<div class="col-xs-10 col-sm-11 description">set inactivity shutdown timer with parameter S<seconds>. To disable set zero (default)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M92</div>
	<div class="col-xs-10 col-sm-11 description">set axis_steps_per_unit - same syntax as G92</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M104</div>
	<div class="col-xs-10 col-sm-11 description">set extruder target temp</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M105</div>
	<div class="col-xs-10 col-sm-11 description">read current temp</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M106</div>
	<div class="col-xs-10 col-sm-11 description">fan on</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M107</div>
	<div class="col-xs-10 col-sm-11 description">fan off</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M109</div>
	<div class="col-xs-10 col-sm-11 description">Sxxx Wait for extruder current temp to reach target temp. Waits only when heating</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">Rxxx Wait for extruder current temp to reach target temp. Waits when heating and cooling</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">IF AUTOTEMP is enabled, S<mintemp> B<maxtemp> F<factor>. Exit autotemp by any M109 without F</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M114</div>
	<div class="col-xs-10 col-sm-11 description">output current position to serial port</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M115</div>
	<div class="col-xs-10 col-sm-11 description">capabilities string</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M117</div>
	<div class="col-xs-10 col-sm-11 description">display message</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M119</div>
	<div class="col-xs-10 col-sm-11 description">Output Endstop status to serial port</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M126</div>
	<div class="col-xs-10 col-sm-11 description">Solenoid Air Valve Open (BariCUDA support by jmil)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M127</div>
	<div class="col-xs-10 col-sm-11 description">Solenoid Air Valve Closed (BariCUDA vent to atmospheric pressure by jmil)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M128</div>
	<div class="col-xs-10 col-sm-11 description">EtoP Open (BariCUDA EtoP = electricity to air pressure transducer by jmil)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M129</div>
	<div class="col-xs-10 col-sm-11 description">EtoP Closed (BariCUDA EtoP = electricity to air pressure transducer by jmil)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M140</div>
	<div class="col-xs-10 col-sm-11 description">set bed target temp</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M150</div>
	<div class="col-xs-10 col-sm-11 description">set BlinkM Color Output R: Red<0-255> U(!): Green<0-255> B: Blue<0-255> over i2c, G for green does not work.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M190</div>
	<div class="col-xs-10 col-sm-11 description">Sxxx Wait for bed current temp to reach target temp. Waits only when heating</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">Rxxx Wait for bed current temp to reach target temp. Waits when heating and cooling</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M200</div>
	<div class="col-xs-10 col-sm-11 description">D<millimeters>- set filament diameter and set E axis units to cubic millimeters (use S0 to set back to millimeters).</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M201</div>
	<div class="col-xs-10 col-sm-11 description">set max acceleration in units/s^2 for print moves (M201 X1000 Y1000)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M202</div>
	<div class="col-xs-10 col-sm-11 description">set max acceleration in units/s^2 for travel moves (M202 X1000 Y1000) Unused in Marlin!!</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M203</div>
	<div class="col-xs-10 col-sm-11 description">set maximum feedrate that your machine can sustain (M203 X200 Y200 Z300 E10000) in mm/sec</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M204</div>
	<div class="col-xs-10 col-sm-11 description">set default acceleration: S normal moves T filament only moves (M204 S3000 T7000) in mm/sec^2</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">also sets minimum segment time in ms (B20000) to prevent buffer under-runs and M20 minimum feedrate</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M205</div>
	<div class="col-xs-10 col-sm-11 description">advanced settings:  minimum travel speed S=while printing T=travel only,</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">B=minimum segment time X= maximum xy jerk, Z=maximum Z jerk, E=maximum E jerk</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M206</div>
	<div class="col-xs-10 col-sm-11 description">set additional homing offset</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M207</div>
	<div class="col-xs-10 col-sm-11 description">set retract length S[positive mm] F[feedrate mm/min] Z[additional zlift/hop], stays in mm regardless of M200 setting</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M208</div>
	<div class="col-xs-10 col-sm-11 description">set recover=unretract length S[positive mm surplus to the M207 S*] F[feedrate mm/sec]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M209</div>
	<div class="col-xs-10 col-sm-11 description">S<1=true/0=false> enable automatic retract detect if the slicer did not support G10/11:</div>
	<div class="col-xs-10 col-sm-11 description col-xs-offset-2 col-sm-offset-1">every normal extrude-only move will be classified as retract depending on the direction.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M218</div>
	<div class="col-xs-10 col-sm-11 description">set hotend offset (in mm): T<extruder_number> X<offset_on_X> Y<offset_on_Y></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M220</div>
	<div class="col-xs-10 col-sm-11 description">S<factor in percent> - set speed factor override percentage</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M221</div>
	<div class="col-xs-10 col-sm-11 description">S<factor in percent> - set extrude factor override percentage</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M226</div>
	<div class="col-xs-10 col-sm-11 description">P<pin number> S<pin state> - Wait until the specified pin reaches the state required</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M240</div>
	<div class="col-xs-10 col-sm-11 description">trigger a camera to take a photograph</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M250</div>
	<div class="col-xs-10 col-sm-11 description">set LCD contrast C<contrast value> (value 0..63)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M280</div>
	<div class="col-xs-10 col-sm-11 description">set servo position absolute. P: servo index, S: angle or microseconds</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M300</div>
	<div class="col-xs-10 col-sm-11 description">play beep sound S<frequency Hz> P<duration ms></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M301</div>
	<div class="col-xs-10 col-sm-11 description">set PID parameters P I and D</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M302</div>
	<div class="col-xs-10 col-sm-11 description">allow cold extrudes, or set the minimum extrude S<temperature>.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M303</div>
	<div class="col-xs-10 col-sm-11 description">PID relay autotune S<temperature> sets the target temperature. (default target temperature = 150C)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M304</div>
	<div class="col-xs-10 col-sm-11 description">set bed PID parameters P I and D</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M400</div>
	<div class="col-xs-10 col-sm-11 description">finish all moves</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M401</div>
	<div class="col-xs-10 col-sm-11 description">lower z-probe if present</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M402</div>
	<div class="col-xs-10 col-sm-11 description">raise z-probe if present</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M500</div>
	<div class="col-xs-10 col-sm-11 description">stores parameters in EEPROM</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M501</div>
	<div class="col-xs-10 col-sm-11 description">reads parameters from EEPROM (if you need reset them after you changed them temporarily).</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M502</div>
	<div class="col-xs-10 col-sm-11 description">reverts to the default "factory settings".  You still need to store them in EEPROM afterwards if you want to.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M503</div>
	<div class="col-xs-10 col-sm-11 description">print the current settings (from memory not from EEPROM)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M540</div>
	<div class="col-xs-10 col-sm-11 description">use S[0|1] to enable or disable the stop SD card print on endstop hit (requires ABORT_ON_ENDSTOP_HIT_FEATURE_ENABLED)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M600</div>
	<div class="col-xs-10 col-sm-11 description">pause for filament change X[pos] Y[pos] Z[relative lift] E[initial retract] L[later retract distance for removal]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M665</div>
	<div class="col-xs-10 col-sm-11 description">set delta configurations</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M666</div>
	<div class="col-xs-10 col-sm-11 description">set delta endstop adjustment</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M605</div>
	<div class="col-xs-10 col-sm-11 description">set dual x-carriage movement mode: S<mode> [ X<duplication x-offset> R<duplication temp offset> ]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M907</div>
	<div class="col-xs-10 col-sm-11 description">set digital trimpot motor current using axis codes.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M908</div>
	<div class="col-xs-10 col-sm-11 description">control digital trimpot directly.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M350</div>
	<div class="col-xs-10 col-sm-11 description">set microstepping mode.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M351</div>
	<div class="col-xs-10 col-sm-11 description">toggle MS1 MS2 pins directly.</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M928</div>
	<div class="col-xs-10 col-sm-11 description">start SD logging (M928 filename.g) - ended by M29</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M999</div>
	<div class="col-xs-10 col-sm-11 description">restart after being stopped by error</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title">FABtotum custom M codes</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M3</div>
	<div class="col-xs-10 col-sm-11 description">S[RPM] SPINDLE ON - Clockwise</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M4</div>
	<div class="col-xs-10 col-sm-11 description">S[RPM] SPINDLE ON - CounterClockwise</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M5</div>
	<div class="col-xs-10 col-sm-11 description">SPINDLE OFF</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M700</div>
	<div class="col-xs-10 col-sm-11 description">S<0-255> - Laser Power Control</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M701</div>
	<div class="col-xs-10 col-sm-11 description">S<0-255> - Ambient Light, Set Red</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M702</div>
	<div class="col-xs-10 col-sm-11 description">S<0-255> - Ambient Light, Set Green</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M703</div>
	<div class="col-xs-10 col-sm-11 description">S<0-255> - Ambient Light, Set Blue</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M704</div>
	<div class="col-xs-10 col-sm-11 description">signalling Light ON (same colors of Ambient Light)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M705</div>
	<div class="col-xs-10 col-sm-11 description">signalling Light OFF</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M706</div>
	<div class="col-xs-10 col-sm-11 description">S<0-255> - Head Light</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M710</div>
	<div class="col-xs-10 col-sm-11 description">write and store in eeprom calibrated z_probe offset length</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M711</div>
	<div class="col-xs-10 col-sm-11 description">write and store in eeprom calibrated zprobe extended angle</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M712</div>
	<div class="col-xs-10 col-sm-11 description">write and store in eeprom calibrated zprobe retacted angle</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M713</div>
	<div class="col-xs-10 col-sm-11 description">autocalibration of z-probe length and store in eeprom</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M714</div>
	<div class="col-xs-10 col-sm-11 description">alternate the X axis endstop (M714 S0 use standard X axis endstop, M714 S1 use X axis max endstop)</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M720</div>
	<div class="col-xs-10 col-sm-11 description">24VDC head power ON</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M721</div>
	<div class="col-xs-10 col-sm-11 description">24VDC head power OFF</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M722</div>
	<div class="col-xs-10 col-sm-11 description">5VDC SERVO_1 power ON</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M723</div>
	<div class="col-xs-10 col-sm-11 description">5VDC SERVO_1 power OFF</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M724</div>
	<div class="col-xs-10 col-sm-11 description">5VDC SERVO_2 power ON</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M725</div>
	<div class="col-xs-10 col-sm-11 description">5VDC SERVO_2 power OFF</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M726</div>
	<div class="col-xs-10 col-sm-11 description">5VDC RASPBERRY PI power ON</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M727</div>
	<div class="col-xs-10 col-sm-11 description">5VDC RASPBERRY PI power OFF</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M728</div>
	<div class="col-xs-10 col-sm-11 description">RASPBERRY Alive Command</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M729</div>
	<div class="col-xs-10 col-sm-11 description">RASPBERRY Sleep - wait for the complete shutdown of raspberryPI</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M730</div>
	<div class="col-xs-10 col-sm-11 description">read last error code</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M731</div>
	<div class="col-xs-10 col-sm-11 description">disable kill on Door Open</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M732</div>
	<div class="col-xs-10 col-sm-11 description">enable or disable the permanent door security switch (M732 S0 -> disable (unsafe), M732 S1 -> enable (safe))</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M734</div>
	<div class="col-xs-10 col-sm-11 description">enable /disable Endstop warnings</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M735</div>
	<div class="col-xs-10 col-sm-11 description">enable /disable silent mode (sounds except for power-on)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M740</div>
	<div class="col-xs-10 col-sm-11 description">read WIRE_END sensor</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M741</div>
	<div class="col-xs-10 col-sm-11 description">read DOOR_OPEN sensor</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M742</div>
	<div class="col-xs-10 col-sm-11 description">read REEL_LENS_OPEN sensor</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M743</div>
	<div class="col-xs-10 col-sm-11 description">read SECURE_SWITCH sensor</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M744</div>
	<div class="col-xs-10 col-sm-11 description">read HOT_BED placed in place</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M745</div>
	<div class="col-xs-10 col-sm-11 description">read Head placed in place</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M750</div>
	<div class="col-xs-10 col-sm-11 description">read PRESSURE sensor (ANALOG 0-1023)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M751</div>
	<div class="col-xs-10 col-sm-11 description">read voltage monitor 24VDC input supply (ANALOG V)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M752</div>
	<div class="col-xs-10 col-sm-11 description">read voltage monitor 5VDC input supply (ANALOG V)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M753</div>
	<div class="col-xs-10 col-sm-11 description">read current monitor input supply (ANALOG A)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M754</div>
	<div class="col-xs-10 col-sm-11 description">read tempearture raw values (10bit ADC output)</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M760</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Main Controller serial ID</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M761</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Main Controller control code of serial ID</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M762</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Main Controller board version number</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M763</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Main Controller production batch number</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M764</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Main Controller control code of production batch number</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M765</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Firmware Version</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M766</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Firmware Build Date and Time</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M767</div>
	<div class="col-xs-10 col-sm-11 description">read FABtotum Personal Fabricator Firmware Update Author</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M785</div>
	<div class="col-xs-10 col-sm-11 description">turn Prism UV module On/off M785 S[0-1] </div>
	<div class="col-xs-2 col-sm-1 cheat-code">M786</div>
	<div class="col-xs-10 col-sm-11 description">external Power OFF</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M779</div>
	<div class="col-xs-10 col-sm-11 description">force Head product ID reading (for testing purpose only)</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M780</div>
	<div class="col-xs-10 col-sm-11 description">read Head Product Name [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M781</div>
	<div class="col-xs-10 col-sm-11 description">read Head Vendor Name [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M782</div>
	<div class="col-xs-10 col-sm-11 description">read Head product ID</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M783</div>
	<div class="col-xs-10 col-sm-11 description">read Head vendor ID [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M784</div>
	<div class="col-xs-10 col-sm-11 description">read Head Serial ID</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M785</div>
	<div class="col-xs-10 col-sm-11 description">read Head firmware version [overridden]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M786</div>
	<div class="col-xs-10 col-sm-11 description">read needed firmware version of FABtotum Personal Fabricator Main Controller [overridden]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M787</div>
	<div class="col-xs-10 col-sm-11 description">read Head capability: type0 (passive, active) [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M788</div>
	<div class="col-xs-10 col-sm-11 description">read Head capability: type1 (additive, milling, syringe, laser etc..) [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M789</div>
	<div class="col-xs-10 col-sm-11 description">read Head capability: purpose (single purpose, multipurpose) [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M790</div>
	<div class="col-xs-10 col-sm-11 description">read Head capability: wattage (0-200W) [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M791</div>
	<div class="col-xs-10 col-sm-11 description">read Head capability: axis (number of axis) [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M792</div>
	<div class="col-xs-10 col-sm-11 description">read Head capability: servo (number of axis) [unimplemented]</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M793</div>
	<div class="col-xs-10 col-sm-11 description">set/read installed head soft ID</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M800</div>
	<div class="col-xs-10 col-sm-11 description">changes/reads the thermistor of extruder0 type index</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M801</div>
	<div class="col-xs-10 col-sm-11 description">changes/reads the current extruder0 max temp</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M802</div>
	<div class="col-xs-10 col-sm-11 description">returns supported thermistor types by index</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M803</div>
	<div class="col-xs-10 col-sm-11 description">changes/reads the current extruder0 thermistor input</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M804</div>
	<div class="col-xs-10 col-sm-11 description">changes/reads the current automatic fan on temp change configuration.</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 cheat-title"></div>
	<div class="col-xs-2 col-sm-1 cheat-code">M998</div>
	<div class="col-xs-10 col-sm-11 description">restart after being killed</div>
	<div class="col-xs-2 col-sm-1 cheat-code">M999</div>
	<div class="col-xs-10 col-sm-11 description">restart after being stopped</div>
</div>
<br>
<div class="row">
	<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
		<div class="txt-color-blueDark">&copy; <span>2017</span>&nbsp;&nbsp;Marcel Trapman</div>
	</div>
</div>