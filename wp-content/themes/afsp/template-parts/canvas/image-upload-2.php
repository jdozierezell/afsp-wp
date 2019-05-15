<?php // Source: http://jsfiddle.net/influenztial/qy7h5/
// Image scaling trick courtesy of http://stackoverflow.com/questions/28047792/html-canvas-scaling-image-to-fit-without-stretching?>
<div id="measure" style="position: absolute; left: -10000px; top: -100000px;"></div>
<script type="text/javascript">

	var imageLoader = document.getElementById('<?php echo $loaderID; ?>');
	    imageLoader.addEventListener('change', handleImage, false);
	var canvas = document.getElementById('<?php echo $canvasID; ?>');
	var ctx = canvas.getContext('2d');


	function handleImage(e){
	    var loadingImage = loadImage(
	        e.target.files[0],
            function(img) {
	            document.body.appendChild(img)
            }
        )
	    // var reader = new FileReader();
	    // reader.onload = function(event){
        // var img = new Image();
        // img.onload = function(){
        // 	var ct = document.getElementById('measure');
        // 	ct.appendChild(img);
        // 	var wrh = img.width / img.height
        //     var newWidth = canvas.width;
        //     var newHeight = newWidth / wrh;
        //     if (newHeight < canvas.height) {
        //         newHeight = canvas.height;
        //         newWidth = newHeight * wrh;
        //     }


            // img.prop('src', reader.result)
            // img.src = img.prop('src')
            // EXIF.getData(img, function() {
            //     console.log(EXIF.pretty(img))
            // })

            // console.log(orientation)
            // switch (orientation) {
            //     case 2: ctx.transform(-1, 0, 0, 1, width, 0); break;
            //     case 3: ctx.transform(-1, 0, 0, -1, width, height); break;
            //     case 4: ctx.transform(1, 0, 0, -1, 0, height); break;
            //     case 5: ctx.transform(0, 1, 1, 0, 0, 0); break;
            //     case 6: ctx.transform(0, 1, -1, 0, height, 0); break;
            //     case 7: ctx.transform(0, -1, -1, 0, height, width); break;
            //     case 8: ctx.transform(0, -1, 1, 0, 0, width); break;
            //     default: break;
            // }
        //     ctx.drawImage(img,(canvas.width-newWidth)/2,(canvas.height-newHeight)/2,newWidth,newHeight);
        // }
        // img.src = event.target.result;
	    // }
	    // reader.readAsDataURL(e.target.files[0]);
	}

</script>
