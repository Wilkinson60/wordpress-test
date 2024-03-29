<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, __("All", 'virtue'));    
	       
             if(taxonomy_exists('portfolio-type')) {
               $of_portfolio           = array();  
                $of_portfolio_obj      = get_terms('portfolio-type','hide_empty=0');
                foreach ($of_portfolio_obj as $term) {
                    $of_portfolio[$term->slug] = $term->name;
                }
                $of_portfolio_tmp         = array_unshift($of_portfolio, __("All", 'virtue')); 
            }   else {
                  $of_portfolio = array('none' => 'none set');
            }
               
		//Access the WordPress Pages via an Array
                $of_pages                       = array();
                $of_pages_obj           = get_pages('sort_column=post_parent,menu_order');    
                foreach ($of_pages_obj as $of_page) {
                    $of_pages[$of_page->post_name] = $of_page->post_title; }
                $of_pages_tmp           = array_unshift($of_pages, __("Select a page:", 'virtue'));       
	
		
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 	  => "placebo", //REQUIRED!
				"block_five"  => __("Latest Blog Posts", 'virtue'),
				"block_six"	  => __("Portfolio Carousel", 'virtue'),
                        "block_seven" => __("Icon Menu", 'virtue'),
			), 
			"enabled" => array (
				"placebo"     => "placebo", //REQUIRED!
				"block_one"	  => __("Page Title", 'virtue'),
				"block_four"  => __("Page Content", 'virtue'),
				
				
			),
		);
                
                global $vir_sidebars;   
                $of_sidebars = array();
                 foreach ($vir_sidebars as $side) {
                        $of_sidebars[$side['id']] = $side['name'];
                }
                


			$font_options = array(
                        "none" => __("Select a font", 'virtue'),
                        "Arial" => "Arial",
                        "Arial Black" => "Arial Black",
                        "Georgia" => "Georgia",
                        "Helvetica Neue" => "Helvetica Neue",
                        "Tahoma" => "Tahoma",
                        "Times New Roman" => "Times New Roman",
                        "Verdana" => "Verdana",
                        "none2" => " --  GOOGLE FONTS -- ",
                        "Abel" => "Abel", 
                        "Abril Fatface" => "Abril Fatface", 
                        "Aclonica" => "Aclonica", 
                        "Actor" => "Actor", 
                        "Adamina" => "Adamina", 
                        "Aldrich" => "Aldrich", 
                        "Alice" => "Alice", 
                        "Alike" => "Alike", 
                        "Alike Angular" => "Alike Angular", 
                        "Allan" => "Allan", 
                        "Allerta" => "Allerta", 
                        "Allerta Stencil" => "Allerta Stencil", 
                        "Amaranth" => "Amaranth", 
                        "Amatic SC" => "Amatic SC", 
                        "Andada" => "Andada", 
                        "Andika" => "Andika", 
                        "Annie Use Your Telescope" => "Annie Use Your Telescope", 
                        "Anonymous Pro" => "Anonymous Pro", 
                        "Antic" => "Antic", 
                        "Anton" => "Anton", 
                        "Arapey" => "Arapey", 
                        "Architects Daughter" => "Architects Daughter", 
                        "Arimo" => "Arimo", 
                        "Artifika" => "Artifika", 
                        "Arvo" => "Arvo", 
                        "Asap" => "Asap", 
                        "Asset" => "Asset", 
                        "Astloch" => "Astloch", 
                        "Atomic Age" => "Atomic Age", 
                        "Aubrey" => "Aubrey", 
                        "Bangers" => "Bangers", 
                        "Bentham" => "Bentham", 
                        "Bevan" => "Bevan", 
                        "Bigshot One" => "Bigshot One", 
                        "Bitter" => "Bitter", 
                        "Black Ops One" => "Black Ops One", 
                        "Bowlby One" => "Bowlby One", 
                        "Bowlby One SC" => "Bowlby One SC", 
                        "Brawler" => "Brawler", 
                        "Bree Serif" => "Bree Serif", 
                        "Buda" => "Buda", 
                        "Butcherman Caps" => "Butcherman Caps", 
                        "Cabin" => "Cabin", 
                        "Cabin Condensed" => "Cabin Condensed", 
                        "Cabin Sketch" => "Cabin Sketch", 
                        "Calligraffitti" => "Calligraffitti", 
                        "Candal" => "Candal", 
                        "Cantarell" => "Cantarell", 
                        "Cardo" => "Cardo", 
                        "Carme" => "Carme", 
                        "Carter One" => "Carter One", 
                        "Caudex" => "Caudex", 
                        "Cedarville Cursive" => "Cedarville Cursive", 
                        "Changa One" => "Changa One", 
                        "Cherry Cream Soda" => "Cherry Cream Soda", 
                        "Chewy" => "Chewy", 
                        "Chivo" => "Chivo", 
                        "Coda" => "Coda", 
                        "Coda" => "Coda", 
                        "Comfortaa" => "Comfortaa", 
                        "Coming Soon" => "Coming Soon", 
                        "Contrail One" => "Contrail One", 
                        "Convergence" => "Convergence", 
                        "Copse" => "Copse", 
                        "Corben" => "Corben", 
                        "Corben" => "Corben", 
                        "Cousine" => "Cousine", 
                        "Coustard" => "Coustard", 
                        "Covered By Your Grace" => "Covered By Your Grace", 
                        "Crafty Girls" => "Crafty Girls", 
                        "Creepster Caps" => "Creepster Caps", 
                        "Crimson Text" => "Crimson Text", 
                        "Crushed" => "Crushed", 
                        "Cuprum" => "Cuprum", 
                        "Cutive" => "Cutive", 
                        "Damion" => "Damion", 
                        "Dancing Script" => "Dancing Script", 
                        "Dawning of a New Day" => "Dawning of a New Day", 
                        "Days One" => "Days One", 
                        "Delius" => "Delius", 
                        "Delius Swash Caps" => "Delius Swash Caps", 
                        "Delius Unicase" => "Delius Unicase", 
                        "Didact Gothic" => "Didact Gothic", 
                        "Dorsa" => "Dorsa", 
                        "Droid Sans" => "Droid Sans", 
                        "Droid Sans Mono" => "Droid Sans Mono", 
                        "Droid Serif" => "Droid Serif", 
                        "EB Garamond" => "EB Garamond", 
                        "Eater Caps" => "Eater Caps", 
                        "Expletus Sans" => "Expletus Sans", 
                        "Fanwood Text" => "Fanwood Text", 
                        "Federant" => "Federant", 
                        "Federo" => "Federo", 
                        "Fjord One" => "Fjord One", 
                        "Fontdiner Swanky" => "Fontdiner Swanky", 
                        "Forum" => "Forum", 
                        "Francois One" => "Francois One", 
                        "Gentium Book Basic" => "Gentium Book Basic", 
                        "Geo" => "Geo", 
                        "Geostar" => "Geostar", 
                        "Geostar Fill" => "Geostar Fill", 
                        "Give You Glory" => "Give You Glory", 
                        "Gloria Hallelujah" => "Gloria Hallelujah", 
                        "Goblin One" => "Goblin One", 
                        "Gochi Hand" => "Gochi Hand", 
                        "Goudy Bookletter 1911" => "Goudy Bookletter 1911", 
                        "Gravitas One" => "Gravitas One", 
                        "Gruppo" => "Gruppo", 
                        "Hammersmith One" => "Hammersmith One", 
                        "Holtwood One SC" => "Holtwood One SC", 
                        "Homemade Apple" => "Homemade Apple", 
                        "IM Fell DW Pica" => "IM Fell DW Pica", 
                        "IM Fell English" => "IM Fell English", 
                        "IM Fell English SC" => "IM Fell English SC", 
                        "Inconsolata" => "Inconsolata", 
                        "Indie Flower" => "Indie Flower", 
                        "Irish Grover" => "Irish Grover", 
                        "Irish Growler" => "Irish Growler", 
                        "Istok Web" => "Istok Web", 
                        "Jockey One" => "Jockey One", 
                        "Josefin Sans" => "Josefin Sans", 
                        "Josefin Slab" => "Josefin Slab", 
                        "Judson" => "Judson", 
                        "Julee" => "Julee", 
                        "Jura" => "Jura", 
                        "Just Another Hand" => "Just Another Hand", 
                        "Just Me Again Down Here" => "Just Me Again Down Here", 
                        "Kameron" => "Kameron", 
                        "Karla" => "Karla", 
                        "Kelly Slab" => "Kelly Slab", 
                        "Kenia" => "Kenia", 
                        "Kranky" => "Kranky", 
                        "Kreon" => "Kreon", 
                        "Kristi" => "Kristi", 
                        "La Belle Aurore" => "La Belle Aurore", 
                        "Lancelot" => "Lancelot", 
                        "Lato" => "Lato", 
                        "League Script" => "League Script", 
                        "Leckerli One" => "Leckerli One", 
                        "Lekton" => "Lekton", 
                        "Limelight" => "Limelight", 
                        "Linden Hill" => "Linden Hill", 
                        "Lobster" => "Lobster", 
                        "Lobster Two" => "Lobster Two", 
                        "Lora" => "Lora", 
                        "Love Ya Like A Sister" => "Love Ya Like A Sister", 
                        "Loved by the King" => "Loved by the King", 
                        "Luckiest Guy" => "Luckiest Guy", 
                        "Maiden Orange" => "Maiden Orange", 
                        "Mako" => "Mako", 
                        "Marck Script" => "Marck Script", 
                        "Marvel" => "Marvel", 
                        "Mate" => "Mate", 
                        "Mate SC" => "Mate SC", 
                        "Maven Pro" => "Maven Pro", 
                        "Meddon" => "Meddon", 
                        "MedievalSharp" => "MedievalSharp", 
                        "Megrim" => "Megrim", 
                        "Merienda One" => "Merienda One", 
                        "Merriweather" => "Merriweather", 
                        "Metrophobic" => "Metrophobic", 
                        "Michroma" => "Michroma", 
                        "Miltonian" => "Miltonian", 
                        "Miltonian Tattoo" => "Miltonian Tattoo", 
                        "Modern Antiqua" => "Modern Antiqua", 
                        "Molengo" => "Molengo", 
                        "Monofett" => "Monofett", 
                        "Monoton" => "Monoton", 
                        "Montez" => "Montez", 
                        "Mountains of Christmas" => "Mountains of Christmas", 
                        "Muli" => "Muli", 
                        "Neucha" => "Neucha", 
                        "Neuton" => "Neuton", 
                        "News Cycle" => "News Cycle", 
                        "Nixie One" => "Nixie One", 
                        "Nobile" => "Nobile", 
                        "Nosifer Caps" => "Nosifer Caps", 
                        "Nova Cut" => "Nova Cut", 
                        "Nova Flat" => "Nova Flat", 
                        "Nova Mono" => "Nova Mono", 
                        "Nova Oval" => "Nova Oval", 
                        "Nova Round" => "Nova Round", 
                        "Nova Script" => "Nova Script", 
                        "Nova Slim" => "Nova Slim", 
                        "Numans" => "Numans", 
                        "Nunito" => "Nunito", 
                        "OFL Sorts Mill Goudy TT" => "OFL Sorts Mill Goudy TT", 
                        "Old Standard TT" => "Old Standard TT", 
                        "Open Sans" => "Open Sans", 
                        "Open Sans Condensed" => "Open Sans Condensed", 
                        "Orbitron" => "Orbitron", 
                        "Oswald" => "Oswald", 
                        "Over the Rainbow" => "Over the Rainbow", 
                        "Ovo" => "Ovo", 
                        "PT Sans" => "PT Sans", 
                        "PT Sans Caption" => "PT Sans Caption", 
                        "PT Sans Narrow" => "PT Sans Narrow", 
                        "PT Serif" => "PT Serif", 
                        "PT Serif Caption" => "PT Serif Caption", 
                        "Pacifico" => "Pacifico", 
                        "Passero One" => "Passero One", 
                        "Patrick Hand" => "Patrick Hand", 
                        "Paytone One" => "Paytone One", 
                        "Permanent Marker" => "Permanent Marker", 
                        "Petrona" => "Petrona", 
                        "Philosopher" => "Philosopher", 
                        "Pinyon Script" => "Pinyon Script", 
                        "Play" => "Play", 
                        "Playfair Display" => "Playfair Display", 
                        "Podkova" => "Podkova", 
                        "Poller One" => "Poller One", 
                        "Poly" => "Poly", 
                        "Pompiere" => "Pompiere", 
                        "Prata" => "Prata", 
                        "Prociono" => "Prociono", 
                        "Puritan" => "Puritan", 
                        "Quattrocento" => "Quattrocento", 
                        "Quattrocento Sans" => "Quattrocento Sans", 
                        "Questrial" => "Questrial", 
                        "Quicksand" => "Quicksand", 
                        "Radley" => "Radley", 
                        "Raleway" => "Raleway", 
                        "Rametto One" => "Rametto One", 
                        "Rancho" => "Rancho", 
                        "Rationale" => "Rationale", 
                        "Redressed" => "Redressed", 
                        "Reenie Beanie" => "Reenie Beanie", 
                        "Rochester" => "Rochester", 
                        "Rock Salt" => "Rock Salt", 
                        "Rokkitt" => "Rokkitt", 
                        "Rosario" => "Rosario", 
                        "Ruslan Display" => "Ruslan Display", 
                        "Salsa" => "Salsa", 
                        "Sancreek" => "Sancreek", 
                        "Sansita One" => "Sansita One", 
                        "Satisfy" => "Satisfy", 
                        "Schoolbell" => "Schoolbell", 
                        "Shadows Into Light" => "Shadows Into Light", 
                        "Shanti" => "Shanti", 
                        "Short Stack" => "Short Stack", 
                        "Sigmar One" => "Sigmar One", 
                        "Six Caps" => "Six Caps", 
                        "Slackey" => "Slackey", 
                        "Smokum" => "Smokum", 
                        "Smythe" => "Smythe", 
                        "Sniglet" => "Sniglet", 
                        "Snippet" => "Snippet", 
                        "Sorts Mill Goudy" => "Sorts Mill Goudy", 
                        "Special Elite" => "Special Elite", 
                        "Spinnaker" => "Spinnaker", 
                        "Stardos Stencil" => "Stardos Stencil", 
                        "Sue Ellen Francisco" => "Sue Ellen Francisco", 
                        "Sunshiney" => "Sunshiney", 
                        "Supermercado One" => "Supermercado One", 
                        "Swanky and Moo Moo" => "Swanky and Moo Moo", 
                        "Syncopate" => "Syncopate", 
                        "Tangerine" => "Tangerine", 
                        "Tenor Sans" => "Tenor Sans", 
                        "Terminal Dosis" => "Terminal Dosis", 
                        "Terminal Dosis Light" => "Terminal Dosis Light", 
                        "The Girl Next Door" => "The Girl Next Door", 
                        "Tienne" => "Tienne", 
                        "Tinos" => "Tinos", 
                        "Tulpen One" => "Tulpen One", 
                        "Ubuntu" => "Ubuntu", 
                        "Ubuntu Condensed" => "Ubuntu Condensed", 
                        "Ubuntu Mono" => "Ubuntu Mono", 
                        "Ultra" => "Ultra", 
                        "UnifrakturCook" => "UnifrakturCook", 
                        "UnifrakturMaguntia" => "UnifrakturMaguntia", 
                        "Unkempt" => "Unkempt", 
                        "Unna" => "Unna", 
                        "VT323" => "VT323", 
                        "Varela" => "Varela", 
                        "Varela Round" => "Varela Round", 
                        "Vast Shadow" => "Vast Shadow", 
                        "Vibur" => "Vibur", 
                        "Vidaloka" => "Vidaloka", 
                        "Volkhov" => "Volkhov", 
                        "Vollkorn" => "Vollkorn", 
                        "Voltaire" => "Voltaire", 
                        "Waiting for the Sunrise" => "Waiting for the Sunrise", 
                        "Wallpoet" => "Wallpoet", 
                        "Walter Turncoat" => "Walter Turncoat", 
                        "Wire One" => "Wire One", 
                        "Yanone Kaffeesatz" => "Yanone Kaffeesatz", 
                        "Yellowtail" => "Yellowtail", 
                        "Yeseva One" => "Yeseva One", 
                        "Zeyada" => "Zeyada"
                        );

		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}



		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/assets/img/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/assets/img/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

            $of_options[] = array( 	"name" 		=> __("Main Settings", 'virtue'),
						"type" 		=> "heading",
                                    "icon"                => ADMIN_IMAGES . "icon-main.png"
				);
					
            $of_options[] = array( 	"name" 		=> "Hello there!",
						"desc" 		=> "",
						"id" 		      => "introduction",
						"std" 		=> "<h3>".__('Welcome to Virtue Theme Options', 'virtue')."</h3>
						<p>This theme was developed by <a href=\"http://kadencethemes.com/\" target=\"_blank\">Kadence Themes</a></p>
                                    <p>For theme documentation visit: <a href=\"http://docs.kadencethemes.com/virtue/\" target=\"_blank\">docs.kadencethemes.com/virtue/</a>
                                    <br />
                                    For support please visit: <a href=\"http://wordpress.org/support/theme/virtue\" target='_blank' >wordpress.org/support/theme/virtue</a></p>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
            $url =  ADMIN_DIR . 'assets/images/';
            $of_options[] = array( 	"name" 		=> __("Site Layout Style", 'virtue'),
						"desc" 		=> __("Select Boxed or Wide Site Layout Style", 'virtue'),
						"id" 		      => "boxed_layout",
						"std" 		=> "wide",
						"type" 		=> "images",
						"options" 	      => array(
							'wide' 	=> $url . '1col.png',
							'boxed'     => $url . '3cm.png'
						      )
				);
            $of_options[] = array(  "name"            => __("Footer Widget Layout", 'virtue'),
                                    "desc"            => __("Select how many columns for footer widgets", 'virtue'),
                                    "id"              => "footer_layout",
                                    "std"             => "fourc",
                                    "type"            => "images",
                                    "options"         => array(
                                                'fourc'  => $url . 'footer-widgets-4.png',
                                                'threec' => $url . 'footer-widgets-3.png',
                                                'twoc'   => $url . 'footer-widgets-2.png'
                                                )
                        );
            $of_options[] = array(   "name"            => __("Logo Options", 'virtue'),
					       "desc"            => "",
					       "id"              => "introduction",
					       "std"             => "<h3>".__('Logo Options', 'virtue')."</h3>",
					       "icon"            => true,
					       "type"            => "info"
                                     );
            $of_options[] = array(   "name"            => __("Logo Layout", 'virtue'),
                                     "desc"            => __("Choose how you want your logo to be laid out", 'virtue'),
                                     "id"              => "logo_layout",
                                     "std"             => "logoleft",
                                    "type"            => "images",
                                    "options"         => array(
                                                'logoleft'  => $url . 'logo_layout_01.png',
                                                'logocenter' => $url . 'logo_layout_02.png'
                                                )
                                    );
            $of_options[] = array(   "name"            => __("Logo", 'virtue'),
					       "desc"            => __("Upload your Logo. If left blank theme will use site name.", 'virtue'),
					       "id"              => "logo_upload",
					       "std"             => "",
					       "type"            => "media");

            $of_options[] = array(   "name"            => __("Upload Your x2 Logo for Retina Screens", 'virtue'),
					       "desc"            => __("Should be twice the pixel size of your normal logo.", 'virtue'),
      					 "id"              => "x2logo_upload",
      					 "std"             => "",
      					 "type"            => "media"
                                     );
            $of_options[] = array(  "name"            => __("Sitename Logo Font", 'virtue'),
                                    "desc"            => __("This font will apply to your sitename if you don't upload a logo.", 'virtue'),
                                    "id"              => "font_logo",
                                    "std"             => "Pacifico",
                                    "type"            => "select_google_font",
                                    "preview"   => array(
                                                            "text" => "This is font preview text!",
                                                            "size" => "24px"
                                                            ),
                                    "options"   => $font_options
                        );
            $of_options[] = array(  "name"            => __("Sitename Style", 'virtue'),
                                    "desc"            => __("Choose size and style your sitename, if you don't use an image logo.", 'virtue'),
                                    "id"              => "font_logo_style",
                                    "std"             => array(
                                                            'size'  => '38px',
                                                            'style' => 'normal',
                                                            'height' => '40px',
                                                            'color' => ''
                                                            ),
                                    "type"            => "typography"
                        );  
            $of_options[] = array(  "name"            => __("Site Tagline - Below Logo", 'virtue'),
                                    "desc"            => __("An optional line of text below your logo", 'virtue'),
                                    "id"              => "logo_below_text",
                                    "std"             => "",
                                    "type"            => "text"
                                    );
            $of_options[] = array(  "name"            => __("Site Tagline Font", 'virtue'),
                                    "desc"            => __("This font will apply to your site tagline", 'virtue'),
                                    "id"              => "font_tagline",
                                    "std"             => "Lato",
                                    "type"            => "select_google_font",
                                    "preview"   => array(
                                                            "text" => "This is font preview text!",
                                                            "size" => "14px"
                                                            ),
                                    "options"   => $font_options
                        );
            $of_options[] = array(  "name"            => __("Site Tagline Style", 'virtue'),
                                    "desc"            => __("Choose size and style your site tagline", 'virtue'),
                                    "id"              => "font_tagline_style",
                                    "std"             => array(
                                                            'size'  => '14px',
                                                            'style' => 'normal',
                                                            'height' => '20px',
                                                            'color' => ''
                                                            ),
                                    "type"            => "typography"
                        );  
            $of_options[] = array( 	"name" 		=> __("Logo Spacing", 'virtue'),
						"desc" 		=> __("Top Spacing", 'virtue'),
						"id" 		      => "logo_padding_top",
						"std" 		=> "25",
						"min" 		=> "0",
						"step"		=> "1",
						"max" 		=> "80",
						"type" 		=> "sliderui" 
				);
            $of_options[] = array( 	"name" 		=> "",
						"desc" 		=> __("Bottom Spacing", 'virtue'),
						"id" 		      => "logo_padding_bottom",
						"std" 		=> "10",
						"min" 		=> "0",
						"step"		=> "1",
						"max" 		=> "80",
						"type" 		=> "sliderui" 
				);
            $of_options[] = array( 	"name" 		=> "",
						"desc" 		=> __("Left Spacing", 'virtue'),
						"id" 		      => "logo_padding_left",
						"std" 		=> "0",
						"min" 		=> "0",
						"step"		=> "1",
						"max" 		=> "80",
						"type" 		=> "sliderui" 
				);
            $of_options[] = array( 	"name" 		=> "",
						"desc" 		=> __("Right Spacing", 'virtue'),
						"id" 		      => "logo_padding_right",
						"std" 		=> "0",
						"min" 		=> "0",
						"step"		=> "1",
						"max" 		=> "80",
						"type" 		=> "sliderui" 
				);
            $of_options[] = array(  "name"            => __("Primary Menu Spacing", 'virtue'),
                                    "desc"            => __("Top Spacing", 'virtue'),
                                    "id"              => "menu_margin_top",
                                    "std"             => "40",
                                    "min"             => "0",
                                    "step"            => "1",
                                    "max"             => "80",
                                    "type"            => "sliderui" 
                        );
            $of_options[] = array(  "name"            => "",
                                    "desc"            => __("Bottom Spacing", 'virtue'),
                                    "id"              => "menu_margin_bottom",
                                    "std"             => "10",
                                    "min"             => "0",
                                    "step"            => "1",
                                    "max"             => "80",
                                    "type"            => "sliderui" 
                        );
            $of_options[] = array(   "name"            => __("Sitewide Banner", 'virtue'),
                                     "desc"            => __("Upload a banner for bottom of header.", 'virtue'),
                                     "id"              => "banner_upload",
                                     "std"             => "",
                                     "type"            => "media");
            $of_options[] = array(  "name"            => __("Topbar Settings", 'virtue'),
                                    "type"            => "heading",
                                    "icon"                => ADMIN_IMAGES . "icon-topbar.png"
                        );
		$of_options[] = array(    "name"            => __("Use Topbar?", 'virtue'),
                                    "desc"            => __("Choose to show or hide topbar", 'virtue'),
                                    "id"              => "topbar",
                                    "std"             => 1,
                                    "type"            => "switch"
                        ); 
            $of_options[] = array(    "name"            => __("Use Topbar Icon Menu?", 'virtue'),
                                    "desc"            => __("Choose to show or hide topbar", 'virtue'),
                                    "id"              => "topbar_icons",
                                    "std"             => 0,
                                    "type"            => "switch"
                        ); 
            $of_options[] = array( "name"             => __("Topbar Icon Menu", 'virtue'),
                                    "desc"            => __("Choose your icons for the topbar icon menu", 'virtue'),
                                    "id"              => "topbar_icon_menu",
                                    "std"             => "",
                                    "type"            => "icons");

            $of_options[] = array(  "name"             => __("Show Cart total in topbar", 'virtue'),
                                    "desc"             => __("This only works if using woocommerce", 'virtue'),
                                    "id"               => "show_cartcount",
                                    "std"              => 1,
                                    "type"             => "switch"
                                    ); 
             $of_options[] = array(    "name"            => __("Display Search in Topbar?", 'virtue'),
                                    "desc"            => __("Choose to show or hide search in topbar", 'virtue'),
                                    "id"              => "topbar_search",
                                    "std"             => 1,
                                    "type"            => "switch"
                        ); 
             $of_options[] = array(    "name"            => __("Enable widget area in right of Topbar?", 'virtue'),
                                    "desc"            => __("Note this will hide remove search (you can reinable it my adding it to the widget area)", 'virtue'),
                                    "id"              => "topbar_widget",
                                    "std"             => 0,
                                    "type"            => "switch"
                        ); 
            $of_options[] = array( 	"name" 		=> __("Slider Settings", 'virtue'),
						"type" 		=> "heading",
                                    "icon"                => ADMIN_IMAGES . "icon-slider.png"

				);
            $of_options[] = array( "name"             => __("Choose a Home Image Slider", 'virtue'),
      					"desc"            => __("If you don't want an image slider on your home page choose none.", 'virtue'),
      					"id"              => "choose_slider",
      					"std"             => "mock_flex",
      					"type"            => "select",
      					"options"         => array(
      						      'none'      => 'None',
      						      'flex'      => 'Flex Slider',
      						      'thumbs'    => 'Thumb Slider',
      						      'video'     => 'Video'
                                                )
					);

            $of_options[] = array( 	"name" 		=> __("Slider Images", 'virtue'),
						"desc" 		=> __("Use large images for best results.", 'virtue'),
						"id" 		      => "home_slider",
						"std" 		=> "",
						"type" 		=> "slider"
				);
            $of_options[] = array( 	"name" 		=> __("Slider Max Height", 'virtue'),
						"desc" 		=> __("Note: does not work if images are smaller than max.", 'virtue'),
						"id" 		      => "slider_size",
						"std" 		=> "400",
						"min" 		=> "100",
						"step"		=> "5",
						"max" 		=> "600",
						"type" 		=> "sliderui" 
				);
            $of_options[] = array(  "name"            => __("Slider Max Width", 'virtue'),
                                    "desc"            => __("Note: does not work if images are smaller than max.", 'virtue'),
                                    "id"              => "slider_size_width",
                                    "std"             => "1170",
                                    "min"             => "600",
                                    "step"            => "5",
                                    "max"             => "1170",
                                    "type"            => "sliderui" 
                        );
            $of_options[] = array( 	"name" 		=> __("Auto Play?", 'virtue'),
						"desc" 		=> __("This determines if a slider automatically scrolls", 'virtue'),
						"id" 		      => "slider_autoplay",
						"std" 		=> 1,
						"type" 		=> "switch"
				); 
            $of_options[] = array( 	"name" 		=> __("Slider Pause Time", 'virtue'),
						"desc" 		=> __("How long to pause on each slide, in milliseconds", 'virtue'),
						"id" 		      => "slider_pausetime",
						"std" 		=> "7000",
						"min" 		=> "3000",
						"step"		=> "1000",
						"max" 		=> "12000",
						"type" 		=> "sliderui" 
				);		
            $of_options[] = array( "name"             => __("Transition Type", 'virtue'),
						"desc"            => __("Choose a transition type", 'virtue'),
						"id"              => "trans_type",
						"std"             => "fade",
						"type"            => "select",
						"options"         => array(
      							'fade'     => 'Fade',
      							'slide'    => 'Slide'
                                                )
      					);
            $of_options[] = array( 	"name" 		=> __("Slider Transition Time", 'virtue'),
						"desc" 		=> __("How long for slide transitions, in milliseconds", 'virtue'),
						"id" 		      => "slider_transtime",
						"std" 		=> "600",
						"min" 		=> "200",
						"step"		=> "100",
						"max" 		=> "1200",
						"type" 		=> "sliderui" 
				);	
            $of_options[] = array( 	"name" 		=> __("Show Captions?", 'virtue'),
						"desc" 		=> __("Choose to show or hide captions", 'virtue'),
						"id" 		      => "slider_captions",
						"std" 		=> 0,
						"type" 		=> "switch"
				); 
            $of_options[] = array( "name"             => __("Video Embed Code", 'virtue'),
						"desc"            => __("If your useing a video on the home page place video embed code here.", 'virtue'),
						"id"              => "video_embed",
						"std"             => "",
						"type"            => "textarea"); 

            $of_options[] = array( 	"name" 		=> __("Mobile Slider", 'virtue'),
						"type" 		=> "heading",
                                     "icon"                => ADMIN_IMAGES . "icon-mobile.png"
                                     				);
            $of_options[] = array(   "name"            => "Mobile Body",
					       "desc"            => "",
					       "id"              => "info_mobile_slider",
					       "std"             => "<h3>".__('Create a more lightweight home slider for your mobile visitors.', 'virtue')."</h3>",
					       "icon"            => true,
					       "type"            => "info"
                                     );
            $of_options[] = array(  "name"            => __("Would you like to use this feature?", 'virtue'),
						"desc"            => __("Choose if you would like to show a different slider on your home page for your mobile visitors. If you chooose no it will default to your home slider.", 'virtue'),
						"id"              => "mobile_slider",
						"std"             => "0",
						"folds"	      => 1,
						"type"            => "switch"
				);
            $of_options[] = array(  "name"             => __("Choose a Slider for Mobile", 'virtue'),
					      "desc"             => __("Choose which slider you would like to show for mobile viewers.", 'virtue'),
      					"id"               => "choose_mobile_slider",
      					"std"              => "none",
      					"fold" 		 => "mobile_slider", /* the switch hook */
      					"type"             => "select",
      					"options"          => array(
                  						'none'      => 'None',
                  						'flex'      => 'Flex Slider',
                  						'video'     => 'Video',
                  						)
					);
					
            $of_options[] = array( "name" => __("Mobile Slider Images", 'virtue'),
      					"desc"             => "",
      					"id"               => "home_mobile_slider",
      					"std"              => "",
      					"fold" 		 => "mobile_slider", /* the switch hook */
      					"type"             => "slider"
                                    ); 
            $of_options[] = array( 	"name" 		=> __("Slider Height", 'virtue'),
						"desc" 		=> "",
						"id" 		      => "mobile_slider_size",
						"std" 		=> "300",
						"min" 		=> "100",
						"step"		=> "5",
						"max" 		=> "800",
						"fold" 		=> "mobile_slider", /* the switch hook */
						"type" 		=> "sliderui" 
				);
            $of_options[] = array( 	"name" 		=> __("Auto Play?", 'virtue'),
						"desc" 		=> __("This determines if a slider automatically scrolls", 'virtue'),
						"id" 		      => "mobile_slider_autoplay",
						"std" 		=> 1,
						"fold" 		=> "mobile_slider", /* the switch hook */
						"type" 		=> "switch"
				); 
            $of_options[] = array( 	"name" 		=> __("Slider Pause Time", 'virtue'),
						"desc" 		=> __("How long to pause on each slide, in milliseconds", 'virtue'),
						"id" 		      => "mobile_slider_pausetime",
						"std" 		=> "7000",
						"min" 		=> "3000",
						"step"		=> "1000",
						"max" 		=> "12000",
						"fold" 		=> "mobile_slider", /* the switch hook */
						"type" 		=> "sliderui" 
				);		
            $of_options[] = array(  "name"            => __("Transition Type", 'virtue'),
						"desc"            => __("Choose a transition type", 'virtue'),
						"id"              => "mobile_trans_type",
						"std"             => "fade",
						"fold" 		=> "mobile_slider", /* the switch hook */
						"type"            => "select",
						"options"         => array(
            							'fade'     => 'Fade',
            							'slide'    => 'Slide')
            							);
            $of_options[] = array( 	"name" 		=> __("Slider Transition Time", 'virtue'),
						"desc" 		=> __("How long for slide transitions, in milliseconds", 'virtue'),
						"id" 		      => "mobile_slider_transtime",
						"std" 		=> "600",
						"min" 		=> "200",
						"step"		=> "100",
						"max" 		=> "1200",
						"fold" 		=> "mobile_slider", /* the switch hook */
						"type" 		=> "sliderui" 
				);	
            $of_options[] = array(  "name"            => __("Mobile Video Embed Code", 'virtue'),
						"desc"            => __("If your useing a video on the home page place video embed code here.", 'virtue'),
						"id"              => "mobile_video_embed",
						"std"             => "",
						"fold" 		=> "mobile_slider", /* the switch hook */
						"type"            => "textarea"
                                    );

            $of_options[] = array( "name"             => __("Home Layout", 'virtue'),
					     "type"             => "heading",
                                     "icon"                => ADMIN_IMAGES . "icon-home.png"
                                    );


            $of_options[] = array(  "name"            => __("Display the sidebar on the Home Page?", 'virtue'),
                                    "desc"            => __("This determines if there is a sidebar on the home page.", 'virtue'),
                                    "id"              => "home_sidebar_layout",
                                    "std"             => "full",
                                    "type"            => "images",
                                    "options"         => array(
                                                        'full'          => $url . '1col.png',
                                                        'sidebar'       => $url . '2cr.png'
                                                        )
                        ); 
            $of_options[] = array(  "name"            => __("Choose a Sidebar for your Home Page", 'virtue'),
                                    "desc"            => "",
                                    "id"              => "home_sidebar",
                                    "std"             => "none",
                                    "type"            => "select",
                                    "options"         => $of_sidebars
                                    );

            $of_options[] = array( 	"name" 		=> __("Homepage Layout Manager", 'virtue'),
						"desc" 		=> __("Organize how you want the layout to appear on the homepage", 'virtue'),
						"id" 		      => "homepage_layout",
						"std" 		=> $of_options_homepage_blocks,
						"type" 		=> "sorter"
				);
            $of_options[] = array(  "name"            => "home_blog_settings",
                                    "desc"            => "",
                                    "id"              => "info_blog_settings",
                                    "std"             => "<h3>".__('Home Blog Settings', 'virtue')."</h3>",
                                    "icon"            => true,
                                    "type"            => "info"
                                    );
            $of_options[] = array( "name"             => __("Home Blog Title", 'virtue'),
                                    "desc"            => __("ex: Latest from the blog", 'virtue'),
                                    "id"              => "blog_title",
                                    "std"             => "",
                                    "type"            => "text"
                                    );
            $of_options[] = array(  "name"          => __("Choose How many posts on Homepage", 'virtue'),
                                    "desc"          => "",
                                    "id"            => "home_post_count",
                                    "std"           => "2",
                                    "min"           => "2",
                                    "step"          => "2",
                                    "max"           => "8",
                                    "type"          => "sliderui" 
                                );
            $of_options[] = array(  "name"          => __("Limit posts to a Category", 'virtue'),
                                    "desc"          => "",
                                    "id"              => "home_post_type",
                                    "std"             => "all",
                                    "type"            => "select",
                                    "options"         => $of_categories
                                    );
            $of_options[] = array(  "name"            => "portfolio_carousel_settings",
                                    "desc"            => "",
                                    "id"              => "info_portfolio_settings",
                                    "std"             => "<h3>".__('Home Porfolio Settings', 'virtue')."</h3>",
                                    "icon"            => true,
                                    "type"            => "info"
                                    );
            $of_options[] = array( "name"             => __("Home Portfolio Carousel title", 'virtue'),
                                    "desc"            => __("ex: Portfolio Carousel title", 'virtue'),
                                    "id"              => "portfolio_title",
                                    "std"             => "",
                                    "type"            => "text");

            $of_options[] = array(  "name"            => __("Portfolio Carousel Category Type", 'virtue'),
                                    "desc"            => __("Choose type for the portfolio carousel", 'virtue'),
                                    "id"              => "portfolio_type",
                                    "std"             => "all",
                                    "type"            => "select",
                                    "options"         => $of_portfolio
                                    );
            $of_options[] = array( "name"             => __("Display Porfolio Types under Title", 'virtue'),
                                    "desc"            => "",
                                    "id"              => "porfolio_show_type",
                                    "std"             => "",
                                    "type"            => "checkbox"
                                    );
            $of_options[] = array( "name"             => __("Home Icon Menu", 'virtue'),
                                    "desc"            => "",
                                    "id"              => "info_portfolio_settings",
                                    "std"             => "<h3>".__('Home Icon Menu', 'virtue')."</h3>",
                                    "type"            => "info"
                                    );
            $of_options[] = array( "name"             => __("Icon Menu", 'virtue'),
                                    "desc"            => __("choose your icons for the icon menu", 'virtue'),
                                    "id"              => "icon_menu",
                                    "std"             => "",
                                    "type"            => "icons");

            $of_options[] = array( "name"             => __("Page Content Options", 'virtue'),
                                    "desc"            => "",
                                    "id"              => "info_page_content",
                                    "std"             => "<h3>".__('Page Content Options', 'virtue')."</h3>",
                                    "type"            => "info"
                                    );
              $of_options[] = array(  "name"            => __("Latest Post Display", 'virtue'),
                                    "desc"            => __("If Latest Post page is font page. Choose to show full post or post excerpt.", 'virtue'),
                                    "id"              => "home_post_summery",
                                    "std"             => "summery",
                                    "type"            => "select",
                                    "options"         => array(
                                                      'summery'     => 'Post Excerpt',
                                                      'full'    => 'Full')
                                                      );


            $of_options[] = array(  "name"            => __("Shop Settings", 'virtue'),
					      "type"            => "heading",
                                    "icon"                => ADMIN_IMAGES . "icon-woocommerce.png"

                                    );
            $of_options[] = array(  "name"             => "shopsettings",
                                    "desc"             => "",
                                    "id"               => "info_shop_settings",
                                    "std"              => "<h3>".__('Shop Archive Page Settings', 'virtue')."</h3>",
                                    "icon"             => true,
                                    "type"             => "info"
                                    );
            $of_options[] = array( 	"name" 		=> __("Display the sidebar on shop archives?", 'virtue'),
						"desc" 		=> __("This determines if there is a sidebar on the shop and category pages.", 'virtue'),
						"id" 		      => "shop_layout",
						"std"             => "full",
                                    "type"            => "images",
                                    "options"         => array(
                                                        'full'          => $url . '1col.png',
                                                        'sidebar'       => $url . '2cr.png'
                                                        )
				); 
            $of_options[] = array(  "name"            => __("Choose a Sidebar for your shop page", 'virtue'),
                                    "desc"            => "",
                                    "id"              => "shop_sidebar",
                                    "std"             => "none",
                                    "type"            => "select",
                                    "options"         => $of_sidebars
                                    );
            $of_options[] = array(  "name"          => __("How many products per page", 'virtue'),
                                    "desc"          => "",
                                    "id"            => "products_per_page",
                                    "std"           => "12",
                                    "min"           => "2",
                                    "step"          => "1",
                                    "max"           => "40",
                                    "type"          => "sliderui" 
                                );
            $of_options[] = array(  "name"          => __("Show Ratings in Shop and Category Pages", 'virtue'),
                                    "desc"          => __("This determines if the rating is displayed in the product archive pages", 'virtue'),
                                    "id"            => "shop_rating",
                                    "std"           => 1,
                                    "type"          => "switch"
                                ); 
            $of_options[] = array( "name"             => "productsettings",
                                    "desc"            => "",
                                    "id"              => "info_product_settings",
                                    "std"             => "<h3>".__('Product Page Settings', 'virtue')."</h3>",
                                    "icon"            => true,
                                    "type"            => "info"
                                    );
            $of_options[] = array(  "name"          => __("Display product tabs?", 'virtue'),
                                    "desc"          => __("This determines if product tabs are displayed", 'virtue'),
                                    "id"            => "product_tabs",
                                    "std"           => 1,
                                    "type"          => "switch"
                                ); 
            $of_options[] = array(  "name"          => __("Display related products?", 'virtue'),
                                    "desc"          => __("This determines related products are displayed", 'virtue'),
                                    "id"            => "related_products",
                                    "std"           => 1,
                                    "type"          => "switch"
                                ); 
            $of_options[] = array( "name"        => __("Basic Styling", 'virtue'),
					     "type"        => "heading",
                                   "icon"       => ADMIN_IMAGES . "icon-brush.png"

                                   );

            $of_options[] = array(  "name"             => __("Theme Skin Stylesheet", 'virtue'),
					      "desc"             => __("Note* changes made in options panel will override this stylesheet. Example: Colors set in typography.", 'virtue'),
      					"id"               => "skin_stylesheet",
      					"std"              => "default.css",
      					"type"             => "select",
      					"options"          => $alt_stylesheets
                                    );
            $of_options[] = array(  "name"             => __("Primary Highlight Color", 'virtue'),
      					"desc"             => __("Choose the default Highlight color for your site.", 'virtue'),
      					"id"               => "primary_color",
      					"std"              => "",
      					"type"             => "color"
                                    );
            $of_options[] = array(  "name"             => __("30% lighter than Primary Color", 'virtue'),
      					"desc"             => "",
      					"id"               => "primary20_color",
      					"std"              => "",
      					"type"             => "color"
                                    ); 
            $of_options[] = array(  "name"             => __("Sitewide Gray Fonts", 'virtue'),
                                    "desc"             => "",
                                    "id"               => "gray_font_color",
                                    "std"              => "",
                                    "type"             => "color"
                                    ); 
             $of_options[] = array(  "name"             => __("Footer Font Color", 'virtue'),
                                    "desc"             => "",
                                    "id"               => "footerfont_color",
                                    "std"              => "",
                                    "type"             => "color"
                                    ); 

	     $of_options[] = array( "name" => __("Advanced Styling", 'virtue'),
					       "type" => "heading",
                                    "icon"                => ADMIN_IMAGES . "icon-paint.png"
                                    );
		                        
                                     $of_options[] = array( "name"             => "maincontentback",
                                                            "desc"             => "",
                                                            "id"               => "info_main_backgroun",
                                                            "std"              => "<h3>".__('Main Content Background', 'virtue')."</h3>
                                                                    <p>".__('This sets your background for page content areas.', 'virtue')."</p>",
                                                            "icon"              => true,
                                                            "type"              => "info"
                                                            );
                                     $of_options[] = array( "name"              => __("Main Content Background", 'virtue'),
                                                            "desc"              => __("Background Color", 'virtue'),
                                                            "id"                => "content_bg_color",
                                                            "std"               => "",
                                                            "type"              => "color"
                                                            ); 
                                     $of_options[] = array( "name"             => "",
                                                            "desc"              => __("Upload background image or texture", 'virtue'),
                                                            "id"                => "content_bg_img",
                                                            "std"               => "",
                                                            "type"              => "upload"); 
                                                            
                                     $of_options[] = array( "name"             => "",
                                                            "desc"              => __("Image repeat options", 'virtue'),
                                                            "id"                => "content_bg_repeat",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                              ''            => 'select',
                                                                              'no-repeat'   => 'no-repeat',
                                                                              'repeat'      => 'repeat',
                                                                              'repeat-x'    => 'repeat-x',
                                                                              'repeat-y'    => 'repeat-y'
                                                                              )
                                                            ); 
                                     $of_options[] = array( "name"             => "",
                                                            "desc"              => __("X image placement options", 'virtue'),
                                                            "id"                => "content_bg_placementx",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                              ''            => 'select',
                                                                              'left'         => 'left',
                                                                              'center'      => 'center',
                                                                              'right'      => 'right',
                                                                              )
                                                            ); 
                                     $of_options[] = array( "name"              => "",
                                                            "desc"              => __("Y image placement options", 'virtue'),
                                                            "id"                => "content_bg_placementy",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                              ''            => 'select',
                                                                              'top'         => 'top',
                                                                              'center'      => 'center',
                                                                              'bottom'      => 'bottom',
                                                                                )
                                                            );
                                    $of_options[] = array(  "name"              => "topbar_back",
                                                            "desc"              => "",
                                                            "id"                => "info_topbar_background",
                                                            "std"               => "<h3>".__('Topbar Background', 'virtue')."</h3>
                                                                          <p>".__('This sets your background for your sites header.', 'virtue')."</p>",
                                                            "icon"              => true,
                                                            "type"              => "info"
                                                            );
                                    $of_options[] = array(  "name"              => __("Topbar Background", 'virtue'),
                                                            "desc"              => __("Background Color", 'virtue'),
                                                            "id"                => "topbar_bg_color",
                                                            "std"               => "",
                                                            "type"              => "color"
                                                            ); 
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Upload background image or texture", 'virtue'),
                                                            "id" => "topbar_bg_img",
                                                            "std" => "",
                                                            "type" => "upload"
                                                            ); 
                                     $of_options[] = array( "name"              => "",
                                                            "desc"              => __("Image repeat options", 'virtue'),
                                                            "id"                => "topbar_bg_repeat",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                        ''            => 'select',
                                                                        'no-repeat'   => 'no-repeat',
                                                                        'repeat'      => 'repeat',
                                                                        'repeat-x'    => 'repeat-x',
                                                                        'repeat-y'    => 'repeat-y'
                                                                          )
                                                            );  
                                     $of_options[] = array( "name"              => "",
                                                            "desc"              => __("X image placement options", 'virtue'),
                                                            "id"                => "topbar_bg_placementx",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                        ''            => 'select',
                                                                        'left'         => 'left',
                                                                        'center'      => 'center',
                                                                        'right'      => 'right',
                                                                        )
                                                            );
                                     $of_options[] = array( "name"             => "",
                                                            "desc"              => __("Y image placement options", 'virtue'),
                                                            "id"                => "topbar_bg_placementy",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                              ''            => 'select',
                                                                              'top'         => 'top',
                                                                              'center'      => 'center',
                                                                              'bottom'      => 'bottom',
                                                                              )
                                                            );
                                    $of_options[] = array(  "name"              => "headerback",
                                                            "desc"              => "",
                                                            "id"                => "info_header_background",
                                                            "std"               => "<h3>".__('Header Background', 'virtue')."</h3>
                                                                          <p>".__('This sets your background for your sites header.', 'virtue')."</p>",
                                                            "icon"              => true,
                                                            "type"              => "info"
                                                            );
                                    $of_options[] = array(  "name"              => __("Header Background", 'virtue'),
                                                            "desc"              => __("Background Color", 'virtue'),
                                                            "id"                => "header_bg_color",
                                                            "std"               => "",
                                                            "type"              => "color"
                                                            ); 
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Upload background image or texture", 'virtue'),
                                                            "id" => "header_bg_img",
                                                            "std" => "",
                                                            "type" => "upload"
                                                            ); 
                                     $of_options[] = array( "name"              => "",
                                                            "desc"              => __("Image repeat options", 'virtue'),
                                                            "id"                => "header_bg_repeat",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                        ''            => 'select',
                                                                        'no-repeat'   => 'no-repeat',
                                                                        'repeat'      => 'repeat',
                                                                        'repeat-x'    => 'repeat-x',
                                                                        'repeat-y'    => 'repeat-y'
                                                                          )
                                                            );  
                                     $of_options[] = array( "name"              => "",
                                                            "desc"              => __("X image placement options", 'virtue'),
                                                            "id"                => "header_bg_placementx",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                        ''            => 'select',
                                                                        'left'         => 'left',
                                                                        'center'      => 'center',
                                                                        'right'      => 'right',
                                                                        )
                                                            );
                                     $of_options[] = array( "name"             => "",
                                                            "desc"              => __("Y image placement options", 'virtue'),
                                                            "id"                => "header_bg_placementy",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                              ''            => 'select',
                                                                              'top'         => 'top',
                                                                              'center'      => 'center',
                                                                              'bottom'      => 'bottom',
                                                                              )
                                                            );
                                    $of_options[] = array(  "name"              => "menuback",
                                                            "desc"              => "",
                                                            "id"                => "info_menu_background",
                                                            "std"               => "<h3>".__('Secondary Menu Background', 'virtue')."</h3>
                                                                          <p>".__('This sets your background for the secondary menu.', 'virtue')."</p>",
                                                            "icon"              => true,
                                                            "type"              => "info"
                                                            );
                                    $of_options[] = array( "name"            => __("Secondary Menu Background", 'virtue'),
                                                            "desc"           => __("Background Color", 'virtue'),
                                                            "id"             => "menu_bg_color",
                                                            "std"            => "",
                                                            "type"           => "color"); 
                              
                                     $of_options[] = array( "name"              => "",
                                                            "desc"              => __("Upload background image or texture", 'virtue'),
                                                            "id"                => "menu_bg_img",
                                                            "std"               => "",
                                                            "type"              => "upload"); 
                                                            
                                     $of_options[] = array( "name"              => "",
                                                            "desc"              => "Image repeat options",
                                                            "id"                => "menu_bg_repeat",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                              ''            => 'select',
                                                                              'no-repeat'   => 'no-repeat',
                                                                              'repeat'      => 'repeat',
                                                                              'repeat-x'    => 'repeat-x',
                                                                              'repeat-y'    => 'repeat-y'
                                                                              )
                                                            );  
                              $of_options[] = array( "name" => "",
                                                            "desc" => __("X image placement options", 'virtue'),
                                                            "id" => "menu_bg_placementx",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'left' => 'left',
                                                            'center'=>'center',
                                                            'right'=>'right',
                                                            )
                                                            );
                              $of_options[] = array( "name" => "",
                                                            "desc" => __("Y image placement options", 'virtue'),
                                                            "id" => "menu_bg_placementy",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'top' => 'top',
                                                            'center'=>'center',
                                                            'bottom'=>'bottom',
                                                            )
                                                            );  
                                     $of_options[] = array( "name"              => "mobile_menu_back",
                                                            "desc"              => "",
                                                            "id"                => "info_mobile_background",
                                                            "std"               => "<h3>".__('Mobile Menu Background', 'virtue')."</h3>
                                                                    <p>".__('This sets the background of the mobile menu.', 'virtue')."</p>",
                                                            "icon"              => true,
                                                            "type"              => "info"
                                                            );
                                     $of_options[] = array( "name"              => __("Mobile Menu Background", 'virtue'),
                                                            "desc"              => __("Background Color", 'virtue'),
                                                            "id"                => "mobile_bg_color",
                                                            "std"               => "",
                                                            "type"              => "color"); 
                              
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Upload background image or texture", 'virtue'),
                                                            "id" => "mobile_bg_img",
                                                            "std" => "",
                                                            "type" => "upload"); 
                                                            
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Image repeat options", 'virtue'),
                                                            "id" => "mobile_bg_repeat",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'no-repeat' => 'no-repeat',
                                                            'repeat'=>'repeat',
                                                            'repeat-x'=>'repeat-x',
                                                            'repeat-y'=>'repeat-y'
                                                            )
                                                            );  
                                
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("X image placement options", 'virtue'),
                                                            "id" => "mobile_bg_placementx",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'left' => 'left',
                                                            'center'=>'center',
                                                            'right'=>'right',
                                                            )
                                                            );
                                    $of_options[] = array( "name"             => "",
                                                            "desc"              => __("Y image placement options", 'virtue'),
                                                            "id"                => "mobile_bg_placementy",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                        ''            => 'select',
                                                                        'top'         => 'top',
                                                                        'center'      => 'center',
                                                                        'bottom'      => 'bottom',
                                                                        )
                                                            );
                                      $of_options[] = array( "name" => "footerback",
                                                            "desc" => "",
                                                            "id" => "info_footer_background",
                                                            "std" => "<h3>".__('Footer Background', 'virtue')."</h3>
                                                            <p>".__('This sets your background for your sites footer', 'virtue')."</p>",
                                                            "icon" => true,
                                                            "type" => "info"
                                                            );
                                     $of_options[] = array( "name" => __("Footer Background", 'virtue'),
                                                            "desc" => __("Background Color", 'virtue'),
                                                            "id" => "footer_bg_color",
                                                            "std" => "",
                                                            "type" => "color"); 
                              
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Upload background image or texture", 'virtue'),
                                                            "id" => "footer_bg_img",
                                                            "std" => "",
                                                            "type" => "upload"); 
                                                            
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Image repeat options", 'virtue'),
                                                            "id" => "footer_bg_repeat",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'no-repeat' => 'no-repeat',
                                                            'repeat'=>'repeat',
                                                            'repeat-x'=>'repeat-x',
                                                            'repeat-y'=>'repeat-y'
                                                            )
                                                            );  
                               
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("X image placement options", 'virtue'),
                                                            "id" => "footer_bg_placementx",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'left' => 'left',
                                                            'center'=>'center',
                                                            'right'=>'right',
                                                            )
                                                            );
                                    $of_options[] = array( "name" => "",
                                                            "desc" => __("Y image placement options", 'virtue'),
                                                            "id" => "footer_bg_placementy",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'top' => 'top',
                                                            'center'=>'center',
                                                            'bottom'=>'bottom',
                                                            )
                                                            ); 
                                    $of_options[] = array( "name" => "bodyback",
                                                            "desc" => "",
                                                            "id" => "info_body_background",
                                                            "std" => "<h3>".__('Body Background', 'virtue')."</h3>
                                                            <p>".__('If Site is Boxed Layout, this will determine the body tags background.', 'virtue')."</p>",
                                                            "icon" => true,
                                                            "type" => "info"
                                                            );
                                    $of_options[] = array( "name" => __("Body Background", 'virtue'),
                                                            "desc" => __("Background Color", 'virtue'),
                                                            "id" => "boxed_bg_color",
                                                            "std" => "",
                                                            "type" => "color"); 
                              
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Upload background image or texture", 'virtue'),
                                                            "id" => "boxed_bg_img",
                                                            "std" => "",
                                                            "type" => "upload"); 
                                                            
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("Image repeat options", 'virtue'),
                                                            "id" => "boxed_bg_repeat",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'no-repeat' => 'no-repeat',
                                                            'repeat'=>'repeat',
                                                            'repeat-x'=>'repeat-x',
                                                            'repeat-y'=>'repeat-y'
                                                            )
                                                            );  
                               
                                     $of_options[] = array( "name" => "",
                                                            "desc" => __("X image placement options", 'virtue'),
                                                            "id" => "boxed_bg_placementx",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'left' => 'left',
                                                            'center'=>'center',
                                                            'right'=>'right',
                                                            )
                                                            );
                                    $of_options[] = array( "name" => "",
                                                            "desc" => __("Y image placement options", 'virtue'),
                                                            "id" => "boxed_bg_placementy",
                                                            "std" => "",
                                                            "type" => "select",
                                                            "options" => array(
                                                            '' => 'select',
                                                            'top' => 'top',
                                                            'center'=>'center',
                                                            'bottom'=>'bottom',
                                                            )
                                                            );
                                    $of_options[] = array( "name"               => "",
                                                            "desc"              => __("Fixed or Scroll", 'virtue'),
                                                            "id"                => "boxed_bg_fixed",
                                                            "std"               => "",
                                                            "type"              => "select",
                                                            "options"           => array(
                                                                        '' => 'select',
                                                                        'fixed' => 'Fixed',
                                                                        'scroll'=>'Scroll',
                                                                        )
                                                            ); 
            $of_options[] = array(  "name"            => __("Typography", 'virtue'),
                                    "type"            => "heading",
                                    "icon"            => ADMIN_IMAGES . "icon-type.png"
                                    );
            $of_options[] = array(  "name"             => "Header Font Options",
      					"desc"             => "",
      					"id"               => "Info_header_Font",
      					"std"              => "<h3>".__('Header Font Options', 'virtue')."</h3>",
      					"icon"             => true,
      					"type"             => "info"
                                    );
            $of_options[] = array( 	"name" 		=> __("Header Font", 'virtue'),
						"desc" 		=> __("This font will apply to all header tags", 'virtue'),
						"id" 		      => "font_header",
						"std" 		=> "Lato",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
								"text" => "This is font preview text!", //this is the text from preview box
								"size" => "24px" //this is the text size from preview box
						),
						"options" 	=> $font_options
				);
            $of_options[] = array( 	"name" 		=> __("H1 Headings", 'virtue'),
						"desc" 		=> __("Choose Size and Style for h1 (This Styles Your Page Titles)", 'virtue'),
						"id" 		      => "font_h1",
						"std" 		=> array(
									'size'  => '38px',
									'style' => 'normal',
									'height' => '40px',
									'color' => ''
									),
							"type" 		=> "typography"
				);  
            $of_options[] = array( 	"name" 		=> __("H2 Headings", 'virtue'),
						"desc" 		=> __("Choose Size and Style for h2", 'virtue'),
						"id" 		      => "font_h2",
						"std" 		=> array(
									'size'  => '32px',
									'style' => 'normal',
									'height' => '40px',
									'color' => ''
										),
						"type" 		=> "typography"
				);  
            $of_options[] = array( 	"name" 		=> __("H3 Headings", 'virtue'),
						"desc" 		=> __("Choose Size and Style for h3", 'virtue'),
						"id" 		      => "font_h3",
						"std" 		=> array(
									'size'  => '28px',
									'style' => 'light',
									'height' => '40px',
									'color' => ''
									),
						"type" 		=> "typography"
				);  
            $of_options[] = array( 	"name" 		=> __("H4 Headings", 'virtue'),
						"desc" 		=> __("Choose Size and Style for h4", 'virtue'),
						"id" 		      => "font_h4",
						"std" 		=> array(
									'size'  => '24px',
									'style' => 'normal',
									'height' => '40px',
									'color' => ''
									),
						"type" 		=> "typography"
				);  
            $of_options[] = array( 	"name" 		=> __("H5 Headings", 'virtue'),
						"desc" 		=> __("Choose Size and Style for h5", 'virtue'),
						"id" 		      => "font_h5",
						"std" 		=> array(
									'size'  => '18px',
									'style' => 'bold',
									'height' => '24px',
									'color' => ''
									),
						"type" 		=> "typography"
				);  
            $of_options[] = array( "name"             => "Body Font Options",
      					"desc"             => "",
      					"id"               => "Info_body_Font",
      					"std"              => "<h3>".__('Body Font Options', 'virtue')."</h3>",
      					"icon"             => true,
      					"type"             => "info"
                                    );
            $of_options[] = array( 	"name" 		=> __("Body Font", 'virtue'),
						"desc" 		=> __("This font will apply to all body text", 'virtue'),
						"id" 		      => "font_body",
						"std" 		=> "Verdana",
						"type" 		=> "select_google_font",
						"preview" 	      => array(
									"text" => "This is font preview text!", //this is the text from preview box
									"size" => "14px" //this is the text size from preview box
						),
						"options" 	=> $font_options
				);
            $of_options[] = array( 	"name" 		=> __("Body Font", 'virtue'),
						"desc" 		=> __("Choose Size and Style for paragraphs", 'virtue'),
						"id" 		      => "font_p",
						"std" 		=> array(
									'size'   => '14px',
									'style'  => 'normal',
									'color'  => '',
									'height' => '20px'
										),
						"type" 		=> "typography"
				); 
            $of_options[] = array(  "name"             => "Menu Font Options",
      					"desc"             => "",
      					"id"               => "Info_Menu_Font",
      					"std"              => "<h3>".__('Menus Font Options', 'virtue')."</h3>",
      					"icon"             => true,
      					"type"             => "info"
                                    );
            $of_options[] = array( 	"name" 		=> __("Menu Font", 'virtue'),
						"desc" 		=> __("This font will apply to all page menus", 'virtue'),
						"id" 		      => "font_menu",
						"std" 		=> "Lato",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "This is font preview text!", //this is the text from preview box
										"size" => "18px" //this is the text size from preview box
						),
						"options" 	=> $font_options
				);
            $of_options[] = array( 	"name" 		=> __("Primary Menu", 'virtue'),
						"desc" 		=> __("Choose Size and Style for primary menu", 'virtue'),
						"id" 		      => "font_primary_menu",
						"std" 		=> array(
									'size'  => '12px',
									'style' => 'normal',
									'color' => '',
									'height' => '18px'
										),
						"type" 		=> "typography"
				); 
            $of_options[] = array( 	"name" 		=> __("Secondary Menu", 'virtue'),
						"desc" 		=> __("Choose Size and Style for secondary menu", 'virtue'),
						"id" 		      => "font_secondary_menu",
						"std" 		=> array(
									'size'  => '18px',
									'style' => 'normal',
									'color' => '',
									'height' => '22px'
									),
						"type" 		=> "typography"
				);  

      $of_options[] = array( "name" => __("Misc Settings", 'virtue'),
					"type" => "heading",
                              "icon" => ADMIN_IMAGES . "icon-cogs.png"
                                                            );
      $of_options[] = array(  "name"            => __("All Projects Portfolio Page", 'virtue'),
                              "desc"            => __("This sets the link in every single portfolio page. *note: You still have to set the page template to portfolio.", 'virtue'),
                              "id"              => "portfolio_link",
                              "std"             => "",
                              "type"            => "select",
                              "options"         => $of_pages
                              ); 
      $of_options[] = array(  "name"            => __("Show Comments Closed Text?", 'virtue'),
                              "desc"            => __("Choose to show or hide comments closed alert below posts.", 'virtue'),
                              "id"              => "close_comments",
                              "std"             => 1,
                              "type"            => "switch"
                        ); 
      $of_options[] = array(  "name"            => __("Show Author Icon with posts?", 'virtue'),
                              "desc"            => __("Choose to show or hide author icon under post title.", 'virtue'),
                              "id"              => "hide_author",
                              "std"             => 1,
                              "type"            => "switch"
                        ); 
      $of_options[] = array(  "name"             => __("Custom Favicon", 'virtue'),
					"desc"             => __("Upload a 16px x 16px png/gif/ico image that will represent your website's favicon.", 'virtue'),
					"id"               => "custom_favicon",
					"std"              => "",
					"type"             => "upload"
                              ); 
      $of_options[] = array(  "name"             => __("Contact Form Email", 'virtue'),
					"desc"             => __("Sets the email for the contact page email form.", 'virtue'),
					"id"               => "contact_email",
					"std"              => "example@example.com",
					"type"             => "text"
                              ); 
      $of_options[] = array( "name"             => __("Footer Copyright Text", 'virtue'),
                              "desc"            => __("Write your own copyright text here. You can use the following shortcodes in your footer text: [copyright] [site-name] [the-year]", 'virtue'),
                              "id"              => "footer_text",
                              "std"             => "[copyright] [the-year] [site-name] [theme-credit]",
                              "type"            => "textarea"
                              );
	$of_options[] = array( "name"              => "Create Sidebars",
					"desc"             => "",
					"id"               => "info_sidebars",
					"std"              => "<h3>".__('Create Sidebars', 'virtue')."</h3>",
					"icon"             => true,
					"type"             => "info"
                              ); 
	$of_options[] = array(  "name"             => __("Create Custom Sidebars", 'virtue'),
					"desc"             => "",
					"id"               => "c_sidebars",
					"std"              => "",
					"type"             => "sidebars"
                              );

      $of_options[] = array( "name"              => __("Advanced Settings", 'virtue'),
					"type"             => "heading",
                              "icon"                => ADMIN_IMAGES . "icon-wrench.png"
                              ); 
      $of_options[] = array(  "name"             => "CSS Info",
					"desc"             => "",
					"id"               => "info_CSS",
					"std"              => "<h3>".__("Custom CSS", 'virtue')."</h3>",
					"icon"             => true,
					"type"              => "info"
                              );
	$of_options[] = array(  "name"            => "",
                              "desc"            => __("Quickly add some CSS to your theme by adding it to this block.", 'virtue'),
                              "id"              => "custom_css",
                              "std"             => "",
                              "type"            => "textarea");
				
// Backup Options
$of_options[] = array( 	"name" 		=> __("Backup Options", 'virtue'),
				"type" 		=> "heading",
                        "icon"                => ADMIN_IMAGES . "icon-storage.png"
				);
				
$of_options[] = array( 	"name" 		=> __("Backup and Restore Options", 'virtue'),
				"id" 		      => "of_backup",
				"std" 		=> "",
				"type" 		=> "backup",
				"desc" 		=> __('You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.', 'virtue'),
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
