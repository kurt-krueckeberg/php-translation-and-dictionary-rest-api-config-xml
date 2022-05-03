<?php
declare(strict_types=1);
namespace LanguageTools;

class DeeplConfig {
    
   public function __construct(
                      public readonly array $header = [ "Authorization" => "DeepL-Auth-Key 7482c761-0429-6c34-766e-fddd88c247f9:fx"],
                      public readonly string $endpoint = "https://api-free.deepl.com",
                     ) {}
            
}
