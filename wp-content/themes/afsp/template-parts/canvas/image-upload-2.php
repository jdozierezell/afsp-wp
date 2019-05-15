<?php // Source: http://jsfiddle.net/influenztial/qy7h5/
    // Image scaling trick courtesy of http://stackoverflow.com/questions/28047792/html-canvas-scaling-image-to-fit-without-stretching?>
<div id="measure" style="position: absolute; left: -10000px; top: -100000px;"></div>
<script type="text/javascript">

    var imageLoader = document.getElementById('<?php echo $loaderID; ?>');
    imageLoader.addEventListener('change', handleImage, false);
    var canvas = document.getElementById('<?php echo $canvasID; ?>');
    var ctx = canvas.getContext('2d');


    function handleImage(e){

        var reader = new FileReader();
        reader.onloadend = function(event){
            var blob = new Blob([event.target.result])
            var exif = EXIF.readFromBinaryFile(event.target.result)
            var orientation = exif.Orientation
            var img = new Image();
            img.src = URL.createObjectURL(blog)
            console.log(orientation)
            if (orientation) {
                // values from https://stackoverflow.com/questions/19463126/how-to-draw-photo-with-correct-orientation-in-canvas-after-capture-photo-by-usin
                switch (orientation) {
                    case 8:
                        ctx.rotate(90*Math.PI/180)
                        break
                    case 3:
                        ctx.rotate(180*Math.PI/180)
                        break
                    case 6:
                        ctx.rotate(-90*Math.PI/180)
                        break
                    default:
                        break
                }
            }
            img.onload = function(){
                var ct = document.getElementById('measure');
                ct.appendChild(img);
                var wrh = img.width / img.height;
                var newWidth = canvas.width;
                var newHeight = newWidth / wrh;
                if (newHeight < canvas.height) {
                    newHeight = canvas.height;
                    newWidth = newHeight * wrh;
                }
                ctx.drawImage(img,(canvas.width-newWidth)/2,(canvas.height-newHeight)/2,newWidth,newHeight);
            }
        }
        reader.readAsDataURL(e.target.files[0]);
    }

</script>
