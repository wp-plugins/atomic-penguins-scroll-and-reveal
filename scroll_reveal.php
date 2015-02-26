<?php
?>

<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Predeclared Combinations</a></li>
        <li><a href="#tab2">Custom Animations</a></li>
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
						<optgroup label="Other">
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
						<optgroup label="Fade">
							<option in="fadeIn" out="fadeOut">FadeIn</option>
							<option in="fadeInUp" out="fadeOutUp">FadeUp</option>
							<option in="fadeInDown" out="fadeOutDown">FadeDown</option>
							<option in="fadeInRight" out="fadeOutRight">FadeRight</option>
							<option in="fadeInLeft" out="fadeOutLeft">FadeLeft</option>
						</optgroup>
						<optgroup label="Bounce">
							<option in="bounceIn" out="bounceOut">Bounce In</option>
							<option in="bounceInDown" out="bounceOutDown">Bounce In Down</option>
							<option in="bounceInLeft" out="bounceOutLeft">Bounce In Left</option>
							<option in="bounceInUp" out="bounceOutUp">Bounce In Up</option>
						</optgroup>
						<optgroup label="Flippers">
							<option in="flipInX" out="flipOutX">Flip X</option>
							<option in="flipInY" out="flipOutY">Flip X</option>
						</optgroup>
						<optgroup label="Rotate">
							<option in="rotateIn" out="rotateOut">Rotate In</option>
							<option in="rotateInDownLeft" out="rotateOutDownLeft">Rotate In Down Left</option>
							<option in="rotateInDownRight" out="rotateOutDownRight">Rotate In Down Right</option>
							<option in="rotateInUpLeft" out="rotateOutUpLeft">Rotate In Up Left</option>
							<option in="rotateInUpRight" out="rotateOutUpRight">Rotate In Up Right</option>
						</optgroup>
						<optgroup label="Zoom">
							<option in="zoomIn" out="zoomOut">Zoom In</option>
							<option in="zoomInDown" out="zoomOutDown">Zoom In Down</option>
							<option in="zoomInUp" out="zoomOutUp">Zoom In Up</option>
							<option in="zoomInRight" out="zoomOutRight">Zoom In Right</option>
							<option in="zoomInLeft" out="zoomOutLeft">Zoom In Left</option>
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
						<optgroup label="Other">
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
						<optgroup label="Fade">
							<option in="fadeIn" out="fadeOut">FadeIn</option>
							<option in="fadeInUp" out="fadeOutUp">FadeUp</option>
							<option in="fadeInDown" out="fadeOutDown">FadeDown</option>
							<option in="fadeInRight" out="fadeOutRight">FadeRight</option>
							<option in="fadeInLeft" out="fadeOutLeft">FadeLeft</option>
						</optgroup>
						<optgroup label="Bounce">
							<option in="bounceIn" out="bounceOut">Bounce In</option>
							<option in="bounceInDown" out="bounceOutDown">Bounce In Down</option>
							<option in="bounceInLeft" out="bounceOutLeft">Bounce In Left</option>
							<option in="bounceInUp" out="bounceOutUp">Bounce In Up</option>
						</optgroup>
						<optgroup label="Flippers">
							<option in="flipInX" out="flipOutX">Flip X</option>
							<option in="flipInY" out="flipOutY">Flip Y</option>
						</optgroup>
						<optgroup label="Rotate">
							<option in="rotateIn" out="rotateOut">Rotate In</option>
							<option in="rotateInDownLeft" out="rotateOutDownLeft">Rotate In Down Left</option>
							<option in="rotateInDownRight" out="rotateOutDownRight">Rotate In Down Right</option>
							<option in="rotateInUpLeft" out="rotateOutUpLeft">Rotate In Up Left</option>
							<option in="rotateInUpRight" out="rotateOutUpRight">Rotate In Up Right</option>
						</optgroup>
						<optgroup label="Zoom">
							<option in="zoomIn" out="zoomOut">Zoom In</option>
							<option in="zoomInDown" out="zoomOutDown">Zoom In Down</option>
							<option in="zoomInUp" out="zoomOutUp">Zoom In Up</option>
							<option in="zoomInRight" out="zoomOutRight">Zoom In Right</option>
							<option in="zoomInLeft" out="zoomOutLeft">Zoom In Left</option>
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
								<optgroup label="Other">
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
						<optgroup label="Fade">
							<option in="fadeIn" out="fadeOut">FadeIn</option>
							<option in="fadeInUp" out="fadeOutUp">FadeUp</option>
							<option in="fadeInDown" out="fadeOutDown">FadeDown</option>
							<option in="fadeInRight" out="fadeOutRight">FadeRight</option>
							<option in="fadeInLeft" out="fadeOutLeft">FadeLeft</option>
						</optgroup>
						<optgroup label="Bounce">
							<option in="bounceIn" out="bounceOut">Bounce In</option>
							<option in="bounceInDown" out="bounceOutDown">Bounce In Down</option>
							<option in="bounceInLeft" out="bounceOutLeft">Bounce In Left</option>
							<option in="bounceInUp" out="bounceOutUp">Bounce In Up</option>
						</optgroup>
						<optgroup label="Flippers">
							<option in="flipInX" out="flipOutX">Flip X</option>
							<option in="flipInY" out="flipOutY">Flip Y</option>
						</optgroup>
						<optgroup label="Rotate">
							<option in="rotateIn" out="rotateOut">Rotate In</option>
							<option in="rotateInDownLeft" out="rotateOutDownLeft">Rotate In Down Left</option>
							<option in="rotateInDownRight" out="rotateOutDownRight">Rotate In Down Right</option>
							<option in="rotateInUpLeft" out="rotateOutUpLeft">Rotate In Up Left</option>
							<option in="rotateInUpRight" out="rotateOutUpRight">Rotate In Up Right</option>
						</optgroup>
						<optgroup label="Zoom">
							<option in="zoomIn" out="zoomOut">Zoom In</option>
							<option in="zoomInDown" out="zoomOutDown">Zoom In Down</option>
							<option in="zoomInUp" out="zoomOutUp">Zoom In Up</option>
							<option in="zoomInRight" out="zoomOutRight">Zoom In Right</option>
							<option in="zoomInLeft" out="zoomOutLeft">Zoom In Left</option>
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
 
        <div id="tab2" class="tab">
            <label>Class Name : </label><input type="text" maxlength="25" id="custom_class">
            <input type="button" id="custom_animation" value="Save">
            <input type="button" id="update_animation" value="Update" style="display: none">
            <input type="button" id="cancel_update" value="Cancel" style="display: none">
            <div class="custom_options">
	            <div class="effect_options">
						<label>Entrance Effect</label><br />
						<select class="effect custom_effect">
							<optgroup label="Other">
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
					<optgroup label="Fade">
						<option in="fadeIn" out="fadeOut">FadeIn</option>
						<option in="fadeInUp" out="fadeOutUp">FadeUp</option>
						<option in="fadeInDown" out="fadeOutDown">FadeDown</option>
						<option in="fadeInRight" out="fadeOutRight">FadeRight</option>
						<option in="fadeInLeft" out="fadeOutLeft">FadeLeft</option>
					</optgroup>
					<optgroup label="Bounce">
						<option in="bounceIn" out="bounceOut">Bounce In</option>
						<option in="bounceInDown" out="bounceOutDown">Bounce In Down</option>
						<option in="bounceInLeft" out="bounceOutLeft">Bounce In Left</option>
						<option in="bounceInUp" out="bounceOutUp">Bounce In Up</option>
					</optgroup>
					<optgroup label="Flippers">
						<option in="flipInX" out="flipOutX">Flip X</option>
						<option in="flipInY" out="flipOutY">Flip Y</option>
					</optgroup>
					<optgroup label="Rotate">
						<option in="rotateIn" out="rotateOut">Rotate In</option>
						<option in="rotateInDownLeft" out="rotateOutDownLeft">Rotate In Down Left</option>
						<option in="rotateInDownRight" out="rotateOutDownRight">Rotate In Down Right</option>
						<option in="rotateInUpLeft" out="rotateOutUpLeft">Rotate In Up Left</option>
						<option in="rotateInUpRight" out="rotateOutUpRight">Rotate In Up Right</option>
					</optgroup>
					<optgroup label="Zoom">
						<option in="zoomIn" out="zoomOut">Zoom In</option>
						<option in="zoomInDown" out="zoomOutDown">Zoom In Down</option>
						<option in="zoomInUp" out="zoomOutUp">Zoom In Up</option>
						<option in="zoomInRight" out="zoomOutRight">Zoom In Right</option>
						<option in="zoomInLeft" out="zoomOutLeft">Zoom In Left</option>
					</optgroup>
						</select>
					</div>
					<div class="effect_options_text">
						<label>Delay</label><br />
						<input type="text" class="input custom_delay" maxlength="3">
					</div>
					<div class="effect_options_text">
						<label>Offset</label><br />
						<input type="text" class="input custom_offset" maxlength="3">
					</div>
				</div>
				<div >
					<h3>List of Custom Animations</h3>

					<table id="custom_table" style="width: 100%"><tr>
						<th>ID</th>
						<th>Class Name</th>
						<th>Entrance Animation</th>
						<th>Delay</th>
						<th>Offset</th>
						<th>Date Created</th>
					</tr></table>
				</div>
			</div>
        </div>
    </div>
</div>