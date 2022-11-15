<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProgramBuilderResource extends JsonResource
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
                $name = $setting->title;
                $weeks = $setting->weeks;
                $creatorPicture = $setting->user->avatar != null ?  $setting->user->avatar : asset('/assets/media/avatars/blank.png');
                $days = $setting->days;

                $actions = '
                            <div class="dropdown">
                              <button class="btn btn-active-dark btn-sm dropdown-toggle" type="button" id="actionsMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="actionsMenu">


                                <li >
                                <a class="dropdown-item create_new_off_canvas_modal view_record" data-id="' . $setting->id . '" href="javascript:void(0);" >View</a>
                                </li>
                                <li>
                                    <a class="dropdown-item delete_record" data-id="' . $setting->id . '" href="javascript:void(0);">Delete</a>
                                </li>

                              </ul>
                            </div>
                ';
                $creator = '<div class="d-flex align-items-center">
                <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="' . $creatorPicture . '"
                             style=" object-fit: cover;"/>
                </div>
                <div class="text-gray-800 text-hover-primary mb-1 ms-5">
                    ' . $setting->user->first_name . ' ' . $setting->user->last_name . '

                </div>
                <!--end::Details-->
                </div>';

                $settings[] = [
                    'name' => $name,
                    'weeks' => $weeks,
                    'days' => $days,
                    'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $setting->created_at)->format('d M, Y h:i A'),
                    'actions' => $actions,
                    'creator' => $creator
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
