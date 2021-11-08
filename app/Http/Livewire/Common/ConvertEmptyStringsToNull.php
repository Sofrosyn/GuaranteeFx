<?php

namespace App\Http\Livewire\Common;

use Symfony\Component\HttpFoundation\File\File;

/**
 * @see https://github.com/livewire/livewire/issues/823#issuecomment-821074805
 */
trait ConvertEmptyStringsToNull
{

    /** @var string[] */
    protected array $convertEmptyStringsExcept = [];

    public function updatedConvertEmptyStringsToNull(string $name, $value): void
    {
        if (in_array($name, $this->convertEmptyStringsExcept)) {
            return;
        }

        data_set($this, $name, $this->cleanInput($value));
    }

    protected function cleanInput($input)
    {
        if ($input instanceof File) {
            return $input;
        }

        if (!is_array($input)) {
            return trim($input) == '' ? null : trim($input);
        }

        foreach ($input as &$value) {
            if (is_array($value)) {
                $value = $this->cleanInput($value);
            } else if (is_string($value)) {
                $value = trim($value);
                if ($value === '') {
                    $value = null;
                }
            }
        }
        return $input;
    }
}
