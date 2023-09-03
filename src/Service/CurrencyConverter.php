<?php 
namespace App\Service;

class CurrencyConverter
{
    // Conversion rate from TND to EUR (example rate, update as needed)
    const TND_TO_EUR_RATE = 0.3;

    public function convertToEuroFromTND($amountInTND)
    {
        return $amountInTND * self::TND_TO_EUR_RATE;
    }
}
