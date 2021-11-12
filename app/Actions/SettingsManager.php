<?php

namespace App\Actions;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;

class SettingsManager
{
    protected static ?Collection $store = null;

    public function get(string $key)
    {
        return $this->getModel($key)->value ?? null;
    }

    public function getModel(string $key): ?Setting
    {
        return $this->store()->firstWhere('key', $key);
    }

    private function store(): Collection
    {
        return static::$store ??= Setting::all();
    }

    public function refresh(): void
    {
        static::$store = Setting::all();
    }

    public function set(string $key, $value): void
    {
        if (!is_string($value) || !is_numeric($value)) {
            $storable_value = json_encode($value);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $storable_value = $value;
            }
        } else {
            $storable_value =  $value;
        }

        Setting::query()->updateOrCreate(['type' => $key], ['value' => $storable_value]);

        $this->refresh();
    }

    public function all(): Collection
    {
        return $this->store();
    }
}
