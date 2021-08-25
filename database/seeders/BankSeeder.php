<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate the table.
        DB::table('banks')->truncate();
        Bank::create(['name'=>'BITCOIN','avatar'=>'bitcoin.png','account_number'=>'34gUvof8Efm6xzEUHSWjULG3HYDE3NGTz6']); 
        Bank::create(['name'=>'TRON','avatar'=>'tron.png','account_number'=>'TCq7HHrQvsnHVigcLgNgGU8PtcTHVsex4T']);
        Bank::create(['name'=>'ETHERIUM','avatar'=>'etherium.png','account_number'=>'0x98F24212A5Bff44227C1F6936674Cb571d5219b8']);
        Bank::create(['name'=>'BITCOIN CASH','avatar'=>'bitcoincash.png','account_number'=>'qz37c5htn90rurh3jt8a60m5cws0se3jggvzaz28th']);
        Bank::create(['name'=>'LITECOIN','avatar'=>'litecoin.png','account_number'=>'LiYFzciaZN4qgHgKLqq51F5V8sPiDkqVZS']);
        Bank::create(['name'=>'RIPPLE','avatar'=>'ripple.png','account_number'=>'rKPfCK1Y8xFYM3Mu13uEjBgkearFwM6EtC']);
        Bank::create(['name'=>'BNB','avatar'=>'bnb.png','account_number'=>'0xb31940915ed9fdDE7f6E81ebDCF05DF3417e1E72']);
        Bank::create(['name'=>'DOGECOIN','avatar'=>'dogecoin.png','account_number'=>'D7B7HwGZhWgFJtziksh8WoDvvhdn1Px2tk']);
        Bank::create(['name'=>'USDT','avatar'=>'usdt.png','account_number'=>'0x98F24212A5Bff44227C1F6936674Cb571d5219b8']);
        Bank::create(['name'=>'USDC','avatar'=>'usdc.png','account_number'=>'0xf37968cea08579137F1DeC8AAE6b82828DB86720']);
        Bank::create(['name'=>'PERFECT MONEY','avatar'=>'perfect_money.png','account_number'=>'U32014741']);
        //Bank::create(['name'=>'EWALLET/CELLPHONE BANKING','avatar'=>'mobile_banking.png']);
        //Bank::create(['name'=>'BANK TRANSFER','avatar'=>'fnb.png']);
       
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
