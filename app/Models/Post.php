<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function user() //追記
    {
        return $this->belongsTo(User::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 6)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
    'title',
    'body',
    'image_url',
    ];
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
    
    public function syncIngredients(array $ingredients, array $quantities)
    {
        
        $this->ingredients()->detach();
        foreach($ingredients as $i => $ingredientId){
            
            $this->ingredients()->attach($ingredientId,['quantity' => $quantities[$i]]);
        }
    }
}
