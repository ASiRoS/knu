<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;

/**
 * App\Models\Blank
 *
 * @method static Builder|Blank newModelQuery()
 * @method static Builder|Blank newQuery()
 * @method static Builder|Blank published()
 * @method static Builder|Blank query()
 * @property int $id
 * @property string $name
 * @property string $link
 * @property string|null $description
 * @property bool $published
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Blank whereCreatedAt($value)
 * @method static Builder|Blank whereDescription($value)
 * @method static Builder|Blank whereId($value)
 * @method static Builder|Blank whereLink($value)
 * @method static Builder|Blank whereName($value)
 * @method static Builder|Blank wherePublished($value)
 * @method static Builder|Blank whereUpdatedAt($value)
 */
class Blank extends Model
{
    protected
        $fillable = ['name', 'link', 'published'],
        $casts = ['published' => 'boolean']
    ;

    public static function validations(): array
    {
        return [
            'name' => 'required',
            'link' => 'required'
        ];
    }

    public function getLinkAttribute($link): string
    {
        return "storage/$link";
    }

    public function scopePublished(Builder $builder)
    {
         return $builder->where('published', 1);
    }

    public function setFile(UploadedFile $file)
    {
        $this->link = $file->store('blanks', 'public');
    }
}