<?php
require_once '../vendor/autoload.php';
define('PROJECT_ROOT', dirname(__DIR__));
$dotenv = Dotenv\Dotenv::createImmutable(PROJECT_ROOT);
$dotenv->load();
require_once 'helper.php';
return [
    "cities" => [
        "ADANA",
        "ADIYAMAN",
        "AFYONKARAHİSAR",
        "AĞRI",
        "AMASYA",
        "ANKARA",
        "ANTALYA",
        "ARTVİN",
        "AYDIN",
        "BALIKESİR",
        "BİLECİKK",
        "BİNGÖL",
        "BİTLİS",
        "BOLU",
        "BURDUR",
        "BURSA",
        "ÇANAKKALE",
        "ÇANKIRI",
        "ÇORUM",
        "DENİZLİ",
        "DİYARBAKIR",
        "EDİRNE",
        "ELAZIĞ",
        "ERZİNCAN",
        "ERZURUM",
        "ESKİŞEHİR",
        "GAZİANTEP",
        "GİRESUN",
        "GÜMÜŞHANE",
        "HAKKARİ",
        "HATAY",
        "ISPARTA",
        "MERSİN",
        "İSTANBUL",
        "İZMİR",
        "KARS",
        "KASTAMONU",
        "KAYSERİ",
        "KIRKLARELİ",
        "KIRŞEHİR",
        "KOCAELİ",
        "KONYA",
        "KÜTAHYA",
        "MALATYA",
        "MANİSA",
        "KAHRAMANMARAŞ",
        "MARDİN",
        "MUĞLA",
        "MUŞ",
        "NEVŞEHİR",
        "NİĞDE",
        "ORDU",
        "RİZE",
        "SAKARYA",
        "SAMSUN",
        "SİİRT",
        "SİNOP",
        "SİVAS",
        "TEKİRDAĞ",
        "TOKAT",
        "TRABZON",
        "TUNCELİ",
        "ŞANLIURFA",
        "UŞAK",
        "VAN",
        "YOZGAT",
        "ZONGULDAK",
        "AKSARAY",
        "BAYBURT",
        "KARAMAN",
        "KIRIKKALE",
        "BATMAN",
        "ŞIRNAK",
        "BARTIN",
        "ARDAHAN",
        "IĞDIR",
        "YALOVA",
        "KARABüK",
        "KİLİS",
        "OSMANİYE",
        "DÜZCE"
    ]
];