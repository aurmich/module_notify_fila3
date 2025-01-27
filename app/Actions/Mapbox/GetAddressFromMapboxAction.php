<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Mapbox;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;
use Modules\Geo\Datas\MapboxMapData;
use Webmozart\Assert\Assert;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Mapbox.
 */
class GetAddressFromMapboxAction
{
    private const BASE_URL = 'https://api.mapbox.com/geocoding/v5/mapbox.places';

    /**
     * Esegue la ricerca dell'indirizzo su Mapbox.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $apiKey = config('services.mapbox.key');

        if (empty($apiKey)) {
            throw new \Exception('Mapbox API key not configured');
        }

        $response = Http::get(self::BASE_URL, [
            'address' => $address,
            'key' => $apiKey,
        ]);

        if (! $response->successful()) {
            return null;
        }

        Assert::isArray($data = $response->json());
        Assert::isArray($results = $data['results']);
        if (empty($data['results'][0])) {
            return null;
        }

        $result = $data['results'][0];
        $location = $result['geometry']['location'] ?? null;

        if (empty($location)) {
            return null;
        }

        /** @var Collection<int, array{long_name: string, short_name: string, types: array<string>}> */
        $components = collect($result['address_components'] ?? []);

        $getComponent = function (array $types) use ($components): ?string {
            $component = $components->first(function ($component) use ($types) {
                return ! empty($component['types']) && count(array_intersect($component['types'], $types)) > 0;
            });

            return $component['long_name'] ?? null;
        };

        $getShortComponent = function (array $types) use ($components): ?string {
            $component = $components->first(function ($component) use ($types) {
                return ! empty($component['types']) && count(array_intersect($component['types'], $types)) > 0;
            });

            return $component['short_name'] ?? null;
        };

        $mapboxMapData = new MapboxMapData(
            latitude: (float) ($location['lat'] ?? 0),
            longitude: (float) ($location['lng'] ?? 0),
            country: $getComponent(['country']) ?? 'Italia',
            city: $getComponent(['administrative_area_level_3']) ?? '',
            country_code: $getShortComponent(['country']) ?? 'IT',
            postal_code: (int) ($getComponent(['postal_code']) ?? 0),
            locality: $getComponent(['locality']) ?? '',
            county: $getComponent(['administrative_area_level_2']) ?? '',
            street: $getComponent(['route']) ?? '',
            street_number: $getComponent(['street_number']) ?? '',
            district: $getComponent(['sublocality_level_1']) ?? '',
            state: $getComponent(['administrative_area_level_1']) ?? ''
        );

        try {
            $res = AddressData::from($mapboxMapData->toArray());
        } catch (\Exception $e) {
            dddx($e->getMessage());
        }

        return $res;
    }
}
