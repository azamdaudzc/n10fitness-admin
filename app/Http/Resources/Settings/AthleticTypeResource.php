<?php

namespace App\Http\Resources\Settings;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AthleticTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $settings = [];
        if ($this->resource->count() > 0) {
            foreach ($this->resource as $setting) {
                $name=$setting->name;

                $actions = '
                            <div class="dropdown">
                              <button class="btn btn-active-dark btn-sm dropdown-toggle" type="button" id="actionsMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="actionsMenu">
                                <li >
                                    <a class="dropdown-item create_new_off_canvas_modal edit_record" data-id="' . $setting->id . '" href="javascript:void(0);" >Edit</a>
                                </li>

                                <li>
                                    <a class="dropdown-item delete_record" data-id="' . $setting->id . '" href="javascript:void(0);">Delete</a>
                                </li>
                              </ul>
                            </div>
                ';
                 $settings[] = [
                    'name' => $name,
                    'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $setting->created_at)->format('d M, Y h:i A'),
                    'actions' => $actions
                ];
            }
        }

        return [
            'draw' => 1,
            'recordsTotal' => count($settings),
            'recordsFiltered' => count($settings),
            'data' => $settings
        ];
    }
}
