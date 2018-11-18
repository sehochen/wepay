<?php
return [
    'use_sandbox'           => true,

    'partner'               => '2088102170223271',
    'app_id'                => '2016080600181502',
    'sign_type'             => 'RSA2',

    'ali_public_key'        => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4VsaHSEMmCVo9jmXP+RqXixgMC7KvOPfkEk/HDM0EQsV9Bv7MWTrosrZWVOK+S2KR1uu2iORDA2egqzQe/ZAb7BfRHl/sVE6gumwUMUJGsmcu/lXrFAU1q9xlLNoImB6alVRMHchgcl2mX5fb181OeUP51GN/QNdGITUPUV0t7JVF5l7UYWvwUba0XS0D/6m7Li0VM1CitaEwTlohL5EloqIg3SuONO5xUS22x66KqzbUsC+NphQ058yGNGpu32M2SgXXhUC0puMl+1Ah+EGZL5yNdCfpsgFFQkUS3cJv7Rtar7DBghHze1dkhdfXBJ5w2ETMOOE1aMQwVL42s5I+wIDAQAB',
    'rsa_private_key'       => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDQsILOuakbfgmasZn9HbxUKhcmrDWStIWe0bNMGXyhotz9YCAxFU3Opi8NBIhaNlftUrmG5vxJ/kM/VzNHk5n1Gbkf0NmaWegAbb6Cn/7eeEEsSB0wmq9i78O6lgwQtqokjjBLOTlfQ1M03yVykU7ahRPs/de8mYBfVr82j49ec0deH76NbHH+0YQBJqfhvfZ8kmcZvSU8dYEkTRlQbc8QzXamJffO2sakzdSSUwOdD3IQOYA/won0EGGUMcf7XXw8r6BAQ6TpldnH2zT1bbqPz48IOJjaL648Jci8bPlHa5SwEtVAXI9putCEL86Fqn6HO+emMmahkDTZjlyX4PQBAgMBAAECggEBALJmgpxouPkIqPs2YnawaePlS39C7lVov2XCzKz8iL/A83wjJcHv/WDwTf6p5kqAdHAsLO/3HKvAkgpe6DaDJrUR9WEOcEd0HlHnf1o5nm7ejJBnYZTAV7iTUVZ7mPrcvNydNQnJdJNMgaAMNv4W3DsQUrVhV4EiFEzsYnApD53kEWdLzhRsy2ZDfYquJyIzWud1A8ZQOUDiBIo7XEl/nzx9jURAZE15bSKh35ZrEFQwdsRcBgM62G/OAF0fBwFIbt84pAfCpbYcIZWiDHdLg1TUWDjeGW0D4szpjDBawAcOc1HfQ7FssPAWy2B6EZJ/bDIJoWbtWmUJst2ff57zTcECgYEA6MXX1990BVt/wf8qpyzXaPPZzPdF6vVbYzaOKtiMng8/ZMxxyN317egHCI1wF3mtE7fKsM0WCXuyHqkpZ8IpK5m6VkbySJKo68Qb+e2Z+no32OqIXKGDNq6mnxD+5hJSJAF+juiernalCTZYP0McMUNSkM7GEuCft+iSLdGC/ikCgYEA5YN2NvZyMLN2qT7WGbxzmavVKOKp0mfp3xIv6W73FtKttr8wcgLW0zCddhTNndOubRwlMh9rk7DNf3GTmsUFZVLhwPDPo18u4GYgqvOcvb0ac1QtSfcwOLqnhz32H0yFFrM4EjGYPlp6VJMaUEcLA/q0wwdC3hzrt9IuYYLlUhkCgYEA4AVwWskqXvGVfj42bZgBZHezOMkOGDe0kUJzBpdMld300+zS4U+FHUb+ZePBakZnJR/wScHHIK9UWJ/TQpGhj92ucNRs3x2OxwEBL8LVOzQexXvKauPiZWEm6NWxi/k75n0tsRn9hciXwsrzmUbcPikdsFHgXVCjRprk/IWzvSkCgYAwbDsNv5M6CTMY5CQBzAvLuUBA3wmbVcc3BDxNkNba3to9uzq6YzT128Ts+9ih2t5rMMv8NjrZLy08HTdaKQVJamIs9eGpA1T9jS6JQtqoAXTKLlFb0KZA4ciktQLveZJ+xpMm64XGagpzO5IKq+J8FXH7z9VgzVNCNjsI4bgGSQKBgFItMDIPQFhqoQB8xXyxtDoFd0BWFe9KR3ZoVL415QtL2KUSMTFk0QGIPZUXo9gRh91M7jTxWZ2tK9jgvTJgvhhDiioSCwZZ/jkj9DY2TPYLRiFcsGar9f5M9VdcupFy0R4AkTUPTeFrwipguvjRNiE5Kks/7CCZf/2CT+014Y3w',

    'limit_pay'             => [
        //'balance',
        //'moneyFund',
    ],

    'notify_url'            => 'http://boolean.51vip.biz:27562/wepay/index.php/Notify/notify',
    'return_url'            => 'http://boolean.51vip.biz:27562/wepay/index.php/User/index',

    'return_raw'            => true,
];

