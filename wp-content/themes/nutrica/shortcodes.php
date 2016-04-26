<?php 
/*  	add_shortcode('menuContent',function(){
		return "<h1>hello</h1>";
	}); */
	add_shortcode('menuContent',function($atts){
		$atts = shortcode_atts( 
			array(
				"title1"=>"Mision",
				"content1"=>"texto",
				"title2"=>"Vision",
				"content2"=>"texto",
				"title3"=>"Quienes Somos",
				"content3"=>"texto"
			),$atts);
			return '<div class="ntScroll">
						<div class="ntScrollText">
							<h2>'. $atts["title1"] .'</h2>
							<p> '.$atts["content1"].' </p>
						</div>
						<div class="ntScrollText">
							<h2> '.$atts["title2"].' </h2>
							<p> '.$atts["content2"].' </p>
						</div>
						<div class="ntScrollText">
							<h2> '.$atts["title3"].' </h2>
							<p> '.$atts["content3"].' </p>
						</div>
					</div>';
	});
	add_shortcode('menuContentAge',function($atts1){
		$atts1 = shortcode_atts( 
			array(
				"age1"=>"Epoca1",
				"content1"=>"",
				"age2"=>"Epoca 2",
				"content2"=>"o",
				"age3"=>"Epoca3",
				"content3"=>"",
				"age4"=>"Epoca4",
				"content4"=>"",
				"age5"=>"Epoca5",
				"content5"=>"",
				"age6"=>"Epoca6",
				"content6"=>"",
				"age7"=>"Epoca7",
				"content7"=>""
			),$atts1);
			
		
			 return '<div id="ntHistory">
			<span class="ntSubHistory">
				<span class="ntAge">'.$atts1['age1'].'</span>
				<span class="ntFrag">
				<p>
				'.$atts1['content1'].'
				</p>
			</span>
		</span>
		<span class="ntSubHistory">
			<span class="ntAge">'.$atts1['age2'].'</span>
			<span class="ntFrag">
				<p>
					'.$atts1['content2'].'
				</p>
			</span>
		</span>
		<span class="ntSubHistory">
			<span class="ntAge ntSmallAge">'.$atts1['age3'].'</span>
			<span class="ntFrag">
				<p>
					'.$atts1['content3'].'
				</p>
			</span>
		</span>		
		<span class="ntSubHistory">
			<span class="ntAge">'.$atts1['age4'].'</span>
			<span class="ntFrag">
				<p>
					'.$atts1['content4'].'
				</p>
			</span>
		</span>
		<span class="ntSubHistory">
			<span class="ntAge">'.$atts1['age5'].'</span>
			<span class="ntFrag">
				<p>
					'.$atts1['content5'].'
				</p>
			</span>
		</span>
		<span class="ntSubHistory">
			<span class="ntAge">'.$atts1['age6'].'</span>
			<span class="ntFrag">
				<p>
					'.$atts1['content6'].'
				</p>
			</span>
		</span>
		<span class="ntSubHistory">
			<span class="ntAge">'.$atts1['age7'].'</span>
			<span class="ntFrag">
				<p>
					'.$atts1['content7'].'
				</p>
			</span>
		</span>	
		
	</div>';			
			
			
			
			
			
	});
	
?>