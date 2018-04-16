<?php

namespace Kolekta;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $fillable = [
        "type", "page", "position", "unique", "question", "add_other", "required"
    ];

    public function answers() {
        return $this->hasMany("Kolekta\Answer", "question", "id");
    }

    public function typed() {
        return $this->hasOne("Kolekta\Type", "id", "type");
    }
}