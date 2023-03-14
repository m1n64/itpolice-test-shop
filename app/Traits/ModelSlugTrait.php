<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait ModelSlugTrait
{
    /**
     * @param string $slug
     * @return int|null
     */
    public function getIdBySlug(string $slug): ?int
    {
        return static::where("slug", $slug)->first()?->id;
    }

    /**
     * @param string $slug
     * @return Model|null
     */
    public function getBySlug(string $slug): ?Model
    {
        return static::where("slug", $slug)->first();
    }
}
