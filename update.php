<?php

$repos = [
    /*
    "Individual/Family/"      => [
        [
            "et_title" => "Perekonnaseisutoimingute seadus",
            "et"       => "https://www.riigiteataja.ee/akt/129062014005.txt",
            "en_title" => "Vital Statistics Registration Act",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/509072014015"
        ],
        [
            "et_title" => "Abieluvararegistri seadus",
            "et"       => "https://www.riigiteataja.ee/akt/123122013036.txt",
            "en_title" => "Marital Property Register Act",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/520012014005",
        ],
        [
            "et_title" => "Perekonnaseadus",
            "et"       => "https://www.riigiteataja.ee/akt/129062014103.txt",
            "en_title" => "Family Law Act",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/522082014005",
        ],
        [
            "et_title" => "Rahvusvahelise eraõiguse seadus",
            "et"       => "https://www.riigiteataja.ee/akt/13242136.txt",
            "en_title" => "Private International Law Act",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/513112013009",
        ],
        [
            "et_title" => "Kooseluseadus",
            "et"       => "https://www.riigiteataja.ee/akt/116102014001.txt",
            "en_title" => "Registered Partnership Act",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/527112014001",
            "from"     => 2016
        ],
        [
            "et_title" => "Lastekaitseseadus",
            "et"       => "https://www.riigiteataja.ee/akt/113122013012.txt",
            "en_title" => "Child Protection Act",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/531102014002"
        ],
        [
            "et_title" => "Lastekaitseseadus",
            "et"       => "https://www.riigiteataja.ee/akt/106122014001.txt",
            "en_title" => "Child Protection Act",
            "from"     => 2016
        ],
    ],
*/
    "Individual/Property/"                => [
        [
            "et_title" => "Asjaõigusseaduse rakendamise seadus",
            "et"       => "https://www.riigiteataja.ee/akt/113032014084.txt",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/528032014004",
            "en_title" => "Law of Property Act Implementation Act",
        ],
        [
            "et_title" => "Asjaõigusseadus",
            "et"       => "https://www.riigiteataja.ee/akt/108072014007.txt",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/510072014007",
            "en_title" => "Law of Property Act",
        ]
    ],
    "Government/Constitution/"            => [
        [
            "et_title" => "Eesti Vabariigi põhiseadus",
            "et"       => "https://www.riigiteataja.ee/akt/127042011002.txt",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/530102013003",
            "en_title" => "The Constitution of the Republic of Estonia",
        ]
    ],

    "Administrative/EducationAndScience/" => [
        [
            "et_title" => "Eesti Vabariigi haridusseadus",
            "et"       => "https://www.riigiteataja.ee/akt/120062014005.txt",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/526082014004",
            "en_title" => "Republic of Estonia Education Act",
        ]
    ],

    "Work/Employment/"                     => [
        [
            "et_title" => "Töölepingu seadus",
            "et"       => "https://www.riigiteataja.ee/akt/122122012030.txt",
            "en"       => "https://www.riigiteataja.ee/en/tolge/text/530102013061",
            "en_title" => "Employment Contracts Act"
        ]
    ]
];

foreach ($repos as $path => $list) {
    foreach ($list as $law) {
        if (isset($law['from'])) {
            continue;
        }

        echo $law['et_title'] . "\n";
        file_put_contents($path . $law['en_title'] . '.et.txt', file_get_contents($law['et']));
        file_put_contents($path . $law['en_title'] . '.en.txt', file_get_contents($law['en']));
    }
}