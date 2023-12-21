<!doctype html>
<html lang="ru">
<head>
    <!--  CATALOG We use http://fire.uxtheme.net/   -->
    <!--meta:utf-->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <!--meta:vp-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Каталог нашей продукции, сладкий подарок из Адыгеи, натуральные продукты из Адыгеи,| Мёд Адыгеи пасека Казанцева</title>
    <meta name="description" content="Каталог продукции, натуральные пчелопродукты  на пасеке Казанцева" />
    <meta name="keywords" content="Каталог продукции пчелопроизводства" />

    <!--google font-->
    <!--

    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700&amp;subset=cyrillic" rel="stylesheet">
    -->

    <!-- favicon png -->
    <link rel="shortcut icon" href="/storage/images/favicon.png" type="image/png">

    <!-- font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--bootstrap-catalog min css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- global style css -->
    <link rel="stylesheet" href="css/global-style.css">

    <!-- custom css -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!-- carousel css-->
    <!--
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    -->

    <!-- animate css
    https://daneden.github.io/animate.css/-->
    <!--<link rel="stylesheet" href="css/animate.css">-->

    <!-- alert css-->
    <!--<link rel="stylesheet" href="css/assets/alert.css">-->

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49228384 = new Ya.Metrika2({
                    id:49228384,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49228384" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
@include('parts.navigation')

<!-- MAIN CONTENT
=================================================================-->
<section id="main-content" class="mt-5">
    <div class="container">
        <div class="row" id="myCatalog1">

            <!-- ЗДЕСЬ ВЫВОДИТСЯ СПИСОК КАРТОЧЕК ТОВАРОВ ЧЕРЕЗ JavaScript -->
            <!-- Отображение корзины с товарами -->
            <div class="myCartCatalog"> <i class="fa fa-shopping-cart fa-3x my-cart-icon"></i><span class="badge badge-notify my-cart-badge"></span> </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</section>

<!-- FOOTER
=================================================================-->
<section id="myfooter" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="menu-button">
                    <li><a href="kontakti.html">Контакты</a></li>
                    <li><a href="praiys.html">Цены</a></li>
                    <li><a href="dokumenti.html">Документы</a></li>
                    <li><a href="dostavka.html">Доставка</a></li>
                </ul>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-center"><img src="storage/storage/images/img-bee1.png" alt="Пчела" class="img-fluid" width="100px"> </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-right">
                <p>Наш адрес: г.Майкоп РА</p>
                <a href="tel:+79284619164"><i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;+7&nbsp;(928)&nbsp;461-91-64</a><br />
                <a href="tel:+79284619164"><i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;+7&nbsp;(928)&nbsp;461-91-63</a><br />
                <a href="mailto:medoviyobereg@mail.ru"><i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;medoviyobereg@mail.ru</a></div>
            <!-- /.col-md-4 -->
        </div>
    </div>
    <!-- /.container -->

</section>

<!-- jQuary library -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!--bootstrap js-->
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- JavaScript code of CART
=========================================================-->

<script type="text/javascript" src="js/jquery.mycart.js"></script>
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function($addTocartBtn){
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500 , "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function(){
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart){
                goToCartIcon($addTocart);
            }
            //Дисконт, если нужен
            //,
//    getDiscountPrice: function(products) {
//      var total = 0;
//      $.each(products, function(){
//        total += this.quantity * this.price;
//      });
//      return total * 0.5;
//    }
        });

    });

</script>
<!--  /.end CART script -->

<!--        КАТАЛОГ ТОВАРОВ JSON-->
<script type="text/javascript">
    var catalog = {
        "akatsiya":[
            {
                "mainimage":"storage/storage/images/akatsiya2.jpg",
                "maintitle": "Акациевый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "250",
                        "dataid": "1"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "400",
                            "dataid": "2"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "700",
                            "dataid": "3"
                        }
                    ]}
        ],
        "boyarishnik":[
            {
                "mainimage":"storage/storage/images/bojarishnik.jpg",
                "maintitle": "Боярышниковый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "300",
                        "dataid": "4"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "480",
                            "dataid": "5"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "840",
                            "dataid": "6"
                        }]
            }
        ],
        "grechishniy":[
            {
                "mainimage":"storage/storage/images/img-big-grechishniy2.jpg",
                "maintitle": "Гречишный мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "260",
                        "dataid": "7"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "410",
                            "dataid": "8"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "700",
                            "dataid": "9"
                        }] //end SUBPRODUCT
            }],//end PRODUCT
        "donnikoviy":[
            {
                "mainimage":"/storage/images/donnik.jpg",
                "maintitle": "Донниковый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "230",
                        "dataid": "10"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "360",
                            "dataid": "11"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "630",
                            "dataid": "12"
                        }] //end SUBPRODUCT
            }],//end PRODUCT
        "gorniy":[
            {
                "mainimage":"/storage/images/img-big-mountain3.jpg",
                "maintitle": "Горный мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "350",
                        "dataid": "13"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "560",
                            "dataid": "14"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "950",
                            "dataid": "15"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "kashtanoviy":[
            {
                "mainimage":"/storage/images/img-big-kashtan2.jpg",
                "maintitle": "Каштановый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "500",
                        "dataid": "16"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "800",
                            "dataid": "17"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "1400",
                            "dataid": "18"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

       "pluscheviy":[
            {
                "mainimage":"/storage/images/img-big-plusch2.jpg",
                "maintitle": " Плющевый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "410",
                        "dataid": "19"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "650",
                            "dataid": "20"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "1100",
                            "dataid": "21"
                        }] //end SUBPRODUCT
            }],//end PRODUCT


        "rapsoviy":[
            {
                "mainimage":"/storage/images/raps.jpg",
                "maintitle": "Рапсовый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "250",
                        "dataid": "19"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "400",
                            "dataid": "20"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "700",
                            "dataid": "21"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "koriandroviy":[
            {
                "mainimage":"/storage/images/img-big-koriandr.jpg",
                "maintitle": "Кориандровый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "220",
                        "dataid": "22"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "350",
                            "dataid": "23"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "600",
                            "dataid": "24"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "lipoviy":[
            {
                "mainimage":"/storage/images/img-big-lipa.jpg",
                "maintitle": "Липовый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "280",
                        "dataid": "25"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "440",
                            "dataid": "26"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "770",
                            "dataid": "27"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "mayskiy":[
            {
                "mainimage":"/storage/images/img-big-flover2.jpg",
                "maintitle": "Майский мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "250",
                        "dataid": "28"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "400",
                            "dataid": "29"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "700",
                            "dataid": "30"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "podsolnichnikoviy":[
            {
                "mainimage":"/storage/images/img-big-podsolnukh.jpg",
                "maintitle": "Подсолнечниковый мед",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "170",
                        "dataid": "31"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "280",
                            "dataid": "32"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "490",
                            "dataid": "33"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "Spropolisom":[
            {
                "mainimage":"/storage/images/img-big-spropolisom.jpg",
                "maintitle": "Мед с прополисом",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "350",
                        "dataid": "34"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "560",
                            "dataid": "35"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "980",
                            "dataid": "36"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "Spergoij":[
            {
                "mainimage":"/storage/images/img-big-spergoij.jpg",
                "maintitle": "Мед с пергой",
                "subproducts":
                    [{
                        "weight": "0.5кг",
                        "dataprice": "500",
                        "dataid": "37"
                    },
                        {
                            "weight": "0.8кг",
                            "dataprice": "800",
                            "dataid": "38"
                        },
                        {
                            "weight": "1.4кг",
                            "dataprice": "1400",
                            "dataid": "39"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "Sorehami":[
            {
                "mainimage":"/storage/images/img-big-sorehami.jpg",
                "maintitle": "Мед с орехами 250 гр",
                "subproducts":
                    [{
                        "weight": "с фундуком",
                        "dataprice": "250",
                        "dataid": "40"
                    },
                        {
                            "weight": "с грецким",
                            "dataprice": "250",
                            "dataid": "41"
                        },
                        {
                            "weight": "ассорти",
                            "dataprice": "250",
                            "dataid": "42"
                    },
                        {
                            "weight": "ассорти VIP ",
                            "dataprice": "300",
                            "dataid": "43"
                    },
                        {
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "medSotakh":[
            {
                "mainimage":"/storage/images/img-big-med-v-sotakh.jpg",
                "maintitle": "Мед в сотах (разнотравие)",
                "subproducts":
                    [{
                        "weight": "1кг",
                        "dataprice": "400",
                        "dataid": "44"
                    },
                        {
                            "weight": "Рамка 4.2кг",
                            "dataprice": "1500",
                            "dataid": "44"
                        },
                        {
                            "weight": "Рамка 4.5кг",
                            "dataprice": "1700",
                            "dataid": "45"
                        }] //end SUBPRODUCT
            }],//end PRODUCT
        "medSotakhAkatsia":[
            {
                "mainimage":"/storage/images/Img-big-honey1.jpg",
                "maintitle": "Мед в сотах (акация)",
                "subproducts":
                    [{
                        "weight": "1кг",
                        "dataprice": "500",
                        "dataid": "46"
                    },
                        {
                            "weight": "Рамка 4.2кг",
                            "dataprice": "2000",
                            "dataid": "47"
                        },
                        {
                            "weight": "Рамка 4.5кг",
                            "dataprice": "2200",
                            "dataid": "48"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "pergaSotakh":[
            {
                "mainimage":"/storage/images/img-big-bee3.jpg",
                "maintitle": "Перга в сотах ",
                "subproducts":
                    [{
                        "weight": "100гр.",
                        "dataprice": "250",
                        "dataid": "49"
                    }
                    ] //end SUBPRODUCT
            }],//end PRODUCT

        "pergaGranul":[
            {
                "mainimage":"/storage/images/img-big-perga-v-granulakh.jpg",
                "maintitle": "Перга в гранулах ",
                "subproducts":
                    [{
                        "weight": "100гр.",
                        "dataprice": "350",
                        "dataid": "50"
                    }
                    ] //end SUBPRODUCT
            }],//end PRODUCT

        "piltsa":[
            {
                "mainimage":"/storage/images/img-big-piltsa1.jpg",
                "maintitle": "Пыльца",
                "subproducts":
                    [{
                        "weight": "100гр.",
                        "dataprice": "150",
                        "dataid": "51"
                    }
                    ] //end SUBPRODUCT
            }],//end PRODUCT

        "podmor":[
            {
                "mainimage":"/storage/images/img-big-podmor.jpg",
                "maintitle": "Подмор пчел",
                "subproducts":
                    [{
                        "weight": "1 стакан/200мл",
                        "dataprice": "200",
                        "dataid": "52"
                    }] //end SUBPRODUCT
            }],//end PRODUCT

        "propolis":[
            {
                "mainimage":"/storage/images/img-big-propolis.jpg",
                "maintitle": "Прополис",
                "subproducts":
                    [{
                        "weight": "10гр.",
                        "dataprice": "60",
                        "dataid": "53"
                    }] //end SUBPRODUCT
            }],//end PRODUCT

        "voskPchel":[
            {
                "mainimage":"/storage/images/img-big-vosk.jpg",
                "maintitle": "Воск пчелиный",
                "subproducts":
                    [{
                        "weight": "100гр.",
                        "dataprice": "50",
                        "dataid": "54"
                    }] //end SUBPRODUCT
            }],//end PRODUCT

        "trutMoloko":[
            {
                "mainimage":"/storage/images/img-big-trut1.jpg",
                "maintitle": "Трутневое молочко",
                "subproducts":
                    [{
                        "weight": "1 фл/100 мл",
                        "dataprice": "200",
                        "dataid": "55"
                    },
                        {
                            "weight": "10 фл",
                            "dataprice": "1500",
                            "dataid": "56"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "voskMol":[
            {
                "mainimage":"/storage/images/voskovaya-mole3.jpg",
                "maintitle": "Восковая моль",
                "subproducts":
                    [{
                        "weight": "1фл./50мл.",
                        "dataprice": "350",
                        "dataid": "57"
                    },
                        {
                            "weight": "5 фл.",
                            "dataprice": "1625",
                            "dataid": "58"
                        },
                        {
                            "weight": "10 фл.",
                            "dataprice": "3000",
                            "dataid": "59"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "pugr":[
            {
                "mainimage":"/storage/images/img-big-pugr.jpg",
                "maintitle": "Пугр (черешки лопуха марин.)",
                "subproducts":
                    [{
                        "weight": "670гр",
                        "dataprice": "300",
                        "dataid": "60"
                    }] //end SUBPRODUCT
            }],//end PRODUCT

        "enotaJir":[
            {
                "mainimage":"/storage/images/img-big-enota-jir.jpg",
                "maintitle": "Жир енота",
                "subproducts":
                    [{
                        "weight": "100гр",
                        "dataprice": "220",
                        "dataid": "61"
                    },
                        {
                            "weight": "500гр",
                            "dataprice": "1000",
                            "dataid": "62"
                        }] //end SUBPRODUCT
            }],//end PRODUCT img-big-koziy
        "koziyJir":[
            {
                "mainimage":"/storage/images/img-big-koziy.jpg",
                "maintitle": "Козий жир",
                "subproducts":
                    [{
                        "weight": "100гр",
                        "dataprice": "200",
                        "dataid": "63"
                    },
                        {
                            "weight": "500гр",
                            "dataprice": "900",
                            "dataid": "64"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "medNabitok":[
            {
                "mainimage":"/storage/images/img-big-med-napitok.jpg",
                "maintitle": "Медовый напиток 'Монастырский'",
                "subproducts":
                    [{
                        "weight": "1бут./1л.",
                        "dataprice": "250",
                        "dataid": "65"
                    },
                        {
                            "weight": "10 бут.",
                            "dataprice": "2000",
                            "dataid": "66"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "uksusMedoviySvetliy":[
            {
                "mainimage":"/storage/images/img-big-uksus-medoviy1.jpg",
                "maintitle": "Уксус медово-перговый светлый ",
                "subproducts":
                    [{
                        "weight": "1фл./250мл.",
                        "dataprice": "80",
                        "dataid": "67"
                    },
                        {
                            "weight": "10 фл.",
                            "dataprice": "600",
                            "dataid": "68"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "uksusMedoviyTemniy":[
            {
                "mainimage":"/storage/images/img-big-uksus-medoviy2.jpg",
                "maintitle": "Уксус медово-перговый 1 фл 250 мл",
                "subproducts":
                    [{
                        "weight": "Темный ",
                        "dataprice": "90",
                        "dataid": "69"
                    },

                    {
                        "weight": " С имбирем ",
                        "dataprice": "90",
                        "dataid": "69"
                    },

                    {
                        "weight": " С яблоками ",
                        "dataprice": "90",
                        "dataid": "69"
                    },
                        {
                            "weight": "10 фл.",
                            "dataprice": "700",
                            "dataid": "70"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

           "uksusMedoviyNabor":[
            {
                "mainimage":"/storage/images/img-big-uksus-medoviy3.jpg",
                "maintitle": "Уксус медово-перговый в подарочной подставке: на выбор ",
                "subproducts":
                    [{
                        "weight": "набор./1 шт.",
                        "dataprice": "450",
                        "dataid": "71"
                    },
                        {
                            "weight": "5 наборов.",
                            "dataprice": "2000",
                            "dataid": "72"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

        "kuzhipsi":[
            {
                "mainimage":"/storage/images/img-big-kuzhipsi1.jpg",
                "maintitle": "Адыгейский узвар Кужипсы",
                "subproducts":
                    [{
                        "weight": "1 банка/180 гр",
                        "dataprice": "150",
                        "dataid": "73"
                    },
                        {
                            "weight": "10 банок",
                            "dataprice": "1000",
                            "dataid": "74"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

          "kuzhipsiSmedom":[
            {
                "mainimage":"/storage/images/img-big-kuzhipsi2.jpg",
                "maintitle": "Адыгейский узвар Кужипсы с медом",
                "subproducts":
                    [{
                        "weight": "1 банка/180 гр",
                        "dataprice": "170",
                        "dataid": "75"
                    },
                        {
                            "weight": "10 банок",
                            "dataprice": "1100",
                            "dataid": "76"
                        }] //end SUBPRODUCT
            }],//end PRODUCT



          "kuzhipsiSchernikoy":[
            {
                "mainimage":"/storage/images/img-big-kuzhipsi3.jpg",
                "maintitle": "Адыгейский узвар Кужипсы с черникой",
                "subproducts":
                    [{
                        "weight": "1 банка/180 гр",
                        "dataprice": "190",
                        "dataid": "77"
                    },
                        {
                            "weight": "10 банок",
                            "dataprice": "1300",
                            "dataid": "78"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

            "kuzhipsiSpiltsoy":[
            {
                "mainimage":"/storage/images/img-big-kuzhipsi4.jpg",
                "maintitle": "Адыгейский узвар Кужипсы с пыльцой",
                "subproducts":
                    [{
                        "weight": "1 банка/180 гр",
                        "dataprice": "190",
                        "dataid": "77"
                    },
                        {
                            "weight": "10 банок",
                            "dataprice": "1300",
                            "dataid": "79"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

             "kuzhipsiSimbirem":[
            {
                "mainimage":"/storage/images/img-big-kuzhipsi5.jpg",
                "maintitle": "Адыгейский узвар Кужипсы с имбирем",
                "subproducts":
                    [{
                        "weight": "1 банка/180 гр",
                        "dataprice": "180",
                        "dataid": "77"
                    },
                        {
                            "weight": "10 банок",
                            "dataprice": "1200",
                            "dataid": "80"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

             "kuzhipsiSorehami":[
            {
                "mainimage":"/storage/images/img-big-kuzhipsi3.jpg",
                "maintitle": "Адыгейский узвар Кужипсы c орехами",
                "subproducts":
                    [{
                        "weight": "1 банка/190 гр",
                        "dataprice": "180",
                        "dataid": "81"
                    },
                        {
                            "weight": "10 банок",
                            "dataprice": "1300",
                            "dataid": "82"
                        }] //end SUBPRODUCT
            }],//end PRODUCT

    };//end CATALOG






    // ФОРМИРУЕМ РАЗМЕТКУ BOOTSTRAP 4 CARD с учетом данных из JSON catalog
    var output1='<div class="col-md-3 col-sm-6">'+
        '<div class="card">'+
        '<img class="card-img-top" src="';//+ image src="/storage/images/akatsiya2.jpg" + alt="data-name акациевый мед"
    var output2='<div class="card-body">'+
        '<h5 class="card-title">';//+data-name Акациевый мед </h4>
    var output3='<div class="option-card">'+
        '<span>';//weight + data price
    var output4='</span>'+
        '<button class="btn btn-block btn-danger my-cart-btn btn-sm" '+
        'data-id="';// data-id
    var output5='" data-name="';//data-name+weight
    var output6='" data-summary="';//weight
    var output7='" data-price="';//data-price
    var output8='" data-quantity="1" data-image="';//image
    var output9='">';
    var output10='<i class="fa fa-cart-plus fa-sm"></i></button></div>';
    var output='';


    // делаем перебор объекта-массива, чтобы добраться до данных =(
    var weight, price, id, maintitle, mainimage ='';
    var printCatalog = function(myObject){
        $.each(myObject, function(index,value) {
            $.each(value, function(key, value){
                //основная информация карточки НАЗВАНИЕ И КАРТИНКА
                if(key == "mainimage") {
                    output = output1 + value;
                    mainimage = value;
                }
                if(key == "maintitle") {
                    maintitle = value;
                    output += '" alt="' + value + '">' + output2 + value + '</h5>';
                }
                // кнопки начало
                if(key == "subproducts"){
                    $.each(value, function(key, value){
                            $.each(value, function(key, value){
                                //указания веса
                                if(key == "weight"){
                                    weight = value;
                                    output += output3;
                                } //указание цены
                                if (key == "dataprice"){
                                    price = value;
                                    // output += ' | '+price+'р.';
                                }
                                if(key == "dataid"){
                                    id = value;
                                    output += output4 + id + output5 + maintitle +' '+ weight + output6 + weight + output7 + price + output8 + mainimage + output9 + weight + ' | ' + price+'р.' + output10;
                                }
                            });
                        }
                    );
                }
                //div закрывает col-md-3, card, card-body
            });
            output += '</div></div></div>';

            // console.log(output);
            //Вносим карточки в Каталог
            $("#myCatalog1").append(output);

        });
    };
    // ПЕЧАТЬ КАТАЛОГА ТОВАРОВ.
    printCatalog(catalog.akatsiya);
    printCatalog(catalog.boyarishnik);
    printCatalog(catalog.grechishniy);
    printCatalog(catalog.donnikoviy);
    printCatalog(catalog.gorniy);
    printCatalog(catalog.kashtanoviy);
    printCatalog(catalog.pluscheviy);
    printCatalog(catalog.rapsoviy);
    printCatalog(catalog.koriandroviy);
    printCatalog(catalog.lipoviy);
    printCatalog(catalog.mayskiy);
    printCatalog(catalog.podsolnichnikoviy);
    printCatalog(catalog.Spropolisom);
    printCatalog(catalog.Spergoij);
    printCatalog(catalog.Sorehami);
    printCatalog(catalog.medSotakh);
    printCatalog(catalog.medSotakhAkatsia);
    printCatalog(catalog.pergaSotakh);
    printCatalog(catalog.pergaGranul);
    printCatalog(catalog.piltsa);
    printCatalog(catalog.propolis);
    printCatalog(catalog.medNabitok);
    printCatalog(catalog.uksusMedoviySvetliy);
    printCatalog(catalog.uksusMedoviyTemniy);
    printCatalog(catalog.uksusMedoviyNabor);
    printCatalog(catalog.voskMol);
    printCatalog(catalog.enotaJir);
    printCatalog(catalog.koziyJir);
    printCatalog(catalog.pugr);
    printCatalog(catalog.podmor);
    printCatalog(catalog.voskPchel);
    printCatalog(catalog.trutMoloko);
    printCatalog(catalog.kuzhipsi);
    printCatalog(catalog.kuzhipsiSmedom);
    printCatalog(catalog.kuzhipsiSchernikoy);
    printCatalog(catalog.kuzhipsiSpiltsoy);
    printCatalog(catalog.kuzhipsiSimbirem);
    printCatalog(catalog.kuzhipsiSorehami);
</script>
<!-- nice select js -->
<script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
<!-- owl caurousel js -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- all jQuary activation code here and always it will be bottom of all script tag -->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
