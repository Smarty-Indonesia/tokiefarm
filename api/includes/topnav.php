
<?php
$url = "https://api.coingecko.com/api/v3/simple/price?ids=smarty-pay&vs_currencies=idr%2Cusd&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true&include_last_updated_at=true";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// PENTING: Tambahkan User-Agent agar tidak kena 403
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// curl_close($ch);

if ($httpCode == 200) {
    $data = json_decode($response, true);
    // print_r($data);
} else {
    echo "Gagal mengambil data. Error Code: " . $httpCode;
}
?>

<!-- top bar -->
            <div class="rn-top-bar-area">
                <div class="contact-area">
                `   <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" data-bs-toggle="modal" data-bs-target="#placebidModal" tabindex="0">TOKENOMICS</a>
                        </div>
                    </div>
                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" href="https://tokie.games" target="_blank">GAME-DEFI</a>
                        </div>
                    </div>
                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" href="https://app.tokiefarm.io" target="_blank">DEFI</a>
                        </div>
                    </div>
                    
                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" href="https://www.coingecko.com/en/coins/smarty-pay" target="_blank">SPY Price: <?php echo "USD ".number_format(($data['smarty-pay']['usd']), 4, ".", ",") ?> &#126; <?php echo "IDR ".number_format(($data['smarty-pay']['idr']), 2, ".", ",") ?></a>
                        </div>
                    </div>

                    <div class="setting-option mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger icon-box">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>

                    <!-- <div id="my_switcher" class="my_switcher setting-option">
                        <ul>
                            <li>
                                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                    <img src="../assets/images/icons/sun-01.svg" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img src="../assets/images/icons/vector.svg" alt="Vector Images">
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- top bar End -->