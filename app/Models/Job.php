<?php

namespace App\Models;

class Job
{
    public private(set) string $slug;

    public array $get {
        get => [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'type' => $this->type,
            'slug' => $this->slug,
        ];
    }

    public function __construct(
        public int $id = 1,
        public string $title,
        public string $description,
        public string $location,
        public string $type,
    ) {
        $this->slug = strtolower(str_replace(' ', '-', $this->title));
    }
}
