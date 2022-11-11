<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseLibraryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * asset('storage/' . $library->avatar)
     */
    public function toArray($request)
    {
        $librarys = [];
        if ($this->resource->count() > 0) {
            foreach ($this->resource as $library) {
                $picture = $library->avatar != null ?  $library->avatar : asset('/assets/media/avatars/blank.png');
                $creatorPicture = $library->exerciseCreator->avatar != null ?  $library->exerciseCreator->avatar : asset('/assets/media/avatars/blank.png');
                $libraryAvatar = '<div class="d-flex align-items-center">
                            <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="' . $picture . '"
                                         style=" object-fit: cover;"/>
                            </div>
                            <div class="text-gray-800 text-hover-primary mb-1 ms-5">
                                ' . $library->name . '
                                <div class="fw-semibold text-muted">' . $library->exerciseCategory->name . '</div>
                            </div>
                            <!--end::Details-->
                        </div>';


                $actions = '
                            <div class="dropdown">
                              <button class="btn btn-active-dark btn-sm dropdown-toggle" type="button" id="actionsMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="actionsMenu">
                                <li >
                                    <a class="dropdown-item " data-id="' . $library->id . '" href="'.route('exercise.library.create-edit',$library->id).'" >Edit</a>
                                </li>
                                <li >
                                    <a class="dropdown-item create_new_off_canvas_modal view_record" data-id="' . $library->id . '" href="javascript:void(0);" >View</a>
                                </li>


                ';

                $creator = '<div class="d-flex align-items-center">
                <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="' . $creatorPicture . '"
                             style=" object-fit: cover;"/>
                </div>
                <div class="text-gray-800 text-hover-primary mb-1 ms-5">
                    ' . $library->exerciseCreator->first_name.' '.$library->exerciseCreator->last_name . '

                </div>
                <!--end::Details-->
                </div>';

                $actions.='<li>
                <a class="dropdown-item delete_record" data-id="' . $library->id . '" href="javascript:void(0);">Delete</a>
                </li> </ul>
                </div>';
                $video_link = '<a target="_blank" href="'.$library->video_link.'"><i class="fa fa-external-link"></i></a>';
                $description=$library->description;
                $librarys[] = [
                    'user' => $libraryAvatar,
                    'video_link' => $video_link,
                    'description' => $description,
                    // 'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $library->created_at)->format('d M, Y h:i A'),
                    'actions' => $actions,
                    'creator' => $creator
                ];
            }
        }

        return [
            'draw' => 1,
            'recordsTotal' => count($librarys),
            'recordsFiltered' => count($librarys),
            'data' => $librarys
        ];
    }
}
