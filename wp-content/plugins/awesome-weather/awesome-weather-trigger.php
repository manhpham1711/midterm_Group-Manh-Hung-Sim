<div class="awe-weather-bubble<?php if( !$weather->show_bubble ) echo ' hide'; ?>"><?php echo $weather->t->set_location; ?></div>
<div class="awe-weather-trigger"><a href="javascript:;" data-widget-id="<?php echo $weather->id; ?>" title="<?php echo $weather->t->set_location; ?>" alt="<?php echo $weather->t->set_location; ?>"><img src="<?php echo apply_filters( 'awesome_weather_trigger_image', AWESOME_WEATHER_PLUGIN_BASE . 'img/locate.png'); ?>"></a></div>