<?php
?>

<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Predeclared Combinations</a></li>
    </ul>
<p >Note:<span style="color:red">To remove the flashing of site during page load, place this code under "body" on your style.css=> "display:none"</span></p>	
    
    <div class="tab-content">

        <div id="tab1" class="tab active">
            <select label="Combination" id="combinations" style=" width: 15%;">
    		</select>
    		<button id="selectbtn">Save and Select Combination</button>
    		<button id="updatebtn" disabled="true">Update Selected Combo</button>
        	<p><label class="legend">Delay</label> : Delay before the animation starts</p>
        	<p><label class="legend">Offset</label> : Distance to start the animation (related to the browser bottom)</p>
        	<div class="image_div cat_div">
				<div class="cat_title"><label class="cat_tit">Image</label></div>
				<div class="effect_options">
					<label>Entrance Effect</label><br />
					<select class="effect" id="img_effect">
						<optgroup label="Effects">
							<option in="none">None</option>
							<option in="lightSpeedIn" out="lightSpeedOut">Light Speed</option>
							<option in="rollIn" out="rollOut">Roll</option>
							<option in="wobble" out="fadeOut">Wobble</option>
							<option in="tada" out="fadeOut">Tadaa!</option>
							<option in="swing" out="fadeOut">Swing</option>
							<option in="shake" out="fadeOut">Shake</option>
							<option in="rubberBand" out="fadeOut">Rubberband</option>
							<option in="pulse" out="fadeOut">Pulse</option>
							<option in="flash" out="fadeOut">Flash</option>
						</optgroup>
					</select>
				</div>
				<div class="effect_options_text">
					<label>Delay</label><br />
					<input type="text" class="input delay" maxlength="3" id="img_delay">
				</div>
				<div class="effect_options_text">
					<label>Offset</label><br />
					<input type="text" class="input offset" maxlength="3" id="img_offset">
				</div>
			</div>


			<div class="div_div cat_div">
				<div class="cat_title"><label class="cat_tit">Div</label></div>
				<div class="effect_options">
					<label>Entrance Effect</label><br />
					<select class="effect effect_div" id="div_effect">
						<optgroup label="Effects">
							<option in="none">None</option>
							<option in="lightSpeedIn" out="lightSpeedOut">Light Speed</option>
							<option in="rollIn" out="rollOut">Roll</option>
							<option in="wobble" out="fadeOut">Wobble</option>
							<option in="tada" out="fadeOut">Tadaa!</option>
							<option in="swing" out="fadeOut">Swing</option>
							<option in="shake" out="fadeOut">Shake</option>
							<option in="rubberBand" out="fadeOut">Rubberband</option>
							<option in="pulse" out="fadeOut">Pulse</option>
							<option in="flash" out="fadeOut">Flash</option>
						</optgroup>
					</select>
				</div>
				<div class="effect_options_text">
					<label>Delay</label><br />
					<input type="text" class="input delay_div" maxlength="3" id="div_delay">
				</div>
				<div class="effect_options_text">
					<label>Offset</label><br />
					<input type="text" class="input offset_div" maxlength="3" id="div_offset">
				</div>
			</div>

			<div class="p_div cat_div">
				<div class="cat_title"><label class="cat_tit">Paragraph</label></div>
				<div class="effect_options">
					<label>Entrance Effect</label><br />
					<select class="effect effect_p" id="p_effect">
								<optgroup label="Effects">
							<option in="none">None</option>
							<option in="lightSpeedIn" out="lightSpeedOut">Light Speed</option>
							<option in="rollIn" out="rollOut">Roll</option>
							<option in="wobble" out="fadeOut">Wobble</option>
							<option in="tada" out="fadeOut">Tadaa!</option>
							<option in="swing" out="fadeOut">Swing</option>
							<option in="shake" out="fadeOut">Shake</option>
							<option in="rubberBand" out="fadeOut">Rubberband</option>
							<option in="pulse" out="fadeOut">Pulse</option>
							<option in="flash" out="fadeOut">Flash</option>
						</optgroup>
					</select>
				</div>
				<div class="effect_options_text">
					<label>Delay</label><br />
					<input type="text" class="input delay_p" maxlength="3" id="p_delay">
				</div>
				<div class="effect_options_text">
					<label>Offset</label><br />
					<input type="text" class="input offset_p" maxlength="3" id="p_offset">
				</div>
			</div>
        </div>
        </div>
    </div>
</div>