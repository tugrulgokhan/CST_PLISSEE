<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://stoffmuster.plissee-zeit.de/load_resources/css/0.css">
    <link rel="stylesheet" type="text/css" href="http://www.plissee-zeit.de/ebay2017/ebayshopv2.css">
    <style type="text/css">
        .price { display: block; text-align: center; padding-top: 90px; font-weight: normal; }
        .price h5 { font-size: 1.4em; margin: 0 0 2px 0; font-weight: normal; }
        .price .error { color: #b9270b; }
        .basket { overflow: hidden; }
        .basket .table-wrapper { max-height: 200px; overflow: auto; float: right; width: 93%; }
        .basket table { float: right; width: 93%; }
        .basket table tbody { font-size: 12px; }
        .basket table tbody td { vertical-align: middle; }
        .basket .total { font-size: 13px; text-align: right; float: right; padding-top: 5px; }
        .basket table button.remove { color: #b9270b; padding: 0; border: none; background-color: transparent; vertical-align: middle; cursor: pointer; }
        .basket .total i { font-style: normal; font-size: 1.3em; color: #b9270b; }
        #orderContent { border: 1px solid #d6d6d6; }
        #pzmenu li:last-child { width: 141px;}
        #orderContent .trzakl { padding-left: 85px; position: relative; }
        #customer_data input { height: auto; }
        #fabrics_pool .grey_box { overflow: visible; margin-top: 40px; }
        .zoom-box { position: absolute; width: 590px; height: 395px; background-color: #ffffff; -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75); -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75); box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75); overflow: visible; z-index: 1000; display: none; left: 0; top: 0; }
        .zoom-box .zoom-box-close { position: absolute; right: 0; top: 0; display: block; background: transparent url("http://stoffmuster.plissee-zeit.de/js/modules/fancybox/fancybox.png") no-repeat -40px 0; width: 30px; height: 30px; margin-right: -15px; margin-top: -15px; }
        .zoom-box .zoom-box-prev { position: absolute; left: 0; top: 182px; background: transparent url("http://stoffmuster.plissee-zeit.de/js/modules/fancybox/fancybox.png") no-repeat -40px -30px; width: 30px; height: 30px; margin-left: -15px; }
        .zoom-box .zoom-box-next { position: absolute; right: 0; top: 182px; background: transparent url("http://stoffmuster.plissee-zeit.de/js/modules/fancybox/fancybox.png") no-repeat -40px -60px; width: 30px; height: 30px; margin-right: -15px; }
        .zoom-box .zoom-box-caption { position: absolute; bottom: 0; left: 0; right: 0; padding-top: 5px; padding-bottom: 5px; background-color: rgba(0,0,0,0.5); color: #ffffff; text-align: center; font-size: 14px; }
        .hidden { display: none; }
        button, input[type=button] { cursor: pointer; }
        #messageBox { width: 952px; display: none; }
        #messageHide { text-align: right; cursor: pointer; padding-right: 10px; }
        #customer_box .mega_box_content { position: relative; }
        #loader { width: 220px; height: 19px; background: transparent url('http://www.plissee-zeit.de/ebay_desc/template2/img/loader.gif') no-repeat center center; position: absolute; display: none; right: 20px; bottom: 20px; z-index: 100; }
        .mbox_message_content { padding-bottom: 14px; }
        #contact { padding-left: 20px; float: right; position: relative; overflow: visible; }
        #contact img#info { width: 23px !important; height: 23px !important; display: block; position: absolute; cursor: help; float: none; margin: 0; left: -14px; top: 20px; }
        .info-box { background-color: #ffffff; padding: 5px; position: absolute; -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); text-align: left; line-height: normal; padding: 10px; display: none;  }
        img.duetteinfo {    width: 60px!important;padding!important; 0;margin: 0!important;     float: none!important;margin-left: 12px!important;margin-right: 12px!important;}
        .duettelink {   line-height: 36px;display: inline-block;vertical-align: bottom;}
    </style>
</head>
<body>
<div id="strona">
    <div id="aukcja">

        <div id="top">

            <div class="logo">www_plissee-zeit_de</div>
            <div class="hotline"></div>
            <img class="logoc" src="http://www.plissee-zeit.de/ebay2015/LOGO-Cosiflor-Systemtechnik.jpg">
        </div>

        <div id="utop">
            <div class="goratekst">
                <h2>1. SCHRITT - PREISRECHNER</h2>
                HIER ERSTELLEN SIE EINE PLISSEE-WUNSCHLISTE und senden diese an uns ab. Den Kauf tätigen Sie im Schritt 2.
            </div>


        </div>
        <div class="clear"></div>


        <div id="kalk">

            <div class="kalka">
                <img class="krok" src="http://www.plissee-zeit.de/ebay2015/01.png">
                <div class="clear"></div>

                <div class="form">
                    <div class="form-field">
                        <label for="mWidth">Breite in mm</label>
                        <select id="mWidth">
                            <option value="400">400</option>
                            <option value="500">500</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="mHeight">Höhe in mm</label>
                        <select id="mHeight">
                            <option value="1000">1000</option>
                            <option value="1200">1200</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="mColor">Schienenfarbe</label>
                        <select id="mColor">
                            <option value="Weiß">Weiß</option>
                            <option value="Silber">Silber</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-field">
                        <label for="mMaterial">Stoff</label>
                        <select id="mMaterial">
                            <optgroup label="Allegro - PREISGRUPPE 0">
                                <option value="1">ALLEGRO 7220 Beige</option>
                                <option value="2">ALLEGRO 7223 Gelb</option>
                            </optgroup>
                            <optgroup label="Unicolor - PREISGRUPPE 0">
                                <option value="23">UNICOLOR 079 Himbeerrot</option>
                            </optgroup>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-field">
                        <label for="mMontage">Montageart</label>
                        <select id="mMontage">
                            <option value="A">A - in der Glasleiste</option>
                            <option value="B">B - Glasleistenwinkeln</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <img id="bCalculate" class="button1" src="http://www.plissee-zeit.de/ebay2015/bt1.png">
            </div>

            <div class="kalkb">
                <img class="krok" src="http://www.plissee-zeit.de/ebay2015/02.png">
                <div class="clear"></div>
                <div class="price">
                    <div id="priceWrapper" style="display: block;">
                        <h5><span id="mPrice">44</span>,- Euro</h5>
                        <span>inkl. MwSt.</span>
                    </div>
                    <span id="mError" class="error"></span>
                </div>
                <img id="bAdd" class="button2" src="http://www.plissee-zeit.de/ebay2015/bt2.png">
            </div>

            <div class="kalkc">
                <img class="krok" src="http://www.plissee-zeit.de/ebay2015/03.png">
                <div class="clear"></div>
                <div class="basket">
                    <div class="table-wrapper">
                        <table>
                            <tbody id="mList"></tbody>
                        </table>
                    </div>
                    <div class="total">
                        <i>Gesamtbetrag: <span id="mTotal">0</span> Euro</i> inkl. MwSt.
                    </div>
                </div>
                <div class="clear"></div>
                <div id="contact">
                    <img id="info" src="http://www.plissee-zeit.de/ebay_desc/template2/img/info.png" width="23" height="23" alt="info">
                    <div id="infoBox" class="info-box" style="z-index: 100">
                        <p>
                            1. Erstellen Sie Ihre Wunschliste, tragen Sie Ihren eBay-Namen ein und klicken Sie auf „Senden“. So bekommen wir Ihren Wunschzettel. Jetzt müssen Sie den Kauf über eBay tätigen.
                        </p>
                        <p>
                            2. Beim Gesamtbetrag bis 140 Euro wählen Sie Ihren Gesamtbetrag aus der Liste und schließen den eBay-Kauf ab.
                        </p>
                        <p>
                            3. Ist der Gesamtbetrag höher als 140 Euro, so tätigen Sie so viele Käufe bis Ihr Gesamtbetrag erreicht wurde (am besten zu Preisen von Ihren einzelnen Plissees).
                        </p>
                        <p>
                            <strong>ACHTUNG!</strong> Durch das Absenden des Wunschzettels ist noch kein Kauf zustande gekommen – wir haben keinen Kontakt zu Ihnen. Sie müssen unbedingt einen Kauf über eBay-Auktion tätigen.
                        </p>
                    </div>
                    <p>
                        <strong>WICHTIG!</strong> Tragen Sie Ihren eBay-Namen ein und drücken auf „Senden“. <br>Die detaillierte Kauf-Beschreibung finden Sie unter der „i“-Ikone.
                    </p>
                </div>
                <div class="clear"></div>
                <input type="text" id="nickname" placeholder="Ihr eBay-Name" value="">
                <img id="bSend" class="button4" src="http://www.plissee-zeit.de/ebay2015/senden.png">
                <img id="loader2" src="http://www.plissee-zeit.de/ebay_desc/template2/img/loader2.gif" width="31" height="31">
                <div id="response2Box"><p></p><button type="button">OK</button></div>
            </div>

        </div>
        <div class="clear"></div>

        <div id="utop" class="schritt">
            <div class="goratekst">
                <h2>2. SCHRITT - BESTELLUNG</h2>
                Wählen Sie aus der Liste Ihren Gesamtbetrag und tätigen Sie den Kauf.
            </div>


        </div>
        <div class="clear"></div>

        <div class="fotolinkn">
            <a href="http://www.ebay.de/itm/PLISSEE-Cosiflor-Mas-Masanfertigung-Faltstore-Rollos-ohne-Bohren-/112071356112?var=&amp;hash=item5fb210796e" target="_blank"><img src="http://www.plissee-zeit.de/ebay2017/plissee-gesamtbetrag.jpg"></a>
        </div>

        <section id="content1" class="tab-content">
            <div class="trzakl">
                <div id="sklep">
                    <div class="cl"> </div>
                    <span class="tytul">Allegro</span> - Preisgruppe 0 | lichtdurchlässig | blickdicht
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#1-allegro-7220-beige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/1_plissee_beige.jpg" alt="Plissee Beige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#2-allegro-7223-gelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/2_plissee_gelb.jpg" alt="Plissee Gelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#3-allegro-7235-cream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/3_plissee_cream.jpg" alt="Plissee Cream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#4-allegro-7236-hellbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/4_plissee_hellbeige.jpg" alt="Plissee Hellbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#6-allegro-7238-lemon" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/6_plissee_lemon.jpg" alt="Plissee Lemon" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#7-allegro-7241-stahlblau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/7_plissee_stahlblau.jpg" alt="Plissee Stahlblau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#8-allegro-7242-braun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/8_plissee_braun.jpg" alt="Plissee Braun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#9-allegro-7243-orange" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/9_plissee_orange.jpg" alt="Plissee Orange" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#10-allegro-7446-blau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/10_plissee_blau.jpg" alt="Plissee Blau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#11-allegro-7447-rosaviolett" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/11_plissee_rosaviolet.jpg" alt="Plissee Rosaviolet" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#12-allegro-7234-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/12_plissee_weiss.jpg" alt="Plissee Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#14-allegro-7448-grn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/allegro/14_plissee_gruen.jpg" alt="Plissee Grün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Unicolor</span> - Preisgruppe 0 | lichtdurchlässig | blickdicht
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#15-unicolor-1200-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/15_faltstore_weiss.jpg" alt="Faltstore Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#16-unicolor-1201-hellgelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/16_faltstore_hellgelb.jpg" alt="Faltstore Hellgelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#17-unicolor-1202-lachscream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/17_faltstore_lachscream.jpg" alt="Faltstore Lachscream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#18-unicolor-1203-beige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/18_faltstore_beige.jpg" alt="Faltstore Beige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#19-unicolor-1206-cream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/19_faltstore_cream.jpg" alt="Faltstore Cream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#20-unicolor-1208-helllachscrem" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/20_faltstore_helllachscream.jpg" alt="Faltstore Helllachscream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#21-unicolor-1212-gelborange" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/21_faltstore_gelborange.jpg" alt="Faltstore Gelborange" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#22-unicolor-1213-grau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/22_faltstore_grau.jpg" alt="Faltstore Grau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#23-unicolor-079-himbeerrot" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/23_faltstore_himbeerrot.jpg" alt="Faltstore Himbeerrot" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#24-unicolor-084-hellbraun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/24_faltstore_hellbraun.jpg" alt="Faltstore Hellbraun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#25-unicolor-085-anthrazit" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/25_faltstore_anthrazit.jpg" alt="Faltstore Anthrazit" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#26-unicolor-087-gelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/26_faltstore_gelb.jpg" alt="Faltstore Gelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#27-unicolor-089-dunkelblau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/27_faltstore_dunkelblau.jpg" alt="Faltstore Dunkelblau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#28-unicolor-1214-rotbraun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/28_faltstore_rotbraun.jpg" alt="Faltstore Rotbraun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#128-unicolor-090-apfelgrn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unicolor/090_faltstore_apfelgruen.jpg" alt="Faltstore Apfelgrün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Unireflex</span> - Preisgruppe 1 I lichtdurchlässig I blickdicht I Außenseite mit Reflexbeschichtung
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#29-unireflex-2150-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/29_faltrollo_weiss.jpg" alt="Faltrollo Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#30-unireflex-2151-hellgrn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/30_faltrollo_hellgruen.jpg" alt="Faltrollo Hellgrün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#31-unireflex-2152-cream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/31_faltrollo_cream.jpg" alt="Faltrollo Cream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#32-unireflex-2153-gelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/32_faltrollo_gelb.jpg" alt="Faltrollo Gelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#33-unireflex-2156-hellbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/33_faltrollo_hellbeige.jpg" alt="Faltrollo Hellbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#34-unireflex-2157-beige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/34_faltrollo_beige.jpg" alt="Faltrollo Beige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#36-unireflex-2160-grau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/36_faltrollo_grau.jpg" alt="Faltrollo Grau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#129-unireflex-264-gelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/264_faltrollo_sonnengelb.jpg" alt="Faltrollo Sonnengelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#130-unireflex-271-braun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/271_faltrollo_braun.jpg" alt="Faltrollo Braun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#131-unireflex-165-grn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/165_faltrollo_gruen.jpg" alt="Faltrollo Grün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#132-unireflex-266-rosa" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/266_faltrollo_rosa.jpg" alt="Faltrollo Rosa" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#133-unireflex-274-blau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/unireflex/274_faltrollo_blau.jpg" alt="Faltrollo Blau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Cara Perl</span> - Preisgruppe 1 | lichtdurchlässig | blickdicht Außenseite mit Reflexbeschichtung
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#37-cara-perl-051-elfenbein" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/37_plissee_perlex_elfenbein.jpg" alt="Plissee Perlex Elfenbein" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#38-cara-perl-052-latte" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/38_plissee_perlex_latte.jpg" alt="Plissee Perlex Latte" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#39-cara-perl-053-hellbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/39_plissee_perlex_hellbeige.jpg" alt="Plissee Perlex Hellbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#40-cara-perl-054-braun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/40_plissee_perlex_braun.jpg" alt="Plissee Perlex Braun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#41-cara-perl-055-anthrazit" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/41_plissee_perlex_anthrazit.jpg" alt="Plissee Perlex Anthrazit" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#42-cara-perl-056-dunkelgrau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/42_plissee_perlex_dunkelgrau.jpg" alt="Plissee Perlex Dunkelgrau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#43-cara-perl-057-cream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/43_plissee_perlex_cream.jpg" alt="Plissee Perlex Cream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#44-cara-perl-058-gelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/44_plissee_perlex_gelb.jpg" alt="Plissee Perlex Gelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#45-cara-perl-062-violett" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/45_plissee_perlex_violet.jpg" alt="Plissee Perlex Violet" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#46-cara-perl-063-apfelgrn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/46_plissee_perlex_apfelgruen.jpg" alt="Plissee Perlex Apfelgrün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#47-cara-perl-066-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/47_plissee_perlex_weiss.jpg" alt="Plissee Perlex Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#48-cara-perl-068-hellgrau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/cara-perl/48_plissee_perlex_hellgrau.jpg" alt="Plissee Perlex Hellgrau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Crush Gardine</span> - Preisgruppe 1 I lichtdurchlässig I transparent
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#57-crush-gardine-0120-orangerot" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-gardine/57_plissee_gardine_orange.jpg" alt="Plissee Gardine Orange" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#58-crush-gardine-0121-terracotta" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-gardine/58_plissee_gardine_terracotta.jpg" alt="Plissee Gardine Terracotta" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#59-crush-gardine-0122-curry" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-gardine/59_plissee_gardine_curry.jpg" alt="Plissee Gardine Curry" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#60-crush-gardine-0123-grau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-gardine/60_plissee_gardine_grau.jpg" alt="Plissee Gardine Grau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#61-crush-gardine-0124-sand" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-gardine/61_plissee_gardine_sand.jpg" alt="Plissee Gardine Sand" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#62-crush-gardine-0125-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-gardine/62_plissee_gardine_weiss.jpg" alt="Plissee Gardine Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#63-crush-gardine-0126-grn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-gardine/63_plissee_gardine_gruen.jpg" alt="Plissee Gardine Grün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Crush</span> - Preisgruppe 1 I lichtdurchlässig I blickdicht
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#65-crush-2203-gelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/65_crush_blickdicht_gelb.jpg" alt="Crush Blickdicht Gelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#66-crush-2205-latte" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/66_crush_blickdicht_latte.jpg" alt="Crush Blickdicht Latte" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#67-crush-2210-grau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/67_crush_blickdicht_grau.jpg" alt="Crush Blickdicht Grau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#68-crush-3000-lachscream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/8003_crush_blickdicht_lachscream.jpg" alt="Crush Blickdicht Lachscream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#69-crush-5000-apricose" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/8005_crush_blickdicht_apricose.jpg" alt="Crush Blickdicht Apricose" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#134-crush-526-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/526_crush_blickdicht_weiss.jpg" alt="Crush Blickdicht Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#135-crush-527-elfenbein" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/527_crush_blickdicht_elfenbein.jpg" alt="Crush Blickdicht Elfenbein" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#136-crush-537-grn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/537_crush_blickdicht_gruen.jpg" alt="Crush Blickdicht Grün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#137-crush-533-rot" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/533_crush_blickdicht_rot.jpg" alt="Crush Blickdicht Rot" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#138-crush-535-beigebraun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/535_crush_blickdicht_beigebraun.jpg" alt="Crush Blickdicht Belgebraun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#139-crush-536-beige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/536_crush_blickdicht_beige.jpg" alt="Crush Blickdicht Beige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#140-crush-531-taubenblau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/531_crush_blickdicht_taubenblau.jpg" alt="Crush Blickdicht Taubenblau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#141-crush-539-blau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush/539_crush_blickdicht_blau.jpg" alt="Crush Blickdicht Blau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Crush Reflex</span> - Preisgruppe 2 I lichtdurchlässig I blickdicht I Außenseite mit Reflexbeschichtung
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#70-crush-reflex-2250-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/70_crush_perlex_weiss.jpg" alt="Crush Perlex Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#71-crush-reflex-2251-hellgrn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/71_crush_perlex_hellgruen.jpg" alt="Crush Perlex Hellgrün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#72-crush-reflex-2253-gelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/72_crush_perlex_gelb.jpg" alt="Crush Perlex Gelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#73-crush-reflex-2255-latte" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/73_crush_perlex_latte.jpg" alt="Crush Perlex Latte" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#74-crush-reflex-2262-cream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/74_crush_perlex_cream.jpg" alt="Crush Perlex Cream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#75-crush-reflex-4000-grn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/8014_crush_perlex_gruen.jpg" alt="Crush Perlex Grün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#76-crush-reflex-5000-terracotta" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/8015_crush_perlex_terracotta.jpg" alt="Crush Perlex Terracotta" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#77-crush-reflex-6000-blue" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/8016_crush_perlex_blue.jpg" alt="Crush Perlex Blue" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#78-crush-reflex-7006-lila" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/78_crush_perlex_lila.jpg" alt="Crush Perlex Lila" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#80-crush-reflex-7078-braun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/80_crush_perlex_braun.jpg" alt="Crush Perlex Braun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#158-crush-reflex-5175-elfenbein" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/5175_crush_perlex_elfenbein.jpg" alt="Crush Perlex Elfenbein" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#159-crush-reflex-7013-pearlcream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7013_crush_perlex_pearlcream.jpg" alt="Crush Perlex Pearlcream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#160-crush-reflex-6452-sand" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/6452_crush_perlex_sand.jpg" alt="Crush Perlex Sand" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#161-crush-reflex-5177-sandbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/5177_crush_perlex_sandbeige.jpg" alt="Crush Perlex Sandbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#162-crush-reflex-7008-braunbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7008_crush_perlex_braunbeige.jpg" alt="Crush Perlex Braunbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#163-crush-reflex-7007-hellbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7007_crush_perlex_hellbeige.jpg" alt="Crush Perlex Hellbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#164-crush-reflex-6433-sonnengelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/6433_crush_perlex_sonnengelb.jpg" alt="Crush Perlex Sonnengelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#165-crush-reflex-5618-orange" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/5618_crush_perlex_orange.jpg" alt="Crush Perlex Orange" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#166-crush-reflex-7040-rot" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7040_crush_perlex_rot.jpg" alt="Crush Perlex Rot" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#167-crush-reflex-5176-grau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/5176_crush_perlex_grau.jpg" alt="Crush Perlex Grau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#168-crush-reflex-7004-hellgrau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7004_crush_perlex_hellgrau.jpg" alt="Crush Perlex Hellgrau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#169-crush-reflex-7079-dunkelblau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7079_crush_perlex_dunkelblau.jpg" alt="Crush Perlex Dunkelblau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#170-crush-reflex-7550-rosaviolett" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7550_crush_perlex_rosaviolett.jpg" alt="Crush Perlex Rosaviolett" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#171-crush-reflex-7011-violett" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7011_crush_perlex_violett.jpg" alt="Crush Perlex Violett" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#172-crush-reflex-7100-dunkelgrau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/crush-reflex/7100_crush_perlex_dunkelgrau.jpg" alt="Crush Perlex Dunkelgrau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">White Edition</span> - Preisgruppe 2 I lichtdurchlässig
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#81-white-edition-brussels-1300" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/81_plissee_faltstore.jpg" alt="Plissee Faltstore" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#83-white-edition-nice-2602" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/83_plissee_faltstore.jpg" alt="Plissee Faltstore" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#84-white-edition-valencia-2751" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/84_plissee_faltstore.jpg" alt="Plissee Faltstore" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#85-white-edition-we-070" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/85_plissee_weiss.jpg" alt="Plissee Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#86-white-edition-we-2700" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/86_plissee_weiss.jpg" alt="Plissee Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#87-white-edition-we-2800" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/87_plissee_weiss.jpg" alt="Plissee Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#88-white-edition-kent-6351" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/88_plissee_weiss.jpg" alt="Plissee Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#89-white-edition-kent-6353" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/89_plissee_faltstore.jpg" alt="Plissee Faltstore" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#90-white-edition-sofia-8411" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/90_plissee_faltstore.jpg" alt="Plissee Faltstore" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#91-white-edition-athens-8533" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/91_plissee_faltstore.jpg" alt="Plissee Faltstore" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#93-white-edition-long-crush-551" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/93_plissee_weiss.jpg" alt="Plissee Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#94-white-edition-primavera-589" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/white-edition/94_plissee_faltstore.jpg" alt="Plissee Faltstore" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#185-arabesque-30571" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Arabesque_30571-300.jpg" alt="Arabesque 30571" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#186-linea-30226" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Linea_30226-300.jpg" alt="Linea 30226" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#187-linea-30227" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Linea_30227-300.jpg" alt="Linea 30227" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#188-techno-30531" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Techno_30531-300.jpg" alt="Techno 30531" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#189-techno-30532" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Techno_30532-300.jpg" alt="Techno 30532" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#190-battra-30551" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Battra_30551-300.jpg" alt="Battra 30551" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#191-kastale-30811" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Kastale_30811-300.jpg" alt="Kastale 30811" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#192-liana-30332" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Liana_30332-300.jpg" alt="Liana 30332" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#193-liana-30334" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Liana_30334-300.jpg" alt="Liana 30334" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#194-maleza-30403" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Maleza_30403-300.jpg" alt="Maleza 30403" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#195-retro-30071" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Retro_30071-300.jpg" alt="Retro 30071" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#196-twist-30431" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Twist_30431-300.jpg" alt="Twist 30431" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#197-triangle-40181" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Triangle_40181-300.jpg" alt="Triangle 40181" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#198-triangle-40182" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Triangle_40182-300.jpg" alt="Triangle 40182" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#199-triangle-40183" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Triangle_40183-300.jpg" alt="Triangle 40183" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#200-primavera-30311" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Primavera_30311-300.jpg" alt="Primavera 30311" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#201-primavera-30312" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Primavera_30312-300.jpg" alt="Primavera 30312" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#202-primavera-30314" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Primavera_30314-300.jpg" alt="Primavera 30314" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#203-primavera-30315" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/white-edition/Primavera_30315-300.jpg" alt="Primavera 30315" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Black Edition</span> - Preisgruppe 2 I lichtdurchlässig
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#95-black-edition-bergen-2400" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/black-edition/95_plissee_blickdicht.jpg" alt="Plissee Blickdicht" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#97-black-edition-amazone-2702" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/black-edition/97_plissee_blickdicht.jpg" alt="Plissee Blickdicht" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#98-black-edition-be-4856" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/black-edition/98_plissee_blickdicht.jpg" alt="Plissee Blickdicht" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#99-black-edition-kent-6350" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/black-edition/99_plissee_blickdicht.jpg" alt="Plissee Blickdicht" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#100-black-edition-jakarta-8450" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/black-edition/100_plissee_blickdicht.jpg" alt="Plissee Blickdicht" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#101-black-edition-jakarta-8452" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/black-edition/101_plissee_blickdicht.jpg" alt="Plissee Blickdicht" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Dim</span> - Preisgruppe 3 I lichtdurchlässig I blickdicht I Außenseite mit Reflexbeschichtung
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#107-dim-out-887-lemon" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/dim/107_plissee_lichtdurchlaessig_lemon.jpg" alt="Plissee Lichtdurchläßig Lemon" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#108-dim-out-890-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/dim/108_plissee_lichtdurchlaessig_weiss.jpg" alt="Plissee Lichtdurchläßig Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#109-dim-out-891-cream" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/dim/109_plissee_lichtdurchlaessig_cream.jpg" alt="Plissee Lichtdurchläßig Cream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#110-dim-out-892-nature" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/dim/110_plissee_lichtdurchlaessig_nature.jpg" alt="Plissee Lichtdurchläßig Nature" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#111-dim-out-893-hellbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/dim/111_plissee_lichtdurchlaessig_hellbeige.jpg" alt="Plissee Lichtdurchläßig Hellbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#112-dim-out-898-braunbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/dim/112_plissee_lichtdurchlaessig_beige.jpg" alt="Plissee Lichtdurchläßig Beige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Somnio</span> - Preisgruppe 3 I verdunkelnd I blickdicht I Außenseite mit Reflexbeschichtung
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#113-somnio-verdunklung-001-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/113_plissee-verdunklung_weiss.jpg" alt="Plissee Verdunklung Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#114-somnio-761-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/114_plissee-verdunklung_elfenbein.jpg" alt="Plissee Verdunklung Elfenbein" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#115-somnio-763-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/115_plissee-verdunklung_grau.jpg" alt="Plissee Verdunklung Grau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#116-somnio-770-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/116_plissee-verdunklung_gelb.jpg" alt="Plissee Verdunklung Gelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#117-somnio-771-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/117_plissee-verdunklung_orange.jpg" alt="Plissee Verdunklung Orange" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#118-somnio-772-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/118_plissee-verdunklung_rot.jpg" alt="Plissee Verdunklung Rot" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#119-somnio-774-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/119_plissee-verdunklung_blau.jpg" alt="Plissee Verdunklung Blau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#120-somnio-777-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/120_plissee-verdunklung_hellbeige.jpg" alt="Plissee Verdunklung Hellbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#121-somnio-913-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/121_plissee-verdunklung_braun.jpg" alt="Plissee Verdunklung Braun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#148-somnio-762-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/762_plissee-verdunklung_mint.jpg" alt="Plissee Verdunklung Mint" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#149-somnio-769-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/769_plissee-verdunklung_gruen.jpg" alt="Plissee Verdunklung Grün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#173-somnio-704-verdunklung" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/Somnio-BO704-Sandgelb.jpg" alt="Plissee Verdunklung Sandgelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#180-somnio-712-verdunklung" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/Somnio-BO712-Schwarz.jpg" alt="Plissee Verdunklung Schwarz" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#178-somnio-717-verdunklung" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/Somnio-BO717-Beigegrau.jpg" alt="Plissee Verdunklung Beigegrau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#176-somnio-718-verdunklung" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/Somnio-BO718-Rosa.jpg" alt="Plissee Verdunklung Rosa" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#177-somnio-720-verdunklung" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/Somnio-BO720-Himmelblau.jpg" alt="Plissee Verdunklung Himmelblau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#175-somnio-721-verdunklung" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/Somnio-BO721-Lachs.jpg" alt="Plissee Verdunklung Lachs" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#179-somnio-722-verdunklung" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/Somnio-BO722-Graphitgrau.jpg" alt="Plissee Verdunklung Graphitgrau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">BO</span> - Preisgruppe 3 I verdunkelnd I blickdicht
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#122-bo-3113-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/122_plissee-verdunklung_weiss.jpg" alt="Plissee Verdunklung Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#123-bo-3114-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/123_plissee-verdunklung_blau.jpg" alt="Plissee Verdunklung Blau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#124-bo-4886-verdunklung" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/somnio-BO/124_faltstore-verdunklung_weiss.jpg" alt="Faltstore Verdunklung Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Duett</span> -  Preisgruppe 4 I verdunkelnd I blickdicht
                    <div class="clear"> </div>

                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#150-duett-920-wei" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-920-weiss.jpg" alt="Wabenplissee Verdunkelung Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#151-duett-926-terracotta" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-926-terracotta.jpg" alt="Wabenplissee Verdunkelung Terracotta" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#152-duett-927-braun" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-927-braun.jpg" alt="Wabenplissee Verdunkelung Braun" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#153-duett-929-sonnengelb" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-929-sonnengelb.jpg" alt="Wabenplissee Verdunkelung Sonnengelb" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#154-duett-931-grn" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-931-gruen.jpg" alt="Wabenplissee Verdunkelung Grün" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#155-duett-934-blau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-934-blau.jpg" alt="Wabenplissee Verdunkelung Blau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#156-duett-938-hellbeige" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-938-hellbeige.jpg" alt="Wabenplissee Verdunkelung Hellbeige" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#157-duett-943-grau" target="_blank"><img src="//www.plissee-zeit.de/collections-stoffe/duett/wabenplissee-verdunkelung-943-grau.jpg" alt="Wabenplissee Verdunkelung Grau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Duett Light</span><a class="duettelink" href="//www.plissee-zeit.de/plissee-duette.php" title="Plissee Duette" target="_blank"><img class="duetteinfo" src="//www.plissee-zeit.de/ebay2015/info.png" alt="Plissee Duette"></a>  Preisgruppe 3 I lichtdurchlässig I blickdicht
                    <div class="clear"> </div>


                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#181-duett-light-901-weiss" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/duett-light/Duett-Light-901-Weiss-m.jpg" alt="Wabenplissee Lichtdurchläßig Weiß" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#182-duett-light-902-cream" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/duett-light/Duett-Light-902-Cream-m.jpg" alt="Wabenplissee Lichtdurchläßig Cream" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#183-duett-light-916-latte" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/duett-light/Duett-Light-916-Latte-m.jpg" alt="Wabenplissee Lichtdurchläßig Latte" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>
                    <a href="//www.plissee-zeit.de/cosiflor/stoffxl/#184-duett-light-903-hellgrau" target="_blank">
                        <img src="//www.plissee-zeit.de/collections-stoffe/duett-light/Duett-Light-903-Hellgrau-m.jpg" alt="Wabenplissee Lichtdurchläßig Hellgrau" title="Bild zum Vergrößern anklicken und detaillierte Infos anzeigen."></a>

                    <div class="cl"> </div>

                    <p class="achtung">ACHTUNG! Farben werden individuell sehr unterschiedlich wahrgenommen, die Darstellung variiert zudem je nach genutzter Computerhardware. Farbabweichungen zwischen Abbildung und realem Stoff sind deshalb unvermeidbar! Bestellen Sie deswegen unbedingt kostenlose Stoffmuster vor dem Kauf.</p>



                </div>

            </div>
        </section>


    </div>
</div>
<script type="text/javascript">


    var prices =
        {
            "1":
                {
                    "min_width":30,
                    "max_width":150,
                    "min_height":30,
                    "max_height":240,
                    "table":
                        {
                            "30":{
                                "30":20,
                                "40":26,
                                "50":28,
                                "60":28,
                                "70":30,
                                "80":30,
                                "90":32,
                                "100":32,
                                "110":34,
                                "120":34,
                                "130":36,
                                "140":36,
                                "150":38,
                                "160":40,
                                "170":40,
                                "180":42,
                                "190":42,
                                "200":44,
                                "210":46,
                                "220":48,
                                "230":50,
                                "240":52
                            },
                            "40":{
                                "30":30,
                                "40":32,
                                "50":34,
                                "60":34,
                                "70":36,
                                "80":38,
                                "90":38,
                                "100":40,
                                "110":40,
                                "120":42,
                                "130":42,
                                "140":44,
                                "150":44,
                                "160":46,
                                "170":46,
                                "180":48,
                                "190":48,
                                "200":50,
                                "210":52,
                                "220":54,
                                "230":54,
                                "240":56
                            },
                            "50":{
                                "30":36,
                                "40":38,
                                "50":38,
                                "60":40,
                                "70":40,
                                "80":40,
                                "90":42,
                                "100":44,
                                "110":44,
                                "120":44,
                                "130":46,
                                "140":48,
                                "150":48,
                                "160":50,
                                "170":50,
                                "180":52,
                                "190":52,
                                "200":54,
                                "210":56,
                                "220":58,
                                "230":60,
                                "240":62
                            },
                            "60":
                                {"30":38,
                                    "40":40,
                                    "50":40,
                                    "60":42,
                                    "70":42,
                                    "80":44,
                                    "90":44,
                                    "100":46,
                                    "110":46,
                                    "120":48,
                                    "130":48,
                                    "140":50,
                                    "150":50,
                                    "160":52,
                                    "170":52,
                                    "180":54,
                                    "190":56,
                                    "200":58,
                                    "210":58,
                                    "220":60,
                                    "230":62,
                                    "240":64},
                            "70":{
                                "30":42,
                                "40":42,
                                "50":44,
                                "60":44,
                                "70":46,
                                "80":46,
                                "90":48,
                                "100":48,
                                "110":50,
                                "120":50,
                                "130":52,
                                "140":52,
                                "150":54,
                                "160":54,
                                "170":56,
                                "180":58,
                                "190":58,
                                "200":60,
                                "210":62,
                                "220":64,
                                "230":66,
                                "240":68
                            },
                            "80":{
                                "30":44,
                                "40":44,
                                "50":46,
                                "60":48,
                                "70":48,
                                "80":50,
                                "90":50,
                                "100":52,
                                "110":54,
                                "120":56,
                                "130":56,
                                "140":56,
                                "150":58,
                                "160":58,
                                "170":60,
                                "180":62,
                                "190":62,
                                "200":64,
                                "210":68,
                                "220":70,
                                "230":72,
                                "240":74
                            },
                            "90":{
                                "30":48,
                                "40":48,
                                "50":50,
                                "60":52,
                                "70":52,
                                "80":56,
                                "90":58,
                                "100":58,
                                "110":60,
                                "120":62,
                                "130":62,
                                "140":64,
                                "150":66,
                                "160":66,
                                "170":68,
                                "180":68,
                                "190":70,
                                "200":70,
                                "210":74,
                                "220":76,
                                "230":78,
                                "240":80
                            },
                            "100":{
                                "30":52,
                                "40":52,
                                "50":52,
                                "60":54,
                                "70":56,
                                "80":58,
                                "90":60,
                                "100":62,
                                "110":62,
                                "120":64,
                                "130":66,
                                "140":68,
                                "150":70,
                                "160":70,
                                "170":72,
                                "180":74,
                                "190":76,
                                "200":78,
                                "210":80,
                                "220":82,
                                "230":84,
                                "240":86
                            },
                            "110":{
                                "30":54,
                                "40":58,
                                "50":58,
                                "60":60,
                                "70":60,
                                "80":64,
                                "90":64,
                                "100":66,
                                "110":66,
                                "120":68,
                                "130":70,
                                "140":72,
                                "150":72,
                                "160":74,
                                "170":76,
                                "180":78,
                                "190":80,
                                "200":82,
                                "210":84,
                                "220":86,
                                "230":88,
                                "240":90
                            },
                            "120":{
                                "30":58,
                                "40":58,
                                "50":60,
                                "60":62,
                                "70":64,
                                "80":64,
                                "90":66,
                                "100":68,
                                "110":70,
                                "120":72,
                                "130":74,
                                "140":76,
                                "150":76,
                                "160":80,
                                "170":82,
                                "180":84,
                                "190":86,
                                "200":88,
                                "210":90,
                                "220":92,
                                "230":94,
                                "240":96
                            },
                            "130":{
                                "30":62,
                                "40":62,
                                "50":64,
                                "60":66,
                                "70":68,
                                "80":70,
                                "90":72,
                                "100":74,
                                "110":76,
                                "120":78,
                                "130":80,
                                "140":82,
                                "150":84,
                                "160":88,
                                "170":92,
                                "180":94,
                                "190":98,
                                "200":102,
                                "210":106,
                                "220":112,
                                "230":114,
                                "240":116
                            },
                            "140":{
                                "30":66,
                                "40":68,
                                "50":70,
                                "60":70,
                                "70":72,
                                "80":74,
                                "90":76,
                                "100":78,
                                "110":82,
                                "120":84,
                                "130":86,
                                "140":88,
                                "150":92,
                                "160":98,
                                "170":102,
                                "180":106,
                                "190":112,
                                "200":114,
                                "210":116,
                                "220":120,
                                "230":124,
                                "240":128
                            },
                            "150":{
                                "30":72,
                                "40":72,
                                "50":72,
                                "60":72,
                                "70":74,
                                "80":76,
                                "90":78,
                                "100":80,
                                "110":82,
                                "120":86,
                                "130":88,
                                "140":92,
                                "150":96,
                                "160":102,
                                "170":104,
                                "180":108,
                                "190":114,
                                "200":120,
                                "210":126,
                                "220":130,
                                "230":132,
                                "240":136
                            }
                        }
                },
            "2":{"min_width":30,
                "max_width":150,
                "min_height":30,
                "max_height":240,
                "table":{"30":{"30":34,
                        "40":34,
                        "50":34,
                        "60":34,
                        "70":36,
                        "80":36,
                        "90":38,
                        "100":38,
                        "110":40,
                        "120":40,
                        "130":40,
                        "140":40,
                        "150":42,
                        "160":42,
                        "170":44,
                        "180":46,
                        "190":46,
                        "200":48,
                        "210":50,
                        "220":52,
                        "230":56,
                        "240":58},
                    "40":{"30":34,
                        "40":34,
                        "50":36,
                        "60":36,
                        "70":38,
                        "80":38,
                        "90":40,
                        "100":40,
                        "110":42,
                        "120":42,
                        "130":44,
                        "140":44,
                        "150":46,
                        "160":46,
                        "170":48,
                        "180":48,
                        "190":50,
                        "200":52,
                        "210":54,
                        "220":56,
                        "230":58,
                        "240":60},
                    "50":{"30":38,
                        "40":38,
                        "50":40,
                        "60":40,
                        "70":42,
                        "80":42,
                        "90":44,
                        "100":44,
                        "110":46,
                        "120":46,
                        "130":48,
                        "140":50,
                        "150":50,
                        "160":52,
                        "170":52,
                        "180":54,
                        "190":56,
                        "200":58,
                        "210":60,
                        "220":62,
                        "230":64,
                        "240":66},
                    "60":{"30":40,
                        "40":42,
                        "50":44,
                        "60":44,
                        "70":46,
                        "80":46,
                        "90":48,
                        "100":50,
                        "110":50,
                        "120":52,
                        "130":52,
                        "140":54,
                        "150":56,
                        "160":58,
                        "170":60,
                        "180":62,
                        "190":62,
                        "200":64,
                        "210":64,
                        "220":66,
                        "230":68,
                        "240":70},
                    "70":{"30":44,
                        "40":44,
                        "50":46,
                        "60":48,
                        "70":50,
                        "80":52,
                        "90":52,
                        "100":54,
                        "110":54,
                        "120":56,
                        "130":58,
                        "140":58,
                        "150":60,
                        "160":62,
                        "170":64,
                        "180":66,
                        "190":66,
                        "200":68,
                        "210":70,
                        "220":72,
                        "230":74,
                        "240":76},
                    "80":{"30":46,
                        "40":48,
                        "50":50,
                        "60":50,
                        "70":52,
                        "80":54,
                        "90":56,
                        "100":56,
                        "110":58,
                        "120":60,
                        "130":62,
                        "140":64,
                        "150":66,
                        "160":66,
                        "170":68,
                        "180":70,
                        "190":72,
                        "200":74,
                        "210":76,
                        "220":80,
                        "230":84,
                        "240":86},
                    "90":{"30":50,
                        "40":52,
                        "50":54,
                        "60":56,
                        "70":58,
                        "80":60,
                        "90":62,
                        "100":64,
                        "110":64,
                        "120":66,
                        "130":68,
                        "140":70,
                        "150":72,
                        "160":72,
                        "170":74,
                        "180":76,
                        "190":78,
                        "200":80,
                        "210":82,
                        "220":84,
                        "230":86,
                        "240":88},
                    "100":{"30":54,
                        "40":56,
                        "50":56,
                        "60":60,
                        "70":62,
                        "80":62,
                        "90":66,
                        "100":68,
                        "110":70,
                        "120":72,
                        "130":72,
                        "140":74,
                        "150":76,
                        "160":78,
                        "170":80,
                        "180":82,
                        "190":84,
                        "200":88,
                        "210":92,
                        "220":96,
                        "230":98,
                        "240":100},
                    "110":{"30":58,
                        "40":60,
                        "50":60,
                        "60":62,
                        "70":64,
                        "80":68,
                        "90":68,
                        "100":70,
                        "110":72,
                        "120":76,
                        "130":78,
                        "140":80,
                        "150":82,
                        "160":84,
                        "170":86,
                        "180":88,
                        "190":90,
                        "200":92,
                        "210":96,
                        "220":100,
                        "230":104,
                        "240":106},
                    "120":{"30":62,
                        "40":62,
                        "50":64,
                        "60":68,
                        "70":68,
                        "80":72,
                        "90":72,
                        "100":74,
                        "110":76,
                        "120":80,
                        "130":82,
                        "140":84,
                        "150":86,
                        "160":88,
                        "170":92,
                        "180":94,
                        "190":96,
                        "200":100,
                        "210":104,
                        "220":106,
                        "230":108,
                        "240":110},
                    "130":{"30":66,
                        "40":66,
                        "50":68,
                        "60":70,
                        "70":72,
                        "80":76,
                        "90":80,
                        "100":82,
                        "110":84,
                        "120":86,
                        "130":88,
                        "140":92,
                        "150":98,
                        "160":102,
                        "170":104,
                        "180":106,
                        "190":112,
                        "200":116,
                        "210":120,
                        "220":124,
                        "230":126,
                        "240":128},
                    "140":{"30":70,
                        "40":70,
                        "50":72,
                        "60":74,
                        "70":76,
                        "80":80,
                        "90":82,
                        "100":86,
                        "110":88,
                        "120":90,
                        "130":92,
                        "140":96,
                        "150":102,
                        "160":108,
                        "170":112,
                        "180":116,
                        "190":120,
                        "200":126,
                        "210":130,
                        "220":136,
                        "230":138,
                        "240":140},
                    "150":{"30":74,
                        "40":74,
                        "50":76,
                        "60":78,
                        "70":80,
                        "80":84,
                        "90":86,
                        "100":90,
                        "110":92,
                        "120":94,
                        "130":98,
                        "140":102,
                        "150":106,
                        "160":114,
                        "170":120,
                        "180":124,
                        "190":128,
                        "200":130,
                        "210":136,
                        "220":146,
                        "230":150,
                        "240":154}}},
        };
    var materials = {
        "indexes":{
            "id":{
                "1":[0],
                "2":[1],
                "177":[3]},
            "collection_id":{"1":[0,1],
                "2":[3]}},
        "records":[{"id":1,"collection_id":1,"name":"ALLEGRO 7220 Beige","active":"y"},
            {"id":2,"collection_id":1,"name":"ALLEGRO 7220 Beige","active":"y"},
            {"id":177,"collection_id":17,"name":"Duett Light 916 Latte","active":"y"}]};
    var montage = {"A":{"label":"in der Glasleiste","price":0,"id":2},"B":{"label":"Glasleistenwinkeln","price":8,"id":3},"C":{"label":"mit Klemmtr\u00e4gern","price":12,"id":4}};
    var materialCollections =
        {
            "indexes":
                {
                    "id":
                        {
                            "1":0,
                            "2":1,
                            "3":2,
                            "17":3
                        }
                },
            "records":
                [
                    {
                        "id":1,
                        "pricegroup_id":1,
                        "name":"Allegro",
                        "description":"Preisgruppe 0 | lichtdurchl\u00e4ssig | blickdicht",
                        "pricegroup_name":"PREISGRUPPE 0"
                    },
                    {
                        "id":2,
                        "pricegroup_id":1,
                        "name":"Unicolor",
                        "description":"Preisgruppe 0 | lichtdurchl\u00e4ssig | blickdicht",
                        "pricegroup_name":"PREISGRUPPE 0"
                    },
                    {
                        "id":3,
                        "pricegroup_id":2,
                        "name":"Unireflex",
                        "description":"Preisgruppe 1 I lichtdurchl\u00e4ssig I blickdicht I Au\u00dfenseite mit Reflexbeschichtung",
                        "pricegroup_name":"PREISGRUPPE 1"
                    },
                    {
                        "id":17,
                        "pricegroup_id":4,
                        "name":"Duett Light",
                        "description":"Preisgruppe 3",
                        "pricegroup_name":"PREISGRUPPE 3"
                    }
                ]
        };
    var bCalculate = document.getElementById('bCalculate');
    var bAdd = document.getElementById('bAdd');
    var mWidth = document.getElementById('mWidth');
    var mHeight = document.getElementById('mHeight');
    var mColor = document.getElementById('mColor');
    var mMaterial = document.getElementById('mMaterial');
    var mMontage = document.getElementById('mMontage');
    var mPrice = document.getElementById('mPrice');
    var mError = document.getElementById('mError');
    var priceWrapper = document.getElementById('priceWrapper');
    var mList = document.getElementById('mList');
    var mBody = document.getElementById('mBody');
    var mTotal = document.getElementById('mTotal');

    mMaterial.value = 1;
    mMontage.value = 'A';
    mColor.value = 'Weiß';

    var trim = function(str) {
        return str.trim();
    };

    var calculatePrice = function(e) {
        try {
            var width = parseInt(mWidth.value);
            if (isNaN(width)) {
                throw { message: 'Tragen Sie bitte die Maße in Millimetern ein' };
            }
            var height = parseInt(mHeight.value);
            if (isNaN(height)) {
                throw { message: 'Tragen Sie bitte die Maße in Millimetern ein' };
            }
            var ww = Math.ceil(width / 100) * 10;
            var hh = Math.ceil(height / 100) * 10;

            var material = materials['records'][materials['indexes']['id'][mMaterial.value]];
            if (!material) {
                throw { message: 'Tragen Sie bitte die Maße in Millimetern ein' };
            }
            var collection = materialCollections['records'][materialCollections['indexes']['id'][material['collection_id']]];
            var priceGroup = prices[collection['pricegroup_id']];
            if (!priceGroup) {
                throw { message: 'Tragen Sie bitte die Maße in Millimetern ein' };
            }
            if (ww < priceGroup['min_width'] || ww > priceGroup['max_width'] || hh < priceGroup['min_height'] || hh > priceGroup['max_height']) {
                throw { message: 'Tragen Sie bitte die Maße in Millimetern ein' };
            }
            var price = parseFloat(priceGroup['table'][ww][hh]);
            if(montage.hasOwnProperty(mMontage.value)) {
                price += parseFloat(montage[mMontage.value]['price']);
            }
            mError.innerHTML = '';
            mPrice.innerHTML = price;
            priceWrapper.style.display = 'block';
        }
        catch(e) {
            priceWrapper.style.display = 'none';
            mError.innerHTML = e.message;
        }
    };

    var saveData = function() {
        if(typeof(Storage) !== 'undefined') {
            localStorage.setItem('template2.mList',trim(mList.innerHTML));
            localStorage.setItem('template2.mTotal',trim(mTotal.innerHTML));
        }
    };

    var loadData = function() {
        if(typeof(Storage) !== 'undefined') {
            var mListData = localStorage.getItem('template2.mList');
            if (mListData) {
                mList.innerHTML = mListData;
                var buttons = mList.getElementsByTagName('button');
                for(var i = 0; i < buttons.length; i++) {
                    buttons[i].addEventListener('click',removePrice);
                }
            }
            var mTotalData = localStorage.getItem('template2.mTotal');
            if (mTotalData) {
                mTotal.innerHTML = mTotalData;
            }
        }
    };

    var recalculateTotal = function() {
        var total = 0;
        var trs = mList.getElementsByTagName('tr');
        if (trs.length > 0) {
            for(var i = 0; i < trs.length; i++) {
                var tr = trs[i];
                var td = tr.childNodes[0];
                td.innerHTML = (i+1)+'.';
                total += parseFloat(trs[i].getAttribute('data-price'));
            }
        }
        mTotal.innerHTML = total;
    };

    var removePrice = function() {
        mList.removeChild(this.parentNode.parentNode);
        recalculateTotal();
        saveData();
    };

    var addPrice = function() {
        if (priceWrapper.style.display != 'block') {
            return false;
        }
        var trs = mList.getElementsByTagName('tr');
        if(trs.length >= 7) {
            return false;
        }
        var price = parseFloat(mPrice.innerHTML);
        var tr = document.createElement('tr');

        var td = document.createElement('td');
        td.innerHTML = (trs.length+1)+'.';
        tr.appendChild(td);
        var td = document.createElement('td');
        var material = materials['records'][materials['indexes']['id'][mMaterial.value]];
        tr.setAttribute('data-price',price);
        tr.setAttribute('data-width',parseInt(mWidth.value));
        tr.setAttribute('data-height',parseInt(mHeight.value));
        tr.setAttribute('data-color',mColor.value);
        tr.setAttribute('data-material',material.id);
        tr.setAttribute('data-montage',mMontage.value);
        td.innerHTML = 'B ' + mWidth.value + ' x H ' + mHeight.value + ' mm, ' + mColor.value + ', '+ material.name+', Montage ' + mMontage.value + ', ' + price +' &#8364;';
        tr.appendChild(td);
        var td = document.createElement('td');
        var b = document.createElement('button');
        b.className = 'remove';
        b.innerHTML = 'X';
        b.addEventListener('click',removePrice);
        td.appendChild(b);
        tr.appendChild(td);
        mList.appendChild(tr);
        recalculateTotal();
        saveData();
    };
    bCalculate.addEventListener('click',calculatePrice);
    bAdd.addEventListener('click',addPrice);
    mWidth.addEventListener('change',calculatePrice);
    mHeight.addEventListener('change',calculatePrice);
    mMaterial.addEventListener('change',calculatePrice);
    mMontage.addEventListener('change',calculatePrice);

    calculatePrice();
    loadData();

    var sendButton = document.getElementById('bSend');
    var nickname = document.getElementById('nickname');
    var loader2 = document.getElementById('loader2');
    var response2Box = document.getElementById('response2Box');

    response2Box.getElementsByTagName('button')[0].addEventListener('click',function(e) {
        response2Box.style.display = 'none';
    });

    function processResponse2(timeout) {
        try {
            if (response2 === null) {
                if (timeout > 0) {
                    setTimeout(function() {
                        processResponse2(timeout - 1);
                    },1000);
                }
                else {
                    sendButton.removeAttribute('disabled');
                    loader2.style.display = 'none';
                    throw { status: 'error', message: 'Request timeout'  };
                }
                return;
            }
            sendButton.removeAttribute('disabled');
            loader2.style.display = 'none';
            response2Box.getElementsByTagName('p')[0].innerHTML = response2.message;
            response2Box.style.display = 'block';
        }
        catch(err) {
            response2Box.getElementsByTagName('p')[0].innerHTML = err;
            response2Box.style.display = 'block';
        }
    };

    sendButton.addEventListener('click',function(e) {
        response2 = null;
        loader2.style.display = 'block';
        var url = resUrl+'/order-plissee.php?';
        var data = [];
        var trs = mList.getElementsByTagName('tr');
        var pairs = ['nickname='+encodeURIComponent(nickname.value),'v='+(new Date()).getTime()];
        for(var i = 0; i < trs.length; i++) {
            var tr = trs[i];
            pairs.push('records['+i+'][width]='+tr.getAttribute('data-width'));
            pairs.push('records['+i+'][height]='+tr.getAttribute('data-height'));
            pairs.push('records['+i+'][color]='+encodeURIComponent(tr.getAttribute('data-color')));
            pairs.push('records['+i+'][material]='+tr.getAttribute('data-material'));
            pairs.push('records['+i+'][montage]='+tr.getAttribute('data-montage'));
            pairs.push('records['+i+'][price]='+tr.getAttribute('data-price'));
        }

        for(var field in data) {
            var value = data[field];
            if (Object.prototype.toString.call(value) === '[object Array]') {
                for(var i = 0; i < value.length; i++) {
                    query.push(encodeURIComponent(field)+'[]='+encodeURIComponent(value[i]));
                }
            }
            else {
                query.push(encodeURIComponent(field)+'='+encodeURIComponent(value));
            }
        }
        url += pairs.join('&');
        var head = document.getElementsByTagName('head')[0];
        var responseScript = document.getElementById('responseScript');
        if (responseScript) {
            head.removeChild(responseScript);
        }
        responseScript = document.createElement('script');
        responseScript.setAttribute('type','text/javascript');
        responseScript.setAttribute('src',url);
        responseScript.setAttribute('id','responseScript');
        head.appendChild(responseScript);
        processResponse2(5);
    });

    var info = document.getElementById('info');
    var infoBox = document.getElementById('infoBox');

    info.addEventListener('mouseover',function(e) {
        infoBox.style.display = 'block';

    });
    info.addEventListener('mouseout',function(e) {
        infoBox.style.display = 'none';
    });

    var response = null;
    var response2 = null;

    function ZoomBox(elementId,rel) {
        this.width = 590;
        this.height = 385;
        this.elementId = elementId;
        this.rel = rel;
        this.element = document.getElementById(elementId);
        if (!this.element) {
            throw { message: 'element with id = '+elementId+' not found' };
        }
        this.handlers = document.querySelectorAll('[rel='+rel+']');
        this.handlerCallback = function(e) {
            if (e.preventDefault) {
                e.preventDefault();
            }
            else {
                e.returnValue = false;
            }
            that.show(this,true);
        };

        var that = this;
        for(var i = 0; i < this.handlers.length; i++) {
            this.handlers[i].setAttribute('data-index',i);
            this.handlers[i].addEventListener('click',this.handlerCallback);
        }
        var close = this.element.getElementsByClassName('zoom-box-close');
        if (close.length > 0) {
            close[0].addEventListener('click',function(e) {
                if (e.preventDefault) {
                    e.preventDefault();
                }
                else {
                    e.returnValue = false;
                }
                that.element.style.display = 'none';
            });
        }
        var prev = this.element.getElementsByClassName('zoom-box-prev');
        if (prev.length > 0) {
            prev[0].addEventListener('click',function(e) {
                if (e.preventDefault) {
                    e.preventDefault();
                }
                else {
                    e.returnValue = false;
                }
                that.prev();
            });
        }
        var next = this.element.getElementsByClassName('zoom-box-next');
        if (next.length > 0) {
            next[0].addEventListener('click',function(e) {
                if (e.preventDefault) {
                    e.preventDefault();
                }
                else {
                    e.returnValue = false;
                }
                that.next();
            });
        }
    };

    ZoomBox.prototype.destroy = function() {
        this.element.removeAttribute('data-index');
        for(var i = 0; i < this.handlers.length; i++) {
            this.handlers[i].removeAttribute('data-index');
            this.handlers[i].removeEventListener('click',this.handlerCallback);
        }
    };

    ZoomBox.prototype.hide = function() {
        this.element.style.display = 'none';
    };

    ZoomBox.prototype.refresh = function() {
        this.hide();
        for(var i = 0; i < this.handlers.length; i++) {
            var h = this.handlers[i];
            h.removeAttribute('data-index');
            h.removeEventListener('click',this.handlerCallback);
        }
        this.handlers = document.querySelectorAll('[rel='+this.rel+']');
        for(var i = 0; i < this.handlers.length; i++) {
            this.handlers[i].setAttribute('data-index',i);
            this.handlers[i].addEventListener('click',this.handlerCallback);
        }
    };

    ZoomBox.prototype.show = function(handler,resetPosition) {
        if (this.element.style.display == 'none' || this.element.style.display == '' || resetPosition) {
            var parentRect = this.element.parentNode.getBoundingClientRect();
            var handlerRect = handler.getBoundingClientRect();

            var left = handlerRect.left - parentRect.left;
            var right = left + this.width;
            var top = handlerRect.top - parentRect.top - parseInt(this.height/2);

            if (left <= 0) {
                left = 15;
            }
            else if (right >= parentRect.width) {
                left = parentRect.width - this.width - 15;
            }
            if (top <= 0) {
                top = 15
            }

            this.element.style.top = top;
            this.element.style.left = left;
            this.element.style.display = 'block';
        }
        this.element.setAttribute('data-index',handler.getAttribute('data-index'));
        var img = this.element.getElementsByTagName('img');
        if (img.length > 0) {
            img[0].src = handler.getAttribute('href');
        }
        var caption = this.element.getElementsByTagName('p');
        if (caption.length > 0) {
            caption[0].innerHTML = handler.getAttribute('title');
        }
    };

    ZoomBox.prototype.prev = function() {
        var index = parseInt(this.element.getAttribute('data-index'));
        if(!isNaN(index)) {
            var prevIndex = index;
            var last = this.handlers.length-1;
            var h = null;
            do {
                prevIndex--;
                if (prevIndex < 0) {
                    prevIndex = last;
                }
                h = this.handlers[prevIndex];
            } while(prevIndex !== index && h.offsetParent === null);
            if (prevIndex !== index) {
                this.show(h);
            }
        }
    };

    ZoomBox.prototype.next = function() {
        var index = parseInt(this.element.getAttribute('data-index'));
        if(!isNaN(index)) {
            var nextIndex = index;
            var last = this.handlers.length-1;
            var h = null;
            do {
                nextIndex++;
                if (nextIndex > last) {
                    nextIndex = 0;
                }
                h = this.handlers[nextIndex];
            } while(nextIndex !== index && h.offsetParent === null);
            if (nextIndex !== index) {
                this.show(h);
            }
        }
    };

    function hasClass(node,className) {
        var index = node.className.indexOf(className);
        return index > -1;
    };

    function addClass(node,className) {
        var index = node.className.indexOf(className);
        if (index == -1) {
            node.className += ' '+className;
        }
    };

    function removeClass(node,className) {
        var index = node.className.indexOf(className);
        if (index > -1) {
            node.className = node.className.substr(0,index) + node.className.substr(index+className.length);
        }
    }


    var checkedFabrics = [];
    var fabrics = {"indexes":{"id_tkanina":{"268":0,"292":1,"306":2,"320":3,"347":4,"414":5,"449":6,"464":7,"470":8,"494":9,"269":10,"293":11,"307":12,"321":13,"348":14,"451":15,"465":16,"495":17,"270":18,"294":19,"308":20,"322":21,"349":22,"416":23,"452":24,"477":25,"500":26,"271":27,"295":28,"309":29,"323":30,"350":31,"417":32,"453":33,"467":34,"476":35,"497":36,"272":37,"296":38,"310":39,"324":40,"351":41,"418":42,"468":43,"475":44,"498":45,"273":46,"297":47,"311":48,"325":49,"352":50,"419":51,"474":52,"483":53,"499":54,"274":55,"284":56,"312":57,"326":58,"421":59,"473":60,"496":61,"275":62,"285":63,"299":64,"313":65,"354":66,"422":67,"471":68,"501":69,"276":70,"286":71,"355":72,"363":73,"423":74,"472":75,"287":76,"315":77,"424":78,"458":79,"278":80,"288":81,"316":82,"425":83,"510":84,"519":85,"279":86,"289":87,"317":88,"361":89,"481":90,"522":91,"290":92,"318":93,"362":94,"427":95,"480":96,"521":97,"291":98,"442":99,"479":100,"520":101,"455":102,"524":103,"529":104,"528":105,"532":106,"531":107,"530":108,"527":109,"526":110,"525":111,"523":112,"533":113,"405":114,"407":115,"408":116,"409":117,"412":118,"413":119,"489":120,"490":121,"491":122,"492":123,"493":124,"511":125,"512":126,"513":127,"514":128,"515":129,"516":130,"517":131,"518":132,"534":133,"535":134,"536":135,"540":136,"541":137,"542":138,"543":139,"544":140,"545":141,"546":142,"547":143,"548":144,"549":145,"550":146,"551":147,"552":148,"553":149,"554":150,"555":151,"556":152,"557":153,"558":154,"559":155,"560":156,"561":157,"562":158,"563":159,"564":160,"565":161,"566":162,"567":163},"id_kolekcja":{"14":[0,10,18,27,37,46,55,62,70,80,86],"16":[1,11,19,28,38,47,64,120,121,122,123,124],"17":[2,12,20,29,39,48,57,65,77,82,88,93],"18":[3,13,21,30,40,49,58],"20":[4,14,22,31,41,50,66,72,79,85,91,97,101,103,104,105,106,107,108,109,110,111,112,113],"23":[5,23,32,42,51,59,67,74,78,83,95,99,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163],"15":[6,15,24,33,53,56,63,71,76,81,87,92,98,102],"26":[7,16,34,43,133,134],"27":[8,25,35,44,52,60,68,75,84,90,96,100,135,136,137,138,139,140,141],"21":[9,17,26,36,45,54,61,69,73,89,94],"22":[114,115,116,117,118,119],"28":[125,126,127,128,129,130,131,132],"29":[142,143,144,145]}},"records":[{"id_tkanina":268,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7234","order":0,"filtry":{"2":[5],"3":[10,9],"1":[2]}},{"id_tkanina":292,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 2150","order":0,"filtry":{"2":[5],"3":[10,9,11],"1":[2]}},{"id_tkanina":306,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 066","order":0,"filtry":{"2":[5],"3":[10,9,11],"1":[2]}},{"id_tkanina":320,"id_kolekcja":18,"nazwa_tkaniny":"Crush Gardine 0125","order":0,"filtry":{"2":[7],"3":[10,9],"1":[2]}},{"id_tkanina":347,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 2250","order":0,"filtry":{"2":[5],"3":[10,9,11],"1":[2]}},{"id_tkanina":414,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 1300 Brussels","order":0,"filtry":{"2":[8],"3":[10,9],"1":[2]}},{"id_tkanina":449,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 079","order":0,"filtry":{"2":[5],"3":[10,9]}},{"id_tkanina":464,"id_kolekcja":26,"nazwa_tkaniny":"Dim 887","order":0,"filtry":{"2":[5],"3":[10,9,11],"1":[4]}},{"id_tkanina":470,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 001","order":0,"filtry":{"2":[6],"3":[10,9,11],"1":[2]}},{"id_tkanina":494,"id_kolekcja":21,"nazwa_tkaniny":"Crush 526","order":0,"filtry":{"2":[5],"3":[10,9],"1":[2]}},{"id_tkanina":269,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7220","order":1,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":293,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 2151","order":1,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":307,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 051","order":1,"filtry":{"2":[5],"3":[10,9,11],"1":[2]}},{"id_tkanina":321,"id_kolekcja":18,"nazwa_tkaniny":"Crush Gardine 0120","order":1,"filtry":{"2":[7],"3":[10,9],"1":[4]}},{"id_tkanina":348,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 2251","order":1,"filtry":{"2":[5],"3":[10,9,11],"1":[4]}},{"id_tkanina":451,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 084","order":1,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":465,"id_kolekcja":26,"nazwa_tkaniny":"Dim 890","order":1,"filtry":{"2":[5],"3":[10,9,11],"1":[2]}},{"id_tkanina":495,"id_kolekcja":21,"nazwa_tkaniny":"Crush 527","order":1,"filtry":[]},{"id_tkanina":270,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7223","order":2,"filtry":{"2":[5],"3":[10,9],"1":[4]}},{"id_tkanina":294,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 2152","order":2,"filtry":{"2":[5],"3":[10,9,11],"1":[1,2]}},{"id_tkanina":308,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 052","order":2,"filtry":{"2":[5],"3":[10,9,11],"1":[1,2]}},{"id_tkanina":322,"id_kolekcja":18,"nazwa_tkaniny":"Crush Gardine 0121","order":2,"filtry":{"2":[7],"3":[10,9],"1":[1,4]}},{"id_tkanina":349,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 2253","order":2,"filtry":{"2":[5],"3":[10,9,11],"1":[4]}},{"id_tkanina":416,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 2602 Nice","order":2,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":452,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 085","order":2,"filtry":{"2":[5],"3":[10,9],"1":[3]}},{"id_tkanina":477,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 777","order":2,"filtry":{"2":[6],"3":[10,9,11],"1":[1]}},{"id_tkanina":500,"id_kolekcja":21,"nazwa_tkaniny":"Crush 531","order":2,"filtry":{"2":[5],"3":[10,9]}},{"id_tkanina":271,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7235","order":3,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":295,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 2153","order":3,"filtry":{"2":[5],"3":[10,9,11],"1":[4]}},{"id_tkanina":309,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 053","order":3,"filtry":{"2":[5],"3":[10,9,11],"1":[1,2]}},{"id_tkanina":323,"id_kolekcja":18,"nazwa_tkaniny":"Crush Gardine 0122","order":3,"filtry":{"2":[7],"3":[10,9],"1":[4]}},{"id_tkanina":350,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 2255","order":3,"filtry":{"2":[5],"3":[10,9,11],"1":[1]}},{"id_tkanina":417,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 2751 Valencia","order":3,"filtry":{"2":[5],"3":[10,9],"1":[3,2]}},{"id_tkanina":453,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 087","order":3,"filtry":{"2":[5],"3":[10,9],"1":[4]}},{"id_tkanina":467,"id_kolekcja":26,"nazwa_tkaniny":"Dim 892","order":3,"filtry":{"2":[5],"3":[10,9,11],"1":[1,2]}},{"id_tkanina":476,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 774","order":3,"filtry":{"2":[6],"3":[10,9,11]}},{"id_tkanina":497,"id_kolekcja":21,"nazwa_tkaniny":"Crush 533","order":3,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":272,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7236","order":4,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":296,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 2156","order":4,"filtry":{"2":[5],"3":[10,9,11],"1":[1]}},{"id_tkanina":310,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 054","order":4,"filtry":{"2":[5],"3":[10,9,11],"1":[1]}},{"id_tkanina":324,"id_kolekcja":18,"nazwa_tkaniny":"Crush Gardine 0123","order":4,"filtry":{"2":[7],"3":[10,9],"1":[3]}},{"id_tkanina":351,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 2262","order":4,"filtry":{"2":[5],"3":[10,9,11],"1":[2]}},{"id_tkanina":418,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 070","order":4,"filtry":{"2":[7],"3":[10,9],"1":[2]}},{"id_tkanina":468,"id_kolekcja":26,"nazwa_tkaniny":"Dim 893","order":4,"filtry":{"2":[5],"3":[10,9,11],"1":[1]}},{"id_tkanina":475,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 772","order":4,"filtry":{"2":[6],"3":[10,9,11]}},{"id_tkanina":498,"id_kolekcja":21,"nazwa_tkaniny":"Crush 535","order":4,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":273,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7238","order":5,"filtry":{"2":[5],"3":[10,9],"1":[4]}},{"id_tkanina":297,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 2157","order":5,"filtry":{"2":[5],"3":[10,9,11],"1":[1]}},{"id_tkanina":311,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 055","order":5,"filtry":{"2":[5],"3":[10,9,11],"1":[3]}},{"id_tkanina":325,"id_kolekcja":18,"nazwa_tkaniny":"Crush Gardine 0124","order":5,"filtry":{"2":[7],"3":[10,9],"1":[2]}},{"id_tkanina":352,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 8014","order":5,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":419,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 2700","order":5,"filtry":{"2":[5],"3":[10,9],"1":[2]}},{"id_tkanina":474,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 771","order":5,"filtry":{"2":[6],"3":[10,9,11],"1":[4]}},{"id_tkanina":483,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 090","order":5,"filtry":[]},{"id_tkanina":499,"id_kolekcja":21,"nazwa_tkaniny":"Crush 536","order":5,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":274,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7241","order":6,"filtry":{"2":[5],"3":[10,9],"1":[3]}},{"id_tkanina":284,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1200","order":6,"filtry":{"2":[5],"3":[10,9],"1":[2]}},{"id_tkanina":312,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 056","order":6,"filtry":{"2":[5],"3":[10,9,11],"1":[3]}},{"id_tkanina":326,"id_kolekcja":18,"nazwa_tkaniny":"Crush Gardine 0126","order":6,"filtry":{"2":[7],"3":[10,9]}},{"id_tkanina":421,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 2800","order":6,"filtry":{"2":[7],"3":[10,9],"1":[2]}},{"id_tkanina":473,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 770","order":6,"filtry":{"2":[6],"3":[10,9,11],"1":[4]}},{"id_tkanina":496,"id_kolekcja":21,"nazwa_tkaniny":"Crush 537","order":6,"filtry":{"2":[5],"3":[10,9]}},{"id_tkanina":275,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7242","order":7,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":285,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1201","order":7,"filtry":{"2":[5],"3":[10,9],"1":[4]}},{"id_tkanina":299,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 2160","order":7,"filtry":{"2":[5],"3":[10,9,11],"1":[3]}},{"id_tkanina":313,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 057","order":7,"filtry":{"2":[5],"3":[10,9,11],"1":[1,2]}},{"id_tkanina":354,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 8016","order":7,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":422,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 6351 Kent","order":7,"filtry":{"2":[8],"3":[10,9],"1":[2]}},{"id_tkanina":471,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 761","order":7,"filtry":{"2":[6],"3":[10,9,11],"1":[2]}},{"id_tkanina":501,"id_kolekcja":21,"nazwa_tkaniny":"Crush 539","order":7,"filtry":{"2":[5],"3":[10,9]}},{"id_tkanina":276,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7243","order":8,"filtry":{"2":[5],"3":[10,9],"1":[4]}},{"id_tkanina":286,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1202","order":8,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":355,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7006","order":8,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":363,"id_kolekcja":21,"nazwa_tkaniny":"Crush 8003","order":8,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":423,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 6353 Kent","order":8,"filtry":{"2":[8],"3":[10,9],"1":[1]}},{"id_tkanina":472,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 763","order":8,"filtry":{"2":[6],"3":[10,9,11],"1":[3]}},{"id_tkanina":287,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1203","order":9,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":315,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 058","order":9,"filtry":{"2":[5],"3":[10,9,11],"1":[4]}},{"id_tkanina":424,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 8411 Sofia","order":9,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":458,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7078","order":9,"filtry":{"2":[5],"3":[10,9,11],"1":[1]}},{"id_tkanina":278,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7447","order":10,"filtry":{"2":[5],"3":[10,9]}},{"id_tkanina":288,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1206","order":10,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":316,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 062","order":10,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":425,"id_kolekcja":23,"nazwa_tkaniny":"W.E. 8533 Athens","order":10,"filtry":{"2":[8],"3":[10,9],"1":[1]}},{"id_tkanina":510,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 769","order":10,"filtry":{"2":[5,6],"3":[10,9,11]}},{"id_tkanina":519,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 5175","order":10,"filtry":[]},{"id_tkanina":279,"id_kolekcja":14,"nazwa_tkaniny":"Allegro 7448","order":11,"filtry":{"2":[5],"3":[10,9],"1":[4]}},{"id_tkanina":289,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1208","order":11,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":317,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 063","order":11,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":361,"id_kolekcja":21,"nazwa_tkaniny":"Crush 2205","order":11,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":481,"id_kolekcja":27,"nazwa_tkaniny":"BO 3114","order":11,"filtry":{"2":[6],"3":[10,9,11]}},{"id_tkanina":522,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 5177","order":11,"filtry":[]},{"id_tkanina":290,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1212","order":12,"filtry":{"2":[5],"3":[10,9],"1":[4]}},{"id_tkanina":318,"id_kolekcja":17,"nazwa_tkaniny":"Cara Perl 068","order":12,"filtry":{"2":[5],"3":[10,9,11],"1":[3]}},{"id_tkanina":362,"id_kolekcja":21,"nazwa_tkaniny":"Crush 2210","order":12,"filtry":{"2":[5],"3":[10,9],"1":[3]}},{"id_tkanina":427,"id_kolekcja":23,"nazwa_tkaniny":"W.E.  551 Long Crush","order":12,"filtry":{"2":[5],"3":[10,9],"1":[2]}},{"id_tkanina":480,"id_kolekcja":27,"nazwa_tkaniny":"BO 3113","order":12,"filtry":{"2":[6],"3":[10,9,11],"1":[2]}},{"id_tkanina":521,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 6452","order":12,"filtry":[]},{"id_tkanina":291,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1213","order":13,"filtry":{"2":[5],"3":[10,9],"1":[3]}},{"id_tkanina":442,"id_kolekcja":23,"nazwa_tkaniny":"W.E.  589 Primavera","order":13,"filtry":{"2":[5],"3":[10,9],"1":[1,2]}},{"id_tkanina":479,"id_kolekcja":27,"nazwa_tkaniny":"BO 4886","order":13,"filtry":{"2":[6],"3":[10,9,11],"1":[2]}},{"id_tkanina":520,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7013","order":13,"filtry":[]},{"id_tkanina":455,"id_kolekcja":15,"nazwa_tkaniny":"Unicolor 1214","order":14,"filtry":{"2":[5],"3":[10,9],"1":[1]}},{"id_tkanina":524,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7007","order":14,"filtry":[]},{"id_tkanina":529,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7004","order":15,"filtry":[]},{"id_tkanina":528,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 5176","order":16,"filtry":[]},{"id_tkanina":532,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7011","order":17,"filtry":[]},{"id_tkanina":531,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7550","order":18,"filtry":[]},{"id_tkanina":530,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7079","order":19,"filtry":[]},{"id_tkanina":527,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7040","order":20,"filtry":[]},{"id_tkanina":526,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 5618","order":21,"filtry":[]},{"id_tkanina":525,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 6433","order":22,"filtry":[]},{"id_tkanina":523,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7008","order":23,"filtry":[]},{"id_tkanina":533,"id_kolekcja":20,"nazwa_tkaniny":"Crush Reflex 7100","order":24,"filtry":[]},{"id_tkanina":405,"id_kolekcja":22,"nazwa_tkaniny":"B.E. 2400 Bergen","order":35,"filtry":{"2":[5],"3":[10,9],"1":[3]}},{"id_tkanina":407,"id_kolekcja":22,"nazwa_tkaniny":"B.E. 2702 Amazone","order":37,"filtry":{"2":[5],"3":[10,9],"1":[3]}},{"id_tkanina":408,"id_kolekcja":22,"nazwa_tkaniny":"B.E. 4856","order":38,"filtry":{"2":[5],"3":[10,9],"1":[3]}},{"id_tkanina":409,"id_kolekcja":22,"nazwa_tkaniny":"B.E. 6350 Kent","order":39,"filtry":{"2":[8],"3":[10,9],"1":[3]}},{"id_tkanina":412,"id_kolekcja":22,"nazwa_tkaniny":"B.E. 8450 Jakarta","order":40,"filtry":{"2":[8],"3":[10,9],"1":[3]}},{"id_tkanina":413,"id_kolekcja":22,"nazwa_tkaniny":"B.E. 8452 Jakarta","order":41,"filtry":{"2":[8],"3":[10,9],"1":[3]}},{"id_tkanina":489,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 264","order":99999,"filtry":{"2":[5],"3":[10,9,11],"1":[4]}},{"id_tkanina":490,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 271","order":99999,"filtry":{"2":[5],"3":[10,9,11],"1":[1]}},{"id_tkanina":491,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 265","order":99999,"filtry":{"2":[5],"3":[10,9,11],"1":[4]}},{"id_tkanina":492,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 266","order":99999,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":493,"id_kolekcja":16,"nazwa_tkaniny":"Unireflex 274","order":99999,"filtry":{"2":[5],"3":[10,9,11]}},{"id_tkanina":511,"id_kolekcja":28,"nazwa_tkaniny":"Duett 920 Wei\u00df","order":99999,"filtry":[]},{"id_tkanina":512,"id_kolekcja":28,"nazwa_tkaniny":"Duett 926 Terracotta","order":99999,"filtry":[]},{"id_tkanina":513,"id_kolekcja":28,"nazwa_tkaniny":"Duett 927 Braun","order":99999,"filtry":[]},{"id_tkanina":514,"id_kolekcja":28,"nazwa_tkaniny":"Duett 929 Sonnengelb","order":99999,"filtry":[]},{"id_tkanina":515,"id_kolekcja":28,"nazwa_tkaniny":"Duett 931 Gr\u00fcn","order":99999,"filtry":[]},{"id_tkanina":516,"id_kolekcja":28,"nazwa_tkaniny":"Duett 934 Blau","order":99999,"filtry":[]},{"id_tkanina":517,"id_kolekcja":28,"nazwa_tkaniny":"Duett 938 Hellbeige","order":99999,"filtry":[]},{"id_tkanina":518,"id_kolekcja":28,"nazwa_tkaniny":"Duett 943 Grau","order":99999,"filtry":[]},{"id_tkanina":534,"id_kolekcja":26,"nazwa_tkaniny":"Dim 891","order":99999,"filtry":[]},{"id_tkanina":535,"id_kolekcja":26,"nazwa_tkaniny":"Dim 898","order":99999,"filtry":[]},{"id_tkanina":536,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 722","order":99999,"filtry":[]},{"id_tkanina":540,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 704","order":99999,"filtry":[]},{"id_tkanina":541,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 712","order":99999,"filtry":[]},{"id_tkanina":542,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 717","order":99999,"filtry":[]},{"id_tkanina":543,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 718","order":99999,"filtry":[]},{"id_tkanina":544,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 720","order":99999,"filtry":[]},{"id_tkanina":545,"id_kolekcja":27,"nazwa_tkaniny":"Somnio 721","order":99999,"filtry":[]},{"id_tkanina":546,"id_kolekcja":29,"nazwa_tkaniny":"Duett Light 901","order":99999,"filtry":[]},{"id_tkanina":547,"id_kolekcja":29,"nazwa_tkaniny":"Duett Light 902","order":99999,"filtry":[]},{"id_tkanina":548,"id_kolekcja":29,"nazwa_tkaniny":"Duett Light 916","order":99999,"filtry":[]},{"id_tkanina":549,"id_kolekcja":29,"nazwa_tkaniny":"Duett Light 903","order":99999,"filtry":[]},{"id_tkanina":550,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Arabesque 30571","order":99999,"filtry":[]},{"id_tkanina":551,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Linea 30226","order":99999,"filtry":[]},{"id_tkanina":552,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Linea 30227","order":99999,"filtry":[]},{"id_tkanina":553,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Techno 30531","order":99999,"filtry":[]},{"id_tkanina":554,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Techno 30532","order":99999,"filtry":[]},{"id_tkanina":555,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Kastale 30811","order":99999,"filtry":[]},{"id_tkanina":556,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Maleza 30403","order":99999,"filtry":[]},{"id_tkanina":557,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Retro 30071","order":99999,"filtry":[]},{"id_tkanina":558,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Twist 30431","order":99999,"filtry":[]},{"id_tkanina":559,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Triangle 40181","order":99999,"filtry":[]},{"id_tkanina":560,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Triangle 40182","order":99999,"filtry":[]},{"id_tkanina":561,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Triangle 40183","order":99999,"filtry":[]},{"id_tkanina":562,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Primavera 30311","order":99999,"filtry":[]},{"id_tkanina":563,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Primavera 30312","order":99999,"filtry":[]},{"id_tkanina":564,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Primavera 30314","order":99999,"filtry":[]},{"id_tkanina":565,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Primavera 30315","order":99999,"filtry":[]},{"id_tkanina":566,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Liana 30334","order":99999,"filtry":[]},{"id_tkanina":567,"id_kolekcja":23,"nazwa_tkaniny":"W.E. Battra 30551","order":99999,"filtry":[]}]};
    var collections = {"indexes":{"id":{"14":0,"15":1,"16":2,"17":3,"18":4,"21":5,"20":6,"23":7,"22":8,"26":9,"27":10,"28":11,"29":12}},"records":[{"id_kolekcja":14,"nazwa_kolekcji":"Allegro - Preisgruppe 0 | lichtdurchl\u00e4ssig | blickdicht","order":0},{"id_kolekcja":15,"nazwa_kolekcji":"Unicolor - Preisgruppe 0 | lichtdurchl\u00e4ssig | blickdicht","order":1},{"id_kolekcja":16,"nazwa_kolekcji":"Unireflex - Preisgruppe 1 | lichtdurchl\u00e4ssig | blickdicht  | Reflexbeschichtung","order":2},{"id_kolekcja":17,"nazwa_kolekcji":"Cara Perl - Preisgruppe 1 | lichtdurchl\u00e4ssig | blickdicht","order":3},{"id_kolekcja":18,"nazwa_kolekcji":"Crush Gardine - Preisgruppe 1 | lichtdurchl\u00e4ssig | transparent","order":4},{"id_kolekcja":21,"nazwa_kolekcji":"Crush - Preisgruppe 1 | lichtdurchl\u00e4ssig | blickdicht","order":5},{"id_kolekcja":20,"nazwa_kolekcji":"Crush Reflex - Preisgruppe 2 | lichtdurchl\u00e4ssig | blickdicht | Reflexbeschichtung","order":6},{"id_kolekcja":23,"nazwa_kolekcji":"White Edition - Preisgruppe 2 | lichtdurchl\u00e4ssig","order":7},{"id_kolekcja":22,"nazwa_kolekcji":"Black Edition - Preisgruppe 2 | lichtdurchl\u00e4ssig","order":8},{"id_kolekcja":26,"nazwa_kolekcji":"Dim - Preisgruppe 3 | lichtdurchl\u00e4ssig | blickdicht","order":9},{"id_kolekcja":27,"nazwa_kolekcji":"Somnio BO - Preisgruppe 3 | verdunkelnd","order":10},{"id_kolekcja":28,"nazwa_kolekcji":"Duett - Preisgruppe 4 | verdunkelnd","order":11},{"id_kolekcja":29,"nazwa_kolekcji":"Duett Light - Preisgruppe 3 | lichtdurchl\u00e4ssig | blickdicht","order":12}]};
    var resUrl = 'http://www.plissee-zeit.de/ebay_desc/template2';

    function basketRemoveHandler(e) {
        var id = parseInt(this.getAttribute('data-id'));
        var index = checkedFabrics.indexOf(id);
        if (index > -1) {
            checkedFabrics.splice(index,1);
            fabricBasket.removeChild(this.parentNode);
            var wrapper = document.getElementById('fabric-'+id);
            removeClass(wrapper,'checked');
        }
        basketZoom.refresh();
    }

    function thumbClickHandler(e) {
        var wrapper = this.parentNode.parentNode;
        var id = parseInt(wrapper.getAttribute('data-id'));
        if (hasClass(wrapper,'checked')) {
            removeClass(wrapper,'checked');
            var index = checkedFabrics.indexOf(id);
            if(index > -1) {
                checkedFabrics.splice(index,1);
            }
        }
        else {
            addClass(wrapper,'checked');
            if (checkedFabrics.length > 4) {
                var lastIndex = checkedFabrics.length-1;
                var lastId = checkedFabrics[checkedFabrics.length-1];
                checkedFabrics.splice(lastIndex,1);
                var lastWrapper = document.getElementById('fabric-'+lastId);
                removeClass(lastWrapper,'checked');
            }
            checkedFabrics.push(id);
        }
        var markup = '';
        for(var i = 0; i < checkedFabrics.length; i++) {
            var fabric = fabrics['records'][fabrics['indexes']['id_tkanina'][checkedFabrics[i]]];
            markup += '<div id="fabric-clone-'+fabric['id_tkanina']+'" class="sampler_item_wrapper_clone"><img alt="" src="http://www.plissee-zeit.de/stoffmuster-bestellen/data_files/fabrics/'+fabric['id_tkanina']+'_thumb.jpg"><div class="sampler_item_wrapper_clone_delete" data-id="'+fabric['id_tkanina']+'"></div><a rel="basket" href="http://www.plissee-zeit.de/stoffmuster-bestellen/data_files/fabrics/'+fabric['id_tkanina']+'_photo.jpg" class="zoom fancybox" title="'+fabric['nazwa_tkaniny']+'" id="fabric-clone-zoom-'+fabric['id_tkanina']+'"></a></div>';
        }
        fabricBasket.innerHTML = markup;
        var removeButtons = fabricBasket.getElementsByClassName('sampler_item_wrapper_clone_delete');
        if(removeButtons.length > 0) {
            for(i = 0; i < removeButtons.length; i++) {
                removeButtons[i].addEventListener('click',basketRemoveHandler);
            }
        }
        basketZoom.refresh();
    }

    var orderContent = document.getElementById('orderContent');
    var fabricPool = document.getElementById('fabrics_pool');
    var collectionWrappers = fabricPool.getElementsByClassName('collection');
    var fabricThumbs = fabricPool.getElementsByClassName('fabric_thumb');
    var fabricBasket = document.getElementById('fabricBasket');
    //var filterList = document.getElementById('filterList');
    //var filterButton = document.getElementById('filter');
    var submitButton = document.getElementById('submit');

    var messageBox = document.getElementById('messageBox');
    var loader = document.getElementById('loader');
    var imie = document.getElementById('imie');
    var nazwisko = document.getElementById('nazwisko');
    var ulica = document.getElementById('ulica');
    var miejscowosc = document.getElementById('miejscowosc');
    var numer = document.getElementById('numer');
    var kod = document.getElementById('kod');
    var email = document.getElementById('email');


    for (var i = 0; i < fabricThumbs.length; i++) {
        fabricThumbs[i].addEventListener('click',thumbClickHandler);
    }

    /*var checkBoxes = filterList.getElementsByTagName('input');
    for(var i = 0; i < checkBoxes.length; i++) {
        checkBoxes[i].checked = false;
    }


    filterButton.addEventListener('click',function() {
        fabricZoom.hide();
        var filters = {};
        var filterGroups = filterList.getElementsByClassName('filter-group');
        var clearFilter = true;
        for(var i = 0; i < filterGroups.length; i++) {
            var allGroupFilters = [];
            var checkedGroupFilters = [];
            var filterGroup = filterGroups[i];
            var groupId = parseInt(filterGroup.getAttribute('data-id'));
            var groupFilters = filterGroup.getElementsByTagName('input');
            for(var j = 0; j < groupFilters.length; j++) {
                var input = groupFilters[j];
                var filterId = parseInt(input.getAttribute('data-id'));
                allGroupFilters.push(filterId);
                if (input.checked) {
                    checkedGroupFilters.push(filterId);
                }
            }
            if (checkedGroupFilters.length > 0) {
                clearFilter = clearFilter && false;
                filters[groupId] = checkedGroupFilters;
            }
            else {
                clearFilter = clearFilter && true;
                filters[groupId] = allGroupFilters;
            }
        }
        var length = fabrics['records'].length;
        for(i = 0; i < length; i++) {
            var record = fabrics['records'][i];
            var wrapper = document.getElementById('fabric-'+record['id_tkanina']);
            var show = true;
            if (!clearFilter) {
                for(var groupId in filters) {
                    var groupShow = false;
                    if(record['filtry'].hasOwnProperty(groupId)) {
                        for(j = 0; j < filters[groupId].length && !groupShow; j++) {
                            groupShow = (record['filtry'][groupId].indexOf(filters[groupId][j]) > -1);
                        }
                    }
                    show = show && groupShow;
                }
            }
            if (show) {
                removeClass(wrapper,'hidden');
            }
            else {
                addClass(wrapper,'hidden');
            }
        }
        for(i = 0; i < collectionWrappers.length; i++) {
            var wrappers = collectionWrappers[i].getElementsByClassName('sampler_item_wrapper');
            var hiddenWrappers = collectionWrappers[i].getElementsByClassName('hidden');
            if (hiddenWrappers.length >= wrappers.length) {
                addClass(collectionWrappers[i],'hidden');
            }
            else {
                removeClass(collectionWrappers[i],'hidden');
            }
        }
    });*/

    var fabricZoom = new ZoomBox('fabricZoom','fabrics');
    var basketZoom = new ZoomBox('basketZoom','basket');

    function showMessage(msg) {
        var type = msg.status == 'success' ? '' : '_error';
        messageBox.className = 'mbox'+type+'_message';
        var markup = '<div class="mbox'+type+'_message_content"><p>'+msg.message+'</p>';
        if (msg.hasOwnProperty('errors')) {
            for(var field in msg['errors']) {
                markup += '<p>'+msg.errors[field]+'</p>';
            }
        }
        if (msg.status != 'success') {
            markup += '<p id="messageHide">[ Klicken Sie in der Nähe ]</p>';
        }
        markup += '</div><div class="mbox'+type+'_message_bottom"></div>';
        messageBox.innerHTML = markup;
        messageBox.style.display = 'block';
        var messageHide = document.getElementById('messageHide');
        if (messageHide) {
            messageHide.addEventListener('click',function(e) {
                messageBox.style.display = 'none';
                messageBox.innerHTML = '';
            });
        }
    }

    function processResponse(timeout) {
        try {
            if (response === null) {
                if (timeout > 0) {
                    setTimeout(function() {
                        processResponse(timeout - 1);
                    },1000);
                }
                else {
                    submit.removeAttribute('disabled');
                    loader.style.display = 'none';
                    throw { status: 'error', message: 'Request timeout'  };
                }
                return;
            }
            submit.removeAttribute('disabled');
            loader.style.display = 'none';
            showMessage(response);
            if (response.status == 'success') {
                imie.value = '';
                nazwisko.value = '';
                ulica.value = '';
                miejscowosc.value = '';
                numer.value = '';
                kod.value = '';
                email.value = '';
            }
        }
        catch(err) {
            showMessage(err);
        }
    }

    submit.addEventListener('click',function(e) {
        response = null;
        this.setAttribute('disabled','disabled');
        loader.style.display = 'block';
        var url = resUrl+'/order.php?';
        var query = [];
        var data = {
            timestamp: new Date().getTime(),
            imie: imie.value,
            nazwisko: nazwisko.value,
            ulica: ulica.value,
            miejscowosc: miejscowosc.value,
            numer: numer.value,
            kod: kod.value,
            email: email.value,
            probki: checkedFabrics
        };
        for(var field in data) {
            var value = data[field];
            if (Object.prototype.toString.call(value) === '[object Array]') {
                for(var i = 0; i < value.length; i++) {
                    query.push(encodeURIComponent(field)+'[]='+encodeURIComponent(value[i]));
                }
            }
            else {
                query.push(encodeURIComponent(field)+'='+encodeURIComponent(value));
            }
        }
        url += query.join('&');
        var head = document.getElementsByTagName('head')[0];
        var responseScript = document.getElementById('responseScript');
        if (responseScript) {
            head.removeChild(responseScript);
        }
        responseScript = document.createElement('script');
        responseScript.setAttribute('type','text/javascript');
        responseScript.setAttribute('src',url);
        responseScript.setAttribute('id','responseScript');
        head.appendChild(responseScript);
        processResponse(5);
    });


</script>


</body></html>