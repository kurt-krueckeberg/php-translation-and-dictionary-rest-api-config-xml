<?php
declare(strict_types=1);
namespace LanguageTools;

class SystranConfig {
 /*
   Client ID: HJ4lFfM7gBmTbYJj0BNO5
   Client Secret: mGsJki6GLCJfPS7c1U861cC_hrLJVGoSW-EPHrnb_sQpJfY9n4wjo_jQjY_Jk3_8dxCJcPemHx_NF4Syzf77-w
   Per https://docs.systran.net/translateAPI/translation/#tag-Translation the Client ID is not passed; "Key" is passed before the actual key.
   But then what is the Cleint ID for?
  */
  public function __construct(public readonly string $endpoint = "https://api-translate.systran.net",
      public readonly array $header = array('Authorization' => 'Key bf31a6fd-f202-4eef-bc0e-1236f7e33be4')) {}
}
