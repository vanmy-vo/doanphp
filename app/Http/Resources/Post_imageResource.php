<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class Post_imageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'img' => $this->img,
            'created_at' => Carbon::parse($this->created_at,'Asia/Ho_Chi_Minh')->format('Y-m-d h:i:s'),
            'updated_at'=>Carbon::parse($this->updated_at,'Asia/Ho_Chi_Minh')->format('Y-m-d h:i:s'),
            'post' => new PostResource($this->id),
        ];
    }
}
