<?php 
$show_content = get_field('show_location_content');

if ($show_content): ?>
    
    <div class="card-page">
        <div class="maps-container">
        <?php 
        // If not location we show Medellín City Map
        $location = !empty(get_field('map'))
        ? get_field('map')
        :['lat' => "6.2476376", "lng" =>"-75.56581530000001"];?>

        <div class="acf-map">
            <div class="marker" 
                data-lat="<?php echo esc_attr($location['lat']); ?>" 
                data-lng="<?php echo esc_attr($location['lng']); ?>">
            </div>
        </div>
        </div>
    </div>

<?php endif; ?>