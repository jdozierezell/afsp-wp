<label>Image File:</label><br/>
<input type="file" id="imageLoader" name="imageLoader"/>
<div class="canvas">
    <canvas id="imageCanvas" width="400" height="400">It looks like your browser doesn't support this type of thing. Try Google Chrome instead.</canvas>
    <canvas id="overlayCanvas" width="400" height="400"></canvas>
</div>
<a id="download">Download</a>

<style type="text/css">
    .canvas {
        position: relative;
    }
    .canvas canvas {
        position: absolute;
        top: 0;
        left: 0;
    }
</style>

<script type="text/javascript">
    <?php // Source: http://jsfiddle.net/influenztial/qy7h5/ ?>
    var imageLoader = document.getElementById('imageLoader');
    imageLoader.addEventListener('change', handleImage, false);
    var canvas = document.getElementById('imageCanvas');
    var overlay = document.getElementById('overlayCanvas');
    var ctx = canvas.getContext('2d');
    var ctx_overlay = overlay.getContext('2d');


    function handleImage(e){
        var reader = new FileReader();
        reader.onload = function(event){
            var img = new Image();
            img.onload = function(){
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img,0,0);
            }
            img.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    }

    <?php if(have_rows('ci_preset')) : while(have_rows('ci_preset')) : the_row();
    $image = get_sub_field("ci_image");
    $image_array = wp_get_attachment_image_src($image['id']);
    $image_url = $image_array[0];
    // if the page is loaded over ssl, we need to add the secure protocol to the source url
    $image_url = str_replace('http://', 'https://', $image_url);
    if($pos = strpos($image_url, '?') !== false) :
        $image_url = strstr($image_url, '?', true);
    endif; ?>

    var preset_img = new Image();   // Create new preset_img element
    preset_img.addEventListener('load', function() {
        ctx_overlay.drawImage(preset_img, 0, 0, preset_img.width, preset_img.height, 0, 0, overlay.width, overlay.height);
    }, false);
    preset_img.src = '<?php echo $image_url; ?>'; // Set source path
    console.log(preset_img.src);
    <?php endwhile;
    endif; ?>

    <?php // Source: https://jsfiddle.net/AbdiasSoftware/7PRNN/ ?>

    /**
     * This is the function that will take care of image extracting and
     * setting proper filename for the download.
     * IMPORTANT: Call it from within a onclick event.
     */
    function downloadCanvas(link, canvasId, filename) {
        console.log('clicked');
        link.href = document.getElementById(canvasId).toDataURL();
        link.download = filename;
    }

    /**
     * The event handler for the link's onclick event. We give THIS as a
     * parameter (=the link element), ID of the imageCanvas and a filename.
     */
    document.getElementById('download').addEventListener('click', function() {
        downloadCanvas(this, 'imageCanvas', 'foo-bar.png');
    }, false);

</script>
