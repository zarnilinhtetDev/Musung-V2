<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Awaiting Payment</title>
    <link href="https://pro.fontawesome.com/releases/v5.10.1/css/all.css" rel="stylesheet">
    <link href='/assets/vendors/bootstrap/v5/css/bootstrap.min.css' rel="stylesheet">
    <link href='/assets/stylesheets/payment-flow.css' rel="stylesheet">


    <style>
        .card-md-center {
            width: 100%;
            max-width: 480px;
        }

        body {
            background: #e8e8e8;
        }

        .merchant-logo {
            height: 36px;
        }

        .payment-logo {
            height: 48px;
        }

        .top-section-bg {
            min-height: 160px;
            background: #213b7e;
        }

        .content-section {
            margin-top: -160px;
        }
    </style>
</head>

<body>
    <div class="top-section-bg">
    </div>

    <div class="container content-section">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="my-4 d-flex">
                    <div class="flex-fill">
                        <img class="merchant-logo"
                            src="https://www.mmbusticket.com/assets/images/logos/mmbusticket-hor-sm-dark.png" />
                    </div>
                    <div>
                        <a href="#" class="btn btn-sm btn-outline-light">EN</a>
                        <a href="#" class="btn btn-sm btn-outline-light">MY</a>
                    </div>
                </div>
                <div>



                    <div class="card shadow-lg mt-3">
                        <div class="card-body bg-light border-bottom">
                            <div class="row">
                                <div class="col-8">
                                    <div class="m-2">
                                        <div class="text-dark fw-bold">Pay with AYAPay</div>
                                        <div class="text-muted mt-1"><i class="far fa-clock"></i> Time left:

                                            <count-down-timer remaining-seconds="7" tick-interval-seconds="3"
                                                text-color="#111" text-color-class="text-success"
                                                template="{{m}} min : {{s}} sec">
                                            </count-down-timer>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <img class="m-2"
                                        src="https://drzbgvp8lrh8o.cloudfront.net/images/payment-methods/ayapay.png"
                                        style="height:48px">
                                </div>
                            </div>
                        </div>

                        <div class="card-body bg-light ">

                            <div id="app" data-channel="channel-payment-attempt-349760"
                                data-sub-key="sub-c-958cef6f-e74a-41a8-b6a2-91c4582e2760"></div>

                            <div class="text-center py-4">
                                <div class="subtitle">Amount Due</div>
                                <h1>
                                    <small class="payment-amount-currency">MMK</small>
                                    <span class="payment-amount-numeric">22,000</span>
                                </h1>




                                <img class="mt-3"
                                    src="/qrcode/image/000201010212503500245cf5f3deed84401e587690320103123514800246267ba106d950d693a4965bf01162002082020020820520448145405220005303MMK5802MM5911MMBUSTICKET6006Yangon6282010634976003246267ba10742b573678d4de17051216549357586650245e216cc54d067ef2b7adafb264210002my0111MMBUSTICKET6304b28a" />




                                <div class="my-4">
                                    <div id="status-pending" class="d-block">
                                        <img src='/assets/images/animated-dots.svg' width="64" alt="">
                                        <h4 class="mt-3 fw-bold payment-status">
                                            Awaiting Payment ...
                                        </h4>
                                        <p class="subtitle">
                                            &quot;Please scan QR code with your wallet app.
                                        </p>
                                    </div>

                                    <div id="status-success" class="d-none">
                                        <img src='/assets/images/status-success.png' width="64" alt="">
                                        <h4 class="mt-3 fw-bold payment-status">
                                            Payment is Successful!
                                        </h4>
                                        <div class="subtitle my-2">
                                            Redirecting to the merchant...
                                            <div>
                                                <img src='/assets/images/animated-dots.svg' width="48" alt="">
                                            </div>

                                        </div>
                                    </div>

                                    <div id="status-cancelled" class="d-none">
                                        <img src='/assets/images/status-cancelled.png' width="64" alt="">
                                        <h4 class="mt-3 fw-bold payment-status">
                                            Payment is not successful.
                                        </h4>
                                        <div class="subtitle my-2">
                                            Redirecting to the merchant...
                                            <div>
                                                <img src='/assets/images/animated-dots.svg' width="48" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>

    <script src='/assets/javascripts/web-components/count-down-timer.js' type="text/javascript"></script>
    <script src='/assets/vendors/bootstrap/v5/js/bootstrap.min.js' type="text/javascript"></script>

    <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.21.7.js"></script>
    <script src='/assets/javascripts/payment-status-subscriber-20221127.js' type="text/javascript"></script>

</body>

</html>