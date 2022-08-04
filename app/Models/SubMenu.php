<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->belongsTo(Menu::class)->withDefault(['nama' => '-']);
    }

    public function get_link()
    {
        return $this->page_id == null ? $this->link : route('page.show', Page::find($this->page_id)->slug);
    }
}
