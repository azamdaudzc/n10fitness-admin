<?php

namespace App\Http\Resources\CheckIns;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CheckInQuestionsResource extends JsonResource
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
                $question = $setting->question;
                $display_order = $setting->display_order;

                $actions = '
                            <div class="dropdown">
                              <button class="btn btn-active-dark btn-sm dropdown-toggle" type="button" id="actionsMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="actionsMenu">

                                   <li >
                                    <a class="dropdown-item " data-id="' . $setting->id . '" href="' . route('checkin.questions.create-edit', $setting->id) . '" >Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"  href="' . route('checkin.questions.view', $setting->id) . '">View</a>
                                </li>
                                <li>
                                    <a class="dropdown-item delete_record" data-id="' . $setting->id . '" href="javascript:void(0);">Delete</a>
                                </li>

                              </ul>
                            </div>
                ';
                $settings[] = [
                    'question' => $question,
                    'display_order' => $display_order,
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
