<?php

namespace App\Transformers;

use App\Models\User;
use Flugg\Responder\Transformers\Transformer;

class UserTransformer extends Transformer
{
    private ?string $token;

    public function __construct(string $token = null)
    {
        $this->token = $token;
    }

    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param  \App\Models\User $user
     * @return array
     */
    public function transform(User $user)
    {
        $data =  [
            'id' => (int) $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ];

        if ($this->token != null) {
            $data['token'] = $this->token;
        }

        return $data;
    }
}
