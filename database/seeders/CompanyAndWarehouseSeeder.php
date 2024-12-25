<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Currency;
use App\Models\Lang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Log;
class CompanyAndWarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->delete();
        DB::table('warehouses')->delete();
        DB::table('currencies')->delete();
        DB::statement('ALTER TABLE companies AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE warehouses AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE currencies AUTO_INCREMENT = 1');
        $data = [
            [
                'type' => 'company',
                'name' => 'KAJ Cosmetics',
                'email' => 'banchiteferi@gmail.com',
                'phone' => '911646032',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'KAJ Cosmetics',
                'slug' => 'KAJ Cosmetics',
                'email' => 'banchiteferi@gmail.com',
                'phone' => '911646032',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Fidel Tutorial',
                'email' => 'Befiker@fideltutorial.com',
                'phone' => '251979795154',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Fidel Tutorial',
                'slug' => 'Fidel Tutorial',
                'email' => 'Befiker@fideltutorial.com',
                'phone' => '251979795154',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'WeMD',
                'email' => 'bmnt6554@gmail.com',
                'phone' => '984158000',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'WeMD',
                'slug' => 'WeMD',
                'email' => 'bmnt6554@gmail.com',
                'phone' => '984158000',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Sabawi Technology',
                'email' => 'betyshamesfin@gmail.com ',
                'phone' => '954842979',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Sabawi Technology',
                'slug' => 'Sabawi Technology',
                'email' => 'betyshamesfin@gmail.com ',
                'phone' => '954842979',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'TENAWO Digital Health',
                'email' => 'bethelihemkefe@gmail.com',
                'phone' => '913617281',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'TENAWO Digital Health',
                'slug' => 'TENAWO Digital Health',
                'email' => 'bethelihemkefe@gmail.com',
                'phone' => '913617281',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Save',
                'email' => 'betselotabera8@gmail.com',
                'phone' => '978147512',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Save',
                'slug' => 'Save',
                'email' => 'betselotabera8@gmail.com',
                'phone' => '978147512',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Creative wood works',
                'email' => 'beyetmk@gmail.com',
                'phone' => '911810454',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Creative wood works',
                'slug' => 'Creative wood works',
                'email' => 'beyetmk@gmail.com',
                'phone' => '911810454',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Freelansira',
                'email' => 'freelansira.info@gmail.com',
                'phone' => '911625862',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Freelansira',
                'slug' => 'Freelansira',
                'email' => 'freelansira.info@gmail.com',
                'phone' => '911625862',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Crochet',
                'email' => 'bezawitgashaw06@gmail.com',
                'phone' => '251911045341',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Crochet',
                'slug' => 'Crochet',
                'email' => 'bezawitgashaw06@gmail.com',
                'phone' => '251911045341',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Maritu',
                'email' => 'biruktawitwondimagegn@gmail.com',
                'phone' => '982864806',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Maritu',
                'slug' => 'Maritu',
                'email' => 'biruktawitwondimagegn@gmail.com',
                'phone' => '982864806',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'eBrana',
                'email' => 'dagiwondye@gmail.com',
                'phone' => '251902692950',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'eBrana',
                'slug' => 'eBrana',
                'email' => 'dagiwondye@gmail.com',
                'phone' => '251902692950',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'New Startup',
                'email' => 'eldagirma@gmail.com',
                'phone' => '945955060',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'New Startup',
                'slug' => 'New Startup',
                'email' => 'eldagirma@gmail.com',
                'phone' => '945955060',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Y-Tech',
                'email' => 'eldanageremew02@gmail.com',
                'phone' => '942408407',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Y-Tech',
                'slug' => 'Y-Tech',
                'email' => 'eldanageremew02@gmail.com',
                'phone' => '942408407',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'iLearn Ethiopia',
                'email' => 'eldanawubshet@gmail.com',
                'phone' => '251939837090',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'iLearn Ethiopia',
                'slug' => 'iLearn Ethiopia',
                'email' => 'eldanawubshet@gmail.com',
                'phone' => '251939837090',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Buzye Traditional Home Taste Food',
                'email' => 'buzatlemma@gmail.com',
                'phone' => '911269320',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Buzye Traditional Home Taste Food',
                'slug' => 'Buzye Traditional Home Taste Food',
                'email' => 'buzatlemma@gmail.com',
                'phone' => '911269320',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'ConTech',
                'email' => 'jerrykeleme@gmail.com',
                'phone' => '911103640',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'ConTech',
                'slug' => 'ConTech',
                'email' => 'jerrykeleme@gmail.com',
                'phone' => '911103640',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'WE AR FANCY',
                'email' => 'pheven01@gmail.com',
                'phone' => '954910376',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'WE AR FANCY',
                'slug' => 'WE AR FANCY',
                'email' => 'pheven01@gmail.com',
                'phone' => '954910376',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'New Startup',
                'email' => 'feventesfayee@gmail.com',
                'phone' => '953443310',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'New Startup',
                'slug' => 'New Startup',
                'email' => 'feventesfayee@gmail.com',
                'phone' => '953443310',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Hiwot',
                'email' => 'frezewdnegash@gmail.com',
                'phone' => '933005112',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Hiwot',
                'slug' => 'Hiwot',
                'email' => 'frezewdnegash@gmail.com',
                'phone' => '933005112',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Han\'s Reusable Sanitary Manufacturing',
                'email' => 'hananabdi@yahoo.com',
                'phone' => '912637344',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Han\'s Reusable Sanitary Manufacturing',
                'slug' => 'Han\'s Reusable Sanitary Manufacturing',
                'email' => 'hananabdi@yahoo.com',
                'phone' => '912637344',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'MedAccess',
                'email' => 'haymanot216@gmail.com',
                'phone' => '929518315',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'MedAccess',
                'slug' => 'MedAccess',
                'email' => 'haymanot216@gmail.com',
                'phone' => '929518315',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'SoulSpark Events',
                'email' => 'heranseda@gmail.com',
                'phone' => '251912669106',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'SoulSpark Events',
                'slug' => 'SoulSpark Events',
                'email' => 'heranseda@gmail.com',
                'phone' => '251912669106',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'Beyond Design',
                'email' => 'hermelaamdeslase24@gmail.com',
                'phone' => '251988176373',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Beyond Design',
                'slug' => 'Beyond Design',
                'email' => 'hermelaamdeslase24@gmail.com',
                'phone' => '251988176373',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'Selam Africa Festivals',
                'email' => 'hermonfikadu10@gmail.com',
                'phone' => '920807722',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Selam Africa Festivals',
                'slug' => 'Selam Africa Festivals',
                'email' => 'hermonfikadu10@gmail.com',
                'phone' => '920807722',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'Take Nine',
                'email' => 'yehilutesfa@gmail.com',
                'phone' => '912149448',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Take Nine',
                'slug' => 'Take Nine',
                'email' => 'yehilutesfa@gmail.com',
                'phone' => '912149448',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'DNA Tech',
                'email' => 'jalenetadesse12@gmail.com',
                'phone' => '939217766',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'DNA Tech',
                'slug' => 'DNA Tech',
                'email' => 'jalenetadesse12@gmail.com',
                'phone' => '939217766',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'Liyu design',
                'email' => 'mobolesa@yahoo.com',
                'phone' => '911126068',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Liyu design',
                'slug' => 'Liyu design',
                'email' => 'mobolesa@yahoo.com',
                'phone' => '911126068',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'Love and Bows',
                'email' => 'fenetgirma1234@gmail.com',
                'phone' => '909778294',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Love and Bows',
                'slug' => 'Love and Bows',
                'email' => 'fenetgirma1234@gmail.com',
                'phone' => '909778294',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'BZ Sign Language Services, Special Need Education Center',
                'email' => 'bzservices26@gmail.com',
                'phone' => '251911133413',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'BZ Sign Language Services, Special Need Education Center',
                'slug' => 'BZ Sign Language Services, Special Need Education Center',
                'email' => 'bzservices26@gmail.com',
                'phone' => '251911133413',
                'company_id' => null,  // Added company_id => null
            ],
            [
                'type' => 'company',
                'name' => 'Brightside Educational Support Institution',
                'email' => 'Brightsideedu@gmail.com ',
                'phone' => '943115994',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Brightside Educational Support Institution',
                'slug' => 'Brightside Educational Support Institution',
                'email' => 'Brightsideedu@gmail.com ',
                'phone' => '943115994',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Dahilas',
                'email' => 'meklitregassa@gmail.com',
                'phone' => '983742449',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Dahilas',
                'slug' => 'Dahilas',
                'email' => 'meklitregassa@gmail.com',
                'phone' => '983742449',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Uexit Edtech startup',
                'email' => 'Melatdufera@gmail.com',
                'phone' => '943232280',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Uexit Edtech startup',
                'slug' => 'Uexit Edtech startup',
                'email' => 'Melatdufera@gmail.com',
                'phone' => '943232280',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Loyal real estate sales consulting ',
                'email' => 'melat.bek24@gmail.com',
                'phone' => '913710085',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Loyal real estate sales consulting ',
                'slug' => 'Loyal real estate sales consulting ',
                'email' => 'melat.bek24@gmail.com',
                'phone' => '913710085',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'New Startup',
                'email' => 'haflegemel@gmail.com',
                'phone' => '942065949',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'New Startup',
                'slug' => 'New Startup',
                'email' => 'haflegemel@gmail.com',
                'phone' => '942065949',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Nadora wellness',
                'email' => 'meron.teklay.w@gmail.com',
                'phone' => '920845496',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Nadora wellness',
                'slug' => 'Nadora wellness',
                'email' => 'meron.teklay.w@gmail.com',
                'phone' => '920845496',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Weyra Hair Oil',
                'email' => 'bezawit2ab@gmail.com',
                'phone' => '945958123',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Weyra Hair Oil',
                'slug' => 'Weyra Hair Oil',
                'email' => 'bezawit2ab@gmail.com',
                'phone' => '945958123',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'WEAR CL',
                'email' => 'melakunardi1721@gmail.com',
                'phone' => '975055060',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'WEAR CL',
                'slug' => 'WEAR CL',
                'email' => 'melakunardi1721@gmail.com',
                'phone' => '975055060',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Jasper Ethiopia',
                'email' => 'Info@jasperethiopia.com',
                'phone' => '251931716695',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Jasper Ethiopia',
                'slug' => 'Jasper Ethiopia',
                'email' => 'Info@jasperethiopia.com',
                'phone' => '251931716695',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Eagle Computer Engineering',
                'email' => 'eaglecomputerengineering@gmail.com',
                'phone' => '923109911',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Eagle Computer Engineering',
                'slug' => 'Eagle Computer Engineering',
                'email' => 'eaglecomputerengineering@gmail.com',
                'phone' => '923109911',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'seri.com',
                'email' => 'ahmedrahmet76@gmail.com',
                'phone' => '921876798',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'seri.com',
                'slug' => 'seri.com',
                'email' => 'ahmedrahmet76@gmail.com',
                'phone' => '921876798',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Enderasae Training & Consultancy',
                'email' => 'enederasaye.training.consult@gmail.com',
                'phone' => '991959394',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Enderasae Training & Consultancy',
                'slug' => 'Enderasae Training & Consultancy',
                'email' => 'enederasaye.training.consult@gmail.com',
                'phone' => '991959394',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Brook Leathers',
                'email' => 'seblegtahun2020@gmail.com',
                'phone' => '913036670',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Brook Leathers',
                'slug' => 'Brook Leathers',
                'email' => 'seblegtahun2020@gmail.com',
                'phone' => '913036670',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Exclusive Lingerie',
                'email' => 'sebzewdu@gmail.com',
                'phone' => '251991167811',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Exclusive Lingerie',
                'slug' => 'Exclusive Lingerie',
                'email' => 'sebzewdu@gmail.com',
                'phone' => '251991167811',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Sina Flower',
                'email' => 'sisites1234@gmail.com',
                'phone' => '251922539817',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Sina Flower',
                'slug' => 'Sina Flower',
                'email' => 'sisites1234@gmail.com',
                'phone' => '251922539817',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Sandros electronics marketing platform',
                'email' => 'tsion706@gmail.com',
                'phone' => '933200574',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Sandros electronics marketing platform',
                'slug' => 'Sandros electronics marketing platform',
                'email' => 'tsion706@gmail.com',
                'phone' => '933200574',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Yewoiny Majet',
                'email' => 'woinlina@gmail.com',
                'phone' => '911905052',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Yewoiny Majet',
                'slug' => 'Yewoiny Majet',
                'email' => 'woinlina@gmail.com',
                'phone' => '911905052',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Yab apparel',
                'email' => 'Yeabsiramelaku8@gmail.com',
                'phone' => '912039237',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Yab apparel',
                'slug' => 'Yab apparel',
                'email' => 'Yeabsiramelaku8@gmail.com',
                'phone' => '912039237',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Hothir Tech Company',
                'email' => 'ymttaye@gmail.com',
                'phone' => '911122049',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Hothir Tech Company',
                'slug' => 'Hothir Tech Company',
                'email' => 'ymttaye@gmail.com',
                'phone' => '911122049',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'THEDAY Agro Industry PLC',
                'email' => 'yezich@thedayjam.com',
                'phone' => '251911203831',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'THEDAY Agro Industry PLC',
                'slug' => 'THEDAY Agro Industry PLC',
                'email' => 'yezich@thedayjam.com',
                'phone' => '251911203831',
                'company_id' => null, // Added company_id
            ],
            [
                'type' => 'company',
                'name' => 'Perspective Technologies',
                'email' => 'yoditmelile@gmail.com',
                'phone' => '953426465',
                'white_label_completed' => 1,
                'warehouse_id' => null, // Placeholder for warehouse ID
            ],
            [
                'type' => 'warehouse',
                'name' => 'Perspective Technologies',
                'slug' => 'Perspective Technologies',
                'email' => 'yoditmelile@gmail.com',
                'phone' => '953426465',
                'company_id' => null, // Added company_id
            ]

        ];
        $prev_company_id = "";
        $Currency_id = "";
        $enLang = Lang::where('key', 'en')->first();
        foreach ($data as $item) {
            if ($item['type'] === 'company') {
                $companyId = DB::table('companies')->insertGetId([
                    'name' => $item['name'],
                    'email' => $item['email'],
                    'phone' => $item['phone'],
                    'lang_id' => $enLang->id,
                    'white_label_completed' => $item['white_label_completed'],
                    'warehouse_id' => $item['warehouse_id'],
                ]);
                $newCurrency = new Currency();
                $newCurrency->name = 'Dollar';
                $newCurrency->code = 'USD';
                $newCurrency->symbol = '$';
                $newCurrency->company_id = $companyId;
                $newCurrency->position = 'front';
                $newCurrency->is_deletable = false;
                $newCurrency->save();
                $Currency_id = $newCurrency->id;
                $prev_company_id = $companyId; // Assign warehouse ID after creation
            } elseif ($item['type'] === 'warehouse') {
                $warehouseId = DB::table('warehouses')->insertGetId([
                    'name' => $item['name'],
                    'slug' => $item['slug'],
                    'email' => $item['email'],
                    'phone' => $item['phone'],
                    'company_id' => $prev_company_id,
                ]);
                $company = Company::find($prev_company_id);
                $company->warehouse_id = $warehouseId;
                $company->currency_id = $Currency_id;
                $company->save();
            }
        }
    }
}
