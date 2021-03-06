<!DOCTYPE html>
<html>

<style>
    .container {
        padding: 40px 0;
    }

    .gallery.row {
        margin-left: -7.5px;
        margin-right: -7.5px;
    }

    .gallery-list.col-md-12,
    .gallery-list.col-md-6,
    .gallery-list.col-md-4,
    .gallery-list.col-md-3,
    .gallery-list.col-md-2,
    .gallery-list.col-md-1 {
        padding-left: 7.5px;
        padding-right: 7.5px;
    }

    .image-grid {
        width: 100%;
        height: 200px;
        margin-bottom: 15px;
        background-color: #fff;
        overflow: hidden;
    }

    .image-grid * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.45s ease;
        transition: all 0.45s ease;
    }

    .image-grid img {
        width: 100%;
        height: auto;
        transform: scale(3);
    }

    .image-grid figcaption {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
        align-items: center;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .image-grid p {
        margin: 0;
        opacity: 0;
        letter-spacing: 1px;
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    .image-grid a {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }

    .image-grid:hover > img,
    .image-grid.hover > img {
        opacity: 0.1;
    }

    .image-grid:hover p {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }

    .js-modal-image {
        max-width: 100%;
    }

    .modal-body {
        padding: 0;
    }

    .modal-open .modal {
        padding-top: 26vh;
        background-color: transparent;
    }

    @media (max-width: 992px) {
        .modal-open .modal {
            padding-top: 100px;
        }

        .image-grid {
            width: 100%;
            height: 180px;
        }

    }

    @media (max-width: 768px) {
        .gallery.container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .gallery-list.col-md-12,
        .gallery-list.col-md-6,
        .gallery-list.col-md-4,
        .gallery-list.col-md-3,
        .gallery-list.col-md-2,
        .gallery-list.col-md-1 {
            padding-left: 0;
            padding-right: 0;
        }

        .gallery-row.row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .gallery-row.row.pdtb-40 {
            padding-top: 10px;
        }

        .horizontal-nav {
            margin-bottom: 0;
        }

        .modal-open .modal {
            padding-top: 30vh;
        }
    }

</style>

<body>

<div class="container">
    <div class="gallery row">

        <!-- 3 -->
        <div class="gallery-list col-md-4 col-xs-12">
            <div class="image-grid">
                <img src="/lynx/img/gallery-img/img-1.jpg">
                <figcaption>
                    <p class="font20 font-roboto-regular font-color-dark">volledige grootte weergeven</p>
                </figcaption>
                <a class="click-to-expand" href="#" data-toggle="modal" data-target="#modalGallery"></a>
            </div>
        </div>
        <div class="gallery-list col-md-4 col-xs-12">
            <div class="image-grid">
                <img src="/lynx/img/gallery-img/img-2.jpg">
                <figcaption>
                    <p class="font20 font-roboto-regular font-color-dark">volledige grootte weergeven</p>
                </figcaption>
                <a class="click-to-expand" href="#" data-toggle="modal" data-target="#modalGallery"></a>
            </div>
        </div>
        <div class="gallery-list col-md-4 col-xs-12">
            <div class="image-grid">
                <img src="/lynx/img/gallery-img/img-3.jpg">
                <figcaption>
                    <p class="font20 font-roboto-regular font-color-dark">volledige grootte weergeven</p>
                </figcaption>
                <a class="click-to-expand" href="#" data-toggle="modal" data-target="#modalGallery"></a>
            </div>
        </div>
        <!-- 3 -->

        <!-- 2 -->
        <div class="gallery-list col-md-6 col-xs-12">
            <div class="image-grid">
                <img src="/lynx/img/gallery-img/img-4.jpg">
                <figcaption>
                    <p class="font20 font-roboto-regular font-color-dark">volledige grootte weergeven</p>
                </figcaption>
                <a class="click-to-expand" href="#" data-toggle="modal" data-target="#modalGallery"></a>
            </div>
        </div>
        <div class="gallery-list col-md-6 col-xs-12">
            <div class="image-grid">
                <img src="/lynx/img/gallery-img/img-5.jpg">
                <figcaption>
                    <p class="font20 font-roboto-regular font-color-dark">volledige grootte weergeven</p>
                </figcaption>
                <a class="click-to-expand" href="#" data-toggle="modal" data-target="#modalGallery"></a>
            </div>
        </div>
        <!-- 2 -->

    </div>
</div>

<div id="modalGallery" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalGalleryLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img class="js-modal-image" src="" alt="..."/>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    (function () {
        $(document).on("click", ".click-to-expand", function () {
            var imageSrc = $(this).parents(".image-grid").find("img").attr("src");
            $(".js-modal-image").attr("src", imageSrc);
        });
    })();
</script>

</body>

</html>