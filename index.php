<?php
include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - <?php echo $branding; ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.min.css">
    <link rel="icon" href="gangggggggggg.png" type="image/x-icon">
    <link href="https://cdn.sellix.io/static/css/embed.css" rel="stylesheet"/>
    <script src="https://cdn.sellix.io/static/js/embed.js"></script>

    <!-- Open Graph Meta Tags for Discord Embed -->
    <meta property="og:title" content="">
    <meta property="og:description" content=".gg/bloodstain">
    <meta property="og:image" content="https://i.imgur.com/Sf2NlAQ.png">
    <meta property="og:image:width" content="600"> <!-- Adjust the width of your image -->
    <meta property="og:image:height" content="400"> <!-- Adjust the height of your image -->
    <meta property="og:image:type" content="image/png"> <!-- Replace with the correct image type -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">

    <!-- Rest of your code -->
</head>


<body style="background: rgb(0,0,0);">
    <nav class="navbar navbar-dark navbar-expand-md py-3" style="width: 64%;margin: auto;background: rgb(0,0,0);max-width: 1050px;">
        <div class="container"><img src="<?php echo $logo_url; ?>" style="height: 43px;margin-top: 5px;margin-right: 35px;"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-6"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-6">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-house" style="margin-top: -1px;">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                            </svg>&nbsp;Home</a></li>
                    <li class="nav-item"><a href="<?php echo $discord_inv ?>" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chat-square-text" style="margin-top: -1px;">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"></path>
                            </svg>&nbsp;Discord</a></li>
                </ul>
                <div class="d-md-none my-2"><button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#modal-1" style="border-radius: 6px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book" style="margin-top: -3px;">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"></path>
                        </svg>&nbsp; Terms</button></div>
            </div>
            <div class="d-none d-md-block"><button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#modal-1" style="border-radius: 6px;background: rgb(31,32,38);border-color: rgb(31,32,38);color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book" style="margin-top: -3px;">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"></path>
                    </svg>&nbsp; <span style="font-weight: normal !important;">TOS</span></button></div>
        </div>
    </nav>
    <div class="modal fade pulse animated" role="dialog" tabindex="-1" id="modal-1" style="margin-top: 150px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color: rgb(0,0,0);">Terms Of Service</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><span style="color: rgb(0, 0, 0);"><?php echo $terms; ?></span><br></p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>



  
<!-------------------------------------------------------------------------------->
<!-- BELOW ARE THE SNOWFLAKES, YOU CAN DISABLE THEM BY DELETING THIS CODE BLOCK -->
<div class="snowflake"></div><div class="snowflake"></div><div class="snowflake"></div>
<div class="snowflake"></div><div class="snowflake"></div><div class="snowflake"></div>
<div class="snowflake"></div><div class="snowflake"></div><div class="snowflake">
</div><div class="snowflake"></div><div class="snowflake"></div><div class="snowflake">
</div><div class="snowflake"></div><div class="snowflake"></div>
<div class="snowflake"></div><div class="snowflake"></div><div class="snowflake"></div>
<!-------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------->



  
    <div class="card bg-dark" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150" style="width: 88%;margin: auto;margin-top: 5px;border-color: rgb(34,35,42);transform: perspective(0px);">
        <div class="card-body" style="backdrop-filter: brightness(83%);border-radius: 9px;box-shadow: 0px 0px 14px 3px rgba(0,0,0,0.54);">
            <div class="container py-4 py-xl-5" style="border-radius: 6px;">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 style="font-weight: bold;"><?php echo $header_1; ?></h2>
                        <p class="w-lg-50"><?php echo $info_1; ?></p>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/qAVYL5v.png">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h1 ?><br></h4>
                                <p class="card-text"><?php echo $d1 ?></p>
                                <p class="card-text" style="color: rgb(234,104,76);">Price: <strong><?php echo $p1 ?></strong></p><button data-sellix-product="<?php echo $id1 ?>" class="btn btn-primary" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="margin-top: -8px;background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/qAVYL5v.png">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h2 ?><br></h4>
                                <p class="card-text"><?php echo $d2 ?><br></p>
                                <p class="card-text" style="color: rgb(113,113,113);"><span style="color: rgb(234, 104, 76);">Price: </span><strong><span style="color: rgb(234, 104, 76);"><?php echo $p2 ?></span></strong><br></p><button data-sellix-product="<?php echo $id2 ?>" class="btn btn-primary" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/qAVYL5v.png">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h3 ?></h4>
                                <p class="card-text"><?php echo $d3 ?><br></p>
                                <p class="card-text" style="color: rgb(113,113,113);"><span style="color: rgb(234, 104, 76);">Price: </span><strong><span style="color: rgb(234, 104, 76);"><?php echo $p3 ?></span></strong><br></p><button class="btn btn-primary" data-sellix-product="<?php echo $id3 ?>" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5" style="margin-top: -47px;">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 style="font-weight: bold;"><?php echo $featuresheader ?></h2>
                        <p class="w-lg-50"><?php echo $featuresinfo ?></p>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card" style="box-shadow: 0px 0px 11px 4px rgba(36,37,44,0.41);">
                            <div class="card-body p-4" style="background: #24252c;border-radius: 12px;">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="border-radius: 60px;background: linear-gradient(#dd6045, #cd5237 98%), rgb(214,88,61);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-wallet2">
                                        <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                                    </svg></div>
                                <h4 class="card-title">Cheap Prices</h4>
                                <p class="card-text"><?php echo $a ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="box-shadow: 0px 0px 11px 4px rgba(36,37,44,0.41);">
                            <div class="card-body p-4" style="background: #24252c;border-radius: 12px;margin-top: -8px;">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="border-radius: 60px;background: linear-gradient(#dd6045, #cd5237 98%), rgb(214,88,61);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-seam">
                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"></path>
                                    </svg></div>
                                <h4 class="card-title">Instant Delivery</h4>
                                <p class="card-text"><?php echo $b ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="box-shadow: 0px 0px 11px 4px rgba(36,37,44,0.41);">
                            <div class="card-body p-4" style="background: #24252c;border-radius: 12px;">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="border-radius: 60px;background: linear-gradient(#dd6045, #cd5237 98%), rgb(214,88,61);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-shield-shaded">
                                        <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"></path>
                                    </svg></div>
                                <h4 class="card-title">Secure Payment</h4>
                                <p class="card-text"><?php echo $c ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5" style="margin-top: 40px;">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 style="font-weight: bold;"><?php echo $header_2; ?></h2>
                        <p class="w-lg-50"><?php echo $info_2; ?></p>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/rust.webp">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h4 ?><br></h4>
                                <p class="card-text"><?php echo $d4 ?></p>
                                <p class="card-text" style="color: rgb(234,104,76);">Price: <strong><?php echo $p4 ?></strong></p><button data-sellix-product="<?php echo $id4 ?>" class="btn btn-primary" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/rust.webp">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h5 ?><br></h4>
                                <p class="card-text"><?php echo $d5 ?><br></p>
                                <p class="card-text" style="color: rgb(113,113,113);"><span style="color: rgb(234, 104, 76);">Price: </span><strong><span style="color: rgb(234, 104, 76);"><?php echo $p5 ?></span></strong><br></p><button class="btn btn-primary" data-sellix-product="<?php echo $id5 ?>" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/rust.webp">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h6 ?></h4>
                                <p class="card-text"><?php echo $d6 ?><br></p>
                                <p class="card-text" data-sellix-product="<?php echo $id6 ?>" style="color: rgb(113,113,113);"><span style="color: rgb(234, 104, 76);">Price: </span><strong><span style="color: rgb(234, 104, 76);"><?php echo $p6 ?></span></strong><br></p><button class="btn btn-primary" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col" style="margin-top: 40px;">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/mw2.webp">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h7 ?><br></h4>
                                <p class="card-text"><?php echo $d7 ?></p>
                                <p class="card-text" data-sellix-product="<?php echo $id7 ?>" style="color: rgb(234,104,76);">Price: <strong><?php echo $p7 ?></strong></p><button class="btn btn-primary" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 40px;">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/mw2.webp">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h8 ?>t<br></h4>
                                <p class="card-text"><?php echo $d8 ?><br></p>
                                <p class="card-text" style="color: rgb(113,113,113);"><span style="color: rgb(234, 104, 76);">Price: </span><strong><span style="color: rgb(234, 104, 76);"><?php echo $p1 ?></span></strong><br></p><button data-sellix-product="<?php echo $id8 ?>" class="btn btn-primary" type="button" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 40px;">
                        <div class="card" style="background: rgb(34,35,42);border-color: rgb(34,35,42);box-shadow: 0px 0px 12px 3px rgba(34,35,42,0.8);"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/mw2.webp">
                            <div class="card-body p-4">
                                <h4 class="card-title"><?php echo $h9 ?></h4>
                                <p class="card-text"><?php echo $d9 ?><br></p>
                                <p class="card-text" style="color: rgb(113,113,113);"><span style="color: rgb(234, 104, 76);">Price: </span><strong><span style="color: rgb(234, 104, 76);"><?php echo $p9 ?></span></strong><br></p><button data-sellix-product="<?php echo $id9 ?>" class="btn btn-primary" type="submit" style="border-radius: 7px;background: rgb(31,32,38);border-color: rgb(31,32,38);width: 100%;color: rgb(221,221,221);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="margin-top: -5px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"></path>
                                    </svg>&nbsp; Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="card-title"></h4>
            <h6 class="text-muted card-subtitle mb-2"></h6>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/aos.min.min.js"></script>
</body>

</html>