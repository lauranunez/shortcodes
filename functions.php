

// Shortcode Buttom 
add_shortcode( 'button', 'emo_button_shortcode' );
 
function emo_button_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'title' => 'Title',
                       'url' => ''
               ),
               $atts
       ));
       return '<span class="emo-button"><a href="' . $url . '">' . $title . '</a></span>';
}

// Shortcode Enclosing
function EMO_shortcode($atts = [], $content = null)
{
    // do something to $content
 
    // always return
    return '<span class="emo-code">'. $content . '</span>';
}
add_shortcode('codigo', 'EMO_shortcode');

/* shortcode para un espacio */
function blankline() {
 return '<p>&nbsp;</p>';
}
add_shortcode('blank', 'blankline');
?>

<style>
.emo-button {
padding: 12px;
font-size: 18px;
border-radius: 2px;
border:2px solid #d26e4b;
	background: #d26e4b;

}
.emo-button a {
text-decoration: none;
color:#fff !important;
	text-transform: uppercase;
	font-family:Roboto, Arial,"sans-serif";
}
</style>
