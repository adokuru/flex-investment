<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WalletType::create([
            'name' => 'Bitcoin',
            'description' => 'Bitcoin is a cryptocurrency and blockchain platform that is based on the Bitcoin protocol. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'BTC',
            'getSymbol' => 'bitcoin',
            'value' => 1,
            'icon' => 'backend/assets/images/dashboard/dashboard2.png',
            'address' => 'bc1qagsee3w4u64cuveuqhteuy29sclxvagntadllj',
            'qrcode' => 'backend/assets/images/qr/Your_Bitcoin_Cash_QR_Code.png',
        ]);
        WalletType::create([
            'name' => 'Ethereum',
            'description' => 'Ethereum is a decentralized platform that runs smart contracts, a platform that runs smart contracts. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'ETH',
            'getSymbol' => 'ethereum',
            'value' => 1,
            'icon' => 'backend/assets/images/dashboard/dashboard3.png',
            'address' => '0xe0F5Bf531F2bf47fc6860ACD0cCDB09c1caF1740',
            'qrcode' => 'backend/assets/images/qr/Your_Ethereum_QR_Code.png',
        ]);
        WalletType::create([
            'name' => 'USDT',
            'description' => 'Tether is a cryptocurrency that is based on the Ethereum blockchain. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'USDT',
            'getSymbol' => 'tether',
            'value' => 1,
            'icon' => 'backend/assets/images/dashboard/dashboard4.png',
            'address' => '0xe0F5Bf531F2bf47fc6860ACD0cCDB09c1caF1740',
            'qrcode' => 'backend/assets/images/qr/Your_USDT_Cash_QR_Code.jpeg',
        ]);
        WalletType::create([
            'name' => 'Bitcoin Cash',
            'description' => 'Bitcoin Cash is a cryptocurrency that is based on the Bitcoin protocol. It is a decentralized platform that uses peer-to-peer technology to operate with no central authority or single point of failure.',
            'symbol' => 'BCH',
            'getSymbol' => 'bitcoin-cash',
            'value' => 1,
            'icon' => 'backend/assets/images/dashboard/dashboard4.png',
            'address' => 'qp6nlqfrxygkefpuwnzqudpjhdys0l9y7v3qflqj3x',
            'qrcode' => 'backend/assets/images/qr/Your_Bitcoin_Cash_QR_Code.png',
        ]);
    }
}
