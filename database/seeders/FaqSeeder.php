<?php

namespace Database\Seeders;

use App\Models\FaqModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                "question" => "How can you print a document from your laptop at HZ?",
                "answer" => "1. Login with your username and password at https://hz.mynetpay.nl/Login.\n\n"
                    . "2. Upload the necessary files ('Choose file').\n\n"
                    . "3. Select either 'HZ printer' or 'HZ plotter'. Then register using your HZ pass and click 'print'.\n\n"
                    . "4. Ensure you have enough credit allocated to your account.\n\n"
                    . "5. When done, make sure to log out.",
            ],
            [
                "question" => "How can you scan a document and send it to your laptop at HZ?",
                "answer" => "1. Use your HZ pass to register at the printer\n\n"
                    . "2. When you see the menu, select the 'Scan' option\n\n"
                    . "3. Place the page you wish to scan on the glass\n\n"
                    . "4. Click 'Scan' -> 'Scan to me' -> 'Yes' ->'Start'\n\n"
                    . "5. When ready, click 'Start sending'."
            ],
            [
                "question" => "How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?",
                "answer" => "Go to the HZ webshop, click on 'HZ-SPORT', find the desired event and order it."
            ],
            [
                "question" => "How can you book a project space?",
                "answer" => "Go to my learn, then personal menu, click on 'Selfservice portal', click on 'Reservations', click on 'Reserve a room'."
            ],
            [
                "question" => "What are the instructions if you want to park your car at the HZ parking lot?",
                "answer" => "You need to provide your HZ pass at the barriers and you will be allowed to enter."
            ]
        ];

        foreach ($faqs as $faq) {
            FaqModel::create($faq);
        }
    }
}
