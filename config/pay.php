<?php


return [
    'alipay' => [
        'app_id'         => '2016101300675005',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtRSNQAQhPahg3FibxN38iZ5uz+fNVUGhDiM4Dgvj2pY7JIzqJSBnoYQAc8VWtBuA1MDB7Z05DENbQK5GiYxrVqHZ8LzpuVjCOO77l//kX3dklsnemMnTeQlk9wpMFyonQ0pEMoVDYlpNlLMrMRkDxM4CRzkx+M8VgTlsseP2CXwoSGkXelaaqXRGz1VKydmv7TpkeyTtkypDzLP0Hc9GfcRkcCZup2sgb93YYBhRvB4u56p1GJtlds7jCzQvayafFqwlWn34EMqiDytLDq+tvmnmgP2U/1lsPDM3pMEpr5+V9SOjg6+Gr9hwOVVWgz947yKlRxKgAC3387jndvdIaQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAkcYoDgHIlZEf5uVFC0HHGA4AtzVSR3Y9+c/niIjYiNTumPCb6FkKvFwdCSSqqCvd5bFPBZjaBRuTIlwltqcflN95t7S3yq59sM7NAhyHKAG8XkNHpmNOeKDrFl97MAd7ETDRvqj3DEXSBTmQS/4cgeKaPy6jN4GMFn1S5AnwMWUkbcyxzzGlkDXYj1pm/GhCmxccsgG8iOYNzTMzewVjcT7eS/guRynkmfeGeYBJYrFMlT6v/h8IZCWDVmaLpj1qzZ6sWTHeWxVNvPB8dCtmgd/jvmOwjG6nN1ZKqYXJGOU6OwJYr5F8DdhOMJBYYYPsEqo5hcHNNrkhYk7M6FchBwIDAQABAoIBACGfXuW8K5Oz4XPUNdSe21kFAc1AEzZAY5MXDQRE7AzDcDT+ajdxMjS32kqdlm8rjwbHmr5jvwWmko0+S8SRT4t68AwbNrkc/gil6ksuYU4s+FGVmxUZmqPgGdkTNMqjLxOL+xTKzBCcmhBycoHUnqamqYUhMKxAyRr21QOb9zatDVNQ23gPhBqkouRrJjBRWiHg3OfWSlSGTjelVF4xNqaMxMk5umteS+IGP8WqtdToCqLt8VMR4aXwNLExxAVGT656JWrNzdFgAyjr0Nt4qKBLkGAyiLJSx49h7fvDIPVTwd/fFgWZWoHf+4FQy9ihN6KH3hyB8in8ZLnbfez0G2ECgYEA+nRgl88Y13q08aTreaX/ZAJHdgxn0nqPTAcs0rIqTUN89Fx5uRC795mB8WfSWQaWToY4inRCjZz+YX5JeS9EuqYy5aGGBVp8pVgN6VVAkuMpPUy+FG3VNl10D/pneDZ2eev6ckmsxqRmFvyr/7XnZ9uS6em9TgR9/+2Q6ZWVbJUCgYEAlQBuOOAjtXTwyX9deRmVmyNctkian2xsQLDC5/CGu4r7PEboRzJaSwX6ZT57rqfgvcnH9FcRTouB/5xBSz/baDKiplIApq7vbV/SWqKmvlUkPyPlizyvoOlwd0kC3jAwcPz6YxnULXcWiUj0cxDebPvTFUbL0ZKV7Ybko/npVCsCgYEA1FOlMA4aeVNF4zZ1iwP3p8lm2+VYf0/3+/R5Q4ZX5ni4jlF3wDU3pYk2aHokEeVLt/aCKJ63bWcTIYP2tg4krjgIHjT5ccBsu6AS6yWjQOPkKlvNKXSTtSs1IfafkYJanrI3+HwNRbpJ8mLzTi3gqGO2AShvnJyiVT4KBH0T2KECgYB/g6zQc9Fbe0aNyrgd6S1FZU/0l9Hr2YgTHLLQd+F2Ioy7mxsxwv/O8MDHYF/MqtME2OiMTO78vxtzuy+NzIpic+MKX2c7Pr6cZcLJ2iTFAmxQtNG/BSJwnRaonw0bRTZPm9BUe0g/2Iiq2IqK5sbTkfelX78SDVbNvgFx63ApnQKBgQDYIlqxFt/yhZZEaZpOSPZIv6r215Eb0Ckj0jILT8OXWbd/8RNZRqls3MEaD61sBTcnUoPIJ6G9IR0cNFHDGmeKXZTT3nTieS4+bEPNxnpfScw9jCfGPuVquWiYHTz1TiLqZ5opUaHOgNrDl9zhtMONMgqdOrdSywrdpE38h4t7JQ==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];

