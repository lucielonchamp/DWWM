<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail 
{
    private $api_key = '319237a8f16f906ba725cb71a5e03bd0';
    private $api_key_secret = '96957a1db2036cb5af13101d4f2d58bb';


    public function send($to_email, $to_name, $subject, $content)
    {
        $mj = new Client($this->api_key, $this->api_key_secret,true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "lucie.lonchamp@gmail.com",
                        'Name' => "Ma Boutique"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name,
                        ]
                    ],
                    'TemplateID' => 4751499,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    "Variables" => [
                        "content" => $content,
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }
}