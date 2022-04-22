<?php $pagename = "gallery";
 include("head.php");
 include("navbar.php");
  ?>

    <section id="typing">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Our Gallery</h2>
			</div> <!-- /heading -->
            
            <div id="app" class="photo-grid-box"></div>
        </div> <!-- /container -->

    </section>
    <?php include("footer.php") ?>

    <script>
        const imgs = [
        // use an object as an element allows you to to build some customized feature
        {
            src: "./images/gallery/1.JPEG",
            payload: {  // you can carry more information in the payload
            title: 'Branch'
            }
        },
        {
            src: "./images/gallery/2.JPEG",
            payload: {
            title: 'wall'
            }
        },
        {
            src: "./images/gallery/2.JPEG",
            payload: {
            title: 'jet'
            }
        },
            // a string that point out the image's path is also acceptable
            {
            src: "./images/gallery/3.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/4.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/5.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/6.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/7.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/8.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/9.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/10.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/11.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/12.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/13.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/14.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/15.JPEG",
            payload: {
            title: 'jet'
            }
        },
        {
            src: "./images/gallery/16.JPEG",
            payload: {
            title: 'jet'
            }
        },
            
        ];

        const insertPoint = document.querySelector('#app');
        const box = new PhotoGridBox(insertPoint, imgs);
    </script>
</body>
</html>