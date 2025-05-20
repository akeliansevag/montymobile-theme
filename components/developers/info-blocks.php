<?php
$data = "";
if ($args['data']) {
    $data = $args['data'];
}
?>

<?php if ($data): ?>
    <?php foreach ($data as $key => $d): ?>
        <div class="white-block">
            <?php if ($d['title']): ?>
                <h3><?= $d['title'] ?></h3>
            <?php endif; ?>
            <div class="row mt-4 g-4">
                <?php if ($d['description']): ?>
                    <div class="col-lg-6">
                        <div class="white-block h-100">
                            <h4>Description</h4>
                            <?= $d['description'] ?>
                        </div>

                    </div>
                <?php endif; ?>
                <?php if ($d['use_case']): ?>
                    <div class="col-lg-6">
                        <div class="white-block h-100">
                            <h4>Use Case</h4>
                            <?= $d['use_case'] ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($d['info']): ?>
                <div class="my-5">
                    <?php foreach ($d['info'] as $in): ?>
                        <div class="mt-5">
                            <h3 class="d-inline"><?= $in['title'] ?></h3>
                            <?php if ($in['subtitle']): ?>
                                <h5 class="ms-3 d-inline"><?= $in['subtitle'] ?></h5>
                            <?php endif; ?>
                            <div class="black-separator"></div>
                        </div>


                        <?php if ($in['items']): ?>
                            <div class="dev-items mt-3">
                                <div class="row g-5">
                                    <?php foreach ($in['items'] as $key2 => $it): ?>
                                        <?php
                                        $col = "col-lg-6";
                                        if (count($in['items']) == 1) {
                                            $col = "col-lg-12";
                                        }
                                        ?>
                                        <div class="<?= $col ?>">
                                            <div class="dev-item">
                                                <span><?= $it['title'] ?></span>
                                                <span><?= $it['value'] ?></span>
                                                <?php if ($it['copy']): ?>
                                                    <button class="copy-btn" onclick="copyToClipboard('jsonBlock', this)">Copy</button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<!-- <div class="white-block">
    <div class="code-block" id="jsonBlock">
        <button class="copy-btn" onclick="copyToClipboard('jsonBlock', this)">Copy</button>
        {
        "file": "C:/Users/xxx/Downloads/SampleDestinations.xlsx",
        "CountryCode": "961",
        "Campaign": {
        "Name": "test campaign",
        "Content": "test message",
        "SenderId": "43ac6548-f7d6-4570-a714-25f96f4197e4",
        "HasShortUrl": false,
        "Variables": [],
        "HasBlacklistShortUrl": false
        },
        "LongUrlFromFile": true
        }
    </div>
</div>

<div class="white-block">
    <div class="code-block dark" id="curlBlock">
        <button class="copy-btn" onclick="copyToClipboard('curlBlock', this)">Copy</button>
        curl --location 'https://omni-apis.montymobile.com/notification/api/apikey/v1/SMSCampaignApi/campaign-file' \
        --header 'Tenant: 98d9ffee-fa84-41ee-9293-33614722d952' \
        --form 'file=@"C:/Users/naim.jaber/Downloads/SampleDestinationsWithHeaders.bb73721b (7).xlsx"' \
        --form 'countryCode="961"' \
        --form 'Campaign="{
        \"Name\": \"test campaign\",
        \"Content\": \"test message\",
        \"SenderId\": \"43ac6548-f7d6-4570-a714-25f96f4197e4\",
        \"HasShortUrl\": false,
        \"Variables\": [],
        \"HasBlacklistShortUrl\": false
        }"'
    </div>
</div> -->