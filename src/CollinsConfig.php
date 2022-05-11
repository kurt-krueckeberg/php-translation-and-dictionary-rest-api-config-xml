<?php
declare(strict_types=1);
namespace LanguageTools;

class CollinsConfig {
  /*  These properties are promoted to public readonly class properties */
 public function __construct(public readonly string $endpoint = "https://api.collinsdictionary.com",
   public readonly array $headers = [ "accessKey" => 'igRZPPW5ilBklGQrk7mtrbQwktc0Q9v0848GhQLmo07YsHhKKYzyZcCJ4pQPYuzg']) {}

}
