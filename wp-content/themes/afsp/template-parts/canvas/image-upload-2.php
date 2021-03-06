<?php // Source: http://jsfiddle.net/influenztial/qy7h5/
    // Image scaling trick courtesy of http://stackoverflow.com/questions/28047792/html-canvas-scaling-image-to-fit-without-stretching?>
<div id="measure" style="position: absolute; left: -10000px; top: -100000px;"></div>
<script type="text/javascript">

    var imageLoader = document.getElementById('<?php echo $loaderID; ?>');
    imageLoader.addEventListener('change', handleImage, false);
    var canvas = document.getElementById('<?php echo $canvasID; ?>');
    var ctx = canvas.getContext('2d');


    function handleImage(e){

        loadImage(
            e.target.files[0],
            function (img, data) {
                var ct = document.getElementById('measure');
                ct.appendChild(img);
                console.log("Data: ", data)
                var width = data.originalWidth
                console.log("Width: ", width)
                var height = data.originalHeight
                console.log("Height: ", height)
                var wrh = img.width / img.height;
                console.log("WRH: ", wrh)
                var newWidth = canvas.width;
                console.log("NewWidth: ", newWidth)
                var newHeight = newWidth / wrh;
                console.log("NewHeight: ", newHeight)
                if (newHeight < canvas.height) {
                    newHeight = canvas.height;
                    newWidth = newHeight * wrh;
                }
                if (data.exif) {
                    var orientation = data.exif['274']
                    console.log("Orientation: ", orientation)
                }
                if (orientation != 1) {
                    ctx.translate(((canvas.width-newWidth)/2) + (0.5 * newWidth), ((canvas.height-newHeight)/2) + (0.5 * newHeight))
                    switch (orientation) {
                        case 2:
                            // horizontal flip
                            ctx.scale(-1, 1)
                            break
                        case 3:
                            // 180° rotate left
                            ctx.rotate(Math.PI)
                            break
                        case 4:
                            // vertical flip
                            ctx.scale(1, -1)
                            break
                        case 5:
                            // vertical flip + 90 rotate right
                            ctx.rotate(0.5 * Math.PI)
                            ctx.scale(1, -1)
                            break
                        case 6:
                            // 90° rotate right
                            ctx.rotate(0.5*Math.PI)
                            break
                        case 7:
                            // horizontal flip + 90 rotate right
                            ctx.rotate(0.5 * Math.PI)
                            ctx.scale(-1, 1)
                            break
                        case 8:
                            // 90° rotate left
                            ctx.rotate(-0.5 * Math.PI)
                            break
                        default: break
                    }
                    ctx.translate(-(((canvas.width-newWidth)/2) + (0.5 * newWidth)), -(((canvas.height-newHeight)/2) + (0.5 * newHeight)))
                }
                console.log("NewWidth: ", newWidth)
                console.log("NewHeight: ", newHeight)
                console.log("CanvasWidth: ", canvas.width)
                console.log("CanvasHeight: ", canvas.height)

                ctx.drawImage(img,(canvas.width-newWidth)/2,(canvas.height-newHeight)/2,newWidth,newHeight);
            },
            {meta: true, orientation: 1}
        )



        // var reader = new FileReader();
        // reader.onload = function(event){
        //     var img = new Image();
        //     img.onload = function(){
        //         var ct = document.getElementById('measure');
        //         ct.appendChild(img);
        //         var wrh = img.width / img.height;
        //         var newWidth = canvas.width;
        //         var newHeight = newWidth / wrh;
        //         if (newHeight < canvas.height) {
        //             newHeight = canvas.height;
        //             newWidth = newHeight * wrh;
        //         }
        //         ctx.drawImage(img,(canvas.width-newWidth)/2,(canvas.height-newHeight)/2,newWidth,newHeight);
        //     }
        //     img.src = event.target.result;
        // }
        // reader.readAsDataURL(e.target.files[0]);
    }

</script>
