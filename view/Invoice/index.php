<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../../public/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../public/images/favicon/1.png" type="image/x-icon">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="../../public/css/vendors/font-awesome.css">
    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="../../public/css/vendors/animate.css">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../../public/css/vendors/themify-icons.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../../public/css/vendors/bootstrap.css">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">

    <title>Invoice</title>
</head>

<body class="theme-color-1 bg-light">

    <!-- invoice start -->
    <section class="theme-invoice-4 section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 m-auto">
                    <div class="invoice-wrapper">
                        <div class="invoice-header">
                            <img src="../../public/images/invoice/bg3.jpg" class="background-invoice">
                            <img src="../../public/images/icon/logo.png" class="img-fluid" alt="logo">
                        </div>
                        <div class="invoice-body">
                            <div class="top-sec">
                                <div class="row">
                                    <div class="col-xxl-8 col-md-7">
                                        <div class="address-detail">
                                            <div class="mt-2">
                                                <h4 class="mb-2" id="vent_nomape">
                                                </h4>
                                                <h4 class="mb-2" id="vent_dire"></h4>
                                                <h4 class="mb-0" id="vent_pais"></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-5">
                                        <ul class="date-detail">
                                            <li><span>Departamento:</span>
                                                <h4 id="vent_depa"></h4>
                                            </li>
                                            <li><span>Codigo Postal:</span>
                                                <h4 id="vent_codpostal"></h4>
                                            </li>
                                            <li><span>Email:</span>
                                                <h4 id="vent_email"></h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="title-sec">
                                <h2 class="title">invoice</h2>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#" class="btn black-btn btn-solid" onclick="window.print();">export as
                                            PDF</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="#" class="btn btn-solid" onclick="window.print();">print</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-sec">
                                <div class="table-responsive-md">
                                    <table class="table table-borderless table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="listdetalle">
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-end">
                                    <div class="table-footer">
                                        <span class="me-5 font-bold">Total</span>
                                        <span class="font-bold" id="vent_total">$00.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer">
                            <img src="../../public/images/invoice/shape.png" class="img-fluid design-shape" alt="">
                            <ul>
                                <li>
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                    <div>
                                        <h4>multikart demo store</h4>
                                        <h4>USA, 362351</h4>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div>
                                        <h4>+1-202-555-0144</h4>
                                        <h4>+1-202-555-0117</h4>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div>
                                        <h4>support@multikart.com</h4>
                                        <h4>demo@multikart.com</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- invoice end -->


    <!-- latest jquery-->
    <script src="../../public/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../../public/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="invoice.js"></script>

</body>

</html>