<?php 
return [
    'meta'     => [
        'name'    => 'Neubox',
        'version' => '1.0',
        'logo'    => 'logo.png',
    ],
    'settings' => [
        // whois-types : If it is desired to indicate that (registrant, administrative, technical, billing) communication types are supported in the module, "true" must be defined.
        'whois-types'      => true,

        // dns-record-types : If the addDnsRecord() function is defined in the module class, the indices you define here will determine the dns types.
        'dns-record-types' => [
            'A',
            'AAAA',
            'MX',
            'CNAME',
            'TXT',
        ],
        // dc-fields : You can use it to obtain some private information from the customer before registering or transferring the domain name.
        'doc-fields' => [],

        'apikey' 					=> '',
				'privatekey' 			=> '',
				'neuboxuseremail' => '',
				'apiurl' 					=> '',
				'useragent' 			=> '',
        'test-mode'         => 0,
        'whidden-amount'    => 0,
        'whidden-currency'  => 4,
        'adp'               => false,
        'cost-currency'     => 4
    ],
];
