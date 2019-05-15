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
                console.log(data.exif)
            },
            {meta: true}
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
