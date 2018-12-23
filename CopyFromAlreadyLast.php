<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dert.css">
    <link rel="stylesheet" type="text/css" href="tasa.css">
    <style type="text/css">
        .price { display: block; text-align: center; padding-top: 90px; font-weight: normal; }
        .price h5 { font-size: 1.4em; margin: 0 0 2px 0; font-weight: normal; }
        .price .error { color: #b9270b; }
        .basket { overflow: hidden; }
        .basket .table-wrapper { max-height: 200px; overflow: auto; float: left; width: 93%; }
        .basket table { float: right; width: 93%; }
        .basket table tbody { font-size: 12px; }
        .basket table tbody td { vertical-align: left; padding-top: 5px;}
        .basket .total { font-size: 13px; text-align: right; float: right; padding-top: 25px;}
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
                <div class="clear"></div>

                <div class="form">
                    <div class="form-field">
                        <label for="mWidth">Breite in mm</label>
                        <select id="mWidth">
                            <option value="400">400</option>
                            <option value="500">500</option>
                            <option value="600">600</option>
                            <option value="700">700</option>
                            <option value="800">800</option>
                            <option value="900">900</option>
                            <option value="1000">1000</option>
                            <option value="1100">1100</option>
                            <option value="1200">1200</option>
                            <option value="1300">1300</option>
                            <option value="1400">1400</option>
                            <option value="1500">1500</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="mHeight">Höhe in mm</label>
                        <select id="mHeight">
                            <option value="600">600</option>
                            <option value="700">700</option>
                            <option value="800">800</option>
                            <option value="900">900</option>
                            <option value="1000">1000</option>
                            <option value="1100">1100</option>
                            <option value="1200">1200</option>
                            <option value="1300">1300</option>
                            <option value="1400">1400</option>
                            <option value="1500">1500</option>
                            <option value="1600">1600</option>
                            <option value="1700">1700</option>
                            <option value="1800">1800</option>
                            <option value="1900">1900</option>
                            <option value="1900">2000</option>
                            <option value="1900">2100</option>
                            <option value="2200">2200</option>
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
                            <optgroup  label="CARA PERL - PREISGRUPPE 0">
                                <option value="1" >CARA PERL 051 Elfenbein</option>
                                <option value="2">CARA PERL 052 Latte</option>
                                <option value="3">CARA PERL 053 Hellbeige</option>
                                <option value="4">CARA PERL 054 Braun</option>
                                <option value="5">CARA PERL 055 Anthrazit</option>
                                <option value="6">CARA PERL 056 Dunkelgrau</option>
                                <option value="7">CARA PERL 057 Cream</option>
                                <option value="8">CARA PERL 058 Gelb</option>
                                <option value="9">CARA PERL 062 Violett</option>
                                <option value="10">CARA PERL 063 Apfelgrün</option>
                                <option value="11">CARA PERL 066 Weiß</option>
                            </optgroup>
                            <optgroup label="UNICOLOR - PREISGRUPPE 1">
                                <option value="12">UNICOLOR 079 Himbeerrot</option>
                                <option value="13">UNICOLOR 084 Hellbraun</option>
                                <option value="14">UNICOLOR 085 Anthrazit</option>
                                <option value="15">UNICOLOR 087 Gelb</option>
                                <option value="16">UNICOLOR 090 Apfelgrün</option>
                                <option value="17">UNICOLOR 1200 Weiß</option>
                                <option value="18">UNICOLOR 1201 Hellgelb</option>
                                <option value="19">UNICOLOR 1202 Lachscream</option>
                                <option value="20">UNICOLOR 1203 Beige</option>
                                <option value="21">UNICOLOR 1206 Cream</option>
                                <option value="22">UNICOLOR 1208 Helllachscr.</option>
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
                <img id="bCalculate" class="button1" src="/img/buttonCal.jpg">
            </div>

            <div class="kalkb">
                <div class="clear"></div>
                <div class="price">
                    <div id="priceWrapper" style="display: block;">
                        <h5><span id="mPrice">44</span>,- Euro</h5>
                        <span>inkl. MwSt.</span>
                    </div>
                    <span id="mError" class="error"></span>
                </div>
                <img id="bAdd" class="button2" src="/img/ButtonAdd.jpg">
            </div>

            <div class="kalkc">
                <div class="clear"></div>
                <div class="basket">
                    <div class="table-wrapper">
                        <table>
                            <tbody id="mList"></tbody>
                        </table>
                    </div>
                    <div class="total">
                        <i>Gesamtbetrag: <span  id="mTotal">0</span> Euro</i> inkl. MwSt.
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
                        <strong>IMPORTANT!</strong>Enter your eBay name and press "Send". <br>The detailed purchase description can be found under the "i" icon.
                    </p>
                </div>
                <div class="clear"></div>
                <input type="text" style="width:250px" id="nickname" placeholder="Please Enter Your eBay Username" value="">
                <img id="bSend" class="button4" src="/img/ButtonSend.jpg">
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
                    <span class="tytul">Cara Perl</span> - Preisgruppe 0 | lichtdurchlässig | blickdicht
                    <div class="clear"> </div>

                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20051%20Elfenbein.jpeg" alt="Plissee Beige" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20052%20Latte.jpeg" alt="Plissee Gelb" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20053%20Hellbeige.jpeg" alt="Plissee Cream" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20054%20Braun.jpeg" alt="Plissee Hellbeige" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20055%20Anthrazit.jpeg" alt="Plissee Lemon" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20056%20Dunkelgrau.jpeg" alt="Plissee Stahlblau" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20057%20Cream.jpeg" alt="Plissee Braun" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20058%20Gelb.jpeg" alt="Plissee Orange" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20062%20Violett.jpeg" alt="Plissee Blau" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20063%20Apfelgrün.jpeg" alt="Plissee Rosaviolet" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20One/CARA%20PERL%20066%20Weiß.jpeg" alt="Plissee Weiß" title="Click image to enlarge and see detailed information."></a>

                    <div class="cl"> </div>
                    <span class="tytul">Allegto</span> - Preisgruppe 1 | lichtdurchlässig | blickdicht Außenseite mit Reflexbeschichtung
                    <div class="clear"> </div>

                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%20084%20Hellbraun.jpeg" alt="Plissee Perlex Elfenbein" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%20085%20Anthrazit.jpeg" alt="Plissee Perlex Latte" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%20087%20Gelb.jpeg" alt="Plissee Perlex Hellbeige" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%20090%20Apfelgrün.jpeg" alt="Plissee Perlex Braun" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%201200%20Weiß.jpeg" alt="Plissee Perlex Anthrazit" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%201201%20Hellgelb.jpeg" alt="Plissee Perlex Dunkelgrau" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%201202%20Lachscream.jpeg" alt="Plissee Perlex Cream" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%201203%20Beig.jpeg" alt="Plissee Perlex Gelb" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%201206%20Cream.jpeg" alt="Plissee Perlex Violet" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNICOLOR%201208%20Helllachscr..jpeg" alt="Plissee Perlex Apfelgrün" title="Click image to enlarge and see detailed information."></a>
                    <a href="..." target="_blank"><img src="img/Renkler/Type%20Two/UNIREFLEX%202150%20Weiß.jpeg" alt="Plissee Perlex Weiß" title="Click image to enlarge and see detailed information."></a>

                    <div class="cl">
                        <img src="img//de-montage-plissee1-page-001.jpg" style="width:1100px;height:700px;">
                        <img src="img/de-montage-plissee1-page-002.jpg" style="width:1100px;height:700px;">
                        <img src="img/de-montage-plissee2-page-001.jpg" style="width:1100px;height:700px;">
                        <img src="img/de-montage-plissee2-page-002.jpg" style="width:1100px;height:700px;">
                    </div>


                    <p class="achtung">ACHTUNG! Farben werden individuell sehr unterschiedlich wahrgenommen, die Darstellung variiert zudem je nach genutzter Computerhardware.</br> Farbabweichungen zwischen Abbildung und realem Stoff sind deshalb unvermeidbar! Bestellen Sie deswegen unbedingt kostenlose Stoffmuster vor dem Kauf.</p>

                </div>
        </section>


    </div>
</div>
<script type="text/javascript">

    var materialPriceGroup =
        {
            "1":"0",
            "2":"0",
            "3":"0",
            "4":"0",
            "5":"0",
            "6":"0",
            "7":"0",
            "8":"0",
            "9":"0",
            "10":"0",
            "11":"0",
            "12":"1",
            "13":"1",
            "14":"1",
            "15":"1",
            "16":"1",
            "17":"1",
            "18":"1",
            "19":"1",
            "20":"1",
            "21":"1",
            "22":"1"

        };
    var priceWidhtHeight = {"0": {"60": {"40":34, "50":39, "60":42, "70":46, "80":49, "90":53, "100":59, "110":63, "120":67, "130":71, "140":74, "150":78}, "70": {"40":35, "50":41, "60":44, "70":48, "80":51, "90":55, "100":62, "110":65, "120":69, "130":73, "140":77, "150":81}, "80": {"40":37, "50":42, "60":46, "70":50, "80":53, "90":57, "100":64, "110":68, "120":72, "130":76, "140":80, "150":84}, "90": {"40":38, "50":44, "60":47, "70":52, "80":55, "90":60, "100":66, "110":70, "120":74, "130":79, "140":83, "150":87}, "100": {"40":40, "50":45, "60":49, "70":54, "80":57, "90":62, "100":68, "110":73, "120":77, "130":81, "140":86, "150":90}, "110": {"40":41, "50":47, "60":51, "70":56, "80":59, "90":64, "100":71, "110":75, "120":79, "130":84, "140":88, "150":93}, "120": {"40":42, "50":49, "60":53, "70":58, "80":61, "90":66, "100":73, "110":77, "120":82, "130":87, "140":91, "150":96}, "130": {"40":44, "50":50, "60":54, "70":60, "80":63, "90":68, "100":75, "110":80, "120":84, "130":89, "140":94, "150":99}, "140": {"40":45, "50":52, "60":56, "70":62, "80":65, "90":70, "100":77, "110":82, "120":87, "130":92, "140":97, "150":102}, "150": {"40":47, "50":53, "60":58, "70":63, "80":67, "90":72, "100":80, "110":85, "120":89, "130":95, "140":100, "150":105}, "160": {"40":48, "50":55, "60":59, "70":65, "80":69, "90":75, "100":82, "110":87, "120":92, "130":97, "140":103, "150":108}, "170": {"40":49, "50":57, "60":61, "70":67, "80":71, "90":77, "100":84, "110":89}, "180": {"40":51, "50":58, "60":63, "70":69, "80":73, "90":79, "100":86, "110":92}, "190": {"40":52, "50":60, "60":65, "70":71, "80":75, "90":81, "100":89, "110":94}, "200": {"40":54, "50":61, "60":66, "70":73, "80":77, "90":83, "100":91, "110":96}, "210": {"40":55, "50":63, "60":68, "70":75, "80":79, "90":85, "100":93, "110":99}, "220": {"40":56, "50":65, "60":70, "70":77, "80":81, "90":87, "100":95, "110":101}}, "1": {"60": {"40":35, "50":41, "60":44, "70":49, "80":52, "90":57, "100":63, "110":67, "120":71, "130":76, "140":80, "150":83}, "70": {"40":37, "50":43, "60":47, "70":52, "80":55, "90":59, "100":66, "110":70, "120":74, "130":79, "140":83, "150":87}, "80": {"40":39, "50":45, "60":49, "70":54, "80":57, "90":62, "100":69, "110":73, "120":78, "130":82, "140":87, "150":91}, "90": {"40":40, "50":47, "60":51, "70":56, "80":60, "90":65, "100":72, "110":76, "120":81, "130":86, "140":91, "150":95}, "100": {"40":42, "50":49, "60":53, "70":59, "80":63, "90":67, "100":75, "110":79, "120":84, "130":89, "140":94, "150":99}, "110": {"40":44, "50":51, "60":55, "70":61, "80":65, "90":70, "100":77, "110":82, "120":87, "130":93, "140":98, "150":103}, "120": {"40":45, "50":53, "60":57, "70":63, "80":68, "90":73, "100":80, "110":86, "120":91, "130":96, "140":102, "150":107}, "130": {"40":47, "50":55, "60":59, "70":66, "80":70, "90":76, "100":83, "110":89, "120":94, "130":100, "140":105, "150":111}, "140": {"40":49, "50":56, "60":61, "70":68, "80":73, "90":78, "100":86, "110":92, "120":97, "130":103, "140":109, "150":115}, "150": {"40":50, "50":58, "60":64, "70":70, "80":75, "90":81, "100":89, "110":95, "120":101, "130":107, "140":113, "150":119}, "160": {"40":52, "50":60, "60":66, "70":73, "80":78, "90":84, "100":92, "110":98, "120":104, "130":110, "140":116, "150":122}, "170": {"40":54, "50":62, "60":68, "70":75, "80":80, "90":87, "100":95, "110":101}, "180": {"40":55, "50":64, "60":70, "70":77, "80":83, "90":89, "100":97, "110":104}, "190": {"40":57, "50":66, "60":72, "70":80, "80":85, "90":92, "100":100, "110":107}, "200": {"40":59, "50":68, "60":74, "70":82, "80":88, "90":95, "100":103, "110":110}, "210": {"40":60, "50":70, "60":76, "70":84, "80":90, "90":97, "100":106, "110":113}, "220": {"40":62, "50":72, "60":78, "70":87, "80":93, "90":100, "100":109, "110":116}}, "2": {"60": {"40":38, "50":44, "60":48, "70":54, "80":58, "90":62, "100":69, "110":74, "120":79, "130":84, "140":88, "150":93}, "70": {"40":40, "50":47, "60":51, "70":57, "80":61, "90":66, "100":73, "110":78, "120":83, "130":88, "140":93, "150":98}, "80": {"40":42, "50":49, "60":54, "70":60, "80":64, "90":70, "100":77, "110":82, "120":88, "130":93, "140":98, "150":104}, "90": {"40":44, "50":52, "60":57, "70":63, "80":68, "90":73, "100":81, "110":87, "120":92, "130":98, "140":104, "150":109}, "100": {"40":46, "50":54, "60":60, "70":66, "80":71, "90":77, "100":85, "110":91, "120":97, "130":103, "140":109, "150":115}, "110": {"40":48, "50":57, "60":62, "70":69, "80":74, "90":81, "100":89, "110":95, "120":101, "130":108, "140":114, "150":120}, "120": {"40":51, "50":59, "60":65, "70":72, "80":78, "90":84, "100":93, "110":99, "120":106, "130":113, "140":119, "150":125}, "130": {"40":53, "50":62, "60":68, "70":75, "80":81, "90":88, "100":97, "110":103, "120":110, "130":117, "140":124, "150":131}, "140": {"40":55, "50":64, "60":71, "70":79, "80":85, "90":92, "100":100, "110":108, "120":115, "130":122, "140":129, "150":136}, "150": {"40":57, "50":67, "60":73, "70":82, "80":88, "90":96, "100":104, "110":112, "120":119, "130":127, "140":134, "150":142}, "160": {"40":59, "50":69, "60":76, "70":85, "80":91, "90":99, "100":108, "110":116, "120":124, "130":132, "140":140, "150":147}, "170": {"40":61, "50":72, "60":79, "70":88, "80":95, "90":103, "100":112, "110":120}, "180": {"40":63, "50":74, "60":82, "70":91, "80":98, "90":107, "100":116, "110":124}, "190": {"40":65, "50":77, "60":84, "70":94, "80":101, "90":110, "100":120, "110":129}, "200": {"40":67, "50":79, "60":87, "70":97, "80":105, "90":114, "100":124, "110":133}, "210": {"40":69, "50":82, "60":90, "70":100, "80":108, "90":118, "100":128, "110":137}, "220": {"40":71, "50":84, "60":93, "70":103, "80":111, "90":121, "100":132, "110":141}}, "3": {"60": {"40":41, "50":48, "60":52, "70":58, "80":63, "90":68, "100":75, "110":81, "120":86, "130":92, "140":97, "150":102}, "70": {"40":43, "50":51, "60":56, "70":62, "80":67, "90":73, "100":80, "110":86, "120":92, "130":98, "140":103, "150":109}, "80": {"40":46, "50":54, "60":59, "70":66, "80":71, "90":77, "100":85, "110":91, "120":97, "130":104, "140":110, "150":116}, "90": {"40":48, "50":57, "60":63, "70":70, "80":75, "90":82, "100":90, "110":97, "120":103, "130":110, "140":117, "150":123}, "100": {"40":51, "50":60, "60":66, "70":74, "80":80, "90":87, "100":95, "110":102, "120":109, "130":116, "140":123, "150":130}, "110": {"40":53, "50":63, "60":69, "70":78, "80":84, "90":91, "100":100, "110":107, "120":115, "130":122, "140":130, "150":137}, "120": {"40":56, "50":66, "60":73, "70":82, "80":88, "90":96, "100":105, "110":113, "120":120, "130":129, "140":136, "150":144}, "130": {"40":58, "50":69, "60":76, "70":85, "80":92, "90":101, "100":110, "110":118, "120":126, "130":135, "140":143, "150":151}, "140": {"40":61, "50":72, "60":80, "70":89, "80":97, "90":105, "100":115, "110":123, "120":132, "130":141, "140":149, "150":158}, "150": {"40":63, "50":75, "60":83, "70":93, "80":101, "90":110, "100":120, "110":129, "120":138, "130":147, "140":156, "150":165}, "160": {"40":66, "50":78, "60":87, "70":97, "80":105, "90":115, "100":125, "110":134, "120":143, "130":153, "140":163, "150":172}, "170": {"40":68, "50":81, "60":90, "70":101, "80":109, "90":119, "100":130, "110":139}, "180": {"40":71, "50":84, "60":93, "70":105, "80":113, "90":124, "100":135, "110":145}, "190": {"40":73, "50":87, "60":97, "70":109, "80":118, "90":129, "100":140, "110":150}, "200": {"40":76, "50":90, "60":100, "70":112, "80":122, "90":133, "100":144, "110":156}, "210": {"40":78, "50":93, "60":104, "70":116, "80":126, "90":138, "100":149, "110":161}, "220": {"40":81, "50":96, "60":107, "70":120, "80":130, "90":143, "100":154, "110":166}}, "4": {"60": {"40":44, "50":52, "60":58, "70":64, "80":70, "90":76, "100":84, "110":90, "120":96, "130":102, "140":108, "150":114}, "70": {"40":47, "50":56, "60":62, "70":69, "80":75, "90":82, "100":90, "110":97, "120":103, "130":110, "140":117, "150":124}, "80": {"40":50, "50":60, "60":66, "70":74, "80":80, "90":88, "100":96, "110":103, "120":111, "130":118, "140":125, "150":133}, "90": {"40":53, "50":63, "60":70, "70":79, "80":86, "90":94, "100":103, "110":110, "120":118, "130":126, "140":134, "150":142}, "100": {"40":56, "50":67, "60":75, "70":84, "80":91, "90":100, "100":109, "110":117, "120":125, "130":134, "140":142, "150":151}, "110": {"40":59, "50":71, "60":79, "70":89, "80":96, "90":105, "100":115, "110":124, "120":133, "130":142, "140":151, "150":160}, "120": {"40":63, "50":75, "60":83, "70":94, "80":102, "90":111, "100":122, "110":131, "120":140, "130":150, "140":159, "150":169}, "130": {"40":66, "50":79, "60":88, "70":99, "80":107, "90":117, "100":128, "110":138, "120":148, "130":158, "140":168, "150":178}, "140": {"40":69, "50":82, "60":92, "70":103, "80":112, "90":123, "100":134, "110":145, "120":155, "130":166, "140":176, "150":187}, "150": {"40":72, "50":86, "60":96, "70":108, "80":118, "90":129, "100":140, "110":151, "120":163, "130":174, "140":185, "150":196}, "160": {"40":75, "50":90, "60":101, "70":113, "80":123, "90":135, "100":147, "110":158, "120":170, "130":182, "140":193, "150":205}, "170": {"40":78, "50":94, "60":105, "70":118, "80":129, "90":141, "100":153, "110":165}, "180": {"40":81, "50":97, "60":109, "70":123, "80":134, "90":147, "100":159, "110":172}, "190": {"40":84, "50":101, "60":113, "70":128, "80":139, "90":153, "100":166, "110":179}, "200": {"40":87, "50":105, "60":118, "70":133, "80":145, "90":159, "100":172, "110":186}, "210": {"40":90, "50":109, "60":122, "70":138, "80":150, "90":165, "100":178, "110":193}, "220": {"40":93, "50":113, "60":126, "70":142, "80":155, "90":171, "100":185, "110":199}}};

    var montage = {
        "A":{"label":"in der Glasleiste","price":0,"id":2},
        "B":{"label":"Glasleistenwinkeln","price":8,"id":3},
        "C":{"label":"mit Klemmtr\u00e4gern","price":12,"id":4}};

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

            var priceGroup = materialPriceGroup[mMaterial.value];
            if (!priceGroup) {
                throw { message: 'Tragen Sie bitte die Maße in Millimetern ein' };
            }
            /*if (ww < priceGroup['min_width'] || ww > priceGroup['max_width'] || hh < priceGroup['min_height'] || hh > priceGroup['max_height']) {
                throw { message: 'Tragen Sie bitte die Maße in Millimetern ein' };
            }*/
            var price = parseFloat(priceWidhtHeight[priceGroup][hh][ww]);
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
        var material = mMaterial.value;
        var mm = mMaterial.options[mMaterial.selectedIndex].text;
        tr.setAttribute('data-price',price);
        tr.setAttribute('data-width',parseInt(mWidth.value));
        tr.setAttribute('data-height',parseInt(mHeight.value));
        tr.setAttribute('data-color',mColor.value);
        tr.setAttribute('data-material',material.id);
        tr.setAttribute('data-montage',mMontage.value);
        td.innerHTML = 'B ' + mWidth.value + ' x H ' + mHeight.value + ' mm, ' + mColor.value + ', '+ mm+', Montage ' + mMontage.value + ', ' + price +' &#8364;';
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