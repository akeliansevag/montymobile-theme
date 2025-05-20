<?php get_header(); ?>
<?= get_template_part('components/developers/top'); ?>
<section class="bg-white pb-5">
    <div class="container">
        <div class="white-block">
            <h3>I. SMS API Integration Example</h3>
        </div>
        <?php

        $data = [];
        $data[] = [
            'title' => '<span>POST</span> Send Campaign',
            'description' => 'This API is used to create and send an SMS campaign using a file that contains a list of recipients. The file can include destination numbers, and the campaign details (like message content, sender ID, etc.) are defined within the request. It’s an essential tool for marketers to reach a large audience with personalized content.',
            'use_case' => 'Imagine you are running a holiday sale for an e-commerce store, and you have a list of customers segmented by region. By using this API, you can upload a file with all the customer numbers and send a campaign promoting your sale to thousands of users in just a few clicks. The message can be tailored to include variables (such as names or regions), making it more personal and engaging for each recipient.',
            'info' => [
                [
                    'title' => 'API DETAILS',
                    'items' => [
                        [
                            'title' => 'Endpoint',
                            'value' => 'https://omniapis.montymobile.com/notification/api/apikey/v1/SMSCampaignApi/campaign-file',
                            'copy' => true
                        ]
                    ]
                ],
                [
                    'title' => 'AUTHORIZATION',
                    'subtitle' => 'API Key',
                    'items' => [
                        [
                            'title' => 'Key',
                            'value' => 'api-key',
                        ],
                        [
                            'title' => 'Value',
                            'value' => '{{api_key}}',
                        ],
                    ]
                ],
                [
                    'title' => 'HEADERS',
                    'items' => [
                        [
                            'title' => 'Tenant',
                            'value' => '98df9ffe-fa84-41ee-9293-33614722d952',
                        ]
                    ]
                ],
                [
                    'title' => 'BODY',
                    'items' => [
                        [
                            'title' => 'File',
                            'value' => 'Upload the file containing the list of destination numbers.',
                        ],
                        [
                            'title' => 'countryCode',
                            'value' => 'The country code of the recipients.'
                        ],
                        [
                            'title' => 'Campaign',
                            'value' => 'JSON object containing the campaign details (name, message content, sender ID, etc.).'
                        ],
                        [
                            'title' => 'LongUrlFromFile',
                            'value' => 'Boolean to indicate whether long URLs are provided in the file.'
                        ],

                    ]
                ],
                [
                    'title' => 'BODY EXAMPLE',
                    'code_block' => [
                        'inner_title' => 'json',
                        'code' => '
{
    “file”: “/C:/Users/xxx/Downloads/SampleDestinations.xlsx”,
    “countryCode”: “961”,
    “Campaign”: {
        “Name”: “test campaign”,
        “Content”: “test message”,
        “SenderId”: “43ac6548-f7d6-4570-a714-25f96f4197e4”,
        “HasShortUrl”: false,
        “Variables”: [],
        “HasBlacklistShortUrl”: false
    },
    “LongUrlFromFile”: true
}'
                    ],

                ],
                [
                    'title' => 'EXAMPLE REQUEST',
                    'code_block' => [
                        'title' => 'Send Campaign',
                        'inner_title' => 'curl',
                        'dark' => true,
                        'code' => "
curl —location 'https://omni-apis.montymobile.com/notification/api/apikey/v1/SMSCampaignApi/campaign-file' \
—header 'Tenant: 98df9ffe-fa84-41ee-9293-33614722d952' \
—form 'file=@“/C:/Users/naim.jaber/Downloads/SampleDestinationsWithHeaders.bb73721b (7) 4.xlsx”' \
—form 'countryCode=“961”' \
—form 'Campaign=“{
    \”Name\”: \”test campaign\”,
    \”Content\”: \”test message \”,
    \”SenderId\”: \”43ac6548-f7d6-4570-a714-25f96f4197e4\”,
    \”HasShortUrl\”: false,
    \”Variables\”: [],
    \”HasBlacklistShortUrl\”: false
}”’"
                    ],

                ]
            ]
        ];
        ?>

        <?= get_template_part('components/developers/info-blocks', null, ['data' => $data]) ?>

    </div>
</section>
<?php get_footer(); ?>